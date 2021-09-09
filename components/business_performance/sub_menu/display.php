<?php
echo "
<style>
	.performance{width: calc(100% /3);}
	.sub_menu_div.performance{background-color:#3bc1ff;font-size:1em;}
	.sub_menu_div.performance.highlighted{background-color:red;}


</style>";

echo "<div style='box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);'>";

if(!isset($_SESSION['performance_sub_menu'])){$_SESSION['performance_sub_menu'] = 'finances';}

		echo "<a ";
			if($_SESSION['performance_sub_menu'] != 'sales'){echo "href ='/components/performance/sub_menu/change.php?to=sales'";}
			echo "class='sub_menu_div performance";
			if($_SESSION['performance_sub_menu'] == 'sales'){echo " highlighted";}
			echo "'>";
			echo 'sales';
		echo "</a>";	
	
		echo "<a ";
			if($_SESSION['performance_sub_menu'] != 'management'){echo "href ='/components/performance/sub_menu/change.php?to=management'";}
			echo "class='sub_menu_div performance";
			if($_SESSION['performance_sub_menu'] == 'management'){echo " highlighted";}
			echo "'>";
			echo 'management';
		echo "</a>";
		echo "<a ";
			if($_SESSION['performance_sub_menu'] != 'finances'){echo "href ='/components/performance/sub_menu/change.php?to=finances'";}
			echo "class='sub_menu_div performance";
			if($_SESSION['performance_sub_menu'] == 'finances'){echo " highlighted";}
			echo "'>";
			echo 'finances';
		echo "</a>";

	
echo "</div>";