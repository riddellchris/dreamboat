<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/account/security/logged_in_check.php";
require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/start.php";


//this allows for business edges but there are plenty of 'security' / 'privacy' and 'control' issues to be navigated here for sure
require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";
$sql = "SELECT * 
		FROM item_relationships
		WHERE   relationship_id = '".mysqli_real_escape_string($conn, $_GET['item_id'])."'";
$result = mysqli_query($conn, $sql);
$row 	= mysqli_fetch_array($result, MYSQLI_ASSOC);



echo "
	<style>
	.edge_node_display{
		width: 100%;
		display: inline-block;
		text-align: center;
		font-family: Comfortaa;
		text-decoration: none;
		font-size: larger;
		color: #4332ff;
		}
	.edge_node_display_inner{
		width: 100%;
		max-width: 800px;
		display: inline-block;
		padding-top: 1.5vh;
		padding-bottom: 0.5vh;		
	}
	.left_link{
		float: left;
		color:red;
		}
	.right_link{
		float: right;
		color:red;
		}
	#chart_div{
		width: 100%;
		max-width: 950px;
		display: inline-block;
		height: 50px;
	}
	
	</style>
	<div class='edge_node_display'>";
	echo "<div class='edge_node_display_inner'>";
		echo "<a class='left_link' href ='/components/items/go_to.php?db=".$row['item_a_database']."&item_id=".$row['item_a_id']."'>".$row['item_a_title']."</a>";
		echo "<a class='right_link' href ='/components/items/go_to.php?db=".$row['item_b_database']."&item_id=".$row['item_b_id']."'>".$row['item_b_title']."</a>";		
	echo "</div>";
		echo "<br>";
		
		
		echo "<div id='chart_div' ></div>";



echo "	
	</div>
";



///display with links the two items that form each of the edges
//linking to both pages
//maybe just a very basic node and edge diagram can go here too
	//this is not critical though
	//not at all








//check for a relationship between the two
$sql = "";
	
	
		if($_GET['secondary_folder'] == 'edges'){require $_SERVER['DOCUMENT_ROOT']."/map/components/edges/adjust/input_display.php";}
			require $_SERVER['DOCUMENT_ROOT']."/components/discussion/display.php";


	





require_once $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/end.php";

?>