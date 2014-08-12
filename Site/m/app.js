$(document).ready(function() {

  
var image_text_1; 

initalLoadData(); 
  
$(".refresh-image").click(function(event) { 
var button = $(this); 
button.attr('disabled', 'disabled'); 
setTimeout(function() { 
button.removeAttr('disabled'); 
},800); 
event.preventDefault(); 
loadData(); 
$(".ui-btn-active").removeClass('ui-btn-active');
$('#nav-panel').panel('close');
});   
  
function loadData() { 
	// Get checked options 
	var checkboxes = new Array();  
	var fetch_limit = 2 ;  
	$('input[name="image_options"]:checked').each(function() { 
		checkboxes.push($(this).val()); 
	}); 
	// send checkboxes to process.php
	$.ajax({ 
		url: "http://www.whichmovietowatch.com/process.php", 
		type: "post", 
		data: {checkboxes: checkboxes,limit:fetch_limit}, 
		success: function(data) { 
		
				var obj = $.parseJSON(data);                
				image_text_1 = obj.image_text_1; 
				//add the result to the page
				$('.text').html(image_text_1);
				//then remove the imdb and rt links from the page 
				// (as they will give away that it is not a native app
				
				//Get the width of the videoframe /3
				var vidwidth = $("#videoclipframe").width()/2;
				//Set the height as this
				$("#videoclipframe").height(vidwidth);
		}, 
		error: function() { alert('error on loadData function call to process.php')
		} 
	}); 
} <!-- loadData end -->
  
function initalLoadData() { 		
  	// Get checked options 
	var checkboxes = new Array(); 
	$('input[name="image_options"]:checked').each(function() { 
		checkboxes.push($(this).val()); 
	}); 
	// Send checkboxes to process
	$.ajax({ 
		url: "http://www.whichmovietowatch.com/process.php", 
		type: "post", 
		data: {checkboxes: checkboxes,limit: 2}, 
		success: function(data) { 
		   
			var obj = $.parseJSON(data); 
			image_text_1 = obj.image_text_1; 
			// add result to the page
			$('.text').html(image_text_1);
			//Get the width of the videoframe /3
			var vidwidth = $("#videoclipframe").width()/2;
			//Set the height as this
			$("#videoclipframe").height(vidwidth);
		}, 
		error: function() { alert('error on initialLoadData function call to process.php') ;  
		} 
	}); 
} <!-- initialLoadData end -->




}); <!-- Ready() end -->
