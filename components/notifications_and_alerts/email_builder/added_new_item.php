<?php
if(!isset($_SESSION)){session_start();}


	//this should really include a link and perhaps even the title of the thing.... 
	//profile
	if($_POST['adding_new'] == 'progress'){		$primary = 'profile'; $secondary = $_POST['adding_new']; $email_title = $user_creating_notifications_name." added a new piece of progress to your Dreamboat";};

	//business
	if($_POST['adding_new'] == 'products'){		$primary = 'business'; $secondary = $_POST['adding_new']; $email_title = $user_creating_notifications_name." added a new product to your Dreamboat";};
	if($_POST['adding_new'] == 'services'){		$primary = 'business'; $secondary = $_POST['adding_new']; $email_title = $user_creating_notifications_name." added a new service to your Dreamboat";};
	
	//network
	if($_POST['adding_new'] == 'people'){		$primary = 'network'; $secondary = $_POST['adding_new']; $email_title = $user_creating_notifications_name." added a new person to your Dreamboat";};
//in time a link should be included in this but not for now...
//	if($_POST['adding_new'] == 'people'){		$primary = 'network'; $secondary = $_POST['adding_new']; $email_title = $user_creating_notifications_name." added a <a href=&#39;/item/display.php?item_id=".$last_insert_id."&#39;>new person</a> to your Dreamboat";};
	if($_POST['adding_new'] == 'groups'){		$primary = 'network'; $secondary = $_POST['adding_new']; $email_title = $user_creating_notifications_name." added a new organisation to your Dreamboat";};	
	if($_POST['adding_new'] == 'businesses'){	$primary = 'network'; $secondary = $_POST['adding_new']; $email_title = $user_creating_notifications_name." added a new business to your Dreamboat";};

	//biz_dev
	if($_POST['adding_new'] == 'events'){		$primary = 'biz_dev'; $secondary = $_POST['adding_new']; $email_title = $user_creating_notifications_name." added a new event to your Dreamboat";};
	if($_POST['adding_new'] == 'one_to_ones'){	$primary = 'biz_dev'; $secondary = $_POST['adding_new']; $email_title = $user_creating_notifications_name." added a new one to one to your Dreamboat";};
	if($_POST['adding_new'] == 'referrers'){	$primary = 'biz_dev'; $secondary = $_POST['adding_new']; $email_title = $user_creating_notifications_name." added a new referrer to your Dreamboat";};	

	//sales
	if($_POST['adding_new'] == 'new_potentials'){	$primary = 'sales'; $secondary = $_POST['adding_new']; $email_title = $user_creating_notifications_name." added a potential to your Dreamboat";};
	if($_POST['adding_new'] == 'potential_upsells'){$primary = 'sales'; $secondary = $_POST['adding_new']; $email_title = $user_creating_notifications_name." added a potential upsell  to your Dreamboat";};
	if($_POST['adding_new'] == 'recurring_sales'){	$primary = 'sales'; $secondary = $_POST['adding_new']; $email_title = $user_creating_notifications_name." added a recurring sale to your Dreamboat";};	

	
	//marketing
	if($_POST['adding_new'] == 'target_markets'){	$primary = 'marketing'; $secondary = $_POST['adding_new']; $email_title = $user_creating_notifications_name." added a new target market to your Dreamboat";};
	if($_POST['adding_new'] == 'channels'){		$primary = 'marketing'; $secondary = $_POST['adding_new']; $email_title = $user_creating_notifications_name." added a new marketing channel to your Dreamboat";};
	if($_POST['adding_new'] == 'angles'){		$primary = 'marketing'; $secondary = $_POST['adding_new']; $email_title = $user_creating_notifications_name." added a new marketing angle to your Dreamboat";};	
	if($_POST['adding_new'] == 'promotions'){	$primary = 'marketing'; $secondary = $_POST['adding_new']; $email_title = $user_creating_notifications_name." added a new promotion to your Dreamboat";};	
	
	//management
	if($_POST['adding_new'] == 'clients'){		$primary = 'management'; $secondary = $_POST['adding_new']; $email_title = $user_creating_notifications_name." added a new client to your Dreamboat";};
	if($_POST['adding_new'] == 'staff'){		$primary = 'management'; $secondary = $_POST['adding_new']; $email_title = $user_creating_notifications_name." added a new staff member to your Dreamboat";};
	if($_POST['adding_new'] == 'systems'){		$primary = 'management'; $secondary = $_POST['adding_new']; $email_title = $user_creating_notifications_name." added a new system to your Dreamboat";};
	if($_POST['adding_new'] == 'assets'){		$primary = 'management'; $secondary = $_POST['adding_new']; $email_title = $user_creating_notifications_name." added a new asset to your Dreamboat";};
	if($_POST['adding_new'] == 'other'){		$primary = 'management'; $secondary = $_POST['adding_new']; $email_title = $user_creating_notifications_name." added a new other management topic to your Dreamboat";};

	//wheelhouse
	if($_POST['adding_new'] == 'dreams'){		$primary = 'wheelhouse'; $secondary = $_POST['adding_new']; $email_title = $user_creating_notifications_name." added a new dream to your Dreamboat";};
	if($_POST['adding_new'] == 'goals'){		$primary = 'wheelhouse'; $secondary = $_POST['adding_new']; $email_title = $user_creating_notifications_name." added a new goal to your Dreamboat";};
	if($_POST['adding_new'] == 'milestones'){	$primary = 'wheelhouse'; $secondary = $_POST['adding_new']; $email_title = $user_creating_notifications_name." added a new milestone to your Dreamboat";};
	if($_POST['adding_new'] == 'tasks'){		$primary = 'wheelhouse'; $secondary = $_POST['adding_new']; $email_title = $user_creating_notifications_name." added a new task to your Dreamboat";};
	if($_POST['adding_new'] == 'issues'){		$primary = 'wheelhouse'; $secondary = $_POST['adding_new']; $email_title = $user_creating_notifications_name." added a new issue to your Dreamboat";};

	//time
