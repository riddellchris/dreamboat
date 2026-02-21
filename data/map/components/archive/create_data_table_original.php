<?php
if(!isset($_SESSION)){session_start();}

function create_go_to_link($db, $item_id){return " '/components/items/go_to.php?db=".$db."&item_id=".$item_id."' ";}

$string_to_echo = '';

//note this goes backwards as we push the ranking in and around all this
//then it's simply a question of use a for loop down here
//for all the points
for($k = 0; $k <= count($ordered_results_array['database']) ; $k ++){		//need to specify ['database'] to ensure we just get out the number of results
	//probably just change things over to make it slightly less messy
	$title 		= $ordered_results_array['title'][$k];
	$database 	= $ordered_results_array['database'][$k];
	$item_id 	= $ordered_results_array['id'][$k];

	//spit out those that aren't issues
	if($ordered_results_array['database'][$k] != 'issues'){
		$string_to_echo .= "[".$ordered_results_array[x_coordinate][$k].",".create_go_to_link($database,$item_id).",".$ordered_results_array[y_coordinate][$k].", createCustomHTMLContent('".$title."'),		null";
		if($any_issues_to_display == 'yes'){$string_to_echo .= ", 	null,	null";}
		$string_to_echo .= "], 	 ";
		
		
	
		// 	[250, 			 ".create_go_to_link('people','1322').", 	250, 			createCustomHTMLContent('A dogs breakfast'),		null, 		null,		null],		
	}


	//spit out those that are issues
	if($ordered_results_array['database'][$k] == 'issues'){
		$string_to_echo .= "[".$ordered_results_array[x_coordinate][$k].",".create_go_to_link($database,$item_id)."	,	null, 	'',	null, ".$ordered_results_array[y_coordinate][$k]." ,	createCustomHTMLContent('".$title."')],";
		//	[235.67746285783			   ,'/dds/'					, 	null, 	'',	null,						260,	createCustomHTMLContent('Issue3 title')],     		
	}
	//spit out the lines that match/join the two links together

//echo $string_to_echo."<br>";

}

//echo $string_to_echo."<br>";
//exit();



$alternator = 'odd';
//then for the relationships
//we almost need to go back to the original query at the top of this page and run that again
//extract the datapoints
//and print out the apppropriate rows

//go_back_through the original sql query
//for EVERY SECOND entry punch out the links and position for the related points from the $ordered_results_array
$result = mysqli_query($conn, $sql);
$relationship_number = 1;
while($row = mysqli_fetch_array($result)){

	if($alternator == 'even'){
		for($i = 0; $i <= $number_of_active_relationships; $i ++){	
				if(	$row['item_a_database'] == $ordered_results_array['database'][$i] &&
					$row['item_a_id'] 	== $ordered_results_array['id'][$i] ){

					$title 		= $ordered_results_array['title'][$i];
					$database 	= $ordered_results_array['database'][$i];
					$item_id 	= $ordered_results_array['id'][$i];		
			
					//find matching result for item_a and produce that row		
					$string_to_echo .= "	
				
				 	[".$ordered_results_array[x_coordinate][$i].", 	".create_go_to_link($database,$item_id).", null, '',	".$ordered_results_array[y_coordinate][$i];
				 	if($any_issues_to_display == 'yes'){$string_to_echo .= ", 	null,	null";}
				 	$string_to_echo .= "], 	 ";
				}
	
	
				if(	$row['item_b_database'] == $ordered_results_array['database'][$i] &&
					$row['item_b_id'] 	== $ordered_results_array['id'][$i] ){

					$title 		= $ordered_results_array['title'][$i];
					$database 	= $ordered_results_array['database'][$i];
					$item_id 	= $ordered_results_array['id'][$i];
		
			
					//find matching result for item_a and produce that row		
					$string_to_echo .= "	
				
				 	[".$ordered_results_array[x_coordinate][$i].", 	".create_go_to_link($database,$item_id).", null, '',	".$ordered_results_array[y_coordinate][$i];
				 	if($any_issues_to_display == 'yes'){$string_to_echo .= ", 	null,	null";}
				 	$string_to_echo .= "], 	 ";
				 	
				}
			}
	  	
	  	
	  	
	  	//if it doesn't equal the last one then we must put the blank rows at the end including the extra column
	  	if($relationship_number <> mysqli_num_rows($result)){
	  		$string_to_echo .= "	[null, 			'/map/links/',	null, 		'',							null";
				 	if($any_issues_to_display == 'yes'){$string_to_echo .= ", 	null,	null";}
				 	$string_to_echo .= "], 	 ";
		}
		$relationship_number ++;	
	}
	
	
	if($alternator == 'even'){	$alternator = 'odd';}
	if($alternator == 'odd'){	$alternator = 'even';}		
}
?>



           ([
           
<?php
echo "[	'X', 	
	{ role: 'link' },
	'nodes',
	{type:'string', role:'tooltip','p': {'html': true}},
	''";
	if($any_issues_to_display == 'yes'){	
		echo "
		,
		'',
		{type:'string', role:'tooltip','p': {'html': true}} ";
	}
echo "	],";
           
           
//now we just echo the string that we have built up earlier and we're done - boom 
echo $string_to_echo;


echo " ]);";





		