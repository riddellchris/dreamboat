<?php
if(!isset($_SESSION)){session_start();}
			
echo "<a class='about_us nav-links hide_for_mobile' style='float:right;";	
	if(check_url('/users/') == 1 OR $_GET['primary_folder'] == 'users'){echo "color:#00ff00;";}
				 else{echo "color: red;";}
	if(isset($_SESSION['viewing_client_id'])){echo "font-weight:800;font-size:40px;padding-top:7px;font-family: Arvo;";}
	else{echo "padding-top:18px;";}
	echo "' title='All those clients, and you.'"; 	
	
	echo "href='";
	if(check_url('/users/') == 1 OR $_GET['primary_folder'] == 'users'){
	echo "/components/sub_menus/change.php?page=users&to=regular_users";
	}
	else{echo "/users/";}
	
	echo "'>";
	if(isset($_SESSION['viewing_client_id'])){
		if($_SESSION['user_id'] == $_SESSION['viewing_client_id']){echo "me";}
		else{echo $_SESSION['viewing_client_first_name'];}
		}
	else{echo "users";}
echo "</a>";	