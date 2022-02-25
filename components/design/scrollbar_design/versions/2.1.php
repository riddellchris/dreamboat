<?php
if(!isset($_SESSION)){session_start();}

if(!isset($width)){$width = '20px';}
//first layer width = 20
//second layer width = 15

if(!isset($background_color)){$background_color = $_SESSION['masked_domain_primary_colour'];}
//first layer color 	= #281e96
//second layer color 	= #5040ff

echo "
<style name='scrollbar_styling_".$scrollbar_for."'>
@media screen  and (min-width: 768px){	
	/* width */
	".$scrollbar_for."::-webkit-scrollbar {
	  width: ".$width.";
	}
	
	/* Track */
	".$scrollbar_for."::-webkit-scrollbar-track {
	  border-radius: 10px;
	  background: #ffffff;
	}";
	
//2.0 shadow color
//	$shadow_color = "#9eb3ff";

//2.1 shadow color
$shadow_color = "rgb(0 0 0 / 13%)";

	echo " 
	/* Handle */
	".$scrollbar_for."::-webkit-scrollbar-thumb {
	  background: ".$background_color."; 
	    -moz-box-shadow:    0px 4px 8px ".$shadow_color.", 0px 4px 8px ".$shadow_color.";
	  -webkit-box-shadow:   0px 4px 8px ".$shadow_color.", 0px 4px 8px ".$shadow_color.";
	  box-shadow:           0px 4px 8px ".$shadow_color.", 0px 4px 8px ".$shadow_color.";
	}
	
	/* Handle on hover */
	".$scrollbar_for."::-webkit-scrollbar-thumb:hover {
	  background: #4332ff; 
	}
}

@media screen  and (max-width: 768px){	
	/* width */
	".$scrollbar_for."::-webkit-scrollbar {
	  width: 0px;
	}


}
</style>
";