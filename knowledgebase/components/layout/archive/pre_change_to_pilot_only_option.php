<?php 
if(!isset($_SESSION)){session_start();}

//manages the menu settings
if(isset($_GET['tertiary_folder']) && !isset($_GET['quarternary_folder'])){
$_SESSION[$_GET['primary_folder']."_".$_GET['secondary_folder']] = $_GET['tertiary_folder'];
}
if(isset($_GET['quarternary_folder'])){
$_SESSION[$_GET['primary_folder']."_".$_GET['secondary_folder']."_".$_GET['tertiary_folder']] = $_GET['quarternary_folder'];
}



require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/start.php";
require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/styling/main_css.php";

require $_SERVER['DOCUMENT_ROOT']."/components/functions/knowledgebase/include_images.php";

//include_knowledgebase_image('/knowledgebase/faqs/diagrams/sandblasting_after.svg', 'default', 'default');


?>





<style>

	
	.knowledge_image{
		display:	inline-block;
	}
	.knowlegebase_image_div{
		width:		100%;
		text-align:	center;
	
	}
	
	
	.left{	background-color: #C9DAF8;	}	
	.right{padding-left: 1vw;padding-right: 1vw;font-family: Comfortaa;padding-top:12px;}	
	
	#knowledgebase_breadcrumbs{
		text-transform:uppercase;
	}
	
	@media only screen and (min-width: 768px) {
		.left{				overflow-y: auto;
			width:25vw;
			height:  calc(100vh - 100px);
			float:left;
			box-shadow: 10px 0 5px -2px #888;
			position: fixed;
		}
		.right{	margin-left:25vw;
			width:71vw;
			height:100vh;
		}
		#knowledgebase_breadcrumbs{
			display: none;
		}	
	}
	@media only screen and (max-width: 768px) {	
		.left{width:100vw;
		float: none;
		box-shadow: none;
		position: unset;
		display: none;
		height: 100vh;
		}
		.right{	margin-left:0vw;
			width: 98vw;
			height:100vh;
		}
		#knowledgebase_breadcrumbs{
			display: inline-block;
		}
	}	


	
	#knowledgebase_breadcrumbs{background-color: #C9DAF8;
				margin-top: -12px;
				padding-top: 12px;
				padding-bottom: 12px;
				margin-left: -1vw;
				margin-right: -1vw;
				width:100vw;
	}
	.breadcrumb_links{
				background-color: #99beff;
				font-weight: 700;
					    color: #4332ff;
				padding: 1vh 1vw;	  
				clear: left;
				float: left;  
	    }
	    
	    
	.can_select:hover{background-color: red;}
</style>

<section class="container" style='position: absolute;'>
	<div id='mobile_menu' class='left'>
		<?php 



function primary_knowledgebase_menu_item($id){	
	echo "<a id='".$id."' ";
//	if($_GET['secondary_folder'] != $id){ echo " href='/knowledgebase/".$id."/' "; }

	echo " href='/knowledgebase/".$id."/' ";
	echo " class='legal-big-title collapsible ";
	if($_GET['secondary_folder'] == $id){ echo " active ";}	
	echo "'";
	if($_GET['secondary_folder'] == $id){ echo " style = 'color: red; font-weight: 700;'"; }
	echo ">".strip_underscores($id)."</a>"; 
}		


function secondary_knowledgebase_menu_item($id){	
	echo "<a id='".$id."' ";
	
	
//	if($_GET['tertiary_folder'] != $id){ echo " href='/knowledgebase/".$_GET['secondary_folder']."/".$id."/' "; }
	echo " href='/knowledgebase/".$_GET['secondary_folder']."/".$id."/' "; 
	echo " class='legal-big-title collapsible  active ";
		
	if($_GET['tertiary_folder'] != $id){echo " can_select ";}
	echo "' style = 'padding-left:3vw;";
	if($_GET['tertiary_folder'] == $id){ echo " color: red; font-weight: 700;"; }
	echo "'>".strip_underscores($id)."</a>"; 
}	

function tertiary_knowledgebase_menu_item($id){	
	echo "<a id='".$id."' ";
	
	
//	if($_GET['tertiary_folder'] != $id){ echo " href='/knowledgebase/".$_GET['secondary_folder']."/".$id."/' "; }
	echo " href='/knowledgebase/".$_GET['secondary_folder']."/".$_GET['tertiary_folder']."/".$id."/' "; 
	echo " class='legal-big-title collapsible  active ";
		
	if($_GET['quarternary_folder'] != $id){echo " can_select ";}
	echo "' style = 'padding-left:6vw;";
	if($_GET['quarternary_folder'] == $id){ echo " color: red; font-weight: 700;"; }
	echo "'>".strip_underscores($id)."</a>"; 
}

