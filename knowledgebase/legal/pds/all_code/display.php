<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/start.php";

echo "<div style='color: #281e96;font-family: Comfortaa;max-width:100%;text-align:left;resize:both;margin-top:15px;margin-bottom:95px;'>";



//these should probably change depending on the $_GET['tertiary_folder'] 
//size, 	importance ///10 point rating 10/10 absolute importance
//weight, 	certainty  ///10 point scale too. //how certain are you that this will happen (is happening today = 10), might happen in 10 years = 0
//opacity,	accuracy.  ///10 point scale too. //how accurate is this information (totally validated by a sample of 1,000,000 = 10) (theoretical concept supported by nobody = 0)
//we have to use 
echo "
<style>
.importance_class_10{font-size: 2em;}
.importance_class_9{font-size: 1.9em;}
.importance_class_8{font-size: 1.8em;}
.importance_class_7{font-size: 1.7em;}
.importance_class_6{font-size: 1.6em;}
.importance_class_5{font-size: 1.5em;}
.importance_class_4{font-size: 1.4em;}
.importance_class_3{font-size: 1.3em;}
.importance_class_2{font-size: 1.2em;}
.importance_class_1{font-size: 1.1em;}
.importance_class_0{font-size: 1em;}";

//comfortaa only goes from 700-300 soo....
echo "
.certainty_class_10{font-weight: 700;}
.certainty_class_9{font-weight: 700;}
.certainty_class_8{font-weight: 600;}
.certainty_class_7{font-weight: 600;}
.certainty_class_6{font-weight: 500;}
.certainty_class_5{font-weight: 500;}
.certainty_class_4{font-weight: 400;}
.certainty_class_3{font-weight: 400;}
.certainty_class_2{font-weight: 300;}
.certainty_class_1{font-weight: 300;}
.certainty_class_0{font-weight: 300;}";

//this is the fastest and simplest way to in effect change color...
//perhaps we should have a highlight fucntio to make it red or something similar... not for today
echo "
.accuracy_class_10{opacity: 1.0;}
.accuracy_class_9{opacity: 0.9;}
.accuracy_class_8{opacity: 0.8;}
.accuracy_class_7{opacity: 0.7;}
.accuracy_class_6{opacity: 0.6;}
.accuracy_class_5{opacity: 0.5;}
.accuracy_class_4{opacity: 0.4;}
.accuracy_class_3{opacity: 0.3;}
.accuracy_class_2{opacity: 0.2;}
.accuracy_class_1{opacity: 0.1;}
.accuracy_class_0{opacity: 0.0;}

