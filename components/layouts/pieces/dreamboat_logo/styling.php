<?php
echo"		
<style>
	.dreamboat-logo{	
				margin-top: 1px;
				float:left;";

				if($_SESSION['masked_domain_logo_image'] != "yes"){
					echo "
						text-decoration:none;
						font-family: ".$_SESSION['masked_domain_logo_font_family'].";
						font-weight:".$_SESSION['masked_domain_logo_font_weight'].";
						text-transform:".$_SESSION['masked_domain_logo_text_transform'].";
						letter-spacing:".$_SESSION['masked_domain_logo_letter_spacing'].";
					";
				}
				else{
					echo "	background-image: url('/components/design/logos/".$_SESSION['masked_domain']."/".$_SESSION['masked_domain_logo_file_name']."');
							margin-left: 25px;
							margin-top: 5px;
							height: 40px;
							width: 100px;
							background-repeat: no-repeat;
					";



				}
		echo "
				}";

echo "
	.dreamboat-logo.slideshow{
		margin-top: -18px;
		}
";
	
if(check_url('map')){
echo "	.dreamboat-logo{	color:#00ff00;}
	.dreamboat-logo:hover{	color:#ffffff;}
	";
	}
else{
echo "	.dreamboat-logo{	color: ".$_SESSION['masked_domain_logo_color'].";}

	";

}


echo "	
	@media screen and (min-width: 480px) {	.dreamboat-logo{	font-size:42px;	}}
	@media screen and (max-width: 480px) {	.dreamboat-logo{	font-size:32px;	}}";
	

//if($centered_dreamboat_logo != 'yes'){
	echo "	@media screen and (min-width: 480px) {	.dreamboat-logo{	padding-left:18px;}}
		@media screen and (max-width: 480px) {		.dreamboat-logo{	padding-left:10px;}}";
//}
	
echo "	
</style>";