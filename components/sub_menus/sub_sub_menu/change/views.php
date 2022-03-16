<?php
if(!isset($_SESSION)){session_start();}

//if($page_name == $page_name && $to ==$to){$third_angle = 'no';}
//echo $_SESSION['sales'][$page_name][$to]['specific_view']; exit();

//echo "hiere"; exit();
if($changed == 'no' && $_SESSION['sales'][$page_name][$to]['specific_view'] == 'info'){

 

    if($changed == 'no' && $_SESSION['sales'][$page_name][$to]['view_available']['designs'] == 'yes'){
        $_SESSION['sales'][$page_name][$to]['specific_view'] = 'designs';
        $changed = 'yes';
        //echo "in info";exit();
    }
    if($changed == 'no' && $_SESSION['sales'][$page_name][$to]['view_available']['under_construction'] == 'yes'){
        $_SESSION['sales'][$page_name][$to]['specific_view'] = 'under_construction';
        $changed = 'yes';       
    }
    if($changed == 'no' && $_SESSION['sales'][$page_name][$to]['view_available']['demo_data'] == 'yes'){
        $_SESSION['sales'][$page_name][$to]['specific_view'] = 'demo_data';
        $changed = 'yes';          
    }
    if($changed == 'no' && $_SESSION['sales'][$page_name][$to]['view_available']['live_data'] == 'yes'){
        $_SESSION['sales'][$page_name][$to]['specific_view'] = 'live_data';
        $changed = 'yes';          
    }
}
if($changed == 'no' && $_SESSION['sales'][$page_name][$to]['specific_view'] == 'designs'){
    if($changed == 'no' && $_SESSION['sales'][$page_name][$to]['view_available']['under_construction'] == 'yes'){
        $_SESSION['sales'][$page_name][$to]['specific_view'] = 'under_construction';
        $changed = 'yes';       
    }
    if($changed == 'no' && $_SESSION['sales'][$page_name][$to]['view_available']['demo_data'] == 'yes'){
        $_SESSION['sales'][$page_name][$to]['specific_view'] = 'demo_data';
        $changed = 'yes';          
    }
    if($changed == 'no' && $_SESSION['sales'][$page_name][$to]['view_available']['live_data'] == 'yes'){
        $_SESSION['sales'][$page_name][$to]['specific_view'] = 'live_data';
        $changed = 'yes';          
    }        
}
if($changed == 'no' && $_SESSION['sales'][$page_name][$to]['specific_view'] == 'under_construction'){
    if($changed == 'no' && $_SESSION['sales'][$page_name][$to]['view_available']['demo_data'] == 'yes'){
        $_SESSION['sales'][$page_name][$to]['specific_view'] = 'demo_data';
        $changed = 'yes';          
    }
    if($changed == 'no' && $_SESSION['sales'][$page_name][$to]['view_available']['live_data'] == 'yes'){
        $_SESSION['sales'][$page_name][$to]['specific_view'] = 'live_data';
        $changed = 'yes';          
    }        
}
if($changed == 'no' && $_SESSION['sales'][$page_name][$to]['specific_view'] == 'demo_data'){
    if($changed == 'no' && $_SESSION['sales'][$page_name][$to]['view_available']['live_data'] == 'yes'){
        $_SESSION['sales'][$page_name][$to]['specific_view'] = 'live_data';
        $changed = 'yes';          
    }        
}
if($changed == 'no' && $_SESSION['sales'][$page_name][$to]['specific_view'] == 'live_data'){
    if($changed == 'no' && $_SESSION['sales'][$page_name][$to]['view_available']['info'] == 'yes'){
        $_SESSION['sales'][$page_name][$to]['specific_view'] = 'info';
        $changed = 'yes';          
    }        
}   
