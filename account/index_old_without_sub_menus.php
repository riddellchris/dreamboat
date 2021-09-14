<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/account/security/logged_in_check.php";

require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/start.php";
require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/spacings/start_of_page_top_of_centering_divs.php";



//9/5/20
//7/5/20 the final piece being put in - amazing
//6/5/20//taken out until fully built
//the weekly review feature has also been taken out from the content until fully released
//taken out until completed by someone that isn't Chris
echo "<a class='blue-button wide-button' href='/account/review_cycles/'>review cycles</a>";


//put some more stuff in here for each of the reviews... ensure they are in the database too for when to run them




//echo "<a class='blue-button wide-button' href='/account/settings/users/'>users</a>";
//echo "<a class='blue-button wide-button' href='/account/settings/permissions/'>permissions</a>";
//echo "<a class='blue-button wide-button' href='/account/subscriptions/'>subscriptions</a>";  ///this will be a slight wording change required when there is more than one product which is not the case now... just change the folder name and adjust internally here as required
//echo "<a class='blue-button wide-button' href='/account/subscription/'>subscription</a>";  //this will be relevant when we can move to stripe - additional complexity will also come into play after we add in teired prcing /// assuming that happens i guess
echo "<a class='blue-button wide-button' href='/account/payments/'>payments</a>";


$sql = "SELECT * FROM user_account_details WHERE user_id = '".mysqli_real_escape_string($conn, $_SESSION['user_id'])."'";
require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
if($row['client_or_crew'] == 'crew' && $_SESSION['viewing_client_id'] == $_SESSION['user_id']){
	echo "<a class='red-button wide-button' href='/account/dreamboat_crew/'>dreamboat crew</a>";
}


echo "<a class='grey-button wide-button' href='/account/security/logout.php'>&nbsp;logout</a>";
require $_SERVER['DOCUMENT_ROOT']."/account/pieces/back_button.php";
require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/end.php";
?>