<?php
if(!isset($_SESSION)){session_start();}
//require $_SERVER['DOCUMENT_ROOT']."/components/functions/primary_folder_redirections.php";
//$main_admin_section = 'advice';
//require $_SERVER['DOCUMENT_ROOT']."/admin/components/sub_menus/display.php";

//the reason for the <br> as opposed to the margin-top is that right now we only push up the accordian headers
//that ultimately doesn't acheive anything for us.
//CR 27.06.20
echo "
<div class = 'pilots_eyes_only_font' style='width:100%; text-align:center;'>
&nbsp;
<br>
The importance of this to our clients is that this is the feedback loop we provide to guide them on the right trajectory.
<br>
";


//<span style='color:red;' class='blinking'>
//ONLY CLICK WHAT YOU ACTUALLY USE
//</span>
echo "
</div>";

echo "
<style>

.advice_textareas::placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
  color: #cecece;
  opacity: 1; /* Firefox */
}

.advice_textareas:-ms-input-placeholder { /* Internet Explorer 10-11 */
  color: #cecece;
}

.advice_textareas::-ms-input-placeholder { /* Microsoft Edge */
  color: #cecece;
}
</style>";






function echo_advice_title($title){
	echo "<span style='text-transform:uppercase;'>".$title."</span>";

}

function echo_advice_option($category,$name){
echo "<br>";

//href should then go to add this to the discussion but again only goes to a pilot only display for now
echo "<a href=''>".$name."</a>";

}

function echo_basic_advice_form($category){
echo "
<form action='/components/discussion/submit.php?advice_category=".$category."' method='POST'>";
hidden_form_inputs_for_folders_and_items();
if($category == 'direction'){		$placeholder = "What direction did you give on this page?";}
if($category == 'encouragement'){	$placeholder = "What encouragement did you give on this page?";}
if($category == 'priority'){		$placeholder = "What prioritisation advice did you give on this page?";}
if($category == 'importance'){		$placeholder = "What importance advice did you give on this page?";}
if($category == 'urgency'){		$placeholder = "What urgency guidance did you give on this page?";}
if($category == 'memory utilisation'){	$placeholder = "What memory utilisation guidance did you give on this page?";}

$placeholder .= "&#10;Why?";


echo "
<textarea rows='6' placeholder='".$placeholder."' style='font-family:Comfortaa;color:#281e96;text-align:left;' name='advice_textarea'  name='advice_textareas'></textarea>";
$background_color = '#cecece';
require $_SERVER['DOCUMENT_ROOT']."/components/inputs/pieces/submits/standard.php";
echo "
</form>
";


}






//this should pop up after every entry into the discusison for the user

echo "
<style>

.development_notes{color:purple;font-size:small;}


.advice_table{display:table;width:100%;font-family:Helvetica;font-size:2em;}
.advice_table_row{display:table-row;width:100%;height:40vh;}
.advice_table_cell{display:table-cell; width: calc(100% / 3);text-align:center;}

.seven_point_green_text{		color:#22a522;}
.seven_point_green_text-button:hover{	color:#3a823a;}
.seven_point_lightest_green_text{	color:#58ef66;}
.seven_point_lightest_green_text:hover{	color:#3a823a;}
.seven_point_light_green_text{		color:#21b72f;}
.seven_point_light_green_text:hover{	color:#3a823a;}
.seven_point_strong_green_text:hover{	color:#3a823a;}
.seven_point_strong_green_text{		color:#017c0d;}

.seven_point_red_text{			color:#ff0000;}
.seven_point_red_text:hover{		color:#d62c2c;}
.seven_point_lightest_red_text{		color:#ff7a7a;}
.seven_point_lightest_red_text:hover{	color:#d62c2c;}
.seven_point_light_red_text{		color:#ff5454;}
.seven_point_light_red_text:hover{	color:#d62c2c;}
.seven_point_strong_red_text{		color:#d62c2c;}
.seven_point_strong_red_text:hover{	color:#e50000;}





</style>
<div class='advice_table'>
	<div class='advice_table_row'>
		<div class='advice_table_cell'>";
			$advice_category = 'direction';
			echo_advice_title($advice_category);
			echo_advice_to_pilots('from the knowledgbase');	
			//this is going to come from the knowledgbase based on best data
		///	echo_advice_option($advice_category,'name');
					echo_basic_advice_form($advice_category);				

/*
		echo "<br><span class='development_notes'>This should really just be a from that can be typed into such that advice can be given on any page directly into that discusion. <br>Seen only by our team.<Br><BR>THerefore building out our knowledgebase.<br> and the all advice given to a user sortable from here too</span>";
*/


echo "		</div>
		<div class='advice_table_cell'>";
			$advice_category = 'encouragement';
			echo_advice_title($advice_category);
			echo_advice_to_pilots('do more of this to less of this');			
			//some form of 7 point scale from:
			//this is amazing to
			echo_basic_advice_form($advice_category);				

			
			
			//jesus don't
			//use the red - green scale as above/
			//save it within the disucssion for only pilots to see i.e. not clients
echo "		</div>		
		<div class='advice_table_cell'>";
			$advice_category = 'priority';
			echo_advice_title($advice_category);
			echo_advice_to_pilots('relative to current priorities');			
			//some form of 7 point scale from:
			//must be one of your highest priorities now
			echo_basic_advice_form($advice_category);				
			
			
			
			//this must be a very low priority now
echo "		</div>				
	</div>
	<div class='advice_table_row'>
		<div class='advice_table_cell'>";
			$advice_category = 'importance';		
			echo_advice_title($advice_category);
			echo_advice_to_pilots('timeline unknown/unconsidered');
			//some form of 7 point scale from:
			//extremely important (timeline unknown/unconsidered)
			echo_basic_advice_form($advice_category);			
			
			
			
			
			//doesn't seem critical						
echo "		</div>
		<div class='advice_table_cell'>";
			$advice_category = 'urgency';
			echo_advice_title($advice_category);
			echo_advice_to_pilots('timeline required to successfully deal with it');
			//some form of 7 point scale from:
			//of the highest urgency
			echo_basic_advice_form($advice_category);				
			
			
			
			//doesn't seem urgent at all			
			
echo "		</div>		
		<div class='advice_table_cell'>";
			$advice_category = 'memory utilisation';
			echo_advice_title($advice_category);
			echo_advice_to_pilots('current suggested brain requirement');
			//some form of 7 point scale from:
			//never forget this to
			echo_basic_advice_form($advice_category);				
			
			
			
			
			
			//can completely forget about it really	
echo "		</div>			
	</div>
</div>";








/*
6 up of advice given and how that should all go together


advice
encouragement
priority
urgency
importance
memory bank status

7 point scales for each of these for advice/commentary given//that go into the discussion as pilot only seen things
//this is what a great deal if not all AI is ultimately going to be built upon


*/