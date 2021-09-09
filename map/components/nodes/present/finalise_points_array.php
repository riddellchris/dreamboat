<?php
if(!isset($_SESSION)){session_start();}

function create_go_to_link($db, $item_id){return " /components/items/go_to.php?db=".$db."&item_id=".$item_id." ";}

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


for($key = 0; $key <= count($points['database']) -1; $key ++){
	$points[link][$key]     = create_go_to_link($points['database'][$key],$points['id'][$key] );
	$link 				  = $points[link][$key];
	
	$category_explanation = category_explanation($primary_folder , $secondary_folder , $conn);	
	$tooltip		      = "createCustomHTMLContent('".$title."','".$category_explanation."')";
    }