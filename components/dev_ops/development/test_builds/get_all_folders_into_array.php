<?php

//before running this we must make a complete backup and store.
//this in itself needs it's own security - probably $_SESSION['user_id'] == '1'
//maybe a few other things as well... not sure


$initial_directory = "/home/customer/www/dreamboat.com.au/backups_total_chronological/2020/";




$current_directory = $initial_directory;// + xxxxx;

//echo '<pre>' ,var_export(var_dump(scandir('/home/customer/www/dreamboat.com.au/backups_total_chronological/2020/')) , '</pre>';

//remove the dots from this too
//https://stackoverflow.com/questions/36149598/where-does-dot-come-from-when-using-php-%C2%B4scandir%C2%B4
$folder_inclusions = array_diff(scandir($current_directory), array('..', '.'));

print_r($folder_inclusions);
$number_of_inclusions_in_the_folder = count($folder_inclusions);

//cycle through $folder_inclusions
for($i = 0; $i <= $number_of_inclusions_in_the_folder + 1; $i ++){
//echo 'hi';

echo substr($folder_inclusions[$i], -4);
echo "<br>";


	
	//if file NOT folder
	if(substr($folder_inclusions[$i], -4) == ".php"){ 
	echo $folder_inclusions[$i];
		//parse
		
		//file_get_contents
		//run checks & changes
			$file_changed = 'no';
			
			//if style tags, group them, separate them and group as appropriate
			//group and separate'
			//if directories
			//if other stufff
			
		//	$file_contents = file_get_contents();
		//	echo $file_contents;
		$current_file_address = $current_directory.$folder_inclusions[$i];
		
		$myfile = fopen($current_file_address, "r") or die("Unable to open file!");
		$file_contents = fread($myfile,filesize($current_file_address));
		fclose($myfile);
			
		echo $file_contents;
		$file_contents = str_replace('\n
		hi', 'hi
		', $file_contents);
		
		
		echo "<br>";
		echo $file_contents;			
		$myfile = fopen($current_file_address, "w") or die("Unable to open file!");
		fwrite($myfile, $file_contents);
		fclose($myfile);

	
		/*
			//if changed
			if($file_changes == 'yes'){
				//store if changed/changes apply
				//file_put_contents
			}
		*/
		
		
		//move on and check more
		//i.e. loop back
		
		//need to build, alter and add to the directories and therefore the folders as we go
		
		//Just build a directories array as we go here
		
		
	}
	
	
	
}