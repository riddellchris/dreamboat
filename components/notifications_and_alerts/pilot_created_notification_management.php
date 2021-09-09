<?php
if(!isset($_SESSION)){session_start();}



if(isset($_SESSION['dreamboat_crew'])){
	if($_SESSION['dreamboat_crew'] == 'yes'){

	//echo 'hello';exit();
	echo "<style>
		.green_animation {
		width: 50px;
		height: 50px;
		-webkit-animation: 	animated_green_background 1s infinite;  /* Safari 4+ */
		-moz-animation: 	animated_green_background 1s infinite;  /* Fx 5+ */
		-o-animation: 	animated_green_background 1s infinite;  /* Opera 12+ */
		animation: 		animated_green_background 1s infinite;  /* IE 10+, Fx 29+ */
		}
		
		@-webkit-keyframes animated_green_background {
		0%, 10% {
			background-color: #75d13f;
		}
		10%, 20% {
			background-color: #68CA39;
		}
		20%, 30% {
			background-color: #5BC432;
		}
		30%, 40% {
			background-color: #4EBD2C;
		}
		40%, 50% {
			background-color: #41B725;
		}
		50%, 60% {
			background-color: #34B01F;
		}
		60%, 70% {
			background-color: #27AA18;
		}
		70%, 80% {
			background-color: #1AA312;
		}
		80%, 90% {
			background-color: #0D9D0B;
		}
		90%, 100% {
			background-color: #009605;
		}  
		}
		.orange_animation{
			width: 50px;
			height: 50px;
			-webkit-animation: 	animated_orange_background 1s infinite;  /* Safari 4+ */
			-moz-animation: 	animated_orange_background 1s infinite;  /* Fx 5+ */
			-o-animation: 	animated_orange_background 1s infinite;  /* Opera 12+ */
			animation: 		animated_orange_background 1s infinite;  /* IE 10+, Fx 29+ */
			}
			
			@-webkit-keyframes animated_orange_background {
			0%, 10% {
				background-color: #ffaa00;
			}
			10%, 20% {
				background-color: #FFA600;
			}
			20%, 30% {
				background-color: #FFA200;
			}
			30%, 40% {
				background-color: #FF9F00;
			}
			40%, 50% {
				background-color: #FF9B00;
			}
			50%, 60% {
				background-color: #FF9700;
			}
			60%, 70% {
				background-color: #FF9300;
			}
			70%, 80% {
				background-color: #FF9000;
			}
			80%, 90% {
				background-color: #FF8C00;
			}
			90%, 100% {
				background-color: #FF8800;
			}  	
		}


		</style>";






		
			if(
				($_SESSION['user_id'] != $_SESSION['viewing_client_id']) &&
				isset($_SESSION['notifications_for_current_client'])
				
				){
		
			echo "<div ";
			if($_SESSION['notifications_for_current_client'] == 'on'){echo "class = ' green_animation '";}
			else{echo "class = ' orange_animation '";}
			
			
			echo "style='color:white;width:100%;height:2.5vh;text-align:center;font-size:1em;padding-top:1.2vh;font-family:helvetica;text-transform:uppercase;";
			echo "'>";
			
			if($_SESSION['notifications_for_current_client'] == 'on'){
				echo "On the phone? - Email sending is currently on - <a style='color: orange;'  href='/components/notifications_and_alerts/pilot_created_notification_management_switch.php?turn_notifications=off'>turn it off></a>";		
			}
			if($_SESSION['notifications_for_current_client'] == 'off'){
				echo "just typing? - Email sending is currently off - <a style='color: green;' href='/components/notifications_and_alerts/pilot_created_notification_management_switch.php?turn_notifications=on'>turn it on></a>";
			}
			
			

			echo "</div>";
		
		
		}
	}
}

?>