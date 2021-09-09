<?php
echo "
<style>
	.performance_sales{
	//width: calc(10.5%);
	width: calc(12%);
	padding:1%;}
	.sub_menu_div.performance{background-color:#3bc1ff;}
	.sub_menu_div.performance.highlighted{background-color:red;}


</style>";

echo "<div style='box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);'>";

if(!isset($_SESSION['performance_sales_sub_menu'])){$_SESSION['performance_sales_sub_menu'] = 'initial_email';}

/*		echo "<a style='font-size:12px;' ";
			if($_SESSION['performance_sales_sub_menu'] != 'initial_email'){echo "href ='/components/performance/sales/sub_menu/change.php?to=initial_email'";}
			echo "class='sub_menu_div performance_sales";
			if($_SESSION['performance_sales_sub_menu'] == 'initial_email'){echo " highlighted";}
			echo "'>";
			echo 'initial<br>email';
		echo "</a>";*/

		echo "<a style='font-size:12px;' ";
			if($_SESSION['performance_sales_sub_menu'] != 'call_1'){echo "href ='/components/performance/sales/sub_menu/change.php?to=call_1'";}
			echo "class='sub_menu_div performance_sales";
			if($_SESSION['performance_sales_sub_menu'] == 'call_1'){echo " highlighted";}
			echo "'>";
			echo 'call <br>1';
		echo "</a>";	
		echo "<a style='font-size:12px;' ";
			if($_SESSION['performance_sales_sub_menu'] != 'call_2'){echo "href ='/components/performance/sales/sub_menu/change.php?to=call_2'";}
			echo "class='sub_menu_div performance_sales";
			if($_SESSION['performance_sales_sub_menu'] == 'call_2'){echo " highlighted";}
			echo "'>";
			echo 'call <br> 2';
		echo "</a>";
		echo "<a style='font-size:12px;' ";
			if($_SESSION['performance_sales_sub_menu'] != 'call_3'){echo "href ='/components/performance/sales/sub_menu/change.php?to=call_3'";}
			echo "class='sub_menu_div performance_sales";
			if($_SESSION['performance_sales_sub_menu'] == 'call_3'){echo " highlighted";}
			echo "'>";
			echo 'call 3';
		echo "</a>";
		echo "<a style='font-size:12px;' ";
			if($_SESSION['performance_sales_sub_menu'] != 'prospectus'){echo "href ='/components/performance/sales/sub_menu/change.php?to=prospectus'";}
			echo "class='sub_menu_div performance_sales";
			if($_SESSION['performance_sales_sub_menu'] == 'prospectus'){echo " highlighted";}
			echo "'>";
			echo '>>';
		echo "</a>";
		echo "<a style='font-size:12px;' ";
			if($_SESSION['performance_sales_sub_menu'] != 'follow_up_done'){echo "href ='/components/performance/sales/sub_menu/change.php?to=follow_up_done'";}
			echo "class='sub_menu_div performance_sales";
			if($_SESSION['performance_sales_sub_menu'] == 'follow_up_done'){echo " highlighted";}
			echo "'>";
			echo '>>';
		echo "</a>";
		echo "<a  style='font-size:12px;' ";
			if($_SESSION['performance_sales_sub_menu'] != 'walkthrough_planned'){echo "href ='/components/performance/sales/sub_menu/change.php?to=walkthrough_planned'";}
			echo "class='sub_menu_div performance_sales";
			if($_SESSION['performance_sales_sub_menu'] == 'walkthrough_planned'){echo " highlighted";}
			echo "'>";
			echo 'walkthrough planned';
		echo "</a>";
		echo "<a  style='font-size:12px;' ";
			if($_SESSION['performance_sales_sub_menu'] != 'walkthrough_had'){echo "href ='/components/performance/sales/sub_menu/change.php?to=walkthrough_had'";}
			echo "class='sub_menu_div performance_sales";
			if($_SESSION['performance_sales_sub_menu'] == 'walkthrough_had'){echo " highlighted";}
			echo "'>";
			echo 'walkthrough had';
		echo "</a>";
	
echo "</div>";
