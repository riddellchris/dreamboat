<?php

if($_GET['primary_folder'] == 'notifications'){
 	echo $row['description'];
	echo "<br>";
	echo "<small style='color:#e3e9ff;'>";
		time_since_string($row['timestamp_created']);
	echo"</small>";
}
else{
	if(check_primary_folder('upgrades')){
	echo "<a href='/components/items/change_homework.php?item_id=".$row['item_id']."&change_to=";
		if($row['homework'] == 'yes'){echo "no";}
		else{echo "yes";}	
		echo "' style='text-decoration:none;";
		if($row['homework'] == 'yes'){echo "color: red;";}
		else{echo "color: grey;";}		
	echo "'";
		if($row['homework'] != 'yes'){echo " title='Mark as homework' ";}
		else{echo  " title='Remove from homework' ";}		
	
	
	echo ">&#x2605;</a>";
	
	}

	echo $row['title'];
	if(check_primary_folder('upgrades')){echo "<span style='color: transparent;'>&#x2605;</span>";}	
	//to expand this to display edit on all lists not just the display of the actual item... much code will need to be re-written
	if(	$_GET['tertiary_folder'] == 'item' OR 
		$_GET['quaternary_folder'] == 'item' ){
		echo "<br>";
		echo "<small><a href='/components/items/edit_title.php?".url_folder_get_string_creation()."'>edit</a></small>";
	}
}	
							