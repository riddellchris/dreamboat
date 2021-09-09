<?php
if(!isset($_SESSION)){session_start();}

copy_big_title_open('Your options','your_options');

//should you wish to join in the future we are building
paragraph("Having reviewed the prospectus, the key criteria to make any future decisions upon are:");
list_start();
	point("The current cost of productivity issues you just haven't dealt with.");	
	point("The amount of productivity resistance in your organisation.");		
	point("The upside of cleaning out more productivity issues faster.");
	point("The upside of engaging your employees in a process of continuous productivity improvement.");
	echo "vs";		
	point("The actual cost and time taken up by the system.");	
	echo "and";		
	point("How long, how, and if at all you should trial the system to test it's impact on your business.");
list_end();	
paragraph("We hope you can see the benefits of what Dreamboat provides and the future it's building.<br><br>Should you have further questions, please contact us using the information in the contact us section below.");


copy_big_title_close();