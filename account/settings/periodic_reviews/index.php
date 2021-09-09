<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/start.php";
require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/spacings/top_of_centering_divs.php";

$sql = "SELECT * FROM user_review_cycles WHERE user_id = '".$_SESSION['viewing_client_id']."'";
require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);

require $_SERVER['DOCUMENT_ROOT']."/account/settings/periodic_reviews/styling.php";




echo "
<form method='post' action='/account/settings/periodic_reviews/adjust.php'>
	<div style='width:100%; font-family:Comfortaa;'>
		<div style='display:table;margin-right:auto;margin-left:auto;'>
			<div  style='display:table-row;'>
				<div  style='display:table-cell;text-align:left;'>
				</div>		
				<div  style='display:table-cell;'>
				</div>
				<div  style='display:table-cell;color:red;weight:400;text-transform:uppercase;'>";
				if($_SESSION['dreamboat_crew'] == 'yes'){
				echo "new user default<br> ==<br> off<br>";
				}
				echo "</div>";
		
		echo "		<div  style='display:table-cell;'>	
				</div>		";										
echo "			</div>";
		
		
/*
echo "			<div  style='display:table-row;'>
				<div  style='display:table-cell;text-align:left;'>End of day Work Diaries	
				</div>		
				<div  style='display:table-cell;'>";
					$timename = 'end_of_day_work_diaries';				
					$selected = $row[$timename];		
					require $_SERVER['DOCUMENT_ROOT']."/components/inputs/pieces/selects/reminder_selection_period.php";	
	echo "				</div>
				<div  style='display:table-cell;'>";
					$selected = $row[$timename."_on_off"];
					require $_SERVER['DOCUMENT_ROOT']."/components/inputs/pieces/radios/reviews_on_off.php";
				echo "</div>";
		//echo "
		//		<div  style='display:table-cell;'>
		//			<a class='launch' href='launch_now.php?review=".$timename."'>launch now</a>
		//		</div>";			
		echo "	</div>";*/
/*
echo "			<div  style='display:table-row;'>
				<div  style='display:table-cell;text-align:left;'>Weekly Time reviews	
				</div>		
				<div  style='display:table-cell;'>";
					$timename = 'end_of_week_time_reviews';				
					$selected = $row[$timename];		
					require $_SERVER['DOCUMENT_ROOT']."/components/inputs/pieces/selects/reminder_selection_period.php";	
	echo "				</div>
	
				<div  style='display:table-cell;'>";
					$selected = $row[$timename."_on_off"];
					require $_SERVER['DOCUMENT_ROOT']."/components/inputs/pieces/radios/reviews_on_off.php";
				echo "</div>";	
	//	echo "		<div  style='display:table-cell;'>
	//				<a class='launch' href='launch_now.php?review=".$timename."'>launch now</a>
	//			</div>		";
echo "			</div>";*/



echo "				<div  style='display:table-row;'>
				<div  style='display:table-cell;text-align:left;'>End of month Personal Productivity Reviews	
				</div>		
				<div  style='display:table-cell;'>";
					$timename = 'end_of_month_personal_productivity_reviews';				
					$selected = $row[$timename];		
					require $_SERVER['DOCUMENT_ROOT']."/components/inputs/pieces/selects/reminder_selection_period.php";	
	echo "				</div>
	
				<div  style='display:table-cell;'>";
					$selected = $row[$timename."_on_off"];
					require $_SERVER['DOCUMENT_ROOT']."/components/inputs/pieces/radios/reviews_on_off.php";
				echo "</div>";				
	//	echo "		<div  style='display:table-cell;'>
	//				<a class='launch' href='launch_now.php?review=".$timename."'>launch now</a>
	//			</div>";
		echo "	
			</div>	";
	
			
			
/*	
			<div  style='display:table-row;'>
				<div  style='display:table-cell;text-align:left;'>Semi-annual Workplace Mental Health Risk Assessments<br>
										  March & September	
				</div>		
				<div  style='display:table-cell;'>";
					$timename = 'semi_annual_workplace_mental_health_risk_assessments';				
					$selected = $row[$timename];		
					require $_SERVER['DOCUMENT_ROOT']."/components/inputs/pieces/selects/reminder_selection_period.php";	
	echo "				</div>
	
				<div  style='display:table-cell;'>";
					$selected = $row[$timename."_on_off"];
					require $_SERVER['DOCUMENT_ROOT']."/components/inputs/pieces/radios/reviews_on_off.php";
				echo "</div>";	
	//	echo "		<div  style='display:table-cell;'>
	//				<a class='launch' href='launch_now.php?review=".$timename."'>launch now</a>
	//			</div>	";
	
	echo "
			</div>		
				
				";		
*/

//this should be included in time... but not today
//in short allowing people to optimise and edit what goes within each review	
//		if($row[$timename."_on_off"] == 'on'){			
//		echo "		<div  style='display:table-cell;'>
//					<a class='inclusions' href='edit_inclusions.php?review=".$timename."'>edit included elements</a>
//				</div>		";				
//				}
				
					

					
		//not required for now but should be there in time	
		//sends email to user to start the review process	
		//send email button if a pilot and not looking at yourself
