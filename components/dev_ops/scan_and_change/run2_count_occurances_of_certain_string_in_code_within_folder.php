<?php


//https://stackoverflow.com/questions/7121479/listing-all-the-folders-subfolders-and-files-in-a-directory-using-php
function scan_all_code_within($directory, $string_to_scan_for, $count){



    $full_file_system = scandir($directory);

    unset($full_file_system[array_search('.', $full_file_system, true)]);
    unset($full_file_system[array_search('..', $full_file_system, true)]);

    // prevent empty ordered elements
    if (count($full_file_system) < 1){return;}

    foreach($full_file_system as $item){
         
        //if is directory              
        if(is_dir($directory.'/'.$item)){$count = scan_all_code_within($directory.'/'.$item, $string_to_scan_for, $count);}
        else{
        //	echo $directory.$item;
        //	echo "<br>";
	 $files_contents = file_get_contents($directory.'/'.$item, FALSE, NULL, 5);
	//	echo "<BR>";
	//	echo $string_to_scan_for;
	//	echo "<br><br>";

		if(strpos($files_contents, $string_to_scan_for) !== false ){$count ++;}	
        }
    }
    
    return $count;
}


$count = 0;
$returned_count = scan_all_code_within("/home/customer/www/dreamboat.com.au/public_html/knowledgebase/","/knowledgebase/productivity_networks/", $count);
echo "RETURNED COUNT";
echo "<br>";
echo $returned_count;

