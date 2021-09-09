<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/design/layouts/start_of_page_not_centered_vertically.php";

echo "<div style='height:150px'></div>";

//echo "To complete a new progress plus session just <br>click here";
/*
$sql = "SELECT * FROM flow_prompts WHERE prompt_id = '".$_SESSION['next_prompt_id']."'";
require $_SERVER['DOCUMENT_ROOT']."/back_of_house/database/connection.php";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
if($row['progress_plus'] != 'progress_plus'){$_SESSION['next_prompt_id'] = 34;}
*/

//require $_SERVER['DOCUMENT_ROOT']."/flow/index.php";
require $_SERVER['DOCUMENT_ROOT']."/progress_plus/workings.php";

echo "<div style='height:200px'></div>";

require $_SERVER['DOCUMENT_ROOT']."/design/layouts/end_of_page_not_centered_vertically.php";

?>