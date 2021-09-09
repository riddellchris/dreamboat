<?php
if(!isset($_SESSION)){session_start();}

echo "this should really use the existing discussion platform with some $_POST tweak to tell the discussion platform where it's coming from and how to store incoming information";

echo "<br>";

echo "when coming through the system to display the old comments a similar tweak will probably be required as a $_SESSION or just straight $variable to ensure we know when it is required";

echo "obviously by doing this we know what is really needed then";
