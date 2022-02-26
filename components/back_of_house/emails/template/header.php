<?php

$header = "
<div
style = '   
	height: 50px;
	padding-bottom:5px;
 	padding-top:5px;
        display: block;
        width: 100%;
    	margin: auto;
    	text-align: center;
    	background-color: ".$_SESSION['masked_domain_primary_colour_darker'].";
    '
>
	<div style='display:block;'>
		<a href='https://dreamboat.com.au/account/security/".$_SESSION['masked_domain']."' 
			style='	text-decoration: none;
					font-family: Helvetica;
					font-size: 42px;
					font-weight: 700;
					text-transform: uppercase;
					color: #fff;
					letter-spacing: 0.1em;'>".$_SESSION['masked_domain_logo_name']."</a>
	</div>
</div>";

?>