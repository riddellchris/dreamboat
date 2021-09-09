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
if(!isset($_SESSION)){session_start();}

if($prompt == 'Which planned events did you attend?'){$database = 'events';}
if($prompt == 'What events have you cancelled?'){$database = 'events';}






$sql = "SELECT * FROM ".$database." WHERE user_id = '".$_SESSION['user_id']."' AND status = 'active' AND deleted = 'no' ";
require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";

$result = mysqli_query($conn, $sql);

while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
	echo "<a  style = 'max-width:1100px;margin:auto;' class='one-green-button wide-button' 	href='/components/inputs/submit.php?item_id=".$row['item_id']."'>".$row['title']."</a>";
	echo "<br>";
}
?>