function quarternary_knowledgebase_menu_item($id){	
	echo "<a id='".$id."' ";
	
	
//	if($_GET['tertiary_folder'] != $id){ echo " href='/knowledgebase/".$_GET['secondary_folder']."/".$id."/' "; }
	echo " href='/knowledgebase/".$_GET['secondary_folder']."/".$_GET['tertiary_folder']."/".$_GET['quarternary_folder']."/".$id."/' "; 
	echo " class='legal-big-title collapsible  active ";
		
	if(strpos($_SERVER[REQUEST_URI],$id) != 1){echo " can_select ";}
	echo "' style = 'padding-left:9vw;";
	if(strpos($_SERVER[REQUEST_URI],$id)){ echo " color: red; font-weight: 700;"; }
	echo "'>".strip_underscores($id)."</a>"; 
}

echo "<div style='height:12px;'></div>";	

//primary_knowledgebase_menu_item('summary');

	
	
primary_knowledgebase_menu_item('welcome');
/*
if($_GET['secondary_folder'] == 'welcome'){
	secondary_knowledgebase_menu_item('instructions');
	secondary_knowledgebase_menu_item('synopsis');
	} */

primary_knowledgebase_menu_item('our_plan');
if($_GET['secondary_folder'] == 'our_plan'){
	secondary_knowledgebase_menu_item('overview');
	secondary_knowledgebase_menu_item('mission');
	secondary_knowledgebase_menu_item('objectives');
	secondary_knowledgebase_menu_item('hypothesis');	
	secondary_knowledgebase_menu_item('results');		
	secondary_knowledgebase_menu_item('measurement_challenges');
//	secondary_knowledgebase_menu_item('expected_phases');	
	
	}


primary_knowledgebase_menu_item('technology');
if($_GET['secondary_folder'] == 'technology'){
	secondary_knowledgebase_menu_item('overview');
	//secondary_knowledgebase_menu_item('modules');
		//time optimisation
		//sales optimisation
		//activitiy optimisation
		//internal communication optimisation
		//workflow optimisation
		//more as we go and learn
		
	//secondary_knowledgebase_menu_item('features');
		//autocoach	
		//internal reporting //dreamboat only	
	//secondary_knowledgebase_menu_item('data');  //above technology to create link between productivity inputs and technology at the heart of the system	
		//comparative data
		//valuations	
	//secondary_knowledgebase_menu_item('upcoming improvments');
		//optimisation engine development
			//like a chess engine
	}

	
primary_knowledgebase_menu_item('initial_solution');
if($_GET['secondary_folder'] == 'initial_solution'){
	//secondary_knowledgebase_menu_item('introduction');
	
	secondary_knowledgebase_menu_item('summary');	/*	
	secondary_knowledgebase_menu_item('features');	
	if($_GET['tertiary_folder'] == 'features'){
		tertiary_knowledgebase_menu_item('summary');	
		tertiary_knowledgebase_menu_item('issue_removal');
		tertiary_knowledgebase_menu_item('activity_optimisation');	
		tertiary_knowledgebase_menu_item('opportunity_identification');		
		tertiary_knowledgebase_menu_item('improvement_planning');	
		tertiary_knowledgebase_menu_item('kpi_tracking');	
		}*/	


//	secondary_knowledgebase_menu_item('methodology');
//	secondary_knowledgebase_menu_item('processes');

// secondary_knowledgebase_menu_item('application');
	secondary_knowledgebase_menu_item('pilots');	
	
//	secondary_knowledgebase_menu_item('processes');	
	secondary_knowledgebase_menu_item('reporting');
	secondary_knowledgebase_menu_item('pricing');				
	secondary_knowledgebase_menu_item('risks');
	secondary_knowledgebase_menu_item('benefits');
	/* taken out for now
	if($_GET['secondary_folder'] == 'benefits'){
		secondary_knowledgebase_menu_item('product');	
		secondary_knowledgebase_menu_item('staff');	
		secondary_knowledgebase_menu_item('business');	
		secondary_knowledgebase_menu_item('owners');	
	}*/	
//	secondary_knowledgebase_menu_item('general_expected_benefits');	
	//start by taking from /initial_solution/general_expected_benefits 	
	
	secondary_knowledgebase_menu_item('expectations');	
	secondary_knowledgebase_menu_item('payments');
	secondary_knowledgebase_menu_item('refunds_and_exit_clauses');	
}		






	
primary_knowledgebase_menu_item('future_development');
if($_GET['secondary_folder'] == 'future_development'){
	secondary_knowledgebase_menu_item('introduction');
	secondary_knowledgebase_menu_item('reinvestment_plans');
	secondary_knowledgebase_menu_item('statistical_reliability_objectives');
	secondary_knowledgebase_menu_item('user_support_systems');		
	secondary_knowledgebase_menu_item('pilot_support_systems');		
	secondary_knowledgebase_menu_item('unique_products_and_services');							
	}

