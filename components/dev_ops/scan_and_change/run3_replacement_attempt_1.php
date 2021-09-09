<?php


//https://stackoverflow.com/questions/7121479/listing-all-the-folders-subfolders-and-files-in-a-directory-using-php
function scan_all_code_within($directory, $string_to_scan_for, $string_to_replace_with, $count){

    $full_file_system = scandir($directory);

    unset($full_file_system[array_search('.', $full_file_system, true)]);
    unset($full_file_system[array_search('..', $full_file_system, true)]);

    // prevent empty ordered elements
    if (count($full_file_system) < 1){return;}

    foreach($full_file_system as $item){
         
        //if is directory              
        if(is_dir($directory.'/'.$item)){$count = scan_all_code_within($directory.'/'.$item, $string_to_scan_for, $string_to_replace_with, $count);}
        else{
        //	echo $directory.$item;
        //	echo "<br>";
	//	echo $file_contents = file_get_contents($directory.'/'.$item, FALSE, NULL, 5);
	$file_contents = file_get_contents($directory.'/'.$item, FALSE, NULL, 5);
	//	echo "<BR>";
	//	echo $string_to_scan_for;
	//	echo "<br><br>";

		if(strpos($file_contents, $string_to_scan_for) !== false ){
		
			$file_contents = str_replace($string_to_scan_for, $string_to_replace_with, $file_contents);
			file_put_contents($directory.'/'.$item, "<?php".$file_contents);
		
		$count ++;
		}
		
		
	//	echo "<BR>";		
	//	echo $file_contents = file_get_contents($directory.'/'.$item, FALSE, NULL, 5);	
		echo $file_contents = file_get_contents($directory.'/'.$item, FALSE, NULL, 5);			
	//	echo "<BR>";	
	//	echo "<BR>";	
	//	echo "<BR>";	
	//	echo "<BR>";
	//	echo "<BR>";				
        }
    }
    
    return $count;
}


$count = 0;
$returned_count = scan_all_code_within("/home/dreambo5/public_html/","/platform/components/", "/components/", $count);
echo "RETURNED COUNT";
echo "<br>";
echo $returned_count;