.red_highlight_font{//color: red;}
</style>
";





//some media queries are required here for sure to perfect the font size for mobile and no-mobile

echo"
<style>

/* Style the button that is used to open and close the collapsible content */
.collapsible {
//transform: rotateY(0deg) rotate(6deg);
  background-color: #a8a1ff;
  color: #444;
  cursor: pointer;
  padding: 18px;
  border: none;
  text-align: left;
  outline: none;width:102vw;
 // box-shadow: 
 //       inset 0px 11px 8px -10px #CCC,
 //       inset 0px -11px 8px -10px #CCC; 
}

.collapsible:hover{
background-color: #4332ff;
  box-shadow: 
        inset 0px 11px 8px -10px #0f004a,
        inset 0px -11px 8px -10px #0f004a; 
}

.active.collapsible{
background-color: #4332ff;
}

/* Add a background color to the button if it is clicked on (add the .active class with JS), and when you move the mouse over it (hover) */
.active.collapsible:hover {
 // background-color: #ccc;
background-color: #281e96;
}

/* Style the collapsible content. Note: hidden by default */
.content {
  padding: 1vh 18px 4vh;
  overflow: hidden;
//  background-color: #f1f1f1;
}


.print_only{display:none;}

/* print styles */
@media print{
	.collapsible{box-shadow:none;}
	.not_for_print{display:none;}
	.print_only{display: block;}
	.content {display: block; padding-top:0px;}
	.legal-title {background-color: #cec9ff;}
	#main_top_nav_bar{display:none;}
	#mobile_menu_icon{display:none;}
	#sub_menu_div_container{display:none;}
	#sub_sub_menu_div_container{display:none;}	
	.nav-links{display:none;}
	body{	margin: 0;
    		color: #000;
    		background-color: #fff;
    		overflow-y: hidden;}
	#footer{display:none;}
	.pilots_eyes_only_font{display:none;}
	#admin_container{display:none;}	
	
	#economic_background_household_debt_to_gdp{height:100%;}
	
	
	
	
	
	
	}
	
/* NON print styles */	
//@media screen  and (min-width: 1300px){					#pds_body_div{	margin-left:18vw;	margin-right:18vw;	}
//									.collapsible{			  width: 64vw;	}}
//@media screen  and (max-width: 1300px)  and (min-width: 600px){		#pds_body_div{	margin-left:8vw;	margin-right:8vw;	}
//									.collapsible{		  width: 84vw;		}}
//@media screen  and (max-width: 600px){					#pds_body_div{	margin-left:2vw;	margin-right:2vw;	}
//									.collapsible{		width: 100vw; margin-left:-2vw;	margin-right:-2vw;	}}


//this just cuts out any of the side gaps on these things
@media screen  and (min-width: 1300px){					.google_chart_divs{	margin-left:-9vw;	margin-right:-9vw;	}}
@media screen  and (max-width: 1300px)  and (min-width: 600px){		.google_chart_divs{	margin-left:-4vw;	margin-right:-4vw;	}

}
@media screen  and (max-width: 600px){					.google_chart_divs{	margin-left:2vw;	margin-right:-4vw;	}}

.legal-title{
color: white;
//color:red;
text-transform:uppercase;
}
.legal-big-title{font-size:x-large;color:red;text-transform:uppercase;}
</style>";



if(	check_tertiary_folder_not('flyer') AND
	check_tertiary_folder_not('snapshot')){
echo "<div style='height:100vh;text-align:center;'>";
	echo "<div style='margin-top:28vh;font-size:7vw;font-weight:800;font-family:Helvetica;'>";
		echo "DREAMBOAT";
	echo "</div>";
	echo "<div style='font-size: 2.6vw;color:red;'>Product Disclosure Statement</div>";
	print_copy_for_pilots_only("
		The importance of this is to connect everyone with a WHY that's great than themselves.<br>
		It's not about helping themselves directly or even looking at themselves directly it's about universal objectives and connecting for that reason for everyone, staff and owners.<br>
		It's almost NOT about profit for anyone just doing what's right, the right thing to do that matters and that's universally applicable.<br>
		HENCE THE IMPORTANCE OF THE pds, especially the pieces prior to our services
		");
echo "</div>";
}




echo "<div id='pds_body_div'>";

if(	check_tertiary_folder_not('flyer') AND
	check_tertiary_folder_not('snapshot')){
	
	
		major_menu_option('Welcome', 			'welcome');		
		bigger_gap();
		
		
		major_menu_option('Instructions', 		'instructions');		
		bigger_gap();		
		
		major_menu_option('Problem & Solution', 			'problem_and_solution');		
		//new_line_of_copy();
		menu_option('The Economic Problem', 			'the_economic_problem'				);
		menu_option('A Simple Solution', 			'a_simple_solution'				);		
		//menu_option('Required Returns', 			'required_returns'				);
		
		bigger_gap();
		major_menu_option('Our model of productivity', 	'our_model_of_productivity');		
		//new_line_of_copy();
		menu_option('Assumptions', 			'assumptions'	);
		menu_option('What is productivity',		'what_is_productivity');
		menu_option('Productivity Resistance',		'productivity_resistance');
		menu_option('Collective Productivity',		'collective_productivity');
		menu_option('General Factors of Productivity',	'factors');
		menu_option('Measurement & Observation', 	'observation'	);
		
		bigger_gap();
		major_menu_option('Causes of productivity imperfections', 	'causes_of_productivity_imperfections');		
		//new_line_of_copy();
		menu_option('Summary', 				'summary'	); //probably should just be text
		menu_option('Limited focal capacity', 		'limited_focal_capacity'	);//spotfires, not reactive
		menu_option('Lack of active search', 		'lack_of_active_search'		);
		menu_option('Limited communication', 		'limited_communication'		);
		menu_option('Overwhelming backlog', 		'overwhelming_backlog'		);
		menu_option('Barriers to change', 		'barriers to change'		); //when take into consideration management cost
		menu_option('Lack of internal expertise',	'lack_of_internal_expertise'	); 
		menu_option('Strategic whirlwinds', 		'strategic_whirlwinds'		); 		
		
		bigger_gap();
		major_menu_option('Our model of productivity improvement', 	'our_model_of_productivity_improvement');		
		//new_line_of_copy();
		//menu_option('Business Realities', 		'business_realities'		);
		//menu_option('Humanistic Considerations', 	'humanistic_considerations'	);
		menu_option('Awareness', 			'awareness'			);
		menu_option('Prioritisation', 			'prioritisation'		);
		menu_option('Targeted Removal', 		'targeted_removal'		);
		menu_option('Primary Modes of Improvement', 	'primary_modes_of_improvement'	);
				
		//I guess here I can just have basic numbers that hide as required to print and PDF it... if that's a problem for me.. I don't know... perhaps I would need to be signed in or something to make that sick
		bigger_gap();
		major_menu_option('Current Product Disclosure',		'current_product_disclosure');
		//new_line_of_copy();
		menu_option('Introduction', 				'current_product_disclosure_introduction'		);
		menu_option('Process', 					'process'		);
		menu_option('Pilots', 					'pilots'		);
		menu_option('Technology', 				'technology'		);
		menu_option('Services', 				'services'		);
		menu_option('Pricing', 					'pricing'		);
		menu_option('Suggested investments', 			'suggested_investments'	);
		menu_option('Expected Benefits', 			'expected_benefits'	);
		menu_option('Cooling off',				'cooling_off'		);
		menu_option('Initial Engagements', 			'initial_engagements'	);
		menu_option('Risks', 					'risks'			);
		menu_option('Reporting', 				'reporting'		);
		menu_option('Payments', 				'payments'		);
		menu_option('Refunds & Exit Clauses', 			'refunds_and_exit_clauses'		);
			
		bigger_gap();
		major_menu_option('Future Product Intentions', 		'future_product_intentions');		
		//new_line_of_copy();
		menu_option('Reinvestment Plans', 			'reinvestment_plans');
		menu_option('Statistical reliability objectives', 	'statistical_reliability_objectives');
		menu_option('User support systems', 			'user_support_systems');
		menu_option('Pilot support systems', 			'pilot_support_systems');
		menu_option('Unique products and services', 		'unique_products_and_services');	
		
		bigger_gap();
		major_menu_option('Your options',		'your_options');	
		
		bigger_gap();
		major_menu_option('Contact Us',				'contact_us');
		bigger_gap();
		bigger_gap();bigger_gap();bigger_gap();
		print_copy_for_pilots_only('(this is critical as the actual sales pitch)');
}



bigger_gap();
bigger_gap();

echo "	<div style='font-family: Caveat;    text-align: center;    color: #cecece;    font-size: 8vh; margin-right: 1.5%;'>
		30 minutes a week to improve your productivity & save your country's economy
	</div>";

bigger_gap();bigger_gap();
bigger_gap();


if(	check_tertiary_folder_not('flyer') AND
	check_tertiary_folder_not('snapshot')){	
	require $_SERVER['DOCUMENT_ROOT']."/legal/pds/all_code/welcome/display.php";
	require $_SERVER['DOCUMENT_ROOT']."/legal/pds/all_code/instructions/display.php";
}

	//currently displayed for all but needs some work
	require $_SERVER['DOCUMENT_ROOT']."/legal/pds/all_code/problem_and_solution/display.php";
	require $_SERVER['DOCUMENT_ROOT']."/legal/pds/all_code/our_model_of_productivity/display.php";
	require $_SERVER['DOCUMENT_ROOT']."/legal/pds/all_code/causes_of_productivity_imperfections/display.php";
	require $_SERVER['DOCUMENT_ROOT']."/legal/pds/all_code/our_model_of_productivity_improvement/display.php";
	require $_SERVER['DOCUMENT_ROOT']."/legal/pds/all_code/current_product_disclosure/display.php";
	require $_SERVER['DOCUMENT_ROOT']."/legal/pds/all_code/future_product_intentions/display.php";
	require $_SERVER['DOCUMENT_ROOT']."/legal/pds/all_code/your_options/display.php";
	require $_SERVER['DOCUMENT_ROOT']."/legal/pds/all_code/contact_us/display.php";
	





echo "<script>
$(document).onload(function() {
  $('.unhidden').removeClass('unhidden');
});
</script>";

require_file('/components/functions/javascript/open_close_content_div.php');


//require $_SERVER['DOCUMENT_ROOT']."/legal/pieces/end_div.php"; 
require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/end.php";