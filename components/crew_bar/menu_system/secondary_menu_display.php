<?php
if(!isset($_SESSION)){session_start();}

unset($admin_sub_menu_options);
if(!isset($admin_sub_menu_options)){	$admin_sub_menu_options = array();}


if($_SESSION['admin_principle_menu_layer'] == 'notes'){
//	$admin_sub_menu_options 	= build_admin_layer_two_menus('future_user_questions',	$admin_sub_menu_options);
	$admin_sub_menu_options 	= build_admin_layer_two_menus('all_notes', 				$admin_sub_menu_options);
	$admin_sub_menu_options 	= build_admin_layer_two_menus('related_to_this_page',	$admin_sub_menu_options);
	$admin_sub_menu_options 	= build_admin_layer_two_menus('from_consultations', 	$admin_sub_menu_options);	
	$secondary_menu_default 	= 'from_consultations';	
	}	
if($_SESSION['admin_principle_menu_layer'] == 'advice'){
	$admin_sub_menu_options 	= build_admin_layer_two_menus('all_advice_given_to_user',	$admin_sub_menu_options);
	$admin_sub_menu_options 	= build_admin_layer_two_menus('page_specific_advice_given',	$admin_sub_menu_options);
	$admin_sub_menu_options 	= build_admin_layer_two_menus('central_advice_page',		$admin_sub_menu_options);	
	$secondary_menu_default 	= 'central_advice_page';
	}
if($_SESSION['admin_principle_menu_layer'] == 'knowledge'){

/* not required right here and now for today... in time though... but let's cut it out today CR 20.8.13
//	$admin_sub_menu_options 	= build_admin_layer_two_menus('feed', 		$admin_sub_menu_options);
//	$admin_sub_menu_options 	= build_admin_layer_two_menus('q_and_a', 	$admin_sub_menu_options);

*/

	$admin_sub_menu_options 	= build_admin_layer_two_menus('all_knowledge',	$admin_sub_menu_options);
	$admin_sub_menu_options 	= build_admin_layer_two_menus('page_specific',	$admin_sub_menu_options);
	$secondary_menu_default 	= 'page_specific';	
	}	
if($_SESSION['admin_principle_menu_layer'] == 'comparison'){
	
//CR 20.07.20
//This should only be used on a page/url specific basis... but we aren't getting into that now.	
//if($_GET['primary_folder'] == 'profile'){//then show the actual test we have for that specific page.}
//this will require some work as we are using ajax to load all of this up 
//	$admin_sub_menu_options 	= build_admin_layer_two_menus('quality_spread_of_refferers_to_clients',		$admin_sub_menu_options);
	if($_GET['primary_folder'] == 'results'){
		$admin_sub_menu_options 	= build_admin_layer_two_menus('time_allocations_to_income_improvements',	$admin_sub_menu_options);	
	}
	$admin_sub_menu_options 	= build_admin_layer_two_menus('economic',			$admin_sub_menu_options);	
	$admin_sub_menu_options 	= build_admin_layer_two_menus('industry_comparison',		$admin_sub_menu_options);
	$admin_sub_menu_options 	= build_admin_layer_two_menus('business_definition_comparison',	$admin_sub_menu_options);
	$admin_sub_menu_options 	= build_admin_layer_two_menus('all_entry_comparisons',		$admin_sub_menu_options);
	$admin_sub_menu_options 	= build_admin_layer_two_menus('same_size_business_group',	$admin_sub_menu_options);
	$admin_sub_menu_options 	= build_admin_layer_two_menus('same_size_group_in_industry',	$admin_sub_menu_options);
	$secondary_menu_default 	= 'industry_comparison';
	}
if($_SESSION['admin_principle_menu_layer'] == 'controls'){
	$admin_sub_menu_options 	= build_admin_layer_two_menus('all',		$admin_sub_menu_options);
	$admin_sub_menu_options 	= build_admin_layer_two_menus('user_settings',	$admin_sub_menu_options);
	$admin_sub_menu_options 	= build_admin_layer_two_menus('page_specific',	$admin_sub_menu_options);		
	$secondary_menu_default 	= 'all';
	}			
if($_SESSION['admin_principle_menu_layer'] == 'technology'){
	$admin_sub_menu_options 	= build_admin_layer_two_menus('support',	$admin_sub_menu_options);
//	$admin_sub_menu_options 	= build_admin_layer_two_menus('backlogs',	$admin_sub_menu_options);	
//	$admin_sub_menu_options 	= build_admin_layer_two_menus('planning',	$admin_sub_menu_options);
	
//	$admin_sub_menu_options 	= build_admin_layer_two_menus('notes_as_we_go',		$admin_sub_menu_options);	
	$admin_sub_menu_options 	= build_admin_layer_two_menus('how_tos_and_references',	$admin_sub_menu_options);		
//	$admin_sub_menu_options 	= build_admin_layer_two_menus('iterative_improvements',	$admin_sub_menu_options);
	$admin_sub_menu_options 	= build_admin_layer_two_menus('releases',	 	$admin_sub_menu_options);	
		
//now in backlog
/*
	$admin_sub_menu_options 	= build_admin_layer_two_menus('support_requests',	 	$admin_sub_menu_options);
	$admin_sub_menu_options 	= build_admin_layer_two_menus('bugs_to_fix',		 	$admin_sub_menu_options);
	$admin_sub_menu_options 	= build_admin_layer_two_menus('general_maintenance',	 	$admin_sub_menu_options);
	$admin_sub_menu_options 	= build_admin_layer_two_menus('iterative_improvements',	 	$admin_sub_menu_options);
	$admin_sub_menu_options 	= build_admin_layer_two_menus('eternal_improvements',	 	$admin_sub_menu_options);
	$admin_sub_menu_options 	= build_admin_layer_two_menus('other_development',	 	$admin_sub_menu_options);		
	$admin_sub_menu_options 	= build_admin_layer_two_menus('new_features', 			$admin_sub_menu_options);
	*/
	$secondary_menu_default 	= 'support';	
	}	
	
	
