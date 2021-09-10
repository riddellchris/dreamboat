<?php
if(!isset($_SESSION)){session_start();}

if(	check_url('knowledgebase') == 1 OR
	check_url('/account/security/') == 1  OR
	check_url('/legal/') == 1  OR
	check_url('/slideshows/') == 1  OR
	check_url('/letter/') == 1  OR
	  (check_primary_folder('support') && $_SESSION['logged_in'] != 'yes') OR
	  check_primary_folder('problem') OR
	  check_primary_folder('solution') OR
	  check_primary_folder('solutions') OR	  
	  check_primary_folder('processes')  OR
	  check_primary_folder('impact') OR
	  check_primary_folder('contact_us')  OR
	  check_primary_folder('home') 
	  ){
		echo "<a class='nav-links ";
		if($_GET['primary_folder'] == 'slideshows' OR $_GET['secondary_folder'] == 'letter' ){echo " long ";}
		 //we mark as long so that in short... we don't show it
		//if(final_file_name() != ''){echo " blink_me ";} CR 20.10.30 Not exactly sure why this exists here
				echo "' style='";

            if($_GET['primary_folder'] == 'slideshows' OR $_GET['secondary_folder'] == 'letter' ){
                echo " margin-right: 15px; ";
            }

			$logged_in = 'no';
			if(isset($_SESSION['logged_in'])){
				if($_SESSION['logged_in'] == 'yes'){
				echo "color:red;' title='Back we go<<<' href='/'>go back";	
				$logged_in == 'yes';
				}
			}

			if($logged_in == 'no'){
				if(check_url('/account/security/') == 1){echo "color:#00ff00;";}
				else{echo "color:red;";}				
				echo "' title='' href='/account/security/' title='Happy days, let&#39;s sign in'>login";
			}






		echo "</a>";
	}