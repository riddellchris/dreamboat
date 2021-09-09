<?php
if(!isset($_SESSION)){session_start();}

echo "
<select name = '".$timename."'  onchange='this.form.submit()' style='width:100%;";
  	if($selected == 'yes'){	echo ' background-color: green; ';}
  	if($selected == 'no'){	echo ' background-color: red; ';} 
	echo "' >
  <option "; 
  	if($selected == 'yes'){echo ' selected ';} 
  	echo " value='yes'	>Yes</option>
  <option ";
  	if($selected == 'no'){echo 'selected';} 
  	echo " value='no'	>No</option>
</select>";
