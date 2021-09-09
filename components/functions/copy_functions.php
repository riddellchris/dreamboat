<?php
if(!isset($_SESSION)){session_start();}

if (!function_exists('menu_option')){
	function menu_option($text, $anchor){
		admin_functions_in_pages_usage(__FUNCTION__,__FILE__);
		echo "<a href='#".$anchor."'  onclick='open_".$anchor."();' class='minor_legal_menu_item'>".$text."</a><br>";
		echo "
		<script>
		function open_".$anchor."() {
			document.getElementById('".$anchor."_details').style.display = 'block';
			var element = document.getElementById('".$anchor."_button');
			element.classList.add('active');
			}
		</script>
		
		
		";
	}
}

if (!function_exists('major_menu_option')){
	function major_menu_option($text, $anchor){
		admin_functions_in_pages_usage(__FUNCTION__,__FILE__);
		if($anchor == 'welcome'){echo "
			<style>
				#menu:focus{
					outline-offset:0px;
				-webkit-tap-highlight-color: rgba(255, 255, 255, 0); 
				-webkit-tap-highlight-color: transparent; 
				outline: none !important;
				}
				.legal_major_menu_item{
				text-transform:uppercase;
				color:red;
				outline-offset:0px;
				padding-bottom:3vh;		
				}

				@media only screen and (min-width: 768px) {
					.legal_major_menu_item{
						font-size:x-large;
					}
				}
				
				@media print{
				.legal_major_menu_item{text-decoration: none;}
				.minor_legal_menu_item{text-decoration: none;}
				}
			</style>";}

		echo "<a ";
		if($anchor == 'welcome'){echo "id = 'menu' ";}
		//if($anchor == 'contact_us'){echo "id = 'contact_us' ";}
		echo "href='#".$anchor."' class='legal_major_menu_item' style='";
		if($anchor == 'welcome' OR $anchor == 'contact_us' ){echo "position: relative; ";}	
		echo "'>".$text."</a><br>";
	}
}

/*
function copy_big_title_open($title, $id){
	admin_functions_in_pages_usage(__FUNCTION__,__FILE__);
	echo "<div id='".$id."_title_bar' class='legal-big-title' style='position: relative;	top:-0px;'>
		<a id='".$id."' style='position: relative; 		top:-0px;'>".$title."</a>";
	echo "</div>";
	echo "<div id='".$id."_content_container'>";
	}
*/
if (!function_exists('copy_big_title_open')){
	function copy_big_title_open($title, $id, $open_or_not){
		admin_functions_in_pages_usage(__FUNCTION__,__FILE__);

		echo "<button id='".$id."' class='legal-big-title collapsible'>".$title."</button>";
		echo "<div id='".$id."_content_container' class='content_containter' style='";
		
			if($open_or_not == 'open'){echo "display:block;";}
			else{echo "display:none;";}
		
		echo "'>";
		}
}	
	
	
//closes the content container from copy_big_title_open() above	
if (!function_exists('copy_big_title_close')){
	function copy_big_title_close(){
		admin_functions_in_pages_usage(__FUNCTION__,__FILE__);

		echo "</div>";
	}
}

if (!function_exists('copy_title_open')){
	function copy_title_open($title, $id, $open_or_not){
		admin_functions_in_pages_usage(__FUNCTION__,__FILE__);

			echo "	<div id='".$id."' style='position: relative;top:-75px;height:0px;'>&nbsp;</div>";
			//bigger_gap();
			
		if($open_or_not == 'open'){
			$active_or_not = 'active';
			$content_display = 'block';
		}
		else{
			$active_or_not = '';
			$content_display = 'none';	
		
		}
		
		echo "<button  id='".$id."_button' type='button'  class='legal-title collapsible ".$active_or_not."' >".$title."</button>";
		echo "<div id='".$id."_details' class='content' style='display: ".$content_display.";'>";
		}
}

if (!function_exists('copy_title_open')){	
	function copy_title_open(){
		admin_functions_in_pages_usage(__FUNCTION__,__FILE__);
			
		echo "</div>";
	}
}

if (!function_exists('copy_sub_title')){		
	function copy_sub_title($title, $id){
		admin_functions_in_pages_usage(__FUNCTION__,__FILE__);
		bigger_gap();
		echo "<div class='legal-sub-title'>
			<a id='".$id."' style='position: relative;top:-75px;'>&nbsp;</a>
			<br>";  //therefore always keeping it accounting for the top header 
			echo $title;
		echo "</div>";
		}
}	


//NOT DONE YET
//BUT needs to be done
//CR 20.09.03
/*	
function read_more_link($title, $link){
	echo "<div class='read_more_link'>
		<style>@media print {.read_more_link{display:none;}</style>
		<a href='".$link."' style='position: relative;top:-75px;'>$title</a>";
	echo "</div>";
}	
*/	
	
