<?php
if(!isset($_SESSION)){session_start();}


//This is probably going to require the most work to put each relationship into the most appropriate string to therefore connect with the right colour and thickness.
//this section of the code will probably be determined by the relationships and the points arrays
	//we need to add to the relationships array in order to be able to quickly match up where they go in the series and what series to show
	//but with this data in the system we can then easily use the relationships array to control the options at the end of the page

if( in_array('issues', $points['database'])){$any_issues_to_display = 'yes';}
else{ $any_issues_to_display = 'no';}


//echo "Any issues to display: ";
//echo $any_issues_to_display;
//exit();

function create_go_to_link($db, $item_id){return " '/components/items/go_to.php?db=".$db."&item_id=".$item_id."' ";}

$string_to_echo = '';

//note this goes backwards as we push the ranking in and around all this
//then it's simply a question of use a for loop down here
//for all the points
for($k = 0; $k <= count($points['database']) ; $k ++){		//need to specify ['database'] to ensure we just get out the number of results
	//probably just change things over to make it slightly less messy
	$title 		= $points['title'][$k];
	$database 	= $points['database'][$k];
	$item_id 	= $points['id'][$k];

	//spit out those that aren't issues
	if($points['database'][$k] != 'issues'){
		$string_to_echo .= "[".$points[x_coordinate][$k].",".create_go_to_link($database,$item_id).",".$points[y_coordinate][$k].", createCustomHTMLContent('".$title."'),		null";
		if($any_issues_to_display == 'yes'){$string_to_echo .= ", 	null,	null";}
		$string_to_echo .= "], 	 ";
		
		
	
		// 	[250, 			 ".create_go_to_link('people','1322').", 	250, 			createCustomHTMLContent('A dogs breakfast'),		null, 		null,		null],		
	}


	//spit out those that are issues
	if($points['database'][$k] == 'issues'){
		$string_to_echo .= "[".$points[x_coordinate][$k].",".create_go_to_link($database,$item_id)."	,	null, 	'',	null, ".$points[y_coordinate][$k]." ,	createCustomHTMLContent('".$title."')],";
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
//for EVERY SECOND entry punch out the links and position for the related points from the $points
$result = mysqli_query($conn, $sql);
$relationship_number = 1;
while($row = mysqli_fetch_array($result)){

	if($alternator == 'even'){
		for($i = 0; $i <= $number_of_active_relationships; $i ++){	
				if(	$row['item_a_database'] == $points['database'][$i] &&
					$row['item_a_id'] 	== $points['id'][$i] ){

					$title 		= $points['title'][$i];
					$database 	= $points['database'][$i];
					$item_id 	= $points['id'][$i];		
			
					//find matching result for item_a and produce that row		
					$string_to_echo .= "	
				
				 	[".$points[x_coordinate][$i].", 	".create_go_to_link($database,$item_id).", null, '',	".$points[y_coordinate][$i];
				 	if($any_issues_to_display == 'yes'){$string_to_echo .= ", 	null,	null";}
				 	$string_to_echo .= "], 	 ";
				}
	
	
				if(	$row['item_b_database'] == $points['database'][$i] &&
					$row['item_b_id'] 	== $points['id'][$i] ){

					$title 		= $points['title'][$i];
					$database 	= $points['database'][$i];
					$item_id 	= $points['id'][$i];
		
			
					//find matching result for item_a and produce that row		
					$string_to_echo .= "	
				
				 	[".$points[x_coordinate][$i].", 	".create_go_to_link($database,$item_id).", null, '',	".$points[y_coordinate][$i];
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
	
	//pretty sure in here is where we will display the correct number of series for the system later based upon checking the relationships array
	
	
	//this really should be based upon checking the points array and seeing if, at this point there are any issues in there
	if($any_issues_to_display == 'yes'){	
		echo "
		,
		'',
		{type:'string', role:'tooltip','p': {'html': true}} ";
	}
echo "	],";
           
           
//now we just echo the string that we have built up earlier and we're done - boom 
echo $string_to_echo;

/*
//just here for the debugging
echo "</script></head><body>";
echo $string_to_echo;
exit();
*/

echo " ]);";





		