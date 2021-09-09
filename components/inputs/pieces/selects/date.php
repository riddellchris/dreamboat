<?php
if(!isset($_SESSION)){session_start();}
?>


<br>
<input class='secure_input' name='date_selection' 
<?php
if(isset($value)){echo " value = '".$value."' ";}
?>
type="date">