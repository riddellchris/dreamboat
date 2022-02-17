<?php
if(!isset($_SESSION)){session_start();}

if(!isset($_SESSION['insights_menu'])){
    if($_SESSION['viewing_client_id'] == 4231 OR $_SESSION['viewing_client_id'] == 1){
        $_SESSION['insights_menu'] = 'time_per_activity';
    }
    else{
        $_SESSION['insights_menu'] = 'revenue_stacked';
    }
}