if (!function_exists('paragraph')){	
	function paragraph($text){
		admin_functions_in_pages_usage(__FUNCTION__,__FILE__);
		echo "<p>".$text."</p>";}
}

//size, 	importance ///10 point rating 10/10 absolute importance
//weight, 	certainty  ///10 point scale too. //how certain are you that this will happen (is happening today = 10), might happen in 10 years = 0
//opacity,	accuracy.  ///10 point scale too. //how accurate is this information (totally validated by a sample of 1,000,000 = 10) (theoretical concept supported by nobody = 0)
//we have to use 

//we do this in order to have the class definition change by page
//without altering the styling directly obviously
if (!function_exists('font_importance')){	
	function font_importance($importance){
		admin_functions_in_pages_usage(__FUNCTION__,__FILE__);
		$class = '';

		if($importance == '10'){$class = " importance_class_10 ";}
		if($importance == '9'){$class = "  importance_class_9 ";}
		if($importance == '8'){$class = "  importance_class_8 ";}
		if($importance == '7'){$class = "  importance_class_7 ";}
		if($importance == '6'){$class = "  importance_class_6 ";}
		if($importance == '5'){$class = "  importance_class_5 ";}
		if($importance == '4'){$class = "  importance_class_4 ";}
		if($importance == '3'){$class = "  importance_class_3 ";}
		if($importance == '2'){$class = "  importance_class_2 ";}
		if($importance == '1'){$class = "  importance_class_1 ";}
		if($importance == '0'){$class = "  importance_class_0 ";}
		
		return $class;
	}	
}

if (!function_exists('font_certainty')){	
	function font_certainty($certainty){
		admin_functions_in_pages_usage(__FUNCTION__,__FILE__);
		$class = '';

		if($certainty == '10'){$class = " certainty_class_10 ";}
		if($certainty == '9'){$class = "  certainty_class_9 ";}
		if($certainty == '8'){$class = "  certainty_class_8 ";}
		if($certainty == '7'){$class = "  certainty_class_7 ";}
		if($certainty == '6'){$class = "  certainty_class_6 ";}
		if($certainty == '5'){$class = "  certainty_class_5 ";}
		if($certainty == '4'){$class = "  certainty_class_4 ";}
		if($certainty == '3'){$class = "  certainty_class_3 ";}
		if($certainty == '2'){$class = "  certainty_class_2 ";}
		if($certainty == '1'){$class = "  certainty_class_1 ";}
		if($certainty == '0'){$class = "  certainty_class_0 ";}
		
		return $class;
	}		
}
if (!function_exists('font_accuracy')){
	function font_accuracy($accuracy){
		admin_functions_in_pages_usage(__FUNCTION__,__FILE__);
		$class = '';

		if($accuracy == '10'){$class = " accuracy_class_10 ";}
		if($accuracy == '9'){$class = "  accuracy_class_9 ";}
		if($accuracy == '8'){$class = "  accuracy_class_8 ";}
		if($accuracy == '7'){$class = "  accuracy_class_7 ";}
		if($accuracy == '6'){$class = "  accuracy_class_6 ";}
		if($accuracy == '5'){$class = "  accuracy_class_5 ";}
		if($accuracy == '4'){$class = "  accuracy_class_4 ";}
		if($accuracy == '3'){$class = "  accuracy_class_3 ";}
		if($accuracy == '2'){$class = "  accuracy_class_2 ";}
		if($accuracy == '1'){$class = "  accuracy_class_1 ";}
		if($accuracy == '0'){$class = "  accuracy_class_0 ";}
		
		return $class;
	}
}
if (!function_exists('highlighted_red_font')){
	function highlighted_red_font($highlighted){
		admin_functions_in_pages_usage(__FUNCTION__,__FILE__);
		if($highlighted == 'yes'){ return " red_highlight_font ";}
	}	
}

if (!function_exists('mid_image_commentary')){
	function mid_image_commentary($highlighted, $importance, $certainty, $accuracy, $text){
		admin_functions_in_pages_usage(__FUNCTION__,__FILE__);
		$to_echo = "<p style='padding-top:10vh; padding-bottom: 10vh;width:100%; text-align:center;' class='";
		$to_echo .= highlighted_red_font($highlighted);	
		$to_echo .= font_importance($importance);
		$to_echo .= font_certainty($certainty);
		$to_echo .= font_accuracy($accuracy);
		$to_echo .= "'>".$text."</p>";
		
		echo $to_echo;
		}
}

if (!function_exists('paragraph_detailed')){
	function paragraph_detailed($highlighted, $importance, $certainty, $accuracy, $text){
		admin_functions_in_pages_usage(__FUNCTION__,__FILE__);
		$to_echo = "<p class='";
		$to_echo .= highlighted_red_font($highlighted);	
		$to_echo .= font_importance($importance);
		$to_echo .= font_certainty($certainty);
		$to_echo .= font_accuracy($accuracy);
		$to_echo .= "'>".$text."</p>";
		
		echo $to_echo;
		}
}


