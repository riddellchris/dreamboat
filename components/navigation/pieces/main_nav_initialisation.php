<?php
if(!isset($_SESSION)){session_start();}




$sql = "INSERT INTO user_main_nav_control
        (   user_id,
            data,
            map,
            insights,
            profile,       
            business,
            network,
            biz_dev,
            management,
            sales,
            marketing,
            wheelhouse,
            activities,
            issues,        
            upgrades, 
            results, 
            messages,
            notifications
        )
        VALUES(
            '".$_SESSION['viewing_client_id']."',";
            $sql .= " 'yes' , ";
            $sql .= " 'no' , ";        
            $sql .= " 'yes' , ";    
            $sql .= " 'no' , "; 
            $sql .= " 'no' , "; 
            $sql .= " 'no' , "; 
            $sql .= " 'no' , "; 
            $sql .= " 'no' , "; 
            $sql .= " 'no' , "; 
            $sql .= " 'no' , "; 
            $sql .= " 'no' , "; 
            $sql .= " 'no' , "; 
            $sql .= " 'no' , "; 
            $sql .= " 'no' , "; 
            $sql .= " 'no' , "; 
            $sql .= " 'no' , ";            
            $sql .= " 'no'  )";              

//echo $sql; exit();
require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";

mysqli_query($conn, $sql);

