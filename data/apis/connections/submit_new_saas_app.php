<?php
if(!isset($_SESSION)){session_start();}

require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";

$platform = strtolower($_POST['platform_name']);



//so before we do this we should run a test for each platform name such that we can see if we have connected successfully.
// but that doesn't actually happen here




    //so really at this point we need to run a test to see just/exactly what is working such that when we enter originally connected successfully it's actually a valid response because without that we are more than proper fucked
    //so as stated previously that shouldn't really happen unless
    //this is probably a bit boring though in all honesty
    //but at the same time needs to be done soon.
    //what is really freaking me out is the lack of work on the insights side right now so let me just get/head over there and i can hook that up

    //so what we really need to do is if there is on
    $sql = "SELECT * FROM   api_connections
            WHERE           user_id                             = '".mysqli_real_escape_string($conn, $_SESSION['viewing_client_id'])."'
            AND             platform_name                       = '".mysqli_real_escape_string($conn, $platform)."'
            AND             platform_web_address                = '".mysqli_real_escape_string($conn, $_POST['platform_web_address'])."'
            AND             active                              = 'yes'
            AND             deleted                             = 'no'";
//this is not included here

//     echo $sql; exit();
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) == 0){

        $sql = "INSERT INTO api_connections(    user_id,
                                                platform_name,
                                                platform_web_address    )
                                    VALUES  (   '".mysqli_real_escape_string($conn, $_SESSION['viewing_client_id'])."',
                                                '".mysqli_real_escape_string($conn, $platform)."',
                                                '".$_POST['platform_web_address']."' )";
        //echo $sql; exit();


        mysqli_query($conn, $sql);
    }

header("Location: /data/apis/");
exit();