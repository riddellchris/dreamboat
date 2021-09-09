<style>



.ten-button{
	color:white;
	background-color:#017c0d;
}
.ten-button:hover{
	background-color:#017c0d;
	box-shadow: 0px 0px 0px rgba(0, 0, 0, 0.4);	
}

.nine-button{
	color:white;
	background-color:#119A1E;
}
.nine-button:hover{
	background-color:#017c0d;
	box-shadow: 0px 0px 0px rgba(0, 0, 0, 0.4);	
}
.eight-button{
	color:white;
	background-color:#21b72f;
}
.eight-button:hover{
	background-color:#017c0d;
	box-shadow: 0px 0px 0px rgba(0, 0, 0, 0.4);	
}
.seven-button{
	color:white;
	background-color:#3DD34B;
}
.seven-button:hover{
	background-color:#017c0d;
	box-shadow: 0px 0px 0px rgba(0, 0, 0, 0.4);	
}
.six-button{
	color:#034c0a;
	background-color:#58ef66;
}
.six-button:hover{
	color:white;
	background-color:#017c0d;
	box-shadow: 0px 0px 0px rgba(0, 0, 0, 0.4);	
}
.five-button{
	color:#034c0a;
	background-color:#76F781;
}
.five-button:hover{
	color:white;
	background-color:#017c0d;
	box-shadow: 0px 0px 0px rgba(0, 0, 0, 0.4);	
}
.four-button{
	color:#034c0a;
	background-color:#93ff9b;
}
.four-button:hover{
	color:white;
	background-color:#017c0d;
	box-shadow: 0px 0px 0px rgba(0, 0, 0, 0.4);	
}
.three-button{
	color:#034c0a;
	background-color:#B5FFBA;
}
.three-button:hover{
	color:white;
	background-color:#017c0d;
	box-shadow: 0px 0px 0px rgba(0, 0, 0, 0.4);	
}
.two-button{
	color:#034c0a;
	background-color:#d6ffd9;
}
.two-button:hover{
	color:white;
	background-color:#017c0d;
	box-shadow: 0px 0px 0px rgba(0, 0, 0, 0.4);	
}
.one-button{
	color:#034c0a;
	background-color:#EBFFEC;
}
.one-button:hover{
	color:white;
	background-color:#017c0d;
	box-shadow: 0px 0px 0px rgba(0, 0, 0, 0.4);	
}
.zero-button{
	color:#034c0a;
	background-color:#ffffff;
}
.zero-button:hover{
	color:white;
	background-color:#017c0d;
	box-shadow: 0px 0px 0px rgba(0, 0, 0, 0.4);	
}
</style>




<?php
//require $_SERVER['DOCUMENT_ROOT']."/design/layouts/start_of_page.php";

if(!isset($_SESSION)){session_start();}

echo "<a class='wide-button ten-button' 	href='/inputs/submit.php?value=10'>10</a>";
echo "<a class='wide-button nine-button' 	href='/inputs/submit.php?value=9'>9</a>";
echo "<a class='wide-button eight-button' 	href='/inputs/submit.php?value=8'>8</a>";
echo "<a class='wide-button seven-button' 	href='/inputs/submit.php?value=7'>7</a>";
echo "<a class='wide-button six-button' 	href='/inputs/submit.php?value=6'>6</a>";
echo "<a class='wide-button five-button' 	href='/inputs/submit.php?value=5'>5</a>";
echo "<a class='wide-button four-button' 	href='/inputs/submit.php?value=4'>4</a>";
echo "<a class='wide-button three-button' 	href='/inputs/submit.php?value=3'>3</a>";
echo "<a class='wide-button two-button' 	href='/inputs/submit.php?value=2'>2</a>";
echo "<a class='wide-button one-button' 	href='/inputs/submit.php?value=1'>1</a>";
echo "<a class='wide-button zero-button' 	href='/inputs/submit.php?value=0'>0</a>";

?>