/*		if(	$_SESSION['dreamboat_crew'] == 'yes' && 
			$_SESSION['viewing_client_id'] != $_SESSION['user_id']){
		echo "		<div  style='display:table-cell;'>
					<a class='launch email' href='launch_now_via_email.php?review=".$timename."'>email review link</a>
				</div>		";		
		
		
		}
*/						
							
//echo "			</div>";



//probably all of these are relevant
//these can be added as user usage improves and we want better data from them to help make better decisions too
//contact detail reviews.... go over what contact details are missing
//funnel probabiliy reviews etc
//lead source reviews
//referrer reviews
//staff clients etc - set period for review as required.... not today 20.5.20
/*

echo "
			<div  style='display:table-row;'>
				<div  style='display:table-cell;text-align:left;'>Active ".substr($_SESSION['viewing_client_what_clients_are_called'], 0, -1)." reviews		
				</div>		
				<div  style='display:table-cell;'>";
					$timename = 'clients';				//which clients should you add updates too//which are going well//behind//need focus// this will obviously use the new system name for the client too btw
					$selected = $row[$timename];		
					require $_SERVER['DOCUMENT_ROOT']."/components/inputs/pieces/selects/reminder_selection_period.php";	
	echo "			</div>			
				<div  style='display:table-cell;'>";
					$selected = $row[$timename."_on_off"];
					require $_SERVER['DOCUMENT_ROOT']."/components/inputs/pieces/radios/reviews_on_off.php";
				echo "</div>	";
		echo "		<div  style='display:table-cell;'>
					<a class='launch' href='launch_now.php?review=".$timename."'>launch now</a>
				</div>		";
echo "			</div>		";




echo "			
			<div  style='display:table-row;'>
				<div  style='display:table-cell;text-align:left;'>Target market reviews";	/// should really make sure all clients have target markets allocated to them.. even multipless... so great charts about revenue shares etc can be shown and strategy ultimately dramatically improved//not critical today buy any means... should really only run monthly and ensure everyone properly allocated, check against any new target markets and see where new clients fit
		echo "		</div>		
				<div  style='display:table-cell;'>";
					$timename = 'target_market';
					$selected = $row[$timename];		
					require $_SERVER['DOCUMENT_ROOT']."/components/inputs/pieces/selects/reminder_selection_period.php";	
	echo "			</div>			
				<div  style='display:table-cell;'>";
					$selected = $row[$timename."_on_off"];
					require $_SERVER['DOCUMENT_ROOT']."/components/inputs/pieces/radios/reviews_on_off.php";
				echo "</div>	";
			echo "	<div  style='display:table-cell;'>
					<a class='launch' href='launch_now.php?review=".$timename."'>launch now</a>
				</div>	";



		echo "		</div>	";
			

*/


			
			
//can be built down the track I suspect/ am pretty sure they are going to require more complex data and systems and questioning that utilisation of what already really exists

//these reviews aren't required to begin with at all so just hide them for now