if (!function_exists('paragraph_start')){
	function paragraph_start($highlighted, $importance, $certainty, $accuracy, $text){
		admin_functions_in_pages_usage(__FUNCTION__,__FILE__);
		$to_echo = "<p class='";
		$to_echo .= highlighted_red_font($highlighted);	
		$to_echo .= font_importance($importance);
		$to_echo .= font_certainty($certainty);
		$to_echo .= font_accuracy($accuracy);
		$to_echo .= "'>".$text;
		
		echo $to_echo;
		}
}


if (!function_exists('paragraph_middling')){	
	function paragraph_middling($highlighted, $importance, $certainty, $accuracy, $text){
		admin_functions_in_pages_usage(__FUNCTION__,__FILE__);
		$to_echo = "<span class='";
		$to_echo .= highlighted_red_font($highlighted);	
		$to_echo .= font_importance($importance);
		$to_echo .= font_certainty($certainty);
		$to_echo .= font_accuracy($accuracy);
		$to_echo .= "'>".$text."</span>";

		echo $to_echo;			
		}
}


if (!function_exists('faq_title')){
	function faq_title($text){
		admin_functions_in_pages_usage(__FUNCTION__,__FILE__);
		$to_echo = "<span class='";
		$to_echo .= highlighted_red_font('yes');	
		$to_echo .= font_importance(8);
		$to_echo .= font_certainty(8);
		$to_echo .= font_accuracy(8);
		$to_echo .= "'>".$text."</span>";
		
		echo $to_echo;
	}
}


if (!function_exists('faq_response')){
	function faq_response($text){
		admin_functions_in_pages_usage(__FUNCTION__,__FILE__);
		$to_echo = "<p class='";
		$to_echo .= highlighted_red_font('no');	
		$to_echo .= font_importance(8);
		$to_echo .= font_certainty(8);
		$to_echo .= font_accuracy(8);
		$to_echo .= "'>".$text."</p>";
		
		echo $to_echo;
	}
}

if (!function_exists('paragraph_end')){
	function paragraph_end(){
		admin_functions_in_pages_usage(__FUNCTION__,__FILE__);
		echo "</p>";}
}


//GAPS & LINE BREAKS
if (!function_exists('new_line_of_copy')){
	function new_line_of_copy(){
		admin_functions_in_pages_usage(__FUNCTION__,__FILE__);
		echo "<br>";}
}

if (!function_exists('bigger_gap')){
	function bigger_gap(){
		admin_functions_in_pages_usage(__FUNCTION__,__FILE__);
		echo "<br><br><br><br>";}
}

//LISTS
if (!function_exists('list_start')){
	function list_start(){
		admin_functions_in_pages_usage(__FUNCTION__,__FILE__);
		echo "<ul>";}
}

if (!function_exists('list_end')){
	function list_end(){
		admin_functions_in_pages_usage(__FUNCTION__,__FILE__);
		echo "</ul>";}
}

if (!function_exists('point')){
	function point($text){
		admin_functions_in_pages_usage(__FUNCTION__,__FILE__);
		echo "<li>".$text."</li>";}
}

if (!function_exists('point_detailed_start')){	
	function point_detailed_start($highlighted, $importance, $certainty, $accuracy, $text){
		admin_functions_in_pages_usage(__FUNCTION__,__FILE__);
		$to_echo  = "<li class='";
		$to_echo .= highlighted_red_font($highlighted);	
		$to_echo .= font_importance($importance);
		$to_echo .= font_certainty($certainty);
		$to_echo .= font_accuracy($accuracy);
		$to_echo .= "'>".$text;
		
		echo $to_echo;
		}		
}

if (!function_exists('point_start_only')){
	function point_start_only(){
		admin_functions_in_pages_usage(__FUNCTION__,__FILE__);
		echo "<li>";}	
}

if (!function_exists('point_end_only')){	
	function point_end_only(){
		admin_functions_in_pages_usage(__FUNCTION__,__FILE__);
		echo "</li>";}
}	
	
if (!function_exists('copy_big_title')){	
	function copy_big_title($title, $id){
		bigger_gap();
		bigger_gap();
		bigger_gap();
		echo "<div class='legal-big-title' style='position: relative;	top:-0px;'>
			<a id='".$id."' style='position: relative; 		top:-0px;'>".$title."</a>";
		echo "</div>";
		new_line_of_copy();	
		new_line_of_copy();
		new_line_of_copy();	
	}
}

if (!function_exists('copy_title')){
	function copy_title($title, $id){
		echo "	<div id='".$id."' style='position: relative;top:-75px;'>&nbsp;</div>";
		bigger_gap();
		echo "<button  id='".$id."_button' type='button'  class='legal-title collapsible active' >".$title."</button>";
		echo "<div id='".$id."_details' class='content' style='display:block;'>";
		}
}

if (!function_exists('close_title_details')){
	function close_title_details(){
		echo "</div>";
	}
}


