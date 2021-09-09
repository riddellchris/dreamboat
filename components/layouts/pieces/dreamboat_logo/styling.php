<?php
echo"		
<style>
	.dreamboat-logo{	
				margin-top: 1px;
				text-decoration:none;
				font-family: Helvetica;
				font-weight:700;
				text-transform:uppercase;
				letter-spacing: 0.1em;
				float:left;
			}

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
echo "	.dreamboat-logo{	color:#ffffff;}
	.dreamboat-logo:hover{	color:#00ff00;}
	";

}


echo "	
	@media screen and (min-width: 480px) {	.dreamboat-logo{	font-size:42px;	}}
	@media screen and (max-width: 480px) {	.dreamboat-logo{	font-size:32px;	}}";
	

//if($centered_dreamboat_logo != 'yes'){
	echo "	@media screen and (min-width: 480px) {	.dreamboat-logo{	padding-left:18px;}}
		@media screen and (max-width: 480px) {	.dreamboat-logo{	padding-left:10px;}}";
//}
	
echo "	
</style>";