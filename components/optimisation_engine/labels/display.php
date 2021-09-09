<?php
if(!isset($_SESSION)){session_start();}

echo "<div style='width:100%; max-width: 1100px;margin-left:auto;margin-right:auto;'>";

echo "<div style='width:100%;padding: 3px 0px;color:#fff;display:block;float: left;color:blue;text-align:left;'>";





echo "<form action='/components/optimisation_engine/labels/submit_new.php' method='post' style='display:inline;'>";

echo hidden_form_inputs_for_folders_and_items();



$max_width 	= '150px';
$display 	= "inline-block";
$margin_top 	= "0px";
$margin_bottom 	= "0px";
$padding	= "7px 0px";
$float		= "right";
require $_SERVER['DOCUMENT_ROOT']."/components/inputs/pieces/submits/standard.php"; 


$max_width 	= "250px";
$display 	= "inline-block";
$text_align	= " left ";
$placeholder	= "Add labels as required";
$margin_top 	= "0px";
$margin_left 	= "-4px";
$float		= "right";
require $_SERVER['DOCUMENT_ROOT']."/components/inputs/pieces/inputs/standard_input.php";

echo "<div style='display:inline-block;font-family:Comfortaa;float:right;margin-right:12px;'>";
	for($i = 0; $i < $total_number_of_labels_on_this_item; $i ++){
		echo "<div style='margin-top:12px;float:right;'>";
			echo $currently_applied_labels[$i];
			echo "<a style='color:red;margin-left:6px;' href='/components/optimisation_engine/labels/disconnect.php?label_id=".$currently_applied_labels_id[$i]."'>X</a>";
		echo "</div>";
	}
echo "</div>";



echo "</form>";
echo "</div>";
echo "</div>";