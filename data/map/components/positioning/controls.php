<style>


<?php
if(!isset($_SESSION)){session_start();}

$south_from_bottom 			= 60;
$south_from_bottom_hover 	= 55;
$north_from_bottom 			= 160;
$north_from_bottom_hover 	= 165;
$east_from_bottom 			= 95;
$west_from_bottom 			= 95;

if($_SESSION['dreamboat_crew'] == 'yes'){
	$south_from_bottom 	= $south_from_bottom + 50;
	$south_from_bottom_hover 	= $south_from_bottom_hover + 50;
	$north_from_bottom 	= $north_from_bottom + 50;
	$north_from_bottom_hover 	= $north_from_bottom_hover + 50;
	$east_from_bottom 	= $east_from_bottom  + 50;
	$west_from_bottom 	= $west_from_bottom  + 50;
}

?>

#body:fullscreen 		#south_triangle       {  		bottom:  10;}
#body:fullscreen 		#south_triangle:hover {  		bottom:   5;}
#body:fullscreen 		#north_triangle       {  		bottom: 110;}
#body:fullscreen 		#north_triangle:hover {  		bottom: 115;}
#body:fullscreen 		#east_triangle        {  		bottom:  45;}
#body:fullscreen 		#west_triangle        {  		bottom:  45;}


#south_triangle{
	position:fixed;
	bottom: <?php echo $south_from_bottom; ?>;
	width: 0;
    height: 0;
    border-left: 30px solid transparent;
    border-right: 30px solid transparent;
    border-top: 30px solid #ff8080;
    right: 45;

}
#south_triangle:hover{
   border-top: 30px solid #ff5c5c;
   	bottom: <?php echo $south_from_bottom_hover; ?>;
}
#north_triangle{
	position:fixed;
	bottom: <?php echo $north_from_bottom; ?>;
    right: 45;
	width: 0;
    height: 0;
    border-left: 30px solid transparent;
    border-right: 30px solid transparent;
    border-bottom: 30px solid #ff8080;
  
}
#north_triangle:hover{
   border-bottom: 30px solid #ff5c5c;
   	bottom: <?php echo $north_from_bottom_hover; ?>;;
}
#east_triangle{
	position:fixed;

	width: 0;
    height: 0;
  border-top: 30px solid transparent;
  border-bottom: 30px solid transparent; 
    margin-top: calc(35vh );
  border-left:30px solid #ff8080; 
  right: 10;
  bottom: <?php echo $east_from_bottom; ?>;
}
#east_triangle:hover{
   border-left: 30px solid #ff5c5c;
   	right: 5;
}
#west_triangle{
	position:fixed;
    right: 110;
bottom: <?php echo $west_from_bottom; ?>;;
	width: 0;
    height: 0;
  border-top: 30px solid transparent;
  border-bottom: 30px solid transparent; 
  
  border-right:30px solid #ff8080; 

}
#west_triangle:hover{
   border-right: 30px solid #ff5c5c;
   	right: 115;
}
</style>

<div id= 'south_triangle'>
</div>
<div id= 'north_triangle'>
</div>
<div id= 'east_triangle'>
</div>
<div id= 'west_triangle'>
</div>