<?php
if(!isset($_SESSION)){session_start();}

//echo '<pre>' , var_dump($_POST) , '</pre>';exit();
/*
for($count = 1; $count < 5; $count ++){
    $changed = '';
    if($_POST['map_view_'.$count] == 'all'){		$_SESSION['critical_node_include_'.$count] = $_POST['map_view_'.$count]; $changed = $_POST['map_view_'.$count];}
    if($_POST['map_view_'.$count] == 'business'){	$_SESSION['critical_node_include_'.$count] = $_POST['map_view_'.$count]; $changed = $_POST['map_view_'.$count];}
    if($_POST['map_view_'.$count] == 'network'){	$_SESSION['critical_node_include_'.$count] = $_POST['map_view_'.$count]; $changed = $_POST['map_view_'.$count];}
    if($_POST['map_view_'.$count] == 'biz_dev'){	$_SESSION['critical_node_include_'.$count] = $_POST['map_view_'.$count]; $changed = $_POST['map_view_'.$count];}
    if($_POST['map_view_'.$count] == 'marketing'){	$_SESSION['critical_node_include_'.$count] = $_POST['map_view_'.$count]; $changed = $_POST['map_view_'.$count];}
    if($_POST['map_view_'.$count] == 'sales'){	    $_SESSION['critical_node_include_'.$count] = $_POST['map_view_'.$count]; $changed = $_POST['map_view_'.$count];}
    if($_POST['map_view_'.$count] == 'management'){	$_SESSION['critical_node_include_'.$count] = $_POST['map_view_'.$count]; $changed = $_POST['map_view_'.$count];}
    if($_POST['map_view_'.$count] == 'wheelhouse'){	$_SESSION['critical_node_include_'.$count] = $_POST['map_view_'.$count]; $changed = $_POST['map_view_'.$count];}
    if($_POST['map_view_'.$count] == 'activities'){	$_SESSION['critical_node_include_'.$count] = $_POST['map_view_'.$count]; $changed = $_POST['map_view_'.$count];}
    if($_POST['map_view_'.$count] == 'upgrades'){	$_SESSION['critical_node_include_'.$count] = $_POST['map_view_'.$count]; $changed = $_POST['map_view_'.$count];}

  //  if($changed != ''){echo $_POST['map_view_'.$count];}   exit();
		
}
*/

unset($menu_to_include);
for($count = 1; $count < 5; $count ++){
    $changed = '';
    $option = 'all'         ;if($_POST['map_view_'.$count] == $option){		$menu_to_include[$option] = 'yes';}
    $option = 'business'    ;if($_POST['map_view_'.$count] == $option){   $menu_to_include[$option] = 'yes';}
    $option = 'network'     ;if($_POST['map_view_'.$count] == $option){	  $menu_to_include[$option] = 'yes';}
    $option = 'biz_dev'     ;if($_POST['map_view_'.$count] == $option){	  $menu_to_include[$option] = 'yes';}
    $option = 'marketing'   ;if($_POST['map_view_'.$count] == $option){	  $menu_to_include[$option] = 'yes';}
    $option = 'sales'       ;if($_POST['map_view_'.$count] == $option){	  $menu_to_include[$option] = 'yes';}
    $option = 'management'  ;if($_POST['map_view_'.$count] == $option){	  $menu_to_include[$option] = 'yes';}
    $option = 'wheelhouse'  ;if($_POST['map_view_'.$count] == $option){	  $menu_to_include[$option] = 'yes';}
    $option = 'activities'  ;if($_POST['map_view_'.$count] == $option){	  $menu_to_include[$option] = 'yes';}
    $option = 'upgrades'    ;if($_POST['map_view_'.$count] == $option){	  $menu_to_include[$option] = 'yes';}
}

//echo '<pre>' , var_dump($menu_to_include) , '</pre>';//exit();

$menu_to_apply_to = 1;
//then we simply put them down in alphabetical order here:
    $option = 'all'         ;if($menu_to_include[$option] == 'yes'){$_SESSION['critical_node_include_'.$menu_to_apply_to] = $option; $menu_to_apply_to ++;}
    $option = 'business'    ;if($menu_to_include[$option] == 'yes'){$_SESSION['critical_node_include_'.$menu_to_apply_to] = $option; $menu_to_apply_to ++;}
    $option = 'network'     ;if($menu_to_include[$option] == 'yes'){$_SESSION['critical_node_include_'.$menu_to_apply_to] = $option; $menu_to_apply_to ++;}
    $option = 'biz_dev'     ;if($menu_to_include[$option] == 'yes'){$_SESSION['critical_node_include_'.$menu_to_apply_to] = $option; $menu_to_apply_to ++;}
    $option = 'marketing'   ;if($menu_to_include[$option] == 'yes'){$_SESSION['critical_node_include_'.$menu_to_apply_to] = $option; $menu_to_apply_to ++;}
    $option = 'sales'       ;if($menu_to_include[$option] == 'yes'){$_SESSION['critical_node_include_'.$menu_to_apply_to] = $option; $menu_to_apply_to ++;}
    $option = 'management'  ;if($menu_to_include[$option] == 'yes'){$_SESSION['critical_node_include_'.$menu_to_apply_to] = $option; $menu_to_apply_to ++;}
    $option = 'wheelhouse'  ;if($menu_to_include[$option] == 'yes'){$_SESSION['critical_node_include_'.$menu_to_apply_to] = $option; $menu_to_apply_to ++;}
    $option = 'activities'  ;if($menu_to_include[$option] == 'yes'){$_SESSION['critical_node_include_'.$menu_to_apply_to] = $option; $menu_to_apply_to ++;}
    $option = 'upgrades'    ;if($menu_to_include[$option] == 'yes'){$_SESSION['critical_node_include_'.$menu_to_apply_to] = $option; $menu_to_apply_to ++;}

