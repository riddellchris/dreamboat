<?php
if(!isset($_SESSION)){session_start();}

if($_GET['show'] == 'central_thesis'){
    if($_GET['direction'] == 'forwards'){
        if($_GET['from'] == 'zero'){    $next = 'one';}       
        if($_GET['from'] == 'one'){     $next = 'two';}
        if($_GET['from'] == 'two'){     $next = 'three';}
        if($_GET['from'] == 'three'){   $next = 'four';}
        if($_GET['from'] == 'four'){    $next = 'five';}
        if($_GET['from'] == 'five'){    $next = 'nine';}////nine
        if($_GET['from'] == 'six'){     $next = 'seven';}
        if($_GET['from'] == 'seven'){   $next = 'eight';}
        if($_GET['from'] == 'eight'){   $next = 'nine';}
        if($_GET['from'] == 'nine'){    $next = 'ten';}
    }

    if($_GET['direction'] == 'backwards'){
        if($_GET['from'] == 'one'){     $next = 'zero';}        
        if($_GET['from'] == 'two'){     $next = 'one';}
        if($_GET['from'] == 'three'){   $next = 'two';}
        if($_GET['from'] == 'four'){    $next = 'three';}
        if($_GET['from'] == 'five'){    $next = 'four';}
        if($_GET['from'] == 'six'){     $next = 'five';}   
        if($_GET['from'] == 'seven'){   $next = 'six';}
        if($_GET['from'] == 'eight'){   $next = 'seven';}   
        if($_GET['from'] == 'nine'){    $next = 'five';}   
        if($_GET['from'] == 'ten'){     $next = 'nine';}   
    }
}

header("Location: /slideshows/".$_GET['show']."/".$next);
exit();
