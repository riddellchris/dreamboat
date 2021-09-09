<?php
if(!isset($_SESSION)){session_start();}
$sql = "SELECT * FROM management_details WHERE client_id = '".$_SESSION['viewing_client_id']."' ORDER BY update_id DESC LIMIT 1";

require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);

$target_market			= mysqli_real_escape_string($conn, $row['target_market']);
$pain_points			= mysqli_real_escape_string($conn, $row['pain_points']);
$urgency_tipping_points		= mysqli_real_escape_string($conn, $row['urgency_tipping_points']);
$key_sales_phrases		= mysqli_real_escape_string($conn, $row['key_sales_phrases']);
$starter_packs			= mysqli_real_escape_string($conn, $row['starter_packs']);
$expansion_processes		= mysqli_real_escape_string($conn, $row['expansion_processes']);
$points_of_sales_leverage	= mysqli_real_escape_string($conn, $row['points_of_sales_leverage']);
$other_sales_notes		= mysqli_real_escape_string($conn, $row['other_sales_notes']);
$market_sizings			= mysqli_real_escape_string($conn, $row['market_sizings']);
$main_competitors		= mysqli_real_escape_string($conn, $row['main_competitors']);
$key_differentiators		= mysqli_real_escape_string($conn, $row['key_differentiators']);
$current_channels		= mysqli_real_escape_string($conn, $row['current_channels']);
$dream_channels			= mysqli_real_escape_string($conn, $row['dream_channels']);
$sales_process			= mysqli_real_escape_string($conn, $row['sales_process']);
$lead_times 			= mysqli_real_escape_string($conn, $row['lead_times']);
$other_marketing_notes		= mysqli_real_escape_string($conn, $row['other_marketing_notes']);
$standard_customer_journey	= mysqli_real_escape_string($conn, $row['standard_customer_journey']);
$great_clients			= mysqli_real_escape_string($conn, $row['great_clients']);
$good_clients			= mysqli_real_escape_string($conn, $row['good_clients']);
$average_clients		= mysqli_real_escape_string($conn, $row['average_clients']);
$bad_clients			= mysqli_real_escape_string($conn, $row['bad_clients']);
$terrible_clients		= mysqli_real_escape_string($conn, $row['terrible_clients']);
$other_clients_notes		= mysqli_real_escape_string($conn, $row['other_clients_notes']);
$staff_vision			= mysqli_real_escape_string($conn, $row['staff_vision']);
$critical_cultural_notes	= mysqli_real_escape_string($conn, $row['critical_cultural_notes']);
$hiring_channels		= mysqli_real_escape_string($conn, $row['hiring_channels']);
$hiring_processes		= mysqli_real_escape_string($conn, $row['hiring_processes']);
$biggest_staffing_issues	= mysqli_real_escape_string($conn, $row['biggest_staffing_issues']);
$other_staff_notes		= mysqli_real_escape_string($conn, $row['other_staff_notes']);
$intial_engagements		= mysqli_real_escape_string($conn, $row['intial_engagements']);
$standard_projects		= mysqli_real_escape_string($conn, $row['standard_projects']);
$ongoing_work			= mysqli_real_escape_string($conn, $row['ongoing_work']);
$disengagement_issues		= mysqli_real_escape_string($conn, $row['disengagement_issues']);	
$upsell_and_onsell_potential	= mysqli_real_escape_string($conn, $row['upsell_and_onsell_potential']);	
$other_services_notes		= mysqli_real_escape_string($conn, $row['other_services_notes']);
$other_product_groupings	= mysqli_real_escape_string($conn, $row['other_product_groupings']);
$comparative_examples		= mysqli_real_escape_string($conn, $row['comparative_examples']);
$key_value_propositions		= mysqli_real_escape_string($conn, $row['key_value_propositions']);
$future_line_expansions		= mysqli_real_escape_string($conn, $row['future_line_expansions']);
$other_product_notes		= mysqli_real_escape_string($conn, $row['other_product_notes']);
$current_systems_issues			= mysqli_real_escape_string($conn, $row['current_systems_issues']);
$potential_systems_improvements		= mysqli_real_escape_string($conn, $row['potential_systems_improvements']);
$overdue_systems_simplifications	= mysqli_real_escape_string($conn, $row['overdue_systems_simplifications']);
$systems_user_engagement_issues		= mysqli_real_escape_string($conn, $row['systems_user_engagement_issues']);
$business_systems_issues		= mysqli_real_escape_string($conn, $row['business_systems_issues']);
$future_systems_requirements		= mysqli_real_escape_string($conn, $row['future_systems_requirements']);
$other_systems_notes			= mysqli_real_escape_string($conn, $row['other_systems_notes']);
//business details
$vision			= mysqli_real_escape_string($conn, $row['vision']);
$mission		= mysqli_real_escape_string($conn, $row['mission']);
$core_competencies	= mysqli_real_escape_string($conn, $row['core_competencies']);
$strengths		= mysqli_real_escape_string($conn, $row['strengths']);
$weaknesses		= mysqli_real_escape_string($conn, $row['weaknesses']);
$opportunities		= mysqli_real_escape_string($conn, $row['opportunities']);
$threats		= mysqli_real_escape_string($conn, $row['threats']);
$competitors		= mysqli_real_escape_string($conn, $row['competitors']);
$other_business_notes	= mysqli_real_escape_string($conn, $row['other_business_notes']);


