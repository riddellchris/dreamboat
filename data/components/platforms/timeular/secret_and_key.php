<?php
if(!isset($_SESSION)){session_start();}


//$_SESSION['viewing_client_id'] = 1;
//Chris' trial data
if($_SESSION['viewing_client_id'] == 1){
    $client_key  = "MTQwNTkyXzdmNGY3ZTIwOGQ3YzRjNTQ5Mjg0MjgzMTUxOGU5NDk4";
    $client_secret  = "Y2U2NWUzODQwOGUyNDc1N2IxNjEwZDQ4OTAwZTk4NmQ=";
}
if($_SESSION['viewing_client_id'] == 4231){
    $client_key  = "MTE3MTAwXzkwMTFlOTljZmY1OTRmMDBhZWNjNmIxYTNkMjA3NjZi";
    $client_secret  = "YjFhNzNjYmU1NDg1NDI1MTk1Njg5NDNlOTNiMTljZmE=";
}
//Leigh Kefford
/*
$client_secret  = "ZmY1ZDljZWEyNmY3NGU1YjhhYjZlNzhlN2EwNWM1YWM=";
$client_key     = "MTE3MTAwXzZlYWFkN2I2ODFjZTQxMWY4MmU1N2YwNTUyMDYyNjFi";

$client_secret  = "ZDU2NTk3NjI2YWZkNGRiMjg5NTMwNmUxYWQxMThkOGQ=";
$client_key     = "MTE3MTAwXzg1YzBhNjJjOWM4NDQ0Nzc5YmE3NmE4ZDdjNjljZDY1";
*/


//this should really come from the database


//As per his email titled - Time spent per client/product and more via API connections

//if more people use this a simple database structure is far more ideal frankly.

