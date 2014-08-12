<?php

// Open the connection
include 'open.php';
// Posted checkbox options
$limit = $_POST['limit'] ; 
// If checkboxes have been selected
if (isset($_POST['checkboxes'])) {
$data = ($_POST['checkboxes']);
    // Implode the values so we have comma seperated values
    $values = implode(',', $data);
    // Execute the SQL query and return record (text)
    //$text_result = mysql_query("SELECT * FROM `wmtwDB` WHERE `option` IN (" . $values . ") ORDER BY RAND() LIMIT $limit");
	
	$text_result = mysql_query("SELECT * FROM `wmtwDB` WHERE `option` IN (" . $values . ") OR `option2` IN (" . $values . ") ORDER BY RAND() LIMIT $limit");
    
	//$text = mysql_fetch_array($text_result);
} else {
    // Execute the SQL query and return record (text)
    $text_result = mysql_query("SELECT * FROM `wmtwDB` WHERE `option` <> 4 ORDER BY RAND() LIMIT 2");
}
$text_result_array = array();
while ($row = mysql_fetch_assoc($text_result)) {
    $text_result_array[] = $row;
}
if ($limit == 1)
{
$array = array(
	"image_option_1"  => $text_result_array[0]['option'],
  //  "image_info_1" => $text_result_array[0]['info'],
    "image_text_1" => $text_result_array[0]['text'],
	"image_url_1" => $text_result_array[0]['url'],
);
}
else
$array = array(
	"image_option_1"  => $text_result_array[0]['option'],
  //  "image_info_1" => $text_result_array[0]['info'],
    "image_text_1" => $text_result_array[0]['text'],
	"image_url_1" => $text_result_array[0]['url'],
	
	"image_option_2"  => $text_result_array[1]['option'],
 //   "image_info_2" => $text_result_array[1]['info'],
    "image_text_2" => $text_result_array[1]['text'],
	"image_url_2" => $text_result_array[1]['url'],
);
// Encode the response
echo json_encode($array);
// Close the connection
include 'close.php';
?>