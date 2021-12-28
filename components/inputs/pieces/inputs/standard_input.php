<style>
@media screen and (max-width: 1090px){.standard_input{border: 2px solid #4332ff;}}
@media screen and (min-width: 1090px){.standard_input{border: 2px solid grey;}}
</style>





<?php 

if(!isset($item_name)){		$item_name  	= "standard_input";}
if(!isset($max_width)){		$max_width  	= " 1100px ";}
if(!isset($display)){		$display    	= " block ";}
if(!isset($text_align)){	$text_align 	= " center ";}
if(!isset($margin_left)){	$margin_left 	= " auto ";}
if(!isset($float)){		    $float 		    = " none ";}
if(!isset($auto_focus_on)){ $auto_focus_on  = "";}

if($auto_focus_on == 'yes'){$auto_focus = " autofocus ";}
else{                       $auto_focus = " ";} //most of the time autofocus will be off for this input.

echo "
<input 
name = '".$item_name."'
class='standard_input'

style='
font-size: 20px;
color: #281e96;
padding: 4px;".
$float."
font-family: Comfortaa;
display: ".$display.";
margin-left: ".$margin_left .";
margin-right: auto;
max-width: ".$max_width.";
width:100%;
text-align: ".$text_align.";
float: ".$float.";

";
if(isset($margin_top)){echo "margin-top: ".$margin_top.";";unset($margin_top);}
echo "'"; 

echo $auto_focus."
autocomplete='off'
";
   
if(isset($value)){	echo " value = '".$value."' ";} 
if(isset($placeholder)){echo " placeholder = '".$placeholder."' ";} 	

echo "  
    ></input>
    ";
    
    

unset($item_name);
unset($max_width);
unset($display);
unset($text_align);
unset($margin_left);
unset($auto_focus_on);
unset($value);
unset($placeholder);
unset($float);

?>