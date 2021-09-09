<style>
	.arrow {
	  border: solid #94efff;
	  border-width: 0 0.5vw 0.5vw 0;
	  display: inline-block;
	  padding: 2vw;
	}
	
	.arrow:hover{}
	.right {
	  transform: rotate(-45deg);
	  -webkit-transform: rotate(-45deg);
	}

.arrow_color_1{ border: solid #94efff;}
.arrow_color_2{ border: solid #94daff;}
.arrow_color_3{ border: solid #94ffff;}
.arrow_color_4{ border: solid #6bf2d0;}
.arrow_color_5{ border: solid #6bc7f2;}
.arrow_color_6{ border: solid #94daff;}
.arrow_color_7{ border: solid #94efff;}
.arrow_color_8{ border: solid #94daff;}
.arrow_color_9{ border: solid #94efff;}
.arrow_color_10{ border: solid #94daff;}
.arrow_color_11{ border: solid #94efff;}
.arrow_color_12{ border: solid #94daff;}
.arrow_color_13{ border: solid #94efff;}
.arrow_color_14{ border: solid #94daff;}

.arrow_color_14:hover{ border: solid #94efff;}
.arrow_color_13:hover{ border: solid #94daff;}
.arrow_color_12:hover{ border: solid #94ffff;}
.arrow_color_11:hover{ border: solid #6bf2d0;}
.arrow_color_10:hover{ border: solid #6bc7f2;}
.arrow_color_9:hover{ border: solid #94daff;}
.arrow_color_8:hover{ border: solid #94efff;}
.arrow_color_7:hover{ border: solid #94daff;}
.arrow_color_6:hover{ border: solid #94efff;}
.arrow_color_5:hover{ border: solid #94daff;}
.arrow_color_4:hover{ border: solid #94efff;}
.arrow_color_3:hover{ border: solid #94daff;}
.arrow_color_2:hover{ border: solid #94efff;}
.arrow_color_1:hover{ border: solid #94daff;}




</style>

<?php



for($i = 0; $i < 204; $i ++){
	$full_fish .= "		<i class='arrow right arrow_color_".rand(1,14)."' style='border-width: 0 0.5vw 0.5vw 0;'></i>";


}

for($i = 0; $i < 115; $i ++){
	$fish_divider .= "	<i class='arrow right arrow_color_".rand(1,14)."' style='border-width: 0 0.5vw 0.5vw 0;'></i>";


}


?>

