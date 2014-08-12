<?php

// Open the connection
include 'open.php';
// Posted checkbox options

// If checkboxes have been selected
	if (isset($_POST['video_id'])) {
		$id = ($_POST['video_id']);
		
		// Execute the SQL query and return record (text)
		//$text_result = mysql_query("SELECT * FROM `wmtwDB` WHERE `option` IN (" . $values . ") ORDER BY RAND() LIMIT $limit");
		
		//$text_result = mysql_query("SELECT * FROM `wmtwDB` WHERE `option` IN (" . $values . ") OR `option2` IN (" . $values . ") ORDER BY RAND() LIMIT $limit");
		//$text_result = mysql_query("SELECT * FROM `wmtwDB` WHERE `url` LIKE (" . $id . ") LIMIT 1");
		
		 $text_result = mysql_query("SELECT * FROM wmtwDB WHERE url LIKE '%" . $id . "%' LIMIT 1"); 
		
		//$text = mysql_fetch_array($text_result);
	} else {
		// Execute the SQL query and return record (text)
		$text_result = mysql_query("SELECT * FROM `wmtwDB` WHERE `option` <> 4 ORDER BY RAND() LIMIT 1");
	}
	$text_result_array = array();
	while ($row = mysql_fetch_assoc($text_result)) {
		$text_result_array[] = $row;
	}
	$array = array(
		"image_option_1"  => $text_result_array[0]['option'],
		"image_text_1" => $text_result_array[0]['text'],
		"image_url_1" => $text_result_array[0]['url'],
	);
// Encode the response
echo json_encode($array);
// Close the connection
include 'close.php';
?>