<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";


$sql = "UPDATE labels SET status = 'dead' WHERE label_id = '".mysqli_real_escape_string($conn, $_GET['label_id'])."'";

mysqli_query($conn, $sql);

header("Location: ".$_SESSION['this_page']);
exit();