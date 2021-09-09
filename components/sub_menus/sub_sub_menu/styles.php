<?php
if(!isset($_SESSION)){session_start();}
echo "
<style>
";

if($_SESSION['primary_folder'] == 'profile' && $_SESSION['secondary_folder'] == 'reviews'){
echo "
@media screen and (max-width: 600px)   {
	.sub_sub_menu_div{
		display:inline-flex;
		max-height:40px;
		height:100%;
		text-align:center;
		font-size:16px;
	}
}
";
}
else{
echo "
@media screen and (max-width: 600px)   {
	.sub_sub_menu_div{
		display:inline-block;
		max-height:20px;
		height:100%;
		text-align:center;
		font-size:16px;
	}
}
";



}


echo "
@media screen and (max-width: 950px)  and (min-width: 600px)  {
	.sub_sub_menu_div{
		display:inline-block;
		max-height:20px;
		height:100%;
		text-align:center;
		font-size:16px;
	}
}
@media screen and (min-width: 950px) {
	.sub_sub_menu_div{
		display:inline-block;
		text-align:center;
		font-size:16px;
	}
}


.sub_sub_menu_div{

	font-family:helvetica;
	text-transform: uppercase;
	padding-top: 8px;
	padding-bottom: 6px;
	color:white;
	background-color:#2b1eba;
	text-decoration:none;
	
	
	}
.sub_sub_menu_div:hover{
	background-color:#ff2424;
	color:#ffe6e6;  
	}
.sub_sub_menu_div.highlighted:hover{
	background-color:#ff0000;
	}

.highlighted{background-color:red;}
	
	
@media only screen and (min-width: 768px) {
.sub_sub_menu_div{
	
	box-shadow:0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
	
	}



.sub_sub_menu_div:hover{
	-moz-box-shadow: inset 0 -30px 30px -30px #801e17;
	-webkit-box-shadow: inset 0 -30px 30px -30px #801e17;
	box-shadow: inset 0 -30px 30px -30px #801e17;
	}


.sub_sub_menu_div.highlighted:hover{
	  -moz-box-shadow: inset 0 -30px 30px -30px #801e17;
	  -webkit-box-shadow: inset 0 -30px 30px -30px #801e17;
	  box-shadow: inset 0 -30px 30px -30px #801e17;	
	}
.highlighted{
  -moz-box-shadow: inset 0 -30px 30px -30px #801e17;
	  -webkit-box-shadow: inset 0 -30px 30px -30px #801e17;
	  box-shadow: inset 0 -30px 30px -30px #801e17;

}




}	
	
</style>";
echo "
<style>
.sub_sub_menu_div{

	display:inline-grid;
	text-align:center;
	font-family:helvetica;
	text-transform: uppercase;
	padding-top: 9px;
	padding-bottom: 8px;
	color:white;
	background-color:#675ce0;
	text-decoration:none;
	}
.sub_sub_menu_div:hover{background-color:red;}
.highlighted{background-color:red;}
	
</style>";
?>