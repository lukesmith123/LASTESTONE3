$(document).ready(function() { 
  
    // Status : No change -> show image immediately and send for more;don't send id  - Done 
    //Still in selection -> Show image immediately and send for more - Done 
    //New Selection -> Invalidates the image that was fetched previously , get entirely new set  
  
    var image_text_1; 
    var image_link_1; 
    var image_link_2; 
    var image_text_2; 

	
      
    $(".refresh-image").click(function(event) { 
    var button = $(this); 
    button.attr('disabled', 'disabled'); 
    setTimeout(function() { 
    button.removeAttr('disabled'); 
    },800); 
    event.preventDefault(); 
    loadData(); 
    window.scrollTo(0, 0);
    }); 
  
    var mod = 0; 
  
    function loadData() { 
        // Get checked options 
          
        var checkboxes = new Array();  
        var fetch_limit = 2 ;  
        $('input[name="image_options"]:checked').each(function() { 
            checkboxes.push($(this).val()); 
        }); 
           
		window.open ('http://www.whichmovietowatch.com/movies.php','_self',false)
		   
       // // ajax form 
//        $.ajax({ 
//            url: "process.php", 
//            type: "post", 
//            data: {checkboxes: checkboxes,limit:fetch_limit}, 
//            success: function(data) { 
//            
//					var obj = $.parseJSON(data); // Parse response 
//                                     
//                    image_link_1 = obj.image_link_1; 
//                    image_text_1 = obj.image_text_1; 
//					image_url_1 = obj.image_url_1;
//                    $('.text').html(image_text_1); 
//       				
//					//Set the url address in the search bar
//					//history.pushState(null, null, image_url_1);	
//					
//					//Format the title tag, grab the url and replace - for whitespace
//					var find = '-';
//					var re = new RegExp(find, 'g');
//					var titleAppend = image_url_1.replace(re, ' ');
//					
//					// Remove hashbang
//					var titleAppend = titleAppend.replace("#!", " ");
//					
//					//Set the title tag
//					//document.title = "Which Movie to Watch:" + titleAppend; 
					
//            }, 
//            error: function() { 
//            } 
//        }); 
    } 
  
    function initalLoadData() { 		
		var url = document.URL;
		var processFlag = true;
		var vid_id;
		
		//if(url.indexOf("?") > -1) {
		//	var regexID = /id=(\d+)/i;
		//	vid_id = url.match(regexID);
		//	processFlag = false;
		//	//alert(vid_id[1]);
		//  }
		
		var s = url.replace("http://www.whichmovietowatch.com/", "");
		
		//var path = document.location.pathname; 
    	//var s = path.replace("/demo/", "");
		
		if(s != "")
		{
			processFlag = false;
			vid_id = s;
			//alert(vid_id);
		}
		
		if(processFlag) {
			// Get checked options 
			var checkboxes = new Array(); 
			$('input[name="image_options"]:checked').each(function() { 
				checkboxes.push($(this).val()); 
			}); 
				
			// ajax form 
			$.ajax({ 
				url: "process.php", 
				type: "post", 
				data: {checkboxes: checkboxes,limit: 2}, 
				beforeSend: function() { 
					$('#advance_slide').html('Loading...'); 
				}, 
				complete: function() { 
					$('#advance_slide').html('Advance slide'); 
				}, 
				success: function(data) { 
				   
					var obj = $.parseJSON(data); // Parse response 
					image_text_1 = obj.image_text_1; 
					image_link_1 = obj.image_link_1; 
					image_link_2 = obj.image_link_2; 
					image_text_2 = obj.image_text_2;
					image_url_1 = obj.image_url_1;
					image_url_2 = obj.image_url_2;
					
					$('.text').html(image_text_1); 

					//history.pushState(null, null, image_url_1);
					
					//Format the title tag, grab the url and replace - for whitespace
					var find = '-';
					var re = new RegExp(find, 'g');
					var titleAppend = image_url_1.replace(re, ' ');
					
					// Remove hashbang
					var titleAppend = titleAppend.replace("#!", " ");
					
					//Set the title tag
					//document.title = "Which Movie to Watch:" + titleAppend; 
				}, 
				error: function() { alert('error') ;  
				} 
			}); 
		} else {
			// ajax form 
			$.ajax({ 
				url: "pick.php", 
				type: "post", 
				data: {video_id: vid_id }, 
				success: function(data) { 
				   
					var obj = $.parseJSON(data); // Parse response 
					image_text_1 = obj.image_text_1; 
					image_link_1 = obj.image_link_1;
					image_url_1 = obj.image_url_1;
					current_option_id = obj.image_option_1 ;  
					$('#slide_1 img').attr('src', image_link_1); 
					$('.text').html(image_text_1); 
					current_slide = 2 ;  
					
					//Format the title tag, grab the url and replace - for whitespace
					var find = '-';
					var re = new RegExp(find, 'g');
					var titleAppend = image_url_1.replace(re, ' ');
					
					// Remove hashbang
					var titleAppend = titleAppend.replace("#!", " ");
					
					//Set the title tag
					//document.title = "Which Movie to Watch:" + titleAppend; 
				}, 
				error: function() { alert('error') ;  
				}
			});
		}
    } 	
}); 

$('#contact').popover({trigger:"hover",placement:"top"})
$('#trademarks').popover({trigger:"hover",placement:"top"})