//	if($_POST['adding_new'] == 'doing'){		$primary = 'time'; $_SESSION['time_activities_page'] = $_POST['adding_new'];	 $email_title = $user_creating_notifications_name." added a new 'doing the work activity' to your Dreamboat";}
//	if($_POST['adding_new'] == 'planning'){		$primary = 'time'; $_SESSION['time_activities_page'] = $_POST['adding_new'];	 $email_title = $user_creating_notifications_name." added a new 'planning the work activity' to your Dreamboat";}
//	if($_POST['adding_new'] == 'managing'){		$primary = 'time'; $_SESSION['time_activities_page'] = $_POST['adding_new'];	 $email_title = $user_creating_notifications_name." added a new 'managing the work activity'to your Dreamboat";}
//	if($_POST['adding_new'] == 'administrating'){	$primary = 'time'; $_SESSION['time_activities_page'] = $_POST['adding_new'];	 $email_title = $user_creating_notifications_name." added a new 'administrating the work activity'to your Dreamboat";}	







	//results
	//does not apply
			
	//improvements
	//this secodary folder issues is slightly incorrect right now... but it will do
	//this... like many issues will be adjusted in time when we connect with database and item number keys rather than folders across everything.
	//the folders are great for what to show but NOT what to store and retrieve... silly mistake but anyway obvious now
	if($_POST['adding_new'] == 'improvements'){	$primary = 'improvements'; $secondary = 'planned'; $email_title = $user_creating_notifications_name." added a new improvement to your Dreamboat";};

	//we have to do this because when connecting from other items and adding new the stored folders are incorrect....
	//therefore the notifications become incorrect.
	$_POST['primary_folder'] = $primary;
	$_POST['secondary_folder'] = $secondary;


	//admin
	//not really needed now..
	//probably only required when more pilots are on board OR clients can see homework in their wheelhouse as a sub category
//	if($_POST['adding_new'] == 'homework'){		$email_title = $user_creating_notifications_name." added a new homework activity to your Dreamboat";};

	$url = $url_to_visit;
	$_SESSION['email_title'] = $email_title;
	$_SESSION['email_instruction'] = "To check it out<br>just login below:";
	$_SESSION['button_copy'] = "Login";