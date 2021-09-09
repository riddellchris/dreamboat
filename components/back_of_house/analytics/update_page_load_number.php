<?php
if(!isset($_SESSION)){session_start();}

if(isset($_SESSION['user_id'])){ $user_id = $_SESSION['user_id'];}else{$user_id = 0;}
$sql = "INSERT INTO admin_pages_loaded_count (user_id, main_url_page) VALUES ('".$user_id."','".$_SERVER['REQUEST_URI']."')";
require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";
mysqli_query($conn, $sql);

//get out last insert id
//ultimately the output here is to update $_SESSION['page_load_number']
$_SESSION['page_load_number'] = mysqli_insert_id($conn);


//then we pass it back and encrypt it so we can store and use it within the URL and within the admin elements 
$sql = "UPDATE admin_pages_loaded_count SET encrypted_reference_code = '".md5(mysqli_insert_id($conn))."' WHERE page_load_number = '".mysqli_insert_id($conn)."'";
mysqli_query($conn, $sql);
