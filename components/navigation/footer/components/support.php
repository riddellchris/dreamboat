<?php
if(!isset($_SESSION)){session_start();}

if(isset($_SESSION['logged_in'])){
	if($_SESSION['logged_in'] == 'yes'){	
		echo "<a class='nav-links' href='/support/requests/'";
		if(check_url('/support/requests/') == 1){echo "style='color:".$_SESSION['masked_domain_highlight_colour'].";margin-top: 18px;'";}
		echo ">support</a>";
	}
}