<?php
if(!isset($_SESSION)){session_start();}

if( in_array('issues', $points['database'])){	$any_issues_to_display = 'yes';}
else{ 						$any_issues_to_display = 'no';}
//echo "Any issues to display: ";
//echo $any_issues_to_display;
//exit();


///\/\/\/\ Potentially something similar is required for updates in time
//updates will obviously be in forestgreen


//this should really be done with arrays
//create some really basic arrays here for these strings	
//this needs $conn entered into it because I'm being so bloody lazy tonight
function category_explanation($primary_folder, $secondary_folder, $conn){
	$sql = "
	SELECT primary_folder, secondary_folder, descriptive_category
	FROM `items_central_index`
	WHERE 	primary_folder 		= '".$primary_folder."'
	AND 	secondary_folder 	= '".$secondary_folder."'";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
	$category_explanation = ucfirst($row['descriptive_category']);
	return $category_explanation;
}

function create_go_to_link($db, $item_id){return " /components/items/go_to.php?db=".$db."&item_id=".$item_id." ";}

$string_to_echo = '';

//note this goes backwards as we push the ranking in and around all this
//then it's simply a question of use a for loop down here
//for all the points
for($k = 0; $k <= count($points['database']) ; $k ++){		//need to specify ['database'] to ensure we just get out the number of results
	//probably just change things over to make it slightly less messy
	$title 			      = $points['title'][$k];
	$database 		      = $points['database'][$k];
	$item_id 		      = $points['id'][$k];
	$primary_folder 	  = $points['primary_folder'][$k];
	$secondary_folder	  = $points['secondary_folder'][$k];
	$x 			          = $points[x_coordinate][$k];
	$y			          = $points[y_coordinate][$k];
	
	$points[link][$k]     = create_go_to_link($database,$item_id);
	$link 				  = $points[link][$k];
	
	$category_explanation = category_explanation($primary_folder , $secondary_folder , $conn);	
	$tooltip		      = "createCustomHTMLContent('".$title."','".$category_explanation."')";



	$string_to_echo .= "[	".	$x.",";
	$string_to_echo .= 		$link.",";


	//spit out those that aren't issues
	if($points['database'][$k]  != 'issues'){
			$string_to_echo       .=	$y.",";
			$string_to_echo       .=	$tooltip.",";
			$string_to_echo       .=	"null";
		if($any_issues_to_display == 'yes'){
			$string_to_echo .= ", 	null,	null";
		}
			$string_to_echo .= "], 	 ";
	}


	//spit out those that are issues
	if($points['database'][$k] == 'issues'){

			$string_to_echo .=	"		null,
					'',
					null,
					".$y.", 
					".$tooltip."],";	
	}
}



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

			$title 		= $points['title'][$i];
			$database  = $points['database'][$i];
			$item_id 	= $points['id'][$i];		
			
		
			if(	$row['item_a_database'] == $points['database'][$i] &&
				$row['item_a_id'] 	== $points['id'][$i] ){

				//find matching result for item_a and produce that row		
				$string_to_echo .= "	
			
			 	[".$points[x_coordinate][$i].", 	".create_go_to_link($database,$item_id).", null, '',	".$points[y_coordinate][$i];
			 	if($any_issues_to_display == 'yes'){$string_to_echo .= ", 	null,	null";}
			 	$string_to_echo .= "], 	 ";
			}


			if(	$row['item_b_database'] == $points['database'][$i] &&
				$row['item_b_id'] 	== $points['id'][$i] ){	
		
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

echo " ]);";





		