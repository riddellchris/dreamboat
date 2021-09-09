<?php
if(!isset($_SESSION)){session_start();}
$secondary_menu_showing = $_SESSION['admin_secondary_menu_layer_for'.$_SESSION['admin_principle_menu_layer']];

unset($admin_sub_sub_menu_options);
if(!isset($admin_sub_sub_menu_options)){	$admin_sub_sub_menu_options = array();}
	
//comparison	
	if($secondary_menu_showing == 'tests'){
		$admin_sub_sub_menu_options 	= build_admin_layer_three_menus('time_allocations_to_income_improvements',	$admin_sub_sub_menu_options);	
		$admin_sub_sub_menu_options 	= build_admin_layer_three_menus('quality_spread_of_refferrs_to_clients'	 ,	$admin_sub_sub_menu_options);
		//$admin_sub_sub_menu_options 	= build_admin_layer_three_menus('quality_spread_of_refferrs_to_clients'	 ,	$admin_sub_sub_menu_options);			
	//	$admin_sub_sub_menu_options 	= build_admin_layer_three_menus('covid_impacts_so_far'			 ,	$admin_sub_sub_menu_options);	
	//	$admin_sub_sub_menu_options 	= build_admin_layer_three_menus('covid_impacts_so_far'			 ,	$admin_sub_sub_menu_options);	
	//	$admin_sub_sub_menu_options 	= build_admin_layer_three_menus('covid_impacts_so_far'			 ,	$admin_sub_sub_menu_options);	
	//	$admin_sub_sub_menu_options 	= build_admin_layer_three_menus('covid_impacts_so_far'			 ,	$admin_sub_sub_menu_options);	

		$main_admin_menu_default 	= 'time_allocations_to_income_improvements';
		}

function build_admin_layer_three_menus($name, $admin_sub_sub_menu_options){
	if(!isset($admin_sub_sub_menu_options)){$admin_sub_sub_menu_options = array();}
		$admin_sub_sub_menu_options[count($admin_sub_sub_menu_options)] = $name;
		return $admin_sub_sub_menu_options;
}


echo "<div id='admin_layer_three_menu_container' class='admin_layer_three_menu_container'>";
	echo "
		<style>
			.admin_layer_three_menu_options{
				width: calc(100% / ".count($admin_sub_sub_menu_options).");
				float: left;
				height: 37px;
				text-align:center;
				text-transform:uppercase;
				font-family: helvetica;
				font-size:1.2em;
				color:white;
				text-decoration:none;
				padding-top: 12px;
			}
			.admin_layer_three_menu_options:hover{
			
					
			
			}
		</style>";
echo "
<script>
	function ChangeAdminLayerthreeMenu(to) {
	  var xhttp = new XMLHttpRequest();
	  xhttp.onreadystatechange = function() {
	    if (this.readyState == 4 && this.status == 200) {
	     document.getElementById('admin_container').innerHTML = this.responseText;
	    }
	  };
	  xhttp.open('GET', '/crew_bar/menu_system/container_calculations.php?change_to=tertiary_layer&to='+to);
	  xhttp.send();
	}
</script>
<style>
.admin_third_layer_tabs_selected{
color: white;background-color: red;
}
.admin_third_layer_tabs_selected{
color: black;background-color: #ffd9d9;
}
.admin_third_layer_tabs_selected{
color: black;background-color: #ffd9d9;
}

</style>";	
		

require_once $_SERVER['DOCUMENT_ROOT']."/components/functions/strip_underscores.php";
	for($i = 0; $i < count($admin_sub_sub_menu_options); $i++){
		echo "<a href='#' class='admin_layer_three_menu_options ";
		
		if($_SESSION['admin_tertiary_menu_layer_for'.$_SESSION['admin_principle_menu_layer']] == $admin_sub_sub_menu_options[$i]){
			echo " admin_third_layer_tabs_selected ";
		}
		else{
			echo " admin_third_layer_tabs_selected ";
		}	
		echo "' onclick='ChangeAdminLayerthreeMenu(&#39;".$admin_sub_sub_menu_options[$i]."&#39);return false;'
		>";
			echo strip_underscores($admin_sub_sub_menu_options[$i]);
		echo "</a>";
	}
echo "</div>";	


		



	









