<?php
if(!isset($_SESSION)){session_start();}
require_once $_SERVER['DOCUMENT_ROOT']."/components/discussion/styling/index.php";
?>

<textarea name='textarea_input' id='textarea_input' rows='4'  autofocus placeholder='Hit enter to submit'


<?php
if(	$_SESSION['secondary_folder'] == 'flow' OR
	$_SESSION['secondary_folder'] == 'wellbeing'){
	echo "onkeydown = 'if(event.keyCode == 13){this.form.submit();event.preventDefault();return false;}'";
}


?>

 autocomplete='off'></textarea>