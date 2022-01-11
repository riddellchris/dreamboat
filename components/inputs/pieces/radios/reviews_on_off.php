<style>
.radio_style{height:1em;}
</style>

<?php
if(!isset($_SESSION)){session_start();}
if($_GET['primary_folder'] != 'account'){
echo "
<form method='post' action='/account/settings/periodic_reviews/adjust.php'>
";
}
?>

<input class='radio_style' type='radio' value="on"	style='color: green;'		
	name = <?php echo "'".$timename."_on_off'"; if($selected == 'on'){	echo 'checked';} ?> 
	<?php 
	if($onclick_change == 'on'){echo "onclick='this.form.submit()'";}
	?>>ON</input>
<input class='radio_style' type='radio' value="off"	style='color: red;'
	name = <?php echo "'".$timename."_on_off'"; if($selected == 'off'){	echo 'checked';} ?>
	<?php 
	if($onclick_change == 'on'){echo "onclick='this.form.submit()'";}
	?>>OFF</input>

<?php
if($_GET['primary_folder'] != 'account'){
echo "
</form>
";
}

?>