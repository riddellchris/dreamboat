<?php 
  
$languages = array(); 
  
$languages['Python'] = array( 
    "first_release" => "1991",  
    "latest_release" => "3.8.0",  
    "designed_by" => "Guido van Rossum", 
    "description" => array( 
        "extension" => ".py",  
        "typing_discipline" => "Duck, dynamic, gradual", 
        "license" => "Python Software Foundation License"
    ) 
); 
  
print_r($languages['Python']['description']); 
echo $languages['Python']['latest_release']; 
  
?> 