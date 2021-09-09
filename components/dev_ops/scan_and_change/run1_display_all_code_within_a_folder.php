<?php


//https://stackoverflow.com/questions/7121479/listing-all-the-folders-subfolders-and-files-in-a-directory-using-php
function list_folder_and_files($dir){
echo $dir;
echo "<br>";


    $full_file_system = scandir($dir);

    unset($full_file_system[array_search('.', $full_file_system, true)]);
    unset($full_file_system[array_search('..', $full_file_system, true)]);

    // prevent empty ordered elements
    if (count($full_file_system) < 1){return;}

    foreach($full_file_system as $item){
    
              
              
      
                    if($starting_depth == 0){
              				$currently_viewing = "@".$starting_depth.$item;
              				$open_array[count($open_array)] = $currently_viewing;
              				}
              else{
              				//if $currently_viewing_still has "@".$starting_depth within it
              				if(strpos($currently_viewing,  "@".$starting_depth)){
              					//cut everything to the right of and including the "@".$starting_depth
              					$currently_viewing = substr($currently_viewing, 0, strpos($currently_viewing,  "@".$starting_depth));
              				}
              				
              				//then regardless of the outcome there just               
                   			$currently_viewing = $currently_viewing."@".$starting_depth.$item;

              }
      
                  
        if(is_dir($dir.'/'.$item)){ //if is directory              
              //if not in open array then do nothing            
              $current_depth = $starting_depth + 1;
              list_folder_and_files($dir.'/'.$item);
        	}
        else{
        	echo $dir;
		echo $files_contents = file_get_contents($dir.'/'.$item);
        }
    }
}



list_folder_and_files('/home/customer/www/dreamboat.com.au/public_html/');

