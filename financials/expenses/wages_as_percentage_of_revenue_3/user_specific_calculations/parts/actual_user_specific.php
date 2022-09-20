<?php
if(!isset($_SESSION)){session_start();}

unset($extracted);
$extracted['denominator']               = array(); //originally total_income
$extracted['numerator']                 = array(); //originally wages

unset($denominator_names);
unset($numerator_names);
$denominator_names = array();
$numerator_names   = array();

unset($series_title);
$series_title   = array();

$setup_completed = 'no';

//these are obviously user specific names for each account but equally far from impossible.
//these can easily be turned into something really really really useful.
    if($_SESSION['viewing_client_id'] == 4393){ 
        $denominator_names[0]   = 'Total Income';
        $numerator_names[0]     = 'Subcontractor - no GST';
        $numerator_names[1]     = 'Subcontractor - GST';
        $series_title[0]        = 'Percentage';
        $setup_completed = 'yes';
    }

    if($_SESSION['viewing_client_id'] == 4400){ 
        $denominator_names[0]   = 'Total Income';
        $numerator_names[0]     = 'Contractors';
       // $numerator_names[1]     = 'Subcontractor - GST';
        $series_title[0]        = 'Contractors';
        $setup_completed = 'yes';
    }

    if($_SESSION['viewing_client_id'] == 4402){ 
        $denominator_names[0]   = 'Total Income';
        $numerator_names[0]     = 'Contractors';
        $series_title[0]        = 'Contractors Percentage';
        $setup_completed = 'yes';
    }

