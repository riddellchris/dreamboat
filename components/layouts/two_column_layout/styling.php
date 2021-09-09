<style>


.container {
    width: 100%;
    height: 200px;
    margin: auto; 
}

<?php
$degrees = rand(0,360);
?>
.to_history{font-family:Comfortaa;}
.one{background-image: linear-gradient(<?php echo $degrees;?>deg, #3fe0bd, #c2ff40);height:120vh;min-width: 450px;}
.mobile{background-image: linear-gradient(<?php echo $degrees;?>deg, #3fe0bd, #c2ff40);height:120vh;min-height:1600px;}

.standard_textarea{margin: 6px 0px;width:80%;text-align:left;font-size: 16px;padding: 12px; font-family: Comfortaa;margin-right:25px;}
.standard_textarea::placeholder{color:#9badef;}

@media screen and (min-width: 1200px){	.mobile{display:none;}
					.one{width: 30%;float: left;}
					.two{margin-left: 00%;}
					.two_left{float: left;}
					.two_right{float:right;}
					}
@media screen and (max-width: 1200px){	.mobile{display:block;width:100%;margin-top:100vh;}
					.one{display:none;}
					.two{margin-left: 0%;width:100%;}
					.two_left{float: none;width:100%;}
					.two_right{float: none;width:100%;}
					.details-font{font-size:50px;}
					}

.secure_input{width: calc(100% - 60px);}

.two_left{	text-align:center;
		padding-top:2vh;
		}
.two_right{	text-align:center;
		background-color:white;
		box-shadow: -10px 0px 10px -5px #aaaaaa;
		height:120vh;
		float:right;
		}


@media screen and (min-width: 1800px){
		.two_left{width:46%;padding-left:2%;padding-right:2%;}
		.two_right{width:45%;padding-left:2%;padding-right:2%;float:right;height:120vh;}
		}
<?php
if(!isset($_SESSION)){session_start();}

/*
if($_SESSION['dreamboat_crew'] == 'yes'){
	echo "
	@media screen and (min-width: 2250px){
		.two_left{width:46%;padding-left:2%;padding-right:2%;padding-top:2%;}
		.two_right{width:45%;padding-left:2%;padding-right:2%;}
		}	
	
	
	
	@media screen and (min-width: 1200px) and (max-width: 2250px){
			.two_left{width:50%;padding-top:2%;}
			.two_right{width:50%;}
			}
	";
}
else{*/
	echo "
	
	@media screen and (min-width: 1800px){
		.two_left{width:46%;padding-left:2%;padding-right:2%;padding-top:2%;}
		.two_right{width:45%;padding-left:2%;padding-right:2%;}
		}
	
	@media screen and (min-width: 1200px) and (max-width: 1800px){
			.two_left{width:46%;padding-left:2%;padding-right:2%;padding-top:2%;}
			.two_right{width:45%;padding-left:2%;padding-right:2%;}
			}
	";



//}

?>

@media screen and (max-width: 1200px){
	.two_right{box-shadow: none;height:100vh;min-height:400px;}
	.container{height:40px;}
	}

</style>
