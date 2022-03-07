<?php
if(!isset($_SESSION)){session_start();}


if($creating_new_user != 'yes'){$user_id = $_SESSION['viewing_client_id'];}
//else user_id variable comes from database_initialisation_processes

$sql = "UPDATE  user_main_nav_control
        SET     walkthroughs    =  'yes' ,
                data            =  'yes' ,
                map             =  'no' ,
                hightlights     =  'yes' ,
                overview        =  'yes' ,
                insights        =  'no' ,
                profile         =  'no' ,
                business        =  'yes' ,
                network         =  'no' ,
                biz_dev         =  'no' ,
                management      =  'yes' ,
                sales           =  'yes' ,
                marketing       =  'yes' ,
                wheelhouse      =  'yes' ,
                activities      =  'yes' ,
                time            =  'yes' ,
                issues          =  'yes' ,
                upgrades        =  'no' ,
                results         =  'yes' ,
                finances        =  'yes' ,
                messages        =  'no' ,
                notifications   =  'no' ,

        WHERE user_id = '".$user_id."',         

//echo $sql; exit();
require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";

mysqli_query($conn, $sql);

