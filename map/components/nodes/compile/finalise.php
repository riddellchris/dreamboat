<?php
if(!isset($_SESSION)){session_start();}

if( $_SESSION['current_issues_setting'] 	== 'issues_on' && 
    $map_triggers['issues_exist_to_merge'] == 'yes'){

   $nodes['items_all_id'] 	    = array_merge($nodes['items_all_id'], 	    $related_issues['items_all_id']);
   $nodes['database'] 		    = array_merge($nodes['database'], 	        $related_issues['database']);
   $nodes['id'] 			    = array_merge($nodes['id'], 		        $related_issues['id']);
   $nodes['primary_folder'] 	= array_merge($nodes['primary_folder'], 	$related_issues['primary_folder']);
   $nodes['secondary_folder']   = array_merge($nodes['secondary_folder'],   $related_issues['secondary_folder']);
   $nodes['title'] 		        = array_merge($nodes['title'], 		        $related_issues['title']);




   
    //need to check this works
	//var_dump($nodes['database']);
	//exit();
}


//echo $_SESSION['current_issues_setting'] ;
//exit();
