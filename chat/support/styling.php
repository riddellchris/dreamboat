<?php
if(!isset($_SESSION)){session_start();}

echo "
<style>
.secure_input{
	margin-bottom:15px; 
	background-color: ".$_SESSION['masked_domain_primary_colour_darker'].";
	color: white;
	text-align: center;
	max-width: 400px;
	}
		
	
.secure_input::placeholder 	{  	color: white;} /* Chrome, Firefox, Opera, Safari 10.1+ */
.secure_input:-ms-input-placeholder {  	color: white;} /* Internet Explorer 10-11 */
.secure_input::-ms-input-placeholder {  color: white;} /* Microsoft Edge */
	
		
.login-submit{
	background-color: #FF0000;
	margin-top: 18px;
	color: white;
	max-width: 400px;
	}
	
	
textarea{
	background-color: ".$_SESSION['masked_domain_primary_colour_darker'].";
	color: white;
	}
</style>
";