//target market should look at who is ideal to target.
//pricing should be about where there is more margin vs what is the customer lifetime value and maximising that
//business results should be delayed a little and work with the clients/delay in calculating these things. typically 6 weeks or so... therefore update tracking data
/*
echo "								
			<div  style='display:table-row;'>
				<div  style='display:table-cell;text-align:left;'>Pricing reviews		
				</div>	
				<div  style='display:table-cell;'>";
					$timename = 'reprice';				
					$selected = $row[$timename];		
					require $_SERVER['DOCUMENT_ROOT']."/components/inputs/pieces/selects/reminder_selection_period.php";	
	echo "			</div>			

				<div  style='display:table-cell;'>";
					$selected = $row[$timename."_on_off"];
					require $_SERVER['DOCUMENT_ROOT']."/components/inputs/pieces/radios/reviews_on_off.php";
				echo "</div>	
				<div  style='display:table-cell;'>launch now
				</div>	
			</div>
			<div  style='display:table-row;'>
				<div  style='display:table-cell;text-align:left;'>Positioning reviews		
				</div>		
				<div  style='display:table-cell;'>";
					$timename = 'positioning';
					$selected = $row[$timename];		
					require $_SERVER['DOCUMENT_ROOT']."/components/inputs/pieces/selects/reminder_selection_period.php";	
	echo "			</div>			
				<div  style='display:table-cell;'>";
					$selected = $row[$timename."_on_off"];
					require $_SERVER['DOCUMENT_ROOT']."/components/inputs/pieces/radios/reviews_on_off.php";
				echo "</div>	
				<div  style='display:table-cell;'>launch now
				</div>	
			</div>";
*/			
/*	
	echo "		
			<div  style='display:table-row;'>
				<div  style='display:table-cell;text-align:left;'>Business results reviews		
				</div>	
				<div  style='display:table-cell;'>";
					$timename = 'results';
					$selected = $row[$timename];		
					require $_SERVER['DOCUMENT_ROOT']."/components/inputs/pieces/selects/reminder_selection_period.php";	
	echo "			</div>		
				<div  style='display:table-cell;'>";
					$selected = $row[$timename."_on_off"];
					require $_SERVER['DOCUMENT_ROOT']."/components/inputs/pieces/radios/reviews_on_off.php";
				echo "</div>	
				<div  style='display:table-cell;'>launch now
				</div>		
			</div>
			<div  style='display:table-row;'>


			<div  style='display:table-row;'>
				<div  style='display:table-cell;text-align:left;'>Staff reviews		
				</div>		
				<div  style='display:table-cell;'>";
					$timename = 'staff';
					$selected = $row[$timename];		
					require $_SERVER['DOCUMENT_ROOT']."/components/inputs/pieces/selects/reminder_selection_period.php";	
	echo "			</div>			
				<div  style='display:table-cell;'>";
					$selected = $row[$timename."_on_off"];
					require $_SERVER['DOCUMENT_ROOT']."/components/inputs/pieces/radios/reviews_on_off.php";
				echo "</div>	
				<div  style='display:table-cell;'>launch now
				</div>	
			</div>";


/*
	





	
	
	///pretty much done in the end of the week review
	//could potentially be segmented... not sure
	
		
			<div  style='display:table-row;'>
				<div  style='display:table-cell;text-align:left;'>Network reviews	
				</div>		
				<div  style='display:table-cell;'>";
					$timename = 'network';				//who have you met// what events have you attended//what ones to ones have you had or added to your diary	
					$selected = $row[$timename];		
					require $_SERVER['DOCUMENT_ROOT']."/components/inputs/pieces/selects/reminder_selection_period.php";	
	echo "				</div>
	
				<div  style='display:table-cell;'>";
					$selected = $row[$timename."_on_off"];
					require $_SERVER['DOCUMENT_ROOT']."/components/inputs/pieces/radios/reviews_on_off.php";
				echo "</div>";	
//				<div  style='display:table-cell;'>launch now
//				</div>				
echo "			</div>
			<div  style='display:table-row;'>
				<div  style='display:table-cell;text-align:left;'>Biz development reviews	
				</div>		
				<div  style='display:table-cell;'>";
					$timename = 'biz_dev';				//who have you met// what events have you attended//what ones to ones have you had or added to your diary	
					$selected = $row[$timename];		
					require $_SERVER['DOCUMENT_ROOT']."/components/inputs/pieces/selects/reminder_selection_period.php";	
	echo "				</div>
	
				<div  style='display:table-cell;'>";
					$selected = $row[$timename."_on_off"];
					require $_SERVER['DOCUMENT_ROOT']."/components/inputs/pieces/radios/reviews_on_off.php";
				echo "</div>";	
//				<div  style='display:table-cell;'>launch now
//				</div>				
echo "			</div>
			<div  style='display:table-row;'>	
				<div  style='display:table-cell;text-align:left;'>Sales reviews		
				</div>	
				<div  style='display:table-cell;'>";
					$timename = 'prospects_and_pipeline';		//what prospects can you add//what progress has been made//what does the pipeline look like now
					$selected = $row[$timename];		
					require $_SERVER['DOCUMENT_ROOT']."/components/inputs/pieces/selects/reminder_selection_period.php";	
	echo "			
				</div>
				<div  style='display:table-cell;'>";
					$selected = $row[$timename."_on_off"];
					require $_SERVER['DOCUMENT_ROOT']."/components/inputs/pieces/radios/reviews_on_off.php";
				echo "</div>	";
//				<div  style='display:table-cell;'>launch now
//				</div>								
echo "			</div>";


/*
echo "
			<div  style='display:table-row;'>
				<div  style='display:table-cell;text-align:left;'>Upsell, resell reviews	
				</div>
				<div  style='display:table-cell;'>";
					$timename = 'upsell_resell';			//of current clients//where are the upsell and resell opportunties// add them	
					$selected = $row[$timename];
					require $_SERVER['DOCUMENT_ROOT']."/components/inputs/pieces/selects/reminder_selection_period.php";		
	echo "			
				</div>
				<div  style='display:table-cell;'>";
					$selected = $row[$timename."_on_off"];
					require $_SERVER['DOCUMENT_ROOT']."/components/inputs/pieces/radios/reviews_on_off.php";
				echo "</div>	";
//				<div  style='display:table-cell;'>launch now
//				</div>	
echo "			</div>";
	*/
	
			
echo "	</div>	"; //ends the table
		
			
	$max_width = '530px;';
	require $_SERVER['DOCUMENT_ROOT']."/components/inputs/pieces/submits/standard.php";		
	
			
echo "	</div>	"; //ends the table
	

echo "	
</form>	
	";


/*
echo "
	When would you like reminders sent to you? start/end of day +- x hours
	Weekly - Friday/Wednesday etc<br>
	Fortnightly<br>
	Monthly on date<br>
	Quarterly + end of quarter<br>
";*/
require $_SERVER['DOCUMENT_ROOT']."/account/pieces/back_button.php";
require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/end.php";
?>