if($_SESSION['admin_principle_menu_layer'] == 'other'){
	$admin_sub_menu_options 	= build_admin_layer_two_menus('staff',		$admin_sub_menu_options);
	$admin_sub_menu_options 	= build_admin_layer_two_menus('legal',		$admin_sub_menu_options);
	$admin_sub_menu_options 	= build_admin_layer_two_menus('accounting',	$admin_sub_menu_options);
	$admin_sub_menu_options 	= build_admin_layer_two_menus('finances',	$admin_sub_menu_options);
	
	/*
	if($_SESSION['admin_principle_menu_layer'] == 'finances'){
		$admin_sub_menu_options 	= build_admin_layer_two_menus('personal_tracking',	$admin_sub_menu_options);
		$admin_sub_menu_options 	= build_admin_layer_two_menus('group_tracking',		$admin_sub_menu_options);
		$admin_sub_menu_options 	= build_admin_layer_two_menus('cashflows',		$admin_sub_menu_options);
		$admin_sub_menu_options 	= build_admin_layer_two_menus('forecasting',		$admin_sub_menu_options);	
		$secondary_menu_default 	= 'personal_tracking';
	}*/
	$admin_sub_menu_options 	= build_admin_layer_two_menus('project_management',	$admin_sub_menu_options);	
	$admin_sub_menu_options 	= build_admin_layer_two_menus('business_management',	$admin_sub_menu_options);	
	
}




if(!isset($_SESSION['admin_secondary_menu_layer_for'.$_SESSION['admin_principle_menu_layer']])){
	$_SESSION['admin_secondary_menu_layer_for'.$_SESSION['admin_principle_menu_layer']] = $secondary_menu_default;

}



function build_admin_layer_two_menus($name, $admin_sub_menu_options){
	if(!isset($admin_sub_menu_options)){$admin_sub_menu_options = array();}
		$admin_sub_menu_options[count($admin_sub_menu_options)] = $name;
		return $admin_sub_menu_options;
}

echo "<div id='admin_layer_two_menu_container' class='admin_layer_two_menu_container'>";
	
	//for each of the options
	//echo a div of appropriate width
	//if matches the default then state as currentyl selected

	echo "
		<style>
			.admin_layer_two_menu_options{
				width: calc(100% / ".count($admin_sub_menu_options).");
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
			.admin_layer_two_menu_options:hover{
			
					
			
			}
		</style>";
echo "
<script>
	function ChangeAdminLayerTwoMenu(to) {
	  var xhttp = new XMLHttpRequest();
	  xhttp.onreadystatechange = function() {
	    if (this.readyState == 4 && this.status == 200) {
	     document.getElementById('admin_container').innerHTML = this.responseText;
	    }
	  };
	  xhttp.open('GET', '/components/crew_bar/menu_system/container_calculations.php?primary_folder=".$_GET['primary_folder']."&secondary_folder=".$_GET['secondary_folder']."&tertiary_folder=".$_GET['tertiary_folder']."&change_to=secondary_layer&to='+to);
	  xhttp.send();
	}
</script>
<style>
.admin_second_layer_tabs_not_selected{
color: black; background-color: #ffb5b5;
}
.admin_second_layer_tabs_not_selected:hover{
color: white; background-color: red;
}
.admin_second_layer_tabs_selected{
color: white ;background-color: red ;
}

</style>";	
		

require_once $_SERVER['DOCUMENT_ROOT']."/components/functions/strip_underscores.php";
	for($i = 0; $i < count($admin_sub_menu_options); $i++){
		echo "<a href='#' class='admin_layer_two_menu_options ";
		
		if($_SESSION['admin_secondary_menu_layer_for'.$_SESSION['admin_principle_menu_layer']] == $admin_sub_menu_options[$i]){
		
		
			echo " admin_second_layer_tabs_selected ";
		}
		else{
			echo " admin_second_layer_tabs_not_selected ";
		}

//echo $_SERVER['REQUEST_URI'];
//exit();
		
		echo "' 
		
		
		
			 onclick='ChangeAdminLayerTwoMenu(&#39;".$admin_sub_menu_options[$i]."&#39);return false;'
		>";
			echo strip_underscores($admin_sub_menu_options[$i]);
		echo "</a>";
	}
	//echo 'heeeeelp';
echo "</div>";	



//if a third layer menu then it should go here too.			



	









