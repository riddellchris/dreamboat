<?php
if(!isset($_SESSION)){session_start();}
$sql = "SELECT * FROM admin_all_color_combos WHERE success = 'no' ORDER BY RAND() LIMIT 1";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
$background_color	= $row['background_hex'];
$contrast_color		= $row['contrast_hex'];
$text_color		    = $row['text_hex'];
$degrees 		    = rand(0, 360);