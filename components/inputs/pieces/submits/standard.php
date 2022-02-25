	
<input class='wide-button blue-button' type='submit' name='submit_button'

<?php



if(!isset($max_width)){		$max_width 		= '1100px';}
if(!isset($background_color)){	$background_color 	= $_SESSION['masked_domain_primary_colour_darker'];}

//if(!isset($display)){		$display	 	= 'inline-block';}
/*
if(is_numeric(strpos($_SERVER['REQUEST_URI'],'/account/settings/time/')) != 1){
	echo "style='margin-left: auto;margin-right: auto;max-width:1100px;height:inherit;'";
	}
else{
*/

echo "style='
		margin-left: auto;
		margin-right: auto;";
	if(isset($margin_top)){		echo "margin-top:	".$margin_top.";";unset($margin_top);}
	if(isset($margin_bottom)){	echo "margin-bottom:	".$margin_bottom.";";unset($margin_bottom);}
	if(isset($display)){		echo "display: 		".$display.";";unset($display);}	
	if(isset($padding)){		echo "padding: 		".$padding.";";unset($padding);}
	if(isset($float)){			echo "float: 		".$float.";";unset($float);}	
	
	echo"	max-width:	 ".$max_width.";
		background-color:".$background_color.";
		height:inherit;
		'";

//}



unset($margin_top);
unset($margin_bottom);
unset($display);
unset($padding);
unset($float);
unset($max_width);
unset($background_color);
?>


></input>