/*
echo $_SESSION['critical_node_include_1'];
echo "<br>";
echo $_SESSION['critical_node_include_2'];
echo "<br>";
echo $_SESSION['critical_node_include_3'];
echo "<br>";
echo $_SESSION['critical_node_include_4'];
echo "<br>";
exit();*/

$last_needed_option = $menu_to_apply_to - 1;// exit();
  if($_SESSION['critical_node_include_1'] != 'all' && $last_needed_option < 4){
    //make the remaining ones the same as the last one selected
    for($i = $last_needed_option; $i < 5; $i ++){


      $_SESSION['critical_node_include_'.$i] = $_SESSION['critical_node_include_'.$last_needed_option];


    }
  }    






if($_POST['connection_control'] == 'connected_only'){	$_SESSION['current_connection_control'] = $_POST['connection_control'];}
if($_POST['connection_control'] == 'unconnected_only'){	$_SESSION['current_connection_control'] = $_POST['connection_control'];}
if($_POST['connection_control'] == 'show_all'){		    $_SESSION['current_connection_control'] = $_POST['connection_control'];}


if($_POST['issues_control'] == 'issues_on'){	        $_SESSION['current_issues_setting'] = $_POST['issues_control'];}
if($_POST['issues_control'] == 'issues_off'){	        $_SESSION['current_issues_setting'] = $_POST['issues_control'];}
if($_POST['issues_control'] == 'issues_only'){	        $_SESSION['current_issues_setting'] = $_POST['issues_control'];}


if($_POST['map_display'] == 'relationship_centric'){	$_SESSION['current_map_display'] = $_POST['map_display'];}
if($_POST['map_display'] == 'central_issues'){		    $_SESSION['current_map_display'] = $_POST['map_display'];}

//echo $_POST['map_edge_color'];
//exit();


if($_POST['map_edge_color'] == 'non_descript'){		    $_SESSION['map_edge_color']  = $_POST['map_edge_color'];}
if($_POST['map_edge_color'] == 'productivity'){		    $_SESSION['map_edge_color']  = $_POST['map_edge_color'];}
if($_POST['map_edge_color'] == 'productivity_improvement_potential'){		    $_SESSION['map_edge_color']  = $_POST['map_edge_color'];}
if($_POST['map_edge_color'] == 'financial'){		        $_SESSION['map_edge_color']  = $_POST['map_edge_color'];}
if($_POST['map_edge_color'] == 'users_time'){		        $_SESSION['map_edge_color']  = $_POST['map_edge_color'];}
if($_POST['map_edge_color'] == 'trust'){		        $_SESSION['map_edge_color']  = $_POST['map_edge_color'];}
if($_POST['map_edge_color'] == 'quality'){		      $_SESSION['map_edge_color']  = $_POST['map_edge_color'];}
if($_POST['map_edge_color'] == 'communication'){		    $_SESSION['map_edge_color']  = $_POST['map_edge_color'];}
if($_POST['map_edge_color'] == 'kpi_1'){			        $_SESSION['map_edge_color']  = $_POST['map_edge_color'];}
if($_POST['map_edge_color'] == 'kpi_2'){			        $_SESSION['map_edge_color']  = $_POST['map_edge_color'];}
if($_POST['map_edge_color'] == 'kpi_3'){			        $_SESSION['map_edge_color']  = $_POST['map_edge_color'];}
if($_POST['map_edge_color'] == 'kpi_4'){			        $_SESSION['map_edge_color']  = $_POST['map_edge_color'];}

//echo $_POST['map_edge_color'];
//exit();

if($_POST['map_edge_thickness'] == 'non_descript'){		    $_SESSION['map_edge_thickness']  = $_POST['map_edge_thickness'];}
if($_POST['map_edge_thickness'] == 'productivity'){		    $_SESSION['map_edge_thickness']  = $_POST['map_edge_thickness'];}
if($_POST['map_edge_thickness'] == 'productivity_improvement_potential'){		    $_SESSION['map_edge_thickness']  = $_POST['map_edge_thickness'];}
if($_POST['map_edge_thickness'] == 'financial'){		    $_SESSION['map_edge_thickness']  = $_POST['map_edge_thickness'];}
if($_POST['map_edge_thickness'] == 'users_time'){		    $_SESSION['map_edge_thickness']  = $_POST['map_edge_thickness'];}
if($_POST['map_edge_thickness'] == 'communication'){		$_SESSION['map_edge_thickness']  = $_POST['map_edge_thickness'];}
if($_POST['map_edge_thickness'] == 'trust'){			    $_SESSION['map_edge_thickness']  = $_POST['map_edge_thickness'];}
if($_POST['map_edge_thickness'] == 'quality'){			    $_SESSION['map_edge_thickness']  = $_POST['map_edge_thickness'];}
if($_POST['map_edge_thickness'] == 'kpi_1'){			    $_SESSION['map_edge_thickness']  = $_POST['map_edge_thickness'];}
if($_POST['map_edge_thickness'] == 'kpi_2'){			    $_SESSION['map_edge_thickness']  = $_POST['map_edge_thickness'];}
if($_POST['map_edge_thickness'] == 'kpi_3'){			    $_SESSION['map_edge_thickness']  = $_POST['map_edge_thickness'];}
if($_POST['map_edge_thickness'] == 'kpi_4'){			    $_SESSION['map_edge_thickness']  = $_POST['map_edge_thickness'];}


	
//on off// this will need to set criteria  or be entirely model driven
//if($_POST['map_display_comparative_variance'] == 'comparative_variance'){	$_SESSION['current_map_display'] = $_POST['map_display'];}


header("Location: /map/personal/");
exit();

