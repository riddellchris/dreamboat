<?php
if(!isset($_SESSION)){session_start();}


//echo $_SESSION['dreamboat_developer']; exit();
					/*
					I think this is redundant now based upon the fact that that we now have other git based intel
					perhaps though it's an important reminder
					if(isset($_SESSION['dreamboat_developer'])){
						if($_SESSION['dreamboat_developer'] == 'yes'){
								echo "	<style>
											.developer{float:left;}
										</style>";
								if($_SESSION['dreamboat_developer_view'] == 'live'){	echo "<a class='developer blink_me' href='/components/dev_ops/version_control/change.php' style='color:red'>live</a>";}
								if($_SESSION['dreamboat_developer_view'] == 'future'){	echo "<a class='developer blink_me' href='/components/dev_ops/version_control/change.php'  style='color:green'>future</a>";}						
						}
					}
					*/