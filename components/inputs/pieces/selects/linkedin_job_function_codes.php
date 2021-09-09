<?php
if(!isset($_SESSION)){session_start();}

echo "
<select name = 'linkedin_job_function_code'  style='width:100%;'>	
";

function produce_option($name, $selected){
echo "	  <option ";
		if($selected == $name){echo 'selected';}
		echo " value=".$name."	>".$name."</option>";

}

if(!isset($selected)){$selected = '';}

produce_option("None", 					$selected);
produce_option("Accounting", 				$selected);
produce_option("Administrative", 			$selected);
produce_option("Arts and Design", 			$selected);
produce_option("Business Development", 			$selected);
produce_option("Community & Social Services", 		$selected);
produce_option("Consulting", 				$selected);
produce_option("Education", 				$selected);
produce_option("Engineering", 				$selected);
produce_option("Entrepreneurship", 			$selected);
produce_option("Finance", 				$selected);
produce_option("Healthcare Services", 			$selected);
produce_option("Human Resources", 			$selected);
produce_option("Information Technology", 		$selected);
produce_option("Legal", 				$selected);
produce_option("Marketing", 				$selected);
produce_option("Media & Communications", 		$selected);
produce_option("Military & Protective Services",	$selected);
produce_option("Operations", 				$selected);
produce_option("Product Management", 			$selected);
produce_option("Program & Product Management", 		$selected);
produce_option("Purchasing", 				$selected);
produce_option("Quality Assurance", 			$selected);
produce_option("Real Estate", 				$selected);
produce_option("Research", 				$selected);
produce_option("Sales", 				$selected);
produce_option("Support", 				$selected);


?>
	
</select>