<?php
if(!isset($_SESSION)){session_start();}

function produce_option($name, $selected){
echo "	  <option ";
		if($selected == $name){echo 'selected';}
		echo " value='".$name."'>".$name."</option>";

}