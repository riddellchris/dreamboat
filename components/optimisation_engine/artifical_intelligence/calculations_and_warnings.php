<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";



if($_SESSION['dreamboat_crew'] == 'yes'){
	//note on client change all session variables starting with ai are reset
	//admin/list/select_client.php
	if(!isset($_SESSION['ai_business_age'])){
		//then let's set the business age...
		$sql = "SELECT business_age FROM user_account_details WHERE user_id = '".$_SESSION['viewing_client_id']."'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
		$_SESSION['ai_business_age'] = $row['business_age'];

		//FUTURE IMPROVEMENTS!!!		
		//we need to be including start date - or at least updating this every year a year after the date is actually added
		//none of this is built just yet... make it happen
	}
	
	
	
	//
	//more products likely vs other businesses of similar age
	//, stage, size
	//set basic stage to start with// defaults and go from there
	//products and services - 1 per year of business age
	if(	$_GET['secondary_folder'] == 'products' OR
		$_GET['secondary_folder'] == 'services'){


		if(!isset($_SESSION['ai_business_age'])){		
			$product_to_age_ratio = $_SESSION['ai_number_of_'.$_SESSION['secondary_folder']] / $_SESSION['ai_business_age'];
		
			if($product_to_age_ratio < 1){$_SESSION['ai_list_warning'] = "More ".$_SESSION['secondary_folder']." are expected for a business of this age";}
		}
		
		if($_SESSION['ai_business_age'] == 0){$_SESSION['ai_list_warning'] = "Check this business' age";
		
		
		}
	}
	
	//check these things first before triggering other warnings for now
	
	
	
	
/*	
	//for all lists this is the required variable to make any assessment here
	//$_SESSION['ai_number_of_'.$_SESSION['secondary_folder']]
	
*/	
	
	
	//most critical prompts
	//show up to 100 times
	//view/selection ratio
	
	
		//other things to add to this in time
		//add these when it's not showing up as set
		//remove the ordering - just randomise those 6 prompts
		//business age
		//staff numbers 
		//average response length as a proxy for criticality
		//all sorts of fun
	
	
	
	
	
	
	
	
	
	
	
	
	//there is an endless amount of complexity that can be added here - but all we need are those two basic examples above to get started
	//the as with the rest of this the whole system is off and racing at it's own MVP
	//but today 1.6.20 the MVP of the AI is not yet complete. So let's finish that
	
	
	//reporting timings
	
	//periodic reviews
	
	//success
	
	
}

