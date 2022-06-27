<?php
if(!isset($_SESSION)){session_start();}


date_default_timezone_set('Australia/Sydney'); //to match with the location of the Server


//the point of this is to ensure that if "logged in" the correct user Id is used,
//BUT 
//if not logged in then nothing else happens and we just use $_SESSION['user_id'] which is changed according to what is required in other files
if( isset($_SESSION['viewing_client_id'])){     $user_id_for_request = $_SESSION['viewing_client_id'];  }


//TO DO: 
//Build this optimisation such that we aren't calling for a new token every time.
//if the current access token is more than 30 minutes old then you should get a new access token.
//first then we must test the last time for the most recent access code
//this is as simple as 
require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";
$sql = "SELECT * FROM api_xero_return_keys
        WHERE user_id = '".mysqli_real_escape_string($conn, $user_id_for_request)."'
        AND access_token <> ''
        ORDER BY id
        DESC LIMIT 1";
//echo $sql."<br>";
//exit();
$result = mysqli_query($conn, $sql);     
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);

/*
echo "<br>Return KEY entered into db (according to the db)<BR>";
echo $row['timestamp_entered'];
echo " === UNIX TIME: ";
echo strtotime($row['timestamp_entered']);
echo "<br>Unix time time according to the client: &nbsp;&nbsp;";
echo date('U');
echo "<br>Client string time: &nbsp;&nbsp;";echo date('Y-m-d H:i:s');
*/

//if port :888 th
$time_difference = date('U') - strtotime($row['timestamp_entered']);

/*
if($_SERVER['SERVER_PORT'] != '8888'){
    $time_difference = $time_difference + 60*60*10;
}
*/
////echo "<br>";
$use_current_token = 'yes';
//echo $time_difference." seconds";
if(abs($time_difference) > 29 * 60){$use_current_token = 'no';}
else{$use_current_token = 'yes';}

if($use_current_token == 'yes'){$get_new_token = 'no';}
else{$get_new_token = 'yes';}

//echo "<BR>GET NEW TOKEN (Yes/No) = ".$get_new_token;
if($use_current_token == 'yes'){

    $access_token = $row['access_token'];


}
else{
    require $_SERVER['DOCUMENT_ROOT']."/data/components/platforms/xero/oauth/access_token/refresh.php";
}