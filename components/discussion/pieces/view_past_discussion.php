<?php
if (!isset($_SESSION)) {
	session_start();
}

//honestly not entirely sure what's goig on here
//this really should just be some pretty basic stuff here but that doesn't seem to be the case at all right now sadly
//this should just be a a box or a table to be honest and that's all we'll ever need
//I'm not sure why it isn't that


//MENTIONS
//in here we need to pull out each <mention> tag and replace with link tags to the correct part of the page






//get out the past discussion between the two users for the given folder position
//ideally in time improve to "highlight which user said" and also what comments are the new ones this time around/ on this notification
if ($_SESSION['dreamboat_crew'] == 'yes') {
	$other_parties_id = $_SESSION['viewing_client_id'];
} else {
	$other_parties_id = $_SESSION['pilots_id'];
}


$sql = "SELECT * FROM discussion 
			INNER JOIN user_account_details 
			ON discussion.user_id = user_account_details.user_id 
			WHERE ";


$and_required = 'no';

$test_count = 0;
if (isset($_GET['secondary_folder'])){		if ($_GET['secondary_folder'] 	== 'item') {$test_count++;}}
if (isset($_GET['tertiary_folder'])){		if ($_GET['tertiary_folder'] 	== 'item') {$test_count++;}}
if (isset($_GET['quarternary_folder'])) {	if ($_GET['quarternary_folder'] == 'item') {$test_count++;}}

//the only anomaly is that item Id's apply on map/edges/index so we need to account for this
if($_GET['primary_folder'] == 'map' && $_GET['secondary_folder'] == 'edges'){$test_count++;}





//this should only be if we are in an item.
if ($test_count == 1) {
	$sql .= "   discussion.related_id = '" . mysqli_real_escape_string($conn, $_GET['item_id']) . "'";
	$and_required = 'yes';
}

if ($and_required == 'yes') {
	$sql .= " AND ";
	$and_required = 'no';
}


if ((($_GET['primary_folder'] == 'management' && $_GET['secondary_folder'] == 'clients') or
		($_GET['primary_folder'] == 'management' && $_GET['secondary_folder'] == 'staff') 	or
		($_GET['primary_folder'] == 'network'    && $_GET['secondary_folder'] == 'people'))
	&& $_GET['tertiary_folder'] 	== 'item'
) {
	$sql .= " (	(discussion.primary_folder = 'management' AND discussion.secondary_folder = 'clients')	OR
						(discussion.primary_folder = 'management' AND discussion.secondary_folder = 'staff')	OR 
						(discussion.primary_folder = 'network' 	  AND discussion.secondary_folder = 'people')
						)";
	$and_required = 'yes';
} else {

	if ($_GET['primary_folder'] == 'admin' && $_GET['secondary_folder'] == 'technology') {

		$sql .= "	discussion.primary_folder 		= 'admin' 							AND 
						discussion.secondary_folder 	= 'technology'						AND
						discussion.tertiary_folder 		= '" . mysqli_real_escape_string($conn, $_GET['tertiary_folder']) . "' 	AND
						discussion.quarternary_folder 	= '" . mysqli_real_escape_string($conn, $_GET['quarternary_folder']) . "' AND
						discussion.related_id 			= '" . mysqli_real_escape_string($conn, $_GET['item_id']) . "' 
				";
	} else {
		$sql .= "discussion.primary_folder = '" . mysqli_real_escape_string($conn, $_GET['primary_folder']) . "'";

		$test = 'go';
		if (isset($_GET['tertiary_folder']))

			if ($is_item == 'no') {
				$sql .= "  AND discussion.secondary_folder 	= 	'" . mysqli_real_escape_string($conn, $_GET['secondary_folder']) . "'";
			}

		if($_GET['primary_folder'] != 'notes'){
			//cut this to avoid losing comments for improvemnts as they move from planned to active etc
			if (
				$_GET['primary_folder'] != 'improvements' &&
				$_GET['primary_folder'] != 'wheelhouse'   &&

				($is_item == 'yes')

			) {

				$sql .= "  	AND discussion.secondary_folder = 	'" . mysqli_real_escape_string($conn, $_GET['secondary_folder']) . "'
								AND discussion.tertiary_folder 	= 	'" . mysqli_real_escape_string($conn, $_GET['tertiary_folder']) . "'";
			}
		}
	}
	$and_required = 'yes';
}




