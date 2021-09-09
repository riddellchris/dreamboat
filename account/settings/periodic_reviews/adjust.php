<?php
if(!isset($_SESSION)){session_start();}
//var_dump($_POST);
//exit();
require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";

//because we are not using all of these at once....
//aka we are not starting will all of these reviews... we can just have the data turn on and off to start with 
//therefore the defaults are ther when and as required.


//just be careful with the commas otherwise we are fucked

$first = 'yes';


$sql = "UPDATE user_review_cycles 
	SET	";
	if(isset($_POST['upsell_resell'])){			if($first == 'no'){$sql .= " , ";}$first = 'no'; $sql .= "upsell_resell 			= '".$_POST['upsell_resell']."'";}
	if(isset($_POST['reprice'])){				if($first == 'no'){$sql .= " , ";}$first = 'no'; $sql .= "reprice 				= '".$_POST['reprice']."'";}
	if(isset($_POST['biz_dev'])){				if($first == 'no'){$sql .= " , ";}$first = 'no'; $sql .= "biz_dev 				= '".$_POST['biz_dev']."'";}		
	if(isset($_POST['results'])){				if($first == 'no'){$sql .= " , ";}$first = 'no'; $sql .= "results 				= '".$_POST['results']."'";}
	if(isset($_POST['prospects_and_pipeline'])){		if($first == 'no'){$sql .= " , ";}$first = 'no'; $sql .= "prospects_and_pipeline 		= '".$_POST['prospects_and_pipeline']."'";}
	if(isset($_POST['positioning'])){			if($first == 'no'){$sql .= " , ";}$first = 'no'; $sql .= "positioning 				= '".$_POST['positioning']."'";}
	if(isset($_POST['target_market'])){			if($first == 'no'){$sql .= " , ";}$first = 'no'; $sql .= "target_market 			= '".$_POST['target_market']."'";}
	if(isset($_POST['staff'])){				if($first == 'no'){$sql .= " , ";}$first = 'no'; $sql .= "staff 				= '".$_POST['staff']."'";}
	if(isset($_POST['clients'])){				if($first == 'no'){$sql .= " , ";}$first = 'no'; $sql .= "clients 				= '".$_POST['clients']."'";}	
	if(isset($_POST['end_of_week_reviews'])){		if($first == 'no'){$sql .= " , ";}$first = 'no'; $sql .= "end_of_week_reviews 			= '".$_POST['end_of_week_reviews']."'";}		
	
	if(isset($_POST['upsell_resell_on_off'])){		if($first == 'no'){$sql .= " , ";}$first = 'no'; $sql .= "upsell_resell_on_off 			= '".$_POST['upsell_resell_on_off']."'";}
	if(isset($_POST['reprice_on_off'])){			if($first == 'no'){$sql .= " , ";}$first = 'no'; $sql .= "reprice_on_off 			= '".$_POST['reprice_on_off']."'";}
	if(isset($_POST['biz_dev_on_off'])){			if($first == 'no'){$sql .= " , ";}$first = 'no'; $sql .= "biz_dev_on_off 			= '".$_POST['biz_dev_on_off']."'";}
	if(isset($_POST['results_on_off'])){			if($first == 'no'){$sql .= " , ";}$first = 'no'; $sql .= "results_on_off 			= '".$_POST['results_on_off']."'";}
	if(isset($_POST['prospects_and_pipeline_on_off'])){	if($first == 'no'){$sql .= " , ";}$first = 'no'; $sql .= "prospects_and_pipeline_on_off		= '".$_POST['prospects_and_pipeline_on_off']."'";}
	if(isset($_POST['positioning_on_off'])){		if($first == 'no'){$sql .= " , ";}$first = 'no'; $sql .= "positioning_on_off 			= '".$_POST['positioning_on_off']."'";}
	if(isset($_POST['target_market_on_off'])){		if($first == 'no'){$sql .= " , ";}$first = 'no'; $sql .= "target_market_on_off 			= '".$_POST['target_market_on_off']."'";}
	if(isset($_POST['staff_on_off'])){			if($first == 'no'){$sql .= " , ";}$first = 'no'; $sql .= "staff_on_off 				= '".$_POST['staff_on_off']."'";}
	if(isset($_POST['clients_on_off'])){			if($first == 'no'){$sql .= " , ";}$first = 'no'; $sql .= "clients_on_off 			= '".$_POST['clients_on_off']."'";}			
	if(isset($_POST['end_of_week_reviews_on_off'])){	if($first == 'no'){$sql .= " , ";}$first = 'no'; $sql .= "end_of_week_reviews_on_off 			= '".$_POST['end_of_week_reviews_on_off']."'";}			
		
	if(isset($_POST['end_of_day_work_diaries_on_off'])){					if($first == 'no'){$sql .= " , ";}$first = 'no'; $sql .= "end_of_day_work_diaries_on_off  				= '".$_POST['end_of_day_work_diaries_on_off']."'";}
	if(isset($_POST['end_of_week_time_reviews_on_off'])){					if($first == 'no'){$sql .= " , ";}$first = 'no'; $sql .= "end_of_week_time_reviews_on_off  				= '".$_POST['end_of_week_time_reviews_on_off']."'";}
	if(isset($_POST['end_of_month_personal_productivity_reviews_on_off'])){		if($first == 'no'){$sql .= " , ";}$first = 'no'; $sql .= "end_of_month_personal_productivity_reviews_on_off  		= '".$_POST['end_of_month_personal_productivity_reviews_on_off']."'";}
	if(isset($_POST['semi_annual_workplace_mental_health_risk_assessments_on_off'])){	if($first == 'no'){$sql .= " , ";}$first = 'no'; $sql .= "semi_annual_workplace_mental_health_risk_assessments_on_off  	= '".$_POST['semi_annual_workplace_mental_health_risk_assessments_on_off']."'";}
//	if(isset($_POST['semi_annual_workplace_mental_health_risk_assessments'])){	if($first == 'no'){$sql .= " , ";}$first = 'no'; $sql .= "prospects_and_pipeline_on_off		= '".$_POST['prospects_and_pipeline_on_off']."'";}		
		
		
			
$sql .= " WHERE user_id = '".$_SESSION['viewing_client_id']."'";

//echo $sql;
//exit();

$result = mysqli_query($conn, $sql);
header("Location: ".$_SESSION['this_page']);
exit();
?>