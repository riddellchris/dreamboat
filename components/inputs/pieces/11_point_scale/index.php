<style>



.five-green-button{
	color:white;
	background-color:#017c0d;
}
.five-green-button:hover{
	background-color:#017c0d;
	box-shadow: 0px 0px 0px rgba(0, 0, 0, 0.4);	
}
.four-green-button{
	color:white;
	background-color:#21b72f;
}
.four-green-button:hover{
	background-color:#017c0d;
	box-shadow: 0px 0px 0px rgba(0, 0, 0, 0.4);	
}
.three-green-button{
	color:#034c0a;
	background-color:#58ef66;
}
.three-green-button:hover{
	color:white;
	background-color:#017c0d;
	box-shadow: 0px 0px 0px rgba(0, 0, 0, 0.4);	
}
.two-green-button{
	color:#034c0a;
	background-color:#93ff9b;
}
.two-green-button:hover{
	color:white;
	background-color:#017c0d;
	box-shadow: 0px 0px 0px rgba(0, 0, 0, 0.4);	
}
.one-green-button{
	color:#034c0a;
	background-color:#d6ffd9;
}
.one-green-button:hover{
	color:white;
	background-color:#017c0d;
	box-shadow: 0px 0px 0px rgba(0, 0, 0, 0.4);	
}


.one-red-button{
	color: #910e0e;
	background-color:#ffdbdb;
}
.one-red-button:hover{
	color:white;
	background-color:#910e0e;
	box-shadow: 0px 0px 0px rgba(0, 0, 0, 0.4);	
}
.two-red-button{
	color: #910e0e;
	background-color:#ffaaaa;
}
.two-red-button:hover{
	background-color:#910e0e;
	box-shadow: 0px 0px 0px rgba(0, 0, 0, 0.4);	
}
.three-red-button{
	color:white;
	background-color:#ff6363;
}
.three-red-button:hover{
	background-color:#910e0e;
	box-shadow: 0px 0px 0px rgba(0, 0, 0, 0.4);	
}
.four-red-button{
	color:white;
	background-color:#d83131;
}
.four-red-button:hover{
	background-color:#910e0e;
	box-shadow: 0px 0px 0px rgba(0, 0, 0, 0.4);	
}
.five-red-button{
	color:white;
	background-color:#910e0e;
}
.five-red-button:hover{
	background-color:#910e0e;
	box-shadow: 0px 0px 0px rgba(0, 0, 0, 0.4);	
}

</style>








<?php
//require $_SERVER['DOCUMENT_ROOT']."/design/layouts/start_of_page.php";

if(!isset($_SESSION)){session_start();}

echo "<a class='five-green-button wide-button' 	href='/inputs/submit.php?value=5'>Abosultely amazing</a>";

echo "<a class='four-green-button wide-button' 	href='/inputs/submit.php?value=4'>Wonderful</a>";

echo "<a class='three-green-button wide-button' href='/inputs/submit.php?value=3'>Great</a>";

echo "<a class='two-green-button wide-button' 	href='/inputs/submit.php?value=2'>Good</a>";

echo "<a class='one-green-button wide-button' 	href='/inputs/submit.php?value=1'>OK</a>";

echo "<a class='grey-button wide-button' 	href='/inputs/submit.php?value=0'>Average</a>";

echo "<a class='one-red-button wide-button' 	href='/inputs/submit.php?value=-1'>A little off</a>";

echo "<a class='two-red-button wide-button' 	href='/inputs/submit.php?value=-2'>Bad</a>";

echo "<a class='three-red-button wide-button' 	href='/inputs/submit.php?value=-3'>Very Bad</a>";

echo "<a class='four-red-button wide-button' 	href='/inputs/submit.php?value=-4'>Terrible</a>";

echo "<a class='five-red-button wide-button' 	href='/inputs/submit.php?value=-5'>Diabolical</a>";
?>