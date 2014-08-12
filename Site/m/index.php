<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8" />
        <TITLE>Which Movie To Watch: Random Movie Recommendation Generator</TITLE>
	    <meta name="description" content="Which Movie To Watch is a carefully curated random film generator. Wondering what movie to watch tonight? Get your movie recommendations here!" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
		<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
        
         <link href="http://www.whichmovietowatch.com/images/logo.jpg" rel="image_src" />
        <link rel="stylesheet" href="app.css" type="text/css" />
        <link rel="canonical" href="http://www.whichmovietowatch.com" />
        <meta name="apple-itunes-app" content="app-id=899696062" />
        <link rel="stylesheet" href="wmtw.min.css" />
		<link rel="stylesheet" href="jquery.mobile.icons.min.css" />
		<link rel="stylesheet" href="jquery.mobile.structure-1.4.3.min.css" />
        <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
		<script src="http://code.jquery.com/mobile/1.4.3/jquery.mobile-1.4.3.min.js"></script>
		<script src="app.js"></script>
        
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-43209758-1', 'whichmovietowatch.com');
  ga('send', 'pageview');

</script>

</head> 

<body>
		<div data-role="page" class="t">
	
            		
                    <div class="menupane">
                    
                    <div id="btns">
                    
                    <div class="logoImg">
        			<img src="logo.jpg">
        			</div>
						<p>Which Movie To Watch is a random movie recommendation generator with an emphasis on high quality, critically acclaimed films (for the most part).</p>
                        <div class="ui-grid-a">
						<div class="ui-block-a"><input type="checkbox" id="checkbox4" name="image_options_all" checked><label for="checkbox4">All</label>
                        <input type="checkbox" id="checkbox2" name="image_options" value="2"><label for="checkbox2">Thriller </label>
                        <input type="checkbox" id="checkbox5" name="image_options" value="5"><label for="checkbox5">Comedy</label></div>
						<div class="ui-block-b"><input type="checkbox" id="checkbox1" name="image_options" value="1"><label for="checkbox1">Action</label>
                        <input type="checkbox" id="checkbox3" name="image_options" value="3"><label for="checkbox3">Horror</label>
                        <input type="checkbox" id="checkbox8" name="image_options" value="8"><label for="checkbox8">Sci-Fi</label> </div>
						</div><!-- /grid-a -->

						</div>
						<div id="btns2">
					  <input class="refresh-image" type="submit" id="button" value="Pick Movie" onClick="ga('send', 'pageview');">
					   </div>
                       </div>
			                <br />
                            
				<div class="text"></div>

      
        </div>
</body>
</html>