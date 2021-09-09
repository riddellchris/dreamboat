<?php
if(!isset($_SESSION)){session_start();}

////echo $_SESSION['dreamboat_developer_view'];

$changed = 'no';
if($changed == 'no' && $_SESSION['dreamboat_developer_view'] == 'live'  ){$changed = 'yes'; $_SESSION['dreamboat_developer_view'] = 'future';}
if($changed == 'no' && $_SESSION['dreamboat_developer_view'] == 'future'){$changed = 'yes'; $_SESSION['dreamboat_developer_view'] = 'live';}

//echo $_SESSION['dreamboat_developer_view'];

header("Location: ".$_SESSION['this_page']);
exit();