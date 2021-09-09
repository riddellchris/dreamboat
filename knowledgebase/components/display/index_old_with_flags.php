<?php
if(!isset($_SESSION)){session_start();}


require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/start.php";

//require_file("/knowledgebase/components/styling/sail_silhouettes.php");
//require_file("/knowledgebase/components/styling/main_css.php");

echo "<div style='color: #281e96;font-family: Comfortaa;max-width:100%;text-align:left;resize:both;margin-top:15px;margin-bottom:95px;'>";

echo "<div id='prospectus_body_div' >";
//old menu options just for reference for now
//require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/development/archives/old_menu_items.php";
//echo "/knowledgebase/components//welcome/display.php";
//exit();


function end_of_title_div(){
	echo "<div style='height:26px;float:left;clear:left;'></div>";
}




if($_GET['primary_folder'] != 'legal'){
	if(	check_tertiary_folder_not('flyer') AND
		check_tertiary_folder_not('snapshot')){	
		require_file("/knowledgebase/components/sections/welcome/display.php");
		require_file("/knowledgebase/components/sections/instructions/display.php");	//really should include more about slideshow etc
	}
		//require_file("/knowledgebase/components/sections/questions_comments_and_more_information/display.php");  ///pretty sure this will just be blended into the functional / wiki
		//currently displayed for all but needs some work
		require_file("/knowledgebase/components/sections/problems_and_solutions/display.php");
		require_file("/knowledgebase/components/sections/our_model_of_productivity/display.php");
		require_file("/knowledgebase/components/sections/causes_of_productivity_issues/display.php");	
		require_file("/knowledgebase/components/sections/reasons_for_unresolved_productivity_issues/display.php");
		require_file("/knowledgebase/components/sections/our_model_of_productivity_improvement/display.php");
		require_file("/knowledgebase/components/sections/current_product_disclosure/display.php");
		require_file("/knowledgebase/components/sections/future_product_development/display.php");
		require_file("/knowledgebase/components/sections/your_options/display.php");
		require_file("/knowledgebase/components/sections/contact_us/display.php");
}	
else{
		require_file("/knowledgebase/components/sections/current_product_disclosure/display.php");
		//echo "</div>"; //just to deal with a crappy error frankly
		require_file("/knowledgebase/components/sections/contact_us/display.php");
		echo "<div style='height:125px;clear:left;float:left;'>&nbsp;</div>";

}

echo "<div style='height:25vh;clear:left;float:left;'>&nbsp;</div>";

echo "</div>";
echo "<script>
$(document).onload(function() {
  $('.unhidden').removeClass('unhidden');
});
</script>";

require_file("/components/functions/javascript/open_close_content_div.php");


//require_file("/legal/pieces/end_div.php"); 
require_file("/components/layouts/standard_page/end.php");