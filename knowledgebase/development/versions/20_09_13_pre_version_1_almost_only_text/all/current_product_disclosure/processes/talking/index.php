<?php
if(!isset($_SESSION)){session_start();}
require_once $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/start.php";
require_once $_SERVER['DOCUMENT_ROOT']."/components/content/styling/all.php";

title_block('talking');
?>

<div class='big-web-copy'>
	<span>
		Half an hour every week to improve your productivity.<br><br><br>
		
		From sales and marketing, through to your time, tracking and future planning.<br><br><br>
		
		Talking each week we will keep you on track to the performance gains you desire.
		
		Within half and hour eash week we determine:<br><small>
		What&#39;s best to focus on in the coming week.<br>
		How to handle any outstanding issues &<br>
		How to optimise your productivity in the coming weeks.<br></small>
		<br>
		At the end of every session you will:<br><small>
		Leave with a clear focus for the week.<br>
		Mutually agreeable homework to progress as fast as possible &<br>
		A plan for the week to optimse your sales producitivity.<br></small>
		<br><br>
		You can work with us just by talking on the phone<br><br>
		Or work it through with us via our platform as you please.<br>	
	</span>
</div>

<?php

$padding_top	=	'8vh';
$url		=	'/content/pilots/';
$copy 		=	'to learn more about our pilots who help you click here //';
require_once $_SERVER['DOCUMENT_ROOT']."/components/content/pieces/contact_us_link.php";
require_once $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/end.php";
?>
