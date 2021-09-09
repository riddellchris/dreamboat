<?php
if(!isset($_SESSION)){session_start();}

echo "<a class='about_us nav-links hide_for_mobile' style='float:right;padding-top:18px;padding-right:18px;";
if(check_url('/call/') == 1 OR $_GET['primary_folder'] == 'call'){echo "color:#00ff00;'";}
else{echo "color: red;font-weight:900;'";}
echo " title='Go on, call as much as you need to.' href='/call/'>call ".$_SESSION['pilots_first_name']."</a>";		