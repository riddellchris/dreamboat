<?php

//using this a 10-20% performance improvement on this front is the way to go
//allowing for unquestionable control and performance management that's truly quantifiable
if(!isset($_SESSION)){session_start();}
if(!isset($_SESSION['viewing_client_id'])){header("Location: /users/"); exit();}
require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/start.php";


	echo "<div style='width:100%;text-align:center;color:red;' class='prompt-font blink_me'>target 5-10% improvement every 6 months</div>";



if($_SESSION['dreamboat_crew'] == 'yes'){
echo "<div style='margin-top:50px;width:100%;text-align:center;'>";
	echo "<span class='pilots_eyes_only_font'>While it&#39;s not a stated / signed up to objective - target between 5-10% improvement every 6 months until sufficient competitive/comparative data exists</span>";
echo "</div>";
}

$user_to_display = $_SESSION['viewing_client_id'];
$_SESSION['last_productivity_chart'] = $_SERVER['REQUEST_URI'];
require $_SERVER['DOCUMENT_ROOT']."/components/navigation/customiser/index.php"; // sub-menu

require $_SERVER['DOCUMENT_ROOT']."/results/productivity/chart.php";

require $_SERVER['DOCUMENT_ROOT']."/components/tracking/display_elements/curve_chart_div.php";
require $_SERVER['DOCUMENT_ROOT']."/components/tracking/display_elements/end_of_page_requires.php";
?>