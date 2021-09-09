<?php


//https://stackoverflow.com/questions/7121479/listing-all-the-folders-subfolders-and-files-in-a-directory-using-php
function list_folder_and_files($open_array, $currently_viewing, $starting_depth, $dir){

    $full_file_system = scandir($dir);

    unset($full_file_system[array_search('.', $full_file_system, true)]);
    unset($full_file_system[array_search('..', $full_file_system, true)]);

    // prevent empty ordered elements
    if (count($full_file_system) < 1)
        return;

    foreach($full_file_system as $item){
    
              if($starting_depth == 1){$spacing = "&nbsp;&nbsp;";}
              if($starting_depth == 2){$spacing =  "&nbsp;&nbsp;&nbsp;&nbsp;";}
              if($starting_depth == 3){$spacing =  "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";}
              if($starting_depth == 4){$spacing =  "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";}          
              if($starting_depth == 5){$spacing =  "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";} 
              if($starting_depth == 6){$spacing =  "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";}                
              if($starting_depth == 7){$spacing =  "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";} 
              if($starting_depth == 8){$spacing =  "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";}               
              if($starting_depth == 9){$spacing =  "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";}               
              if($starting_depth == 10){$spacing =  "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";}               
              
              
      
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
     		

     

              
              //if find this items address within the $open_array
              if(in_array("@".$starting_depth.$item, $open_array)){
		      //then
	              echo $spacing.$item;  //make this a button with the right ajax arguments entered into it as well such that when clicks it either opens or closes as required.
	              
	              echo "<div id='".$currently_viewing."'></div>"; //this is where the AJAX can write to frankly
	              //."--".$currently_viewing.
	              //  echo "<br>";  //not needed while there is a div to write to
	              
              }                
              //if not in open array then do nothing
              
              $current_depth = $starting_depth + 1;
              list_folder_and_files($open_array, $currently_viewing, $current_depth, $dir.'/'.$item);
        }
        else{
                if(in_array("@".$starting_depth.$item, $open_array)){      
	        	echo $spacing."<a class='files_in_folder_directory' href=''>".$item."</a><br>";  //if is file

        	}
        }

    }

	return $open_array;

}



