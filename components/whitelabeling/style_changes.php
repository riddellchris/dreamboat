<?php
if(!isset($_SESSION)){session_start();}

$_SESSION['masked_domain'] = 'dreamboat';

if($_SERVER['SERVER_PORT'] != 8888){
  if($_SERVER['HTTP_HOST'] == "nashnewton.com.au"){	$_SESSION['masked_domain'] = 'nashnewton';}
  if($_SERVER['HTTP_HOST'] == "irrth.com"){		    $_SESSION['masked_domain'] = 'irrth';}	
}


if($_SESSION['masked_domain'] != 'dreamboat'){
	if($_SESSION['masked_domain'] == 'nashnewton'){					
                                                                $_SESSION['masked_domain_primary_colour']           = " #303030 ";
                                                                $_SESSION['masked_domain_primary_colour_darker']    = " #1c1c1c ";
                                                                $_SESSION['masked_domain_menu_tone_one']            = " #28b215 ";
                                                                $_SESSION['masked_domain_menu_tone_two']            = " #1edb04 ";
                                                                $_SESSION['masked_domain_highlight_colour']         = " #d6fc49 ";
                                                                $_SESSION['masked_domain_focus_colour']             = " #DAF7A6 ";
                                                                $_SESSION['masked_domain_logo_image']               = "no";
                                                                    $_SESSION['masked_domain_logo_file_name']       = "";                                                 
                                                                $_SESSION['masked_domain_logo_name']                = "Nash Newton";
                                                                $_SESSION['masked_domain_logo_font_family']         = "PTSansRegular, Arial, Helvetica, sans-serif";
                                                                $_SESSION['masked_domain_logo_letter_spacing']      = "0.1em";
                                                                $_SESSION['masked_domain_logo_color']               = "#ffffff";
                                                                $_SESSION['masked_domain_logo_font_weight']         = "700";  
                                                                $_SESSION['masked_domain_logo_text_transform']      = "none";
                                                                $_SESSION['masked_domain_html_title']               = "Nash Newton";
}
	if($_SESSION['masked_domain'] == 'irrth'){					
                                                                $_SESSION['masked_domain_primary_colour']           = " forestgreen ";
                                                                $_SESSION['masked_domain_primary_colour_darker']    = " #1f731f ";
                                                                $_SESSION['masked_domain_menu_tone_one']            = " #28b215 ";
                                                                $_SESSION['masked_domain_menu_tone_two']            = " #1edb04 ";
                                                                $_SESSION['masked_domain_highlight_colour']         = " #d6fc49 ";
                                                                $_SESSION['masked_domain_focus_colour']             = " #2b0def ";
                                                                $_SESSION['masked_domain_logo_image']               = "no";
                                                                    $_SESSION['masked_domain_logo_file_name']       = "";                                                 
                                                                $_SESSION['masked_domain_logo_name']                = "irrth";
                                                                $_SESSION['masked_domain_logo_font_family']         = "Playwrite FR Moderne";
                                                                $_SESSION['masked_domain_logo_letter_spacing']      = "0.1em";
                                                                $_SESSION['masked_domain_logo_color']               = "#d6fc49";
                                                                $_SESSION['masked_domain_logo_font_weight']         = "400";  
                                                                $_SESSION['masked_domain_logo_text_transform']      = "smaller";
                                                                $_SESSION['masked_domain_html_title']               = "irrth.com";
}


	if($_SESSION['masked_domain'] == 'ottoit'){					
                                                                $_SESSION['masked_domain_primary_colour']           = " #004751 ";
                                                                $_SESSION['masked_domain_primary_colour_darker']    = " #004751 ";
                                                                $_SESSION['masked_domain_menu_tone_one']            = " #005e6b ";
                                                                $_SESSION['masked_domain_menu_tone_two']            = " #00899c ";
                                                                $_SESSION['masked_domain_highlight_colour']         = " #d6fc49 ";
                                                                $_SESSION['masked_domain_focus_colour']             = " #ff7549 ";
                                                                $_SESSION['masked_domain_logo_image']               = "yes";
                                                                    $_SESSION['masked_domain_logo_file_name']       = "OTTO-Logo-Teal-min.svg";                                                 
                                                                $_SESSION['masked_domain_logo_name']                = "otto";
                                                                $_SESSION['masked_domain_logo_font_family']         = "PTSansRegular, Arial, Helvetica, sans-serif";
                                                                $_SESSION['masked_domain_logo_letter_spacing']      = "0.1em";
                                                                $_SESSION['masked_domain_logo_color']               = "#d6fc49";
                                                                $_SESSION['masked_domain_logo_font_weight']         = "700";  
                                                                $_SESSION['masked_domain_logo_text_transform']      = "none";
                                                                $_SESSION['masked_domain_html_title']               = "Otto Analytics";
    }
	if($_SESSION['masked_domain'] == 'reliableaccountants'){	
                                                                $_SESSION['masked_domain_primary_colour']           = " #121cf2 ";
                                                                $_SESSION['masked_domain_primary_colour_darker']    = " #050ca6 ";
                                                                $_SESSION['masked_domain_menu_tone_one']            = " #3841ff ";
                                                                $_SESSION['masked_domain_menu_tone_two']            = " #6168ff ";                                                                
                                                                $_SESSION['masked_domain_highlight_colour']         = " #2CDCF1 ";
                                                                $_SESSION['masked_domain_focus_colour']             = " #121CF2 ";
                                                                $_SESSION['masked_domain_logo_image']               = "no";
                                                                    $_SESSION['masked_domain_logo_file_name']       = "OTTO-Logo-Teal-min.svg"; 
                                                                $_SESSION['masked_domain_logo_name']                = "Reliable Accountants";
                                                                $_SESSION['masked_domain_logo_font_family']         = "Arial, Helvetica, Arial, Lucida, sans-serif";
                                                                $_SESSION['masked_domain_logo_letter_spacing']      = "0.002em";
                                                                $_SESSION['masked_domain_logo_color']               = "#2CDCF1";
                                                                $_SESSION['masked_domain_logo_font_weight']         = "800";  
                                                                $_SESSION['masked_domain_logo_text_transform']      = "none";
                                                                $_SESSION['masked_domain_html_title']               = "Reliable Analytics";
    }	
	if($_SESSION['masked_domain'] == 'orizonconsulting'){		$_SESSION['masked_domain_primary_colour']           = " #000000 ";
                                                                $_SESSION['masked_domain_primary_colour_darker']    = " #004751 ";
                                                                $_SESSION['masked_domain_menu_tone_one']            = " #004751 ";
                                                                $_SESSION['masked_domain_menu_tone_two']            = " #004751 ";                                                                
                                                                $_SESSION['masked_domain_highlight_colour']         = " #6EC1E4 ";
                                                                $_SESSION['masked_domain_focus_colour']             = " #51585f ";
                                                                $_SESSION['masked_domain_logo_image']               = "no";
                                                                    $_SESSION['masked_domain_logo_file_name']       = "OTTO-Logo-Teal-min.svg"; 
                                                                $_SESSION['masked_domain_logo_name']                = "orizon";
                                                                $_SESSION['masked_domain_logo_letter_spacing']      = "0.1em";
                                                                $_SESSION['masked_domain_logo_color']               = "#FFFFF";
                                                                $_SESSION['masked_domain_logo_font_weight']         = "700";  
                                                                $_SESSION['masked_domain_logo_font_family']         = "Raleway";
                                                                $_SESSION['masked_domain_logo_text_transform']      = "none";
                                                                $_SESSION['masked_domain_html_title']               = "Orizon Analytics";
	}
	if($_SESSION['masked_domain'] == 'agedcareforeveryone'){	
								$_SESSION['masked_domain_primary_colour']           = " #6F7C80 ";
                                                                $_SESSION['masked_domain_primary_colour_darker']    = " #004751 ";
                                                                $_SESSION['masked_domain_menu_tone_one']            = " #004751 ";
                                                                $_SESSION['masked_domain_menu_tone_two']            = " #004751 ";                                                                
                                                                $_SESSION['masked_domain_highlight_colour']         = " #FFA500 ";
                                                                $_SESSION['masked_domain_focus_colour']             = " #ffd500 ";
                                                                $_SESSION['masked_domain_logo_image']               = "no";
                                                                    $_SESSION['masked_domain_logo_file_name']       = "OTTO-Logo-Teal-min.svg"; 
                                                                $_SESSION['masked_domain_logo_name']                = "Aged Care for Everyone";
                                                                $_SESSION['masked_domain_logo_letter_spacing']      = "0.1em";
                                                                $_SESSION['masked_domain_logo_color']               = "#FFA500";
                                                                $_SESSION['masked_domain_logo_font_weight']         = "700";  
                                                                $_SESSION['masked_domain_logo_font_family']         = "Libre Baskerville";
                                                                $_SESSION['masked_domain_logo_text_transform']      = "none";
                                                                $_SESSION['masked_domain_html_title']               = "Aged Care for Everyone";
	}
    $_SESSION['masked_domain_html_title'] = $_SESSION['masked_domain_html_title']." by Dreamboat";

}
else{
    $_SESSION['masked_domain_primary_colour']           = " #4332ff ";
    $_SESSION['masked_domain_primary_colour_darker']    = " #281e96 ";
    $_SESSION['masked_domain_menu_tone_one']            = " #2b1eba ";
    $_SESSION['masked_domain_menu_tone_two']            = " #675ce0; ";    
    $_SESSION['masked_domain_highlight_colour']         = " #00ff00 ";
    $_SESSION['masked_domain_focus_colour']             = " #ff2424 ";
    $_SESSION['masked_domain_logo_image']               = "no";
        $_SESSION['masked_domain_logo_file_name']       = "OTTO-Logo-Teal-min.svg"; 
    $_SESSION['masked_domain_logo_name']                = "Dreamboat";
    $_SESSION['masked_domain_logo_font_family']         = "Helvetica";
    $_SESSION['masked_domain_logo_letter_spacing']      = "0.1em";
    $_SESSION['masked_domain_logo_color']               = "#FFFFFF";
    $_SESSION['masked_domain_logo_font_weight']         = "700";   
    $_SESSION['masked_domain_logo_text_transform']      = "uppercase";
    $_SESSION['masked_domain_html_title']               = "Transforming the Australian Economy - DREAMBOAT";


}


