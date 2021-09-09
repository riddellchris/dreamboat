<style>


.container {
    width: 100%;
    height: 200px;
    margin: auto; 
}

<?php
$degrees = rand(0,360);
?>

.one{background-image: linear-gradient(<?php echo $degrees;?>deg, #3fe0bd, #c2ff40);height:120vh;min-width: 450px;}
.mobile_bottom{background-image: linear-gradient(<?php echo $degrees;?>deg, #3fe0bd, #c2ff40);height:120vh;min-height:1600px;}

.standard_textarea{margin: 6px 0px;width:80%;text-align:left;font-size: 16px;padding: 12px; font-family: Arial;margin-right:25px;}
.standard_textarea::placeholder{color:#9badef;}

@media screen and (min-width: 1200px){.mobile{display:none;}.two{margin-left: 30%;}.one{width: 30%;float: left;}}
@media screen and (max-width: 1200px){.mobile{display:block;}.one{display:none;}.two{display:none;}}

.secure_input{width: calc(100% - 60px);}

.two_right{background-color:white;}


@media screen and (min-width: 1800px){
		.two_left{text-align:center;float: left;width:46%;padding-left:2%;padding-right:2%;padding-top:2%;}
		.two_right{text-align:center;width:45%;padding-left:2%;padding-right:2%;float:right;box-shadow: -10px 0px 10px -5px #aaaaaa; height:120vh;}
		}
<?php
if(!isset($_SESSION)){session_start();}
if($_SESSION['dreamboat_crew'] == 'yes'){
	echo "
	@media screen and (min-width: 2250px){
		.two_left{text-align:center;float: left;width:46%;padding-left:2%;padding-right:2%;padding-top:2%;}
		.two_right{text-align:center;width:45%;padding-left:2%;padding-right:2%;float:right;box-shadow: -10px 0px 10px -5px #aaaaaa; height:120vh;}
		}	
	
	
	
	@media screen and (min-width: 1200px) and (max-width: 2250px){
			.two_left{text-align:center;float: left;width:40%;padding-top:2%;}
			.two_right{text-align:center;width:40%;float:right;box-shadow: -10px 0px 10px -5px #aaaaaa; height:120vh;}
			}
	";
}
else{
	echo "
	
	@media screen and (min-width: 1800px){
		.two_left{text-align:center;float: left;width:46%;padding-left:2%;padding-right:2%;padding-top:2%;}
		.two_right{text-align:center;width:45%;padding-left:2%;padding-right:2%;float:right;box-shadow: -10px 0px 10px -5px #aaaaaa; height:120vh;}
		}
	
	@media screen and (min-width: 1200px) and (max-width: 1800px){
			.two_left{text-align:center;float: left;width:46%;padding-left:2%;padding-right:2%;padding-top:2%;}
			.two_right{text-align:center;width:45%;padding-left:2%;padding-right:2%;float:right;box-shadow: -10px 0px 10px -5px #aaaaaa; height:120vh;}
			}
	";



}

?>

@media screen and (max-width: 1200px){
	.two_right{box-shadow: none;height:100%;min-height:400px;}
	.container{height:40px;}
	}

</style>
