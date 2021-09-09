<?php
if(!isset($_SESSION)){session_start();}

copy_big_title_open('Contact Us','contact_us');
echo "
via your Productivity Pilot<br>
<a target='_blank' href='mailto:contactus@dreamboat.co'>contactus@dreamboat.co</a><br>
<a target='_blank' href='/support/contact_us'>www.dreamboat.com.au\n/support/contact_us/</a><br>
572 Burwood Road, Hawthorn, Victoria, 3122<br>
<br><br><br><br><br><br><br><br><br>

	<table style='color:#281e96;'>
		<tr><td colspan='2'>Dreamboat Enterprises PTY LTD</td></tr>
		<tr><td style='padding: 0px;'>ABN: </td><td style='text-align:right;'>73 164 346 285</td></tr>
		<tr><td style='padding: 0px;'>ACN: </td><td style='text-align:right;'>   164 346 285</td></tr>
	</table>
	
	<br>
	";
	
	
	
	date_default_timezone_set('Australia/Brisbane');
	echo "
	<table style='color:#281e96;padding: 0px;margin-top: 25px;'>
		<tr><td style='padding: 0px;'>Detail level:		</td><td style='text-align:right;'>".ucfirst($_GET['tertiary_folder'])."</td></tr>
		<tr><td style='padding: 0px;'>Viewing Date:		</td><td style='text-align:right;'>".date('j F Y')."</td></tr>
		<tr><td style='padding: 0px;'>Effective Date:		</td><td style='text-align:right;'>8 August 2020</td></tr>
		<tr><td style='padding: 0px;'>Preparation Date:	</td><td style='text-align:right;'>18 July 2020</td></tr>
	</table>";

	echo "</div>";
echo "</div>";