if ($and_required == 'yes') {
	$sql .= " AND ";
	$and_required = 'no';
}








$sql .= "   (
		  	(discussion.user_id = '" . mysqli_real_escape_string($conn, $_SESSION['user_id']) . "' 	AND	discussion.to_user_id = '" . mysqli_real_escape_string($conn, $other_parties_id) . "'   )
		  	OR
		  	(discussion.user_id = '" . mysqli_real_escape_string($conn, $other_parties_id) . "'		AND	discussion.to_user_id = '" . mysqli_real_escape_string($conn, $_SESSION['user_id']) . "'   )	  	
		  	)
		  
		  ORDER BY discussion.comment_id DESC";

//echo $sql;exit();
echo "<div style='display:block;padding-bottom:150px;'>";
$result = mysqli_query($conn, $sql);



$me[1] = '#281E96';
$me[2] = '#2F2EA2';
$me[3] = '#363FAD';
$me[4] = '#3D4FB9';
$me[5] = '#4560C5';
$me[6] = '#4C70D1';
$me[7] = '#5381DC';
$me[8] = '#5A91E8';


$me_time_color[1] = '#A6C9FF';
$me_time_color[2] = '#AECEFF';
$me_time_color[3] = '#B5D2FF';
$me_time_color[4] = '#BDD7FF';
$me_time_color[5] = '#C4DBFF';
$me_time_color[6] = '#CCE0FF';
$me_time_color[7] = '#CCE0FF';
$me_time_color[8] = '#DBE9FF';


$you_time_color[1] = '#A9FFA6';
$you_time_color[2] = '#B2FFAE';
$you_time_color[3] = '#BCFFB5';
$you_time_color[4] = '#C5FFBD';
$you_time_color[5] = '#CEFFC4';
$you_time_color[6] = '#D7FFCC';
$you_time_color[7] = '#E1FFD3';
$you_time_color[8] = '#EAFFDB';


#24961e
$you[1] = '#1E962E';
$you[2] = '#27A238';
$you[3] = '#2FAD42';
$you[4] = '#38B94C';
$you[5] = '#40C556';
$you[6] = '#49D160';
$you[7] = '#51DC6A';
$you[8] = '#5AE874';




echo "
<style>
	.discussion_container{
		
		padding-right:3%;
		padding-top:0.5vh;
		padding-bottom:0.5vh;
		display: table;
		width:94%;
		max-width:1100px;
		margin-left: auto;
		margin-right: auto;
		font-family:Comfortaa;
		max-width: 1050px;
		text-align: left;
		line-height: 1.2 em;
	}
@media screen and (max-width: 1090px) {	
	.discussion_container{
		padding-left:1.5%;
		}
	}
@media screen and (min-width: 1090px) {	
	.discussion_container{		
		padding-left:4%;
		}
	}
		
</style>";



