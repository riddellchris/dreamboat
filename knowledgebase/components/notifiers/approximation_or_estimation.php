<?php
if(!isset($_SESSION)){session_start();}

//ideally should be yellow and black like a construction sign
//https://www.google.com/search?q=construction+warning+signs&sxsrf=ALeKk01V_dk2giPhYGTKDqK5612RJhuhLw:1599525368588&tbm=isch&source=iu&ictx=1&fir=MT_d7avyB8FB4M%252CJzaBTOwwva725M%252C_&vet=1&usg=AI4_-kSMgrZJ2AlA64DF47uMKPqM4SOAuw&sa=X&ved=2ahUKEwjjjp2rqNjrAhVaVH0KHXedBGAQ9QF6BAgKEFo&biw=2560&bih=1338#imgrc=MT_d7avyB8FB4M

echo "
	<div class='highlights'>
		<span style='color: black'>
			<i class='fas fa-pencil-ruler'></i> ";
			if($type == 'approximation'){	echo "Approximation: 		";}
			if($type == 'estimation'){	echo "Estimation: 		";}
			if($type == 'both'){		echo "Approximation & estimation: ";}
			echo "</span> ".$copy;
echo "</div>";
unset($type);
unset($copy);