if(isset($_POST['standard_customer_journey'])){		$standard_customer_journey 	= mysqli_real_escape_string($conn, $_POST['standard_customer_journey']);}
if(isset($_POST['target_market'])){			$target_market			= mysqli_real_escape_string($conn, $_POST['target_market']);}
if(isset($_POST['pain_points'])){			$pain_points			= mysqli_real_escape_string($conn, $_POST['pain_points']);}
if(isset($_POST['urgency_tipping_points'])){		$urgency_tipping_points		= mysqli_real_escape_string($conn, $_POST['urgency_tipping_points']);}
if(isset($_POST['key_sales_phrases'])){			$key_sales_phrases		= mysqli_real_escape_string($conn, $_POST['key_sales_phrases']);}
if(isset($_POST['starter_packs'])){			$starter_packs			= mysqli_real_escape_string($conn, $_POST['starter_packs']);}
if(isset($_POST['expansion_processes'])){		$expansion_processes		= mysqli_real_escape_string($conn, $_POST['expansion_processes']);}
if(isset($_POST['points_of_sales_leverage'])){		$points_of_sales_leverage	= mysqli_real_escape_string($conn, $_POST['points_of_sales_leverage']);}
if(isset($_POST['other_sales_notes'])){			$other_sales_notes		= mysqli_real_escape_string($conn, $_POST['other_sales_notes']);}
if(isset($_POST['market_sizings'])){			$market_sizings			= mysqli_real_escape_string($conn, $_POST['market_sizings']);}
if(isset($_POST['main_competitors'])){			$main_competitors		= mysqli_real_escape_string($conn, $_POST['main_competitors']);}
if(isset($_POST['key_differentiators'])){		$key_differentiators		= mysqli_real_escape_string($conn, $_POST['key_differentiators']);}
if(isset($_POST['current_channels'])){			$current_channels		= mysqli_real_escape_string($conn, $_POST['current_channels']);}
if(isset($_POST['dream_channels'])){			$dream_channels			= mysqli_real_escape_string($conn, $_POST['dream_channels']);}
if(isset($_POST['sales_process'])){			$sales_process			= mysqli_real_escape_string($conn, $_POST['sales_process']);}
if(isset($_POST['lead_times'])){			$lead_times 			= mysqli_real_escape_string($conn, $_POST['lead_times']);}
if(isset($_POST['other_marketing_notes'])){		$other_marketing_notes		= mysqli_real_escape_string($conn, $_POST['other_marketing_notes']);}
if(isset($_POST['standard_customer_journey'])){		$standard_customer_journey	= mysqli_real_escape_string($conn, $_POST['standard_customer_journey']);}
if(isset($_POST['great_clients'])){			$great_clients			= mysqli_real_escape_string($conn, $_POST['great_clients']);}
if(isset($_POST['good_clients'])){			$good_clients			= mysqli_real_escape_string($conn, $_POST['good_clients']);}
if(isset($_POST['average_clients'])){			$average_clients		= mysqli_real_escape_string($conn, $_POST['average_clients']);}
if(isset($_POST['bad_clients'])){			$bad_clients			= mysqli_real_escape_string($conn, $_POST['bad_clients']);}
if(isset($_POST['terrible_clients'])){			$terrible_clients		= mysqli_real_escape_string($conn, $_POST['terrible_clients']);}
if(isset($_POST['other_clients_notes'])){		$other_clients_notes		= mysqli_real_escape_string($conn, $_POST['other_clients_notes']);}
if(isset($_POST['staff_vision'])){			$staff_vision			= mysqli_real_escape_string($conn, $_POST['staff_vision']);}
if(isset($_POST['critical_cultural_notes'])){		$critical_cultural_notes	= mysqli_real_escape_string($conn, $_POST['critical_cultural_notes']);}
if(isset($_POST['hiring_channels'])){			$hiring_channels		= mysqli_real_escape_string($conn, $_POST['hiring_channels']);}
if(isset($_POST['hiring_processes'])){			$hiring_processes		= mysqli_real_escape_string($conn, $_POST['hiring_processes']);}
if(isset($_POST['biggest_staffing_issues'])){		$biggest_staffing_issues	= mysqli_real_escape_string($conn, $_POST['biggest_staffing_issues']);}
if(isset($_POST['other_staff_notes'])){			$other_staff_notes		= mysqli_real_escape_string($conn, $_POST['other_staff_notes']);}
if(isset($_POST['intial_engagements'])){		$intial_engagements		= mysqli_real_escape_string($conn, $_POST['intial_engagements']);}
if(isset($_POST['standard_projects'])){			$standard_projects		= mysqli_real_escape_string($conn, $_POST['standard_projects']);}
if(isset($_POST['ongoing_work'])){			$ongoing_work			= mysqli_real_escape_string($conn, $_POST['ongoing_work']);}
if(isset($_POST['disengagement_issues'])){		$disengagement_issues		= mysqli_real_escape_string($conn, $_POST['disengagement_issues']);}
if(isset($_POST['upsell_and_onsell_potential'])){	$upsell_and_onsell_potential	= mysqli_real_escape_string($conn, $_POST['upsell_and_onsell_potential']);}	
if(isset($_POST['other_services_notes'])){		$other_services_notes		= mysqli_real_escape_string($conn, $_POST['other_services_notes']);}
if(isset($_POST['other_product_groupings'])){		$other_product_groupings	= mysqli_real_escape_string($conn, $_POST['other_product_groupings']);}
if(isset($_POST['comparative_examples'])){		$comparative_examples		= mysqli_real_escape_string($conn, $_POST['comparative_examples']);}
if(isset($_POST['key_value_propositions'])){		$key_value_propositions		= mysqli_real_escape_string($conn, $_POST['key_value_propositions']);}
if(isset($_POST['future_line_expansions'])){		$future_line_expansions		= mysqli_real_escape_string($conn, $_POST['future_line_expansions']);}
if(isset($_POST['other_product_notes'])){		$other_product_notes		= mysqli_real_escape_string($conn, $_POST['other_product_notes']);}
if(isset($_POST['current_systems_issues'])){		$current_systems_issues		= mysqli_real_escape_string($conn, $_POST['current_systems_issues']);}
if(isset($_POST['potential_systems_improvements'])){	$potential_systems_improvements		= mysqli_real_escape_string($conn, $_POST['potential_systems_improvements']);}
if(isset($_POST['overdue_systems_simplifications'])){	$overdue_systems_simplifications		= mysqli_real_escape_string($conn, $_POST['overdue_systems_simplifications']);}
if(isset($_POST['systems_user_engagement_issues'])){	$systems_user_engagement_issues		= mysqli_real_escape_string($conn, $_POST['systems_user_engagement_issues']);}
if(isset($_POST['business_systems_issues'])){		$business_systems_issues		= mysqli_real_escape_string($conn, $_POST['business_systems_issues']);}
if(isset($_POST['future_systems_requirements'])){	$future_systems_requirements		= mysqli_real_escape_string($conn, $_POST['future_systems_requirements']);}
if(isset($_POST['other_systems_notes'])){		$other_systems_notes		= mysqli_real_escape_string($conn, $_POST['other_systems_notes']);}
//business details
if(isset($_POST['vision'])){			$vision			= mysqli_real_escape_string($conn, $_POST['vision']);}
if(isset($_POST['mission'])){			$mission		= mysqli_real_escape_string($conn, $_POST['mission']);}
if(isset($_POST['core_competencies'])){		$core_competencies	= mysqli_real_escape_string($conn, $_POST['core_competencies']);}
if(isset($_POST['strengths'])){			$strengths		= mysqli_real_escape_string($conn, $_POST['strengths']);}
if(isset($_POST['weaknesses'])){		$weaknesses		= mysqli_real_escape_string($conn, $_POST['weaknesses']);}
if(isset($_POST['opportunities'])){		$opportunities		= mysqli_real_escape_string($conn, $_POST['opportunities']);}
if(isset($_POST['threats'])){			$threats		= mysqli_real_escape_string($conn, $_POST['threats']);}
if(isset($_POST['competitors'])){		$competitors		= mysqli_real_escape_string($conn, $_POST['competitors']);}
if(isset($_POST['other_business_notes'])){	$other_business_notes	= mysqli_real_escape_string($conn, $_POST['other_business_notes']);}