primary_knowledgebase_menu_item('about_us');
if($_GET['secondary_folder'] == 'about_us'){
	secondary_knowledgebase_menu_item('why');			
	secondary_knowledgebase_menu_item('vision');	
	secondary_knowledgebase_menu_item('mission');	}	



primary_knowledgebase_menu_item('economy');
if($_GET['secondary_folder'] == 'economy'){	
	secondary_knowledgebase_menu_item('disaster');
		if($_GET['tertiary_folder'] == 'disaster'){	
			tertiary_knowledgebase_menu_item('downside_risks');	
		}

	secondary_knowledgebase_menu_item('fundamentals');				
	secondary_knowledgebase_menu_item('solution');	
		if($_GET['tertiary_folder'] == 'solution'){	
			tertiary_knowledgebase_menu_item('appendix');	
		}	
	
	secondary_knowledgebase_menu_item('contention');
		if($_GET['tertiary_folder'] == 'contention'){	
			tertiary_knowledgebase_menu_item('principle_concerns');	
		}
	}

primary_knowledgebase_menu_item('productivity');
if($_GET['secondary_folder'] == 'productivity'){
	secondary_knowledgebase_menu_item('issues');
	if($_GET['tertiary_folder'] == 'issues'){	
		tertiary_knowledgebase_menu_item('definition');	
		tertiary_knowledgebase_menu_item('examples');	
		tertiary_knowledgebase_menu_item('why_issues_exist');
		tertiary_knowledgebase_menu_item('why_issues_remain');	
	}
	secondary_knowledgebase_menu_item('factors');
	secondary_knowledgebase_menu_item('assumptions');
	secondary_knowledgebase_menu_item('contention');
	secondary_knowledgebase_menu_item('new_opportunities');	
	}
	
primary_knowledgebase_menu_item('linear_productivity');
if($_GET['secondary_folder'] == 'linear_productivity'){
	secondary_knowledgebase_menu_item('definition');	
	secondary_knowledgebase_menu_item('resistance');			
	secondary_knowledgebase_menu_item('measurement');								
	}

primary_knowledgebase_menu_item('network_productivity');
if($_GET['secondary_folder'] == 'network_productivity'){
	secondary_knowledgebase_menu_item('summary');
	secondary_knowledgebase_menu_item('benefits');		
	secondary_knowledgebase_menu_item('symbology');	
	secondary_knowledgebase_menu_item('domains');		
/*	if($_GET['tertiary_folder'] == 'domains'){	
		tertiary_knowledgebase_menu_item('individual');	
		tertiary_knowledgebase_menu_item('business');	
		tertiary_knowledgebase_menu_item('economic');	
		} */

	secondary_knowledgebase_menu_item('upgrades');			
//	if($_GET['tertiary_folder'] == 'upgrades'){}
	secondary_knowledgebase_menu_item('measurement_and_evaluation');		
	}

primary_knowledgebase_menu_item('faqs');			
primary_knowledgebase_menu_item('instructions');			
		
primary_knowledgebase_menu_item('other_definitions');
if($_GET['secondary_folder'] == 'other_definitions'){
	secondary_knowledgebase_menu_item('trickle_right_up_economics');
	}

echo "<br><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR>";

		?>
	</div>
	<div id = 'knowledgebase_right' class='right'>
		
		<div id='knowledgebase_breadcrumbs'>
		<?php
			echo "<a class='breadcrumb_links' href='javascript:void(0);' onclick='myFunction();topFunction();'>>".strip_underscores($_GET['secondary_folder'])."</a>";
			if(isset($_GET['tertiary_folder'])){
				echo "<br>";
				echo "<a class='breadcrumb_links' href='javascript:void(0);' onclick='myFunction();topFunction();'>>".strip_underscores($_GET['tertiary_folder'])."</a>";			
			}
			if($_GET['quarternary_folder'] != 'unknown'){
				echo "<br>";
				echo "<a class='breadcrumb_links' href='javascript:void(0);' onclick='myFunction();topFunction();'>>".strip_underscores($_GET['quarternary_folder'])."</a>";			
			}
			
			//if 4 levels as withing 

		?>
			
		</div>




	