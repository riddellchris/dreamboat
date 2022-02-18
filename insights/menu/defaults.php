<?php
if(!isset($_SESSION)){session_start();}


//this top bit is really poorly done right now
//it really should be done only with / as a dependcies of what platforms are connected and in these cases this reflects the connection of timeular for these users
//for all other users - assuming they have an accounting platform included we can then produce this revenue stacked chart
    //but equally we should have included that/those tests here
if(!isset($_SESSION['insights_menu']['headline_chart'])){
    if($_SESSION['viewing_client_id'] == 4231 OR $_SESSION['viewing_client_id'] == 1){
        $_SESSION['insights_menu']['headline_chart'] = 'time_per_activity';
    }
    else{
        $_SESSION['insights_menu']['headline_chart'] = 'revenue_stacked';
    }
}

if(!isset($_SESSION['insights_menu']['start_date'])){    $_SESSION['insights_menu']['start_date']   = date("Y-m-d", strtotime(date('Y')."-".date('m')."-".date('d')." -1 year"));}//one year ago
if(!isset($_SESSION['insights_menu']['end_date'])){      $_SESSION['insights_menu']['end_date']     = date("Y-m-d");} 

if(!isset($_SESSION['insights_menu']['time_increments'])){      $_SESSION['insights_menu']['time_increments']     = 'monthly';} 
if(!isset($_SESSION['insights_menu']['moving_averages'])){      $_SESSION['insights_menu']['moving_averages']     = '2_month';} 

