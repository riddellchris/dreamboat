<?php
if(!isset($_SESSION)){session_start();}

echo "<select name='issues_control' onchange='this.form.submit()'";
if($_SESSION['current_issues_setting'] == 'issues_on'){	echo "style='background-color: lightgreen; color: black;' ";}
if($_SESSION['current_issues_setting'] == 'issues_off'){	echo "style='background-color: #eb8383; color: black;' ";}
	echo ">";
	echo "	<option value='issues_on'";					if($_SESSION['current_issues_setting'] == 'issues_on'){			echo " selected ";}	echo ">Include related issues</option>";
	echo "	<option value='issues_off'";				if($_SESSION['current_issues_setting'] == 'issues_off'){		echo " selected ";}	echo ">Hide related issues</option>";
echo "</select>";