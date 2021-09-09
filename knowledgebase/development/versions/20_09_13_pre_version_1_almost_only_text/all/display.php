<?php
if(!isset($_SESSION)){session_start();}


require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/start.php";

require_file("/knowledgebase/styling/style_guide/sail_silhouettes.php");


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

.red_highlight_font{color: red;}


/* Style the button that is used to open and close the collapsible content */

.collapsible {	  color: #444;
		  cursor: pointer;
		  padding: 18px;
		  border: none;
		  text-align: left;
		  outline: none;
		  height: 5vh;
		}
.collapsible:hover{	 color:black;}		
		

.collapsible {  		background-color: #a8a1ff;}
//.collapsible:hover{		background-color: #4332ff;
//  				box-shadow: 	inset 0px 11px 8px -10px #0f004a,
//        					inset 0px -11px 8px -10px #0f004a; 
//		}


.collapsible.active{		background-color: #4332ff;}
//.collapsible.active:hover {	background-color: #281e96;}


.legal-big-title.collapsible:hover {		background-color: #c21010;}
.legal-big-title.collapsible.active{		background-color: red;}
//.legal-big-title.collapsible.active:hover {	background-color: #c21010;}

//.collapsible {  	transform: rotateY(0deg) rotate(-9deg); 			transition: transform 2s;}/* needs Y at 0 deg to behave properly*/
//.collapsible.active{	transform: rotateY(0deg) rotate(9deg)  translate(0%, 20px);}

.content {  padding: 1vh 18px 4vh;}
.new_hidden{	height: 0px;
	    	padding: 0px;
		opacity: 0;
	    	z-index: -1000;
	}

.highlights{font-size: x-large; margin-left: 2vw;}";


//obviously now legal title is all but redundant but that's just how it goes until I can put together code to change all these things at far greater speed
echo "

.legal-title{
color: white;
text-transform:uppercase;
font-family: Comfortaa;
}
.legal-big-title{
background-color:red;
text-transform:uppercase;
color:white;
padding: 20px;
font-family: Comfortaa;
}

.content_containter{
padding: 2vmin;
}

a{color:red;}

/* print styles */
.print_only{display:none;}

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
	}";
	
/* NON print styles */	

//the left line is 19vh
echo "
@media screen  and (min-width: 1300px){					#prospectus_body_div{	margin-left:25vw;	margin-right:40vh;	}}
@media screen  and (max-width: 1300px)  and (min-width: 768px){		#prospectus_body_div{	margin-left:25vw;	margin-right:8vh;	}}
@media screen  and (max-width: 768px){					#prospectus_body_div{	margin-left:0vmin;	margin-right:2vmin;	}}
";

//require $_SERVER['DOCUMENT_ROOT'].__DIR__."/development/archives/old_google_chart_margin_css.php";


echo "</style>";







echo "<div id='prospectus_body_div' >";
//old menu options just for reference for now
//require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/development/archives/old_menu_items.php";


//echo __DIR__."/welcome/display.php";
//exit();

if(	check_tertiary_folder_not('flyer') AND
	check_tertiary_folder_not('snapshot')){	
	require_file_from_this_directory(__DIR__."/welcome/display.php");
	require_file_from_this_directory(__DIR__."/instructions/display.php");
}

	//currently displayed for all but needs some work
	require_file_from_this_directory(__DIR__."/problems_and_solutions/display.php");
	require_file_from_this_directory(__DIR__."/our_model_of_productivity/display.php");
	require_file_from_this_directory(__DIR__."/principle_causes_of_productivity_imperfections/display.php");
	require_file_from_this_directory(__DIR__."/our_model_of_productivity_improvement/display.php");
	require_file_from_this_directory(__DIR__."/current_product_disclosure/display.php");
	require_file_from_this_directory(__DIR__."/future_product_intentions/display.php");
	require_file_from_this_directory(__DIR__."/your_options/display.php");
	require_file_from_this_directory(__DIR__."/contact_us/display.php");
	





echo "<script>
$(document).onload(function() {
  $('.unhidden').removeClass('unhidden');
});
</script>";

require_file("/components/functions/javascript/open_close_content_div.php");


//require_file("/legal/pieces/end_div.php"); 
require_file("/components/layouts/standard_page/end.php");