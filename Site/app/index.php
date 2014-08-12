<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="themes/wmtw.min.css" />
<link rel="stylesheet" href="themes/jquery.mobile.icons.min.css" />
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.3/jquery.mobile.structure-1.4.3.min.css" />
<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="http://code.jquery.com/mobile/1.4.3/jquery.mobile-1.4.3.min.js"></script>
<script src="js/app.js"></script>

<style>
#nav-panel {
	background:#000;	
}

</style>

</head>
<body>

<div data-role="page">
  <div data-role="header">
    <h1>Which Movie to Watch</h1>
    <a href="#nav-panel" data-icon="gear" data-iconpos="notext">Menu</a>
  </div>

  <div data-role="main" class="ui-content">
    <p>I Am Now A Mobile Developer!!</p>
    <div id="btns">
						


						<br>
						<br>
						
						</div>
						<div id="btns2">

					  <input class="refresh-image" type="submit" id="button" value="Pick Again" >
					  
			<br><br>
					  
					   </div>
                       
                       
                       <div data-role="panel" id="nav-panel" data-position="left" data-display="overlay" data-theme="a">

        <h3 style="color:#fff;">Left Panel: Overlay</h3>
        <p style="color:#fff;">This panel is positioned on the left with the overlay display mode. The panel markup is <em>after</em> the header, content and footer in the source order.</p>
        <input type="checkbox" id="checkbox4" name="image_options_all" checked><label for="checkbox4">All</label>
						<input type="checkbox" id="checkbox1" name="image_options" value="1"><label for="checkbox1">Action</label> 
						<input type="checkbox" id="checkbox2" name="image_options" value="2"><label for="checkbox2">Thriller </label>  
						<input type="checkbox" id="checkbox3" name="image_options" value="3"><label for="checkbox3">Horror</label>
						<input type="checkbox" id="checkbox5" name="image_options" value="5"><label for="checkbox5">Comedy</label> 
						<input type="checkbox" id="checkbox8" name="image_options" value="8"><label for="checkbox8">Sci-Fi</label> 
        <a href="#demo-links" data-rel="close" class="ui-btn ui-shadow ui-corner-all ui-btn-a ui-icon-delete ui-btn-icon-left ui-btn-inline">Close panel</a>

	</div><!-- /leftpanel3 -->
                       
                       <div class="text"></div>
  </div>

  <div data-role="footer">
    <h1>Footer Text</h1>
  </div>
</div> 

</body>
</html>

