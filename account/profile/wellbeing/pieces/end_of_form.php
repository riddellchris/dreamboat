<?php
if(!isset($_SESSION)){session_start();}
echo "'"; //this just ends the placeholder prompt
if($_SESSION['user_id'] == $_SESSION['viewing_client_id']){
 	echo "onkeydown = 'if(event.keyCode == 13){this.form.submit();event.preventDefault();return false;}'";
}

echo " autocomplete='off'></textarea>";
require $_SERVER['DOCUMENT_ROOT']."/inputs/pieces/submits/standard.php";
echo "</form>";