if(!isset($no_echos)){//this is to do with the unset process not stalling a very, very minor thing but possible and useful none the less
    //echo "TEST HERE".$_SESSION['masked_domain'];exit();
    echo "

    <style>
    .nav-links:hover{               color:              ".$_SESSION['masked_domain_highlight_colour']." ;}
    .nav-div{                       background-color:   ".$_SESSION['masked_domain_primary_colour']."   ;}
    .footer{                        background-color:   ".$_SESSION['masked_domain_primary_colour']."   ;}
    .prompt-font{                   color:              ".$_SESSION['masked_domain_primary_colour']."   ;}
    .login-submit{                  color:              ".$_SESSION['masked_domain_primary_colour']."   ;}
    .secure_input{                  color:              ".$_SESSION['masked_domain_primary_colour']."   ;}
    .big-div{                       color:              ".$_SESSION['masked_domain_primary_colour_darker']." ;}
    .secure_input::placeholder{                         ".$_SESSION['masked_domain_primary_colour']."   ;}
    .sub_menu_div{                  background-color:   ".$_SESSION['masked_domain_menu_tone_one']."    ;}
    .data_tables{                   border-top:     8px ".$_SESSION['masked_domain_primary_colour_darker']." solid;}
    .data_tables{                   border-bottom:  8px ".$_SESSION['masked_domain_primary_colour_darker']." solid;}
    .dreamboat-logo:hover{	        color:              ".$_SESSION['masked_domain_highlight_colour'].";}
    .blue-button{			        background-color:   ".$_SESSION['masked_domain_primary_colour_darker'].";	color:white;}
    .blue-button:hover{		        background-color:   ".$_SESSION['masked_domain_primary_colour'].";	box-shadow: 0px 0px 0px rgba(0, 0, 0, 0.4);}
    #mobile_menu{                   background-color:   ".$_SESSION['masked_domain_primary_colour']."  }
    #mobile_menu_icon:hover{        color:              ".$_SESSION['masked_domain_highlight_colour']." ;}

    .sub_sub_menu_div{            background-color: ".$_SESSION['masked_domain_menu_tone_two']." ;}
    select{ background-color: ".$_SESSION['masked_domain_primary_colour'].";}

    .sub_sub_menu_div:hover{
        background-color: ".$_SESSION['masked_domain_focus_colour']." ;}
        color:#ffe6e6;  
        }
    .sub_sub_menu_div.highlighted:hover{
        background-color:#ff0000;
        }

    </style>
    ";	

}
