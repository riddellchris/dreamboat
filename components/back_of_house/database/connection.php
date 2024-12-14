<?php
if(!isset($_SESSION)){session_start();}
//require_once $_SERVER['DOCUMENT_ROOT']."/components/functions/register_file_usage.php";
//admin_file_usage(__FILE__, $conn);
//echo __FILE__;
//exit();

if($_SERVER['SERVER_PORT'] != 8888){
  if($_SERVER['HTTP_HOST'] == "dreamboat.com.au"){
        $servername = "localhost";
        $username = "staff808_access";
        $password = "1Kyfx=u({]V&gI}1[s";
        $database = "staff808_dreamboatv1point1";
    }
  if($_SERVER['HTTP_HOST'] == "nashnewton.com.au"){
   // echo $_SERVER['HTTP_HOST']; 
        $servername = "localhost";
        $username = "unq46arsgvw8j";
        $password = "~d31112~13l$";
        $database = "dbek7go8e6iw1g";
    }
  if($_SERVER['HTTP_HOST'] == "irrth.com"){
        $servername = "localhost";
        $username = "unhc0sighkxqe";
        $password = "22[4)@2244f%";
        $database = "dbppeyn4jlqygm";
    }



}

//this is for the development server as I'm currently using it
else{
    $servername = "localhost";
    $username = "riddellchris";
    $password = "xKG44jJYYN6U)Em2";
    $database = "test";
}


// Create connection
$conn = new mysqli($servername, $username, $password, $database);


// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
   // echo "Connect failed";
} 

$conn->select_db($database) or die( "Unable to select database");
//echo "Connected successfully";

//exit();
?>
