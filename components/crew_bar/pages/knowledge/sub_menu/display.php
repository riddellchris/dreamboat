<?php
echo "
<style>
	.knowledgebase{width: 50%;}
	.sub_menu_div.knowledgebase{background-color:#3bc1ff;}
	.sub_menu_div.knowledgebase.highlighted{background-color:red;}


</style>";

echo "<div style='box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);'>";

if(!isset($_SESSION['knowledgebase_sub_menu'])){$_SESSION['knowledgebase_sub_menu'] = 'view existing';}

		echo "<a ";
			if($_SESSION['knowledgebase_sub_menu'] != 'view existing'){echo "href ='/components/knowledgebase/sub_menu/change.php?to=view'";}
			echo "class='sub_menu_div knowledgebase";
			if($_SESSION['knowledgebase_sub_menu'] == 'view existing'){echo " highlighted";}
			echo "'>";
			echo 'view existing';
		echo "</a>";
		echo "<a ";
			if($_SESSION['knowledgebase_sub_menu'] != 'add to'){echo "href ='/components/knowledgebase/sub_menu/change.php?to=add'";}
			echo "class='sub_menu_div knowledgebase";
			if($_SESSION['knowledgebase_sub_menu'] == 'add to'){echo " highlighted";}
			echo "'>";
			echo 'add to';
		echo "</a>";	

	
echo "</div>";