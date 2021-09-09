<?php
echo "
<style>
	.technology{width: calc(100% /5);}
	.sub_menu_div.technology{background-color:#3bc1ff;font-size:1em;}
	.sub_menu_div.technology.highlighted{background-color:red;}


</style>";

echo "<div style='box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);'>";

if(!isset($_SESSION['technology_sub_menu'])){$_SESSION['technology_sub_menu'] = 'add new';}

		echo "<a ";
			if($_SESSION['technology_sub_menu'] != 'solve'){echo "href ='/components/performance/management/technology/sub_menu/change.php?to=solve'";}
			echo "class='sub_menu_div technology";
			if($_SESSION['technology_sub_menu'] == 'solve'){echo " highlighted";}
			echo "'>";
			echo 'solve';
		echo "</a>";

		echo "<a ";
			if($_SESSION['technology_sub_menu'] != 'link'){echo "href ='/components/performance/management/technology/sub_menu/change.php?to=link'";}
			echo "class='sub_menu_div technology";
			if($_SESSION['technology_sub_menu'] == 'link'){echo " highlighted";}
			echo "'>";
			echo 'link';
		echo "</a>";

		echo "<a ";
			if($_SESSION['technology_sub_menu'] != 'prioritise'){echo "href ='/components/performance/management/technology/sub_menu/change.php?to=prioritise'";}
			echo "class='sub_menu_div technology";
			if($_SESSION['technology_sub_menu'] == 'prioritise'){echo " highlighted";}
			echo "'>";
			echo 'priortise';
		echo "</a>";	
		echo "<a ";
			if($_SESSION['technology_sub_menu'] != 'discuss'){echo "href ='/components/performance/management/technology/sub_menu/change.php?to=discuss'";}
			echo "class='sub_menu_div technology";
			if($_SESSION['technology_sub_menu'] == 'discuss'){echo " highlighted";}
			echo "'>";
			echo 'discuss';
		echo "</a>";
		echo "<a ";
			if($_SESSION['technology_sub_menu'] != 'add new'){echo "href ='/components/performance/management/technology/sub_menu/change.php?to=add'";}
			echo "class='sub_menu_div technology";
			if($_SESSION['technology_sub_menu'] == 'add new'){echo " highlighted";}
			echo "'>";
			echo 'add new';
		echo "</a>";	

	
echo "</div>";