<?php
if(!isset($_SESSION)){session_start();}
require_once $_SERVER['DOCUMENT_ROOT']."/components/functions/url_and_folder_functions.php";


require $_SERVER['DOCUMENT_ROOT']."/components/functions/knowledgebase/include_images.php";


//this will need to be something closer to just a sigle colume knowledgebase
require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/start.php";

require_once $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/styling/main_css.php";
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

echo "
<style>



/* Style the button that is used to open and close the collapsible content */
.collapsible {
  background-color: #eee;
  color: #444;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  border: none;
  text-align: left;
  outline: none;
}

/* Add a background color to the button if it is clicked on (add the .active class with JS), and when you move the mouse over it (hover) */
.active, .collapsible:hover {
 // background-color: #ccc;
background-color: #cec9ff;
}

/* Style the collapsible content. Note: hidden by default */
.content {
  padding: 4vh 18px;
  overflow: hidden;
//  background-color: #f1f1f1;
}


.print_only{display:none;}

/* print styles */
@media print{
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
@media screen  and (min-width: 1300px){					#prospectus_body_div{	margin-left:18vw;	margin-right:18vw;	}}
@media screen  and (max-width: 1300px)  and (min-width: 600px){		#prospectus_body_div{	margin-left:8vw;	margin-right:8vw;	}}
@media screen  and (max-width: 600px){					#prospectus_body_div{	margin-left:2vw;	margin-right:2vw;	}}

.legal-title{
color: #4332ff;
//color:red;
text-transform:uppercase;
}
.legal-big-title{font-size:xx-large;color:red;text-transform:uppercase;}
</style>";


echo "<div id='prospectus_body_div' style='font-family:Comfortaa;'>";
menu_option('Introduction', 				'introduction'		);
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

require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/current_product_disclosure/introduction/index.php";
require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/current_product_disclosure/process/index.php";
require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/current_product_disclosure/pilots/index.php";
require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/current_product_disclosure/technology/index.php";
require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/current_product_disclosure/services/index.php";
require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/current_product_disclosure/pricing/index.php";
require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/current_product_disclosure/suggested_inputs/index.php";
require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/current_product_disclosure/expected_outputs/index.php";
require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/current_product_disclosure/initial_engagement_periods/index.php";
require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/current_product_disclosure/risks/index.php";
require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/current_product_disclosure/reporting/index.php";
require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/current_product_disclosure/payments/index.php";
require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/current_product_disclosure/refunds_and_exit_clauses/index.php";
require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/current_product_disclosure/your_options/index.php";
require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/current_product_disclosure/contact_us/index.php";

echo "</div>";

echo "<div style='height:65px;'></div>";

require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/end.php";