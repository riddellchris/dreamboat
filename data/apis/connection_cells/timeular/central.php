<?php
if(!isset($_SESSION)){session_start();}

//if there is a no entry in the table api_timeular_keys that matchs this for a given
    //user_id
    //is not deleted
    //is active
    //is tested
    //then we are good to go :)

require    $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";
$sql_timeular_keys = "  SELECT * FROM api_timeular_keys 
                        WHERE   user_id = '".mysqli_real_escape_string($conn, $_SESSION['viewing_client_id'])."'
                        AND     tested    = 'yes'
                        AND     status    = 'working'
                        AND     deleted   = 'no'";

                            //    echo $sql_timeular_keys;exit();
$result_timeular_keys = mysqli_query($conn, $sql_timeular_keys);
$number_of_rows = mysqli_num_rows($result_timeular_keys);

if($number_of_rows == 0){
    require $_SERVER['DOCUMENT_ROOT']."/map/apis/connection_cells/timeular/add_key.php";




}
else{

    echo "connected";

}







//if nothing then show the form