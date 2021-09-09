<?php
if(!isset($_SESSION)){session_start();}
//these should probably change depending on the $_GET['tertiary_folder'] 
//size, 	importance ///10 point rating 10/10 absolute importance
//weight, 	certainty  ///10 point scale too. //how certain are you that this will happen (is happening today = 10), might happen in 10 years = 0
//opacity,	accuracy.  ///10 point scale too. //how accurate is this information (totally validated by a sample of 1,000,000 = 10) (theoretical concept supported by nobody = 0)
//we have to use 
echo "
<style>

ul{	list-style: '◥';}
@media screen  and (max-width: 768px){ul{text-indent: 0.25em;}}
@media screen  and (min-width: 768px){ul{text-indent: 0.75em;}}


.gold{color: #F5BD02;}

@media screen  and (max-width: 768px){
	.importance_class_10{font-size: 4vmin;}
	.importance_class_9{font-size: 3.8vmin;}
	.importance_class_8{font-size: 3.6vmin;}
	.importance_class_7{font-size: 3.4vmin;}
	.importance_class_6{font-size: 3.2vmin;}
	.importance_class_5{font-size: 3.0vmin;}
	.importance_class_4{font-size: 2.8vmin;}
	.importance_class_3{font-size: 2.6vmin;}
	.importance_class_2{font-size: 2.4vmin;}
	.importance_class_1{font-size: 2.2vmin;}
	.importance_class_0{font-size: 2vmin;}
}
@media screen  and (min-width: 768px){
	.importance_class_10{font-size: 2vmin;}
	.importance_class_9{font-size: 1.9vmin;}
	.importance_class_8{font-size: 1.8vmin;}
	.importance_class_7{font-size: 1.7vmin;}
	.importance_class_6{font-size: 1.6vmin;}
	.importance_class_5{font-size: 1.5vmin;}
	.importance_class_4{font-size: 1.4vmin;}
	.importance_class_3{font-size: 1.3vmin;}
	.importance_class_2{font-size: 1.2vmin;}
	.importance_class_1{font-size: 1.1vmin;}
	.importance_class_0{font-size: 1vmin;}
}




";

//Barlow Semi Condensed only goes from 700-300 soo....
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


p{font-family: Barlow Semi Condensed;}

.collapsible {	 
			text-decoration: none;
		 color: #444;
		  cursor: pointer;
		  padding: 10px 18px;
		  border: none;
		  text-align: left;
		  outline: none;
		 // height: 5vh;
		 
		}
//.collapsible:hover{	 color: #281e96;}		
		

//.collapsible {  		background-color: #a8a1ff;}
//.collapsible:hover{		background-color: #4332ff;
//  				box-shadow: 	inset 0px 11px 8px -10px #0f004a,
//        					inset 0px -11px 8px -10px #0f004a; 
//		}


//.collapsible.active{		background-color: #4332ff;}
//.collapsible.active:hover {	background-color: #281e96;}

.legal-big-title.collapsible:visited{		color: #4332ff;}
.legal-big-title.collapsible:visited:hover{	background-color: #281e96; color:white;}
.legal-big-title.collapsible.hover:hover {	background-color: #281e96; color: white;}
.legal-big-title.collapsible.active{		background-color: #99beff;}
.legal-big-title.collapsible.active:hover {	background-color: #281e96; color: white;}

//.collapsible {  	transform: rotateY(0deg) rotate(-9deg); 			transition: transform 2s;}/* needs Y at 0 deg to behave properly*/
//.collapsible.active{	transform: rotateY(0deg) rotate(9deg)  translate(0%, 20px);}

.content {  padding: 1vh 18px 4vh;
	float:left;
	clear:left;}
.new_hidden{	height: 0px;
	    	padding: 0px;
		opacity: 0;
	    	z-index: -1000;
	}

.highlights{
	font-family: Barlow Semi Condensed;
	font-size: large; 
	margin-left: 1vw;
	margin-right: 2vw;
	padding-top: 2vh;
	padding-bottom: 2vh;
	}
	
	
	";


//obviously now legal title is all but redundant but that's just how it goes until I can put together code to change all these things at far greater speed
echo "

.legal-title{
color: white;
text-transform:uppercase;
font-family: Barlow Semi Condensed;
float:left;
clear:left;
}


.legal-big-title{
	text-transform:uppercase;
	color: #4332ff;


	//font-family: Barlow Semi Condensed;
	font-family: Helvetica;
	font-weight: 800;


	float:left;
	clear:left;
}

@media only screen and (max-width: 768px) {.legal-big-title{font-size: 2vmax; 	padding: 1vh 3vw;}}
@media only screen and (min-width: 768px) {.legal-big-title{font-size: 1.5vh; 	padding: 1vh 1vw;}	}	


.legal-big-title{ text-decoration: underline; text-decoration-thickness: 3px; }
.legal-big-title:hover{ text-decoration: none;}

";
/*
.legal-big-title:nth-child(1) { background-color: #ff0000;}
.legal-big-title:nth-child(2) { background-color: #FF0909;}
.legal-big-title:nth-child(3) { background-color: #FF1313;}
.legal-big-title:nth-child(4) { background-color: #FF1C1C;}
.legal-big-title:nth-child(5) { background-color: #FF2525;}
.legal-big-title:nth-child(6) { background-color: #FF2E2E;}
.legal-big-title:nth-child(7) { background-color: #FF3838;}
.legal-big-title:nth-child(8) { background-color: #FF4141;}
.legal-big-title:nth-child(9) { background-color: #FF4A4A;}
.legal-big-title:nth-child(10) { background-color: #FF5353;}
.legal-big-title:nth-child(11) { background-color: #FF5D5D;}
.legal-big-title:nth-child(12) { background-color: #FF6666;}
*/

echo "


@media screen  and (min-width: 768px){	.content_containter{padding: 2vmin;}}
@media screen  and (max-width: 768px){	.content_containter{padding: 2vmin; padding-top: 0px;}}



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
	}
	
	
.faq{	color: lightgrey;
	margin-left: 2vw;}
	
.faq:hover{	color: red;
	margin-left: 2vw;}
	
	";	
	
	
/* NON print styles */	

//the left line is 19vh
echo "
@media screen  and (min-width: 1300px){					#prospectus_body_div{	margin-left:25vw;	margin-right:40vh;	}}
@media screen  and (max-width: 1300px)  and (min-width: 768px){		#prospectus_body_div{	margin-left:14vw;	margin-right:8vh;	}}
@media screen  and (max-width: 768px){					#prospectus_body_div{	margin-left:0vmin;	margin-right:2vmin;	}}
";

//require $_SERVER['DOCUMENT_ROOT'].__DIR__."/development/archives/old_google_chart_margin_css.php";


echo "</style>";