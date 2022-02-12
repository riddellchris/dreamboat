<?php
if(!isset($_SESSION)){session_start();}

//echo '<pre>' , var_dump($_POST) , '</pre>';

$adjust_session_variable = 'no';
if($_POST['headline_chart'] == 'time_per_activity'){                $adjust_session_variable = 'yes';}
if($_POST['headline_chart'] == 'time_per_client'){                  $adjust_session_variable = 'yes';}
if($_POST['headline_chart'] == 'revenue_stacked'){                  $adjust_session_variable = 'yes';}
if($_POST['headline_chart'] == 'revenue_per_client_growth'){        $adjust_session_variable = 'yes';}
if($_POST['headline_chart'] == 'sales_client_vs_product_matrix'){   $adjust_session_variable = 'yes';}


echo $adjust_session_variable."<br>";
echo $_SESSION['insights_menu'];echo "<br>";


if($adjust_session_variable == 'yes'){$_SESSION['insights_menu'] = $_POST['headline_chart'];

//echo "in here<br>";
//echo $_POST['headline_chart'];
//exit();
}
//echo $_SESSION['insights_menu'];echo "<br>";
//exit();

header("Location: /".$_POST['primary_folder']."/".$_POST['secondary_folder']."/");
exit();