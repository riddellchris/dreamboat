<?php
if(!isset($_SESSION)){session_start();}

require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/start.php";
require_once $_SERVER['DOCUMENT_ROOT']."/components/content/styling/all.php";

//title_block('processes summary');
title_block('processes');
?>


<div class='big-web-copy'>
	<span>
		
		All our processes are designed to keep you on track for the desired productivity gains of between 10 and 15% every 6 months.
		
	
	</span>
</div>
<?php
require $_SERVER['DOCUMENT_ROOT']."/results/charts/bounding_chart_displayed_in_content/index.php";
?>
<div class='big-web-copy'>
	<span>
		

		
		Using every tool we have and those we  keep building we use a mix of:<br>
		
		<small>
		Our web platform<br>
		Pilots talking<br>
		Pilots typing<br>
		Metric Tracking<br>
		Engineering processes<br>
		Automated Alerts &<br>
		Systematic Reviews<br><br>
		
		
	<!--	Artificial Intelligence<br><br> -->
		</small>
		...to do everything we can to keep you on track to those productivity gains.<br><br>
		
		Our objective is not to make a sudden instantaneous and questionably sustainable impact, but to bound your performance objectives and ultimate gains so you succeed over the long term, every time.<br><br>
		After all it takes less than a 1% improvement each and every week to achieve these goals.<br><br>
	
		<span style='color: #cecece;'>
		N.B. This does not preclude any user from achieving greater results than Dreamboat&#39;s target bounds
		</span>
	
		</small>	
	</span>
</div>





<?php
$padding_top	=	'20vh';
//$url		=	'/components/sub_menus/change.php?page=processes&to=technology';
//$copy 		=	'learn about our technology here //';

$url		=	'/content/pricing/';
$copy 		=	'now learn about our pricing here //';
require $_SERVER['DOCUMENT_ROOT']."/components/content/pieces/contact_us_link.php";
require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/end.php";
?>