$comment_number = 1;
while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {

	$test1 = 'fail';
	$test2 = 'fail';
	$test3 = 'fail';
	$test4 = 'fail';

	//test1
	if(	isset($_GET['quarternary_folder']) &&
		isset($row['related_id']) &&
		isset($_GET['item_id'])){
			if($_GET['quarternary_folder'] == 'item' 	&& $row['related_id'] == $_GET['item_id']){
				$test1 = 'pass';
			}
		}
	//test2
	if(	isset($_GET['quarternary_folder']) &&
		isset($_GET['tertiary_folder']) &&
		isset($row['related_id']) &&
		isset($_GET['item_id'])){
			if($_GET['tertiary_folder'] == 'item' 	&& $row['related_id'] == $_GET['item_id']){
				$test2 = 'pass';
			}
		}
	//test3
	if(	isset($_GET['tertiary_folder']) &&
		isset($row['related_id'])){
			if($_GET['tertiary_folder'] != 'item' 	&& $row['related_id'] == 0){
				$test3 = 'pass';
			}
		}
	//test4
	if(	isset($row['system_notification'])){
		if($row['system_notification'] == 'yes'){
			$test4 = 'pass';
		}
	} 


	//TODO:: Somehwere in here there should be an admin feature if dreamboat crew
	//that allows us to adjust the user any notes are applied to within /notes/pilot_notes
	//for now 21.01.22 i'll just delete them to clean that up


	$show_now = 'yes';
	if(	$test1 == 'pass' OR
		$test2 == 'pass' OR
		$test3 == 'pass' OR
		$test4 == 'pass'){$show_now = 'no';}
	

	//if ($show_now == 'yes') {

		echo "
			<div class='discussion_container'";
		if ($row['responding_to_prepared_prompt'] == 'yes') {
			echo " style='background-color: #f5f5f5;margin-bottom:12px;margin-top:12px;padding:10px;' title='The more of these questions that you respond to the better the system will help'";
		}
		if ($row['private_pilot_advice'] == 'yes') {
			echo " style='background-color: #ffc4c4;margin-bottom:12px;margin-top:12px;padding:10px;' title='Private advice logged by a Pilot - for Pilot&#39;s eyes only.'";
		}
		echo ">";

		if (
			$row['responding_to_prepared_prompt'] == 'yes'	or
			$row['private_pilot_advice'] == 'yes'
		) {
			echo "<span style='color: #281e96;text-align:left;'>";
			if ($row['responding_to_prepared_prompt'] == 'yes') {
				echo $row['prompt_answered'];
			}
			if ($row['private_pilot_advice'] 	 == 'yes') {
				echo ucwords($row['private_pilot_advice_category']) . " based Pilot advice";
			}
			echo "</span>";

			echo "<br><br>";
		}

		//remove your name and replace with "You"
		//https://stackoverflow.com/questions/35708461/php-variable-contains-string-and-replace
		//echo $_SESSION['first_name']." ".$_SESSION['last_name'];
		if (strpos($row['comment'], $_SESSION['first_name'] . " " . $_SESSION['last_name']) !== false) { //first we check if the url contains the string 'en-us'
			$row['comment'] = str_replace($_SESSION['first_name'] . " " . $_SESSION['last_name'], 'You', $row['comment']); //if yes, we simply replace it with en
		}

		if ($row['system_notification'] == 'yes') {
			echo "<div style='display:block;float:left;font-size:20px;white-space: pre-line;text-align:left; text-shadow: 1px 1px #dcd9ff;color: #d91818;'>";
			echo $row['comment'];
			echo "</div>";

			echo "<div style='display:block;font-family:helvetica;padding-top:4px;text-transform:uppercase; text-shadow: 1px 1px #dcd9ff;color: #d91818;float:right;font-size:14px;'>";

			time_since_string($row['timestamp']);

			echo "</div>";
		} else {
			echo "<div style='";


			echo "display:block;float:left;font-size:20px;white-space: pre-line;text-align:left; text-shadow: 1px 1px #dcd9ff;";
			if ($comment_number < 9) {
				if ($row['user_id'] == $_SESSION['user_id']) {
					$color = $me[$comment_number];
				} else {
					$color = $you[$comment_number];
				}
			} else {
				if ($row['user_id'] == $_SESSION['user_id']) {
					$color = $me[8];
				} else {
					$color = $you[8];
				}
			}
			echo "color: " . $color . ";";
			echo "'>";



			echo stripslashes(str_replace('\r\n', PHP_EOL, $row['comment']));
			//echo $string;
			//echo stripslashes(nl2br());
			echo "</div>";

			echo "<div style='display:block;font-family:helvetica;padding-top:4px;text-transform:uppercase; text-shadow: 1px 1px #dcd9ff;";
			if ($comment_number < 9) {
				if ($row['user_id'] == $_SESSION['user_id']) {
					$color = $me_time_color[$comment_number];
				} else {
					$color = $you_time_color[$comment_number];
				}
			} else {
				if ($row['user_id'] == $_SESSION['user_id']) {
					$color = $me_time_color[8];
				} else {
					$color = $you_time_color[8];
				}
			}
			echo "color: " . $color . ";";


			echo "float:right;font-size:14px;'>";
			if ($row['user_id'] == $_SESSION['user_id']) {
				echo "you said ";
			} else {
				echo $row['first_name'] . " " . $row['second_name'] . " said ";
			}

			time_since_string($row['timestamp']);

			echo "</div>";
		}
		echo "</div>";
		$comment_number++;
	//}
}

echo "</div>";
