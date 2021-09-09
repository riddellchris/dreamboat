<?php
echo "
<style>
	.performance_management{width: calc(100% /3);}
	.sub_menu_div.performance_management{background-color:#3bc1ff;font-size:1em;}
	.sub_menu_div.performance_management.highlighted{background-color:red;}


</style>";

echo "<div style='box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);'>";

if(!isset($_SESSION['performance_management_sub_menu'])){$_SESSION['performance_management_sub_menu'] = 'auto_coach';}

		echo "<a ";
			if($_SESSION['performance_management_sub_menu'] != 'staff'){echo "href ='/components/performance/management/sub_menu/change.php?to=staff'";}
			echo "class='sub_menu_div performance_management";
			if($_SESSION['performance_management_sub_menu'] == 'staff'){echo " highlighted";}
			echo "'>";
			echo 'staff';
		echo "</a>";	
	
		echo "<a ";
			if($_SESSION['performance_management_sub_menu'] != 'tech'){echo "href ='/components/performance/management/sub_menu/change.php?to=tech'";}
			echo "class='sub_menu_div performance_management";
			if($_SESSION['performance_management_sub_menu'] == 'tech'){echo " highlighted";}
			echo "'>";
			echo 'tech';
		echo "</a>";
		echo "<a ";
			if($_SESSION['performance_management_sub_menu'] != 'auto_coach'){echo "href ='/components/performance/management/sub_menu/change.php?to=auto_coach'";}
			echo "class='sub_menu_div performance_management";
			if($_SESSION['performance_management_sub_menu'] == 'auto_coach'){echo " highlighted";}
			echo "'>";
			echo 'auto coach';
		echo "</a>";

	
echo "</div>";