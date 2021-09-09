<?php
if(!isset($_SESSION)){session_start();}

echo "
<style>
@media only screen and (min-width: 768px)  and (max-width: 1300px) {
.top_left{
	position: fixed;
	border-top: 100vh solid red;
	border-left: 0px solid transparent;
	border-right: 11vw solid transparent;
	height: 0;
	width: 0vw;
	}
}
@media only screen and (min-width: 1300px) {
.top_left{
	position: fixed;
	border-top: 100vh solid red;
	border-left: 0px solid transparent;
	border-right: 19vw solid transparent;
	height: 0;
	width: 0vw;
	}
}

@media only screen and (min-width: 768px)  and (max-width: 1300px) {	
 .top_right{
	z-index: -1;
        width: 25vw;
        height: 100vh;
        background: #4332ff;
        position: fixed;
        display: inline-block;
    }
    
    .top_right:before{
        background: white;
        height: 100vh;
        width: 15vw;
        border-radius: 0 150vw 125vw 0 / 0 380vmin 600vmin 0;
        display: inline-block;
        content: '';
    }

}
@media only screen and (min-width: 1300px) {	
 .top_right{
	z-index: -1;
        width: 45vw;
        height: 100vh;
        background: #4332ff;
        position: fixed;
        display: inline-block;
    }
    
    .top_right:before{
        background: white;
        height: 100vh;
        width: 35vw;
        border-radius: 0 250vw 165vw 0 / 0 380vmin 600vmin 0;
        display: inline-block;
        content: '';
    }
    


}

.top_left{	top: 50; 	left: 0;}
.top_right{	top: 50; 	right: 0;}




</style>
<div style='position: relative; max-height:100vh;' >";
// onclick=location.href='newurl.html'; taken out from these divs.... as somehwere /some way to guide people thorugh the most critical elements

echo "	<div class='top_left'> </div>
	<div class='top_right'> </div>
	
	
</div>
";


//require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/end.php";
?>
