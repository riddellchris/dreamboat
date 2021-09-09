<?php
if(!isset($_SESSION)){session_start();}
require_once $_SERVER['DOCUMENT_ROOT']."/account/security/logged_in_check.php";
require_once $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/start.php";
require_once $_SERVER['DOCUMENT_ROOT']."/components/layouts/pieces/box/box.php";
require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php"; //not requireonce

require_once $_SERVER['DOCUMENT_ROOT']."/components/functions/require_functions.php";



$display_secondary_folder = str_replace('_',' ', $_GET['secondary_folder']);
$display_tertiary_folder = str_replace('_',' ', $_GET['tertiary_folder']);

echo "<div style='margin:20px 0px;text-align:center;margin-top:75px;'>";
	$done = 'no';
	echo "<a href='/".$_GET['primary_folder']."/' class='login-submit' style='margin-top:40px;'>";
//		if($_GET['secondary_folder'] == 'utilisation'){echo "back";$done = 'yes';	} //I don't htink this exists any longer
	//	else{ 
		echo "back to ";
		if($_GET['secondary_folder'] != 'all'){echo "all ";}
		
		//}
		if(check_primary_folder('activities')){		$done = 'yes';	echo secondary_folders_name()." activities";}
		if(check_primary_folder('issues')){		$done = 'yes';	echo secondary_folders_name()." issues";}		
		if(check_primary_folder('improvements')){	$done = 'yes';	echo secondary_folders_name()." improvements";}
		if(check_primary_folder('opportunities')){	$done = 'yes';	echo secondary_folders_name()." opportunities";}		
		
//		if(check_primary_folder('admin')){	$done = 'yes';	echo $display_tertiary_folder;}		
				

				
				
		if(check_secondary_folder('clients')){	$done = 'yes';	echo $_SESSION['viewing_client_what_clients_are_called'];}

		if($done == 'no'){echo $display_secondary_folder;}
			echo "</a>";
echo "</div>";







		
echo "	<style>

		@media screen and (min-width: 1571px) {
			#MOBILE_wheelhouse_item_core_left_hand_side{
				display:none;
			}
		
			#wheelhouse_item_core_left_hand_side{
				max-width:25%;
				padding-right:10px;
				float:left;
				width: 100%;
				display:list-item;
			}
		
			#wheelhouse_item_core_center{
				max-width: 50%;
				width:100%;
				float:left;
			}

			#wheelhouse_item_core_right_hand_side{
				max-width:25%;	
				float:left;
				text-align: left;
				padding-left:10px;
			}

		}	
		
		@media screen and (max-width: 1571px) {
		
			#wheelhouse_item_core_left_hand_side{
				display:none;
			}	
		
			#wheelhouse_item_core_center{
				width: 100%;
				float:left;
			}
			
			#wheelhouse_item_core_right_hand_side{
				width:100%;
				text-align: center;		
				margin-bottom: 100px;
			}
		}			
		

		@media screen and (min-width: 1571px) {
			.right_select{direction: rtl;}
			.left_select{text-align: left;}		
		}
		@media screen and (max-width: 1571px) {
			.right_select{text-align: center;}
			.left_select{text-align: center;}		
		}		
		
		
		select{margin:0px;background-color: transparent;color: #91cfff;max-width:350px;} 
				
					
	</style>";	
	
	
echo "<div id='wheelhouse_item_core_left_hand_side' style='text-align:right;'>";	 // make display:block to make it work now
	require $_SERVER['DOCUMENT_ROOT']."/components/layouts/items_with_sidebars/left_hand_sidebar.php";					
echo "</div>";		
		
echo "<div id='wheelhouse_item_core_center' style='display:block;text-align:center;'>";	//make width: 70% when brining others in 	
	require $_SERVER['DOCUMENT_ROOT']."/components/layouts/items_with_sidebars/central_column.php";
echo "</div>";	

echo "<div id='MOBILE_wheelhouse_item_core_left_hand_side' style='text-align:center;'>";	 // make display:block to make it work now
	require $_SERVER['DOCUMENT_ROOT']."/components/layouts/items_with_sidebars/left_hand_sidebar.php";					
echo "</div>";	

echo "<div id='wheelhouse_item_core_right_hand_side' style=''>"; //make display:block to show
	require $_SERVER['DOCUMENT_ROOT']."/components/layouts/items_with_sidebars/right_hand_sidebar.php";
echo "</div>";	





require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/end.php";

?>