$current_date = date('Y-m-d H:i:s');
 $sql = "INSERT INTO management_details
		(made_by_id,
		 client_id, 
target_market,
pain_points,
urgency_tipping_points,
key_sales_phrases,
starter_packs,
expansion_processes,
points_of_sales_leverage,
other_sales_notes,
market_sizings,
main_competitors,
key_differentiators,
current_channels,
dream_channels,
sales_process,
lead_times,
other_marketing_notes,
standard_customer_journey,
great_clients,
good_clients,
average_clients,
bad_clients,
terrible_clients,
other_clients_notes,
staff_vision,
critical_cultural_notes,
hiring_channels,
hiring_processes,
biggest_staffing_issues,
other_staff_notes,
intial_engagements,
standard_projects,
ongoing_work,
disengagement_issues,
upsell_and_onsell_potential,
other_services_notes,
other_product_groupings,
comparative_examples,
key_value_propositions,
future_line_expansions,
other_product_notes,
current_systems_issues,
potential_systems_improvements,
overdue_systems_simplifications,
systems_user_engagement_issues,
business_systems_issues,
future_systems_requirements,
other_systems_notes,
vision,
mission,
core_competencies,
strengths,
weaknesses,
opportunities,
threats,
competitors,
other_business_notes







		 
		 )
		VALUES('".$_SESSION['user_id']."',
			'".$_SESSION['viewing_client_id']."',
			'$target_market',		
			'$pain_points',			
			'$urgency_tipping_points',	
			'$key_sales_phrases',
			'$starter_packs',
			'$expansion_processes',	
			'$points_of_sales_leverage',	
			'$other_sales_notes',	
			'$market_sizings',	
			'$main_competitors',		
			'$key_differentiators',		
			'$current_channels',	
			'$dream_channels',		
			'$sales_process',		
			'$lead_times',		
			'$other_marketing_notes',		
			'$standard_customer_journey',	
			'$great_clients',
			'$good_clients',		
			'$average_clients',		
			'$bad_clients',			
			'$terrible_clients',		
			'$other_clients_notes',		
			'$staff_vision',		
			'$critical_cultural_notes',	
			'$hiring_channels',	
			'$hiring_processes',		
			'$biggest_staffing_issues',	
			'$other_staff_notes',	
			'$intial_engagements',		
			'$standard_projects',		
			'$ongoing_work',		
			'$disengagement_issues',		
			'$upsell_and_onsell_potential',	
			'$other_services_notes',
			'$other_product_groupings',	
			'$comparative_examples',	
			'$key_value_propositions',		
			'$future_line_expansions',	
			'$other_product_notes',	
			'$current_systems_issues',	
			'$potential_systems_improvements',	
			'$overdue_systems_simplifications',	
			'$systems_user_engagement_issues',	
			'$business_systems_issues',	
			'$future_systems_requirements',	
			'$other_systems_notes',
			'$vision',	
			'$mission',	
			'$core_competencies',	
			'$strengths',	
			'$weaknesses',	
			'$opportunities',	
			'$threats',	
			'$competitors',	
			'$other_business_notes'			
			
			
			
			
			)
	";
  	 
//echo $sql;
//exit();

mysqli_query($conn, $sql);

header("Location: ".$_SESSION['this_page']);	exit();


?>