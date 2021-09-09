<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/start.php";

echo "
//matching up the same sorts of nodes together across users<br>
&nbsp;&nbsp; This can be done direct via the database to start with<br>
//matching up the same businesses and the same people across the board toghether too<br>
//products & services<br>
//activities<br>
//tasks<br>
//issues<br>
//everything really<br>
<br>
//there are two sorts of matching<br>
//exact match / i.e. they are the same thing and they are similar<br>
<br>
//issues for example will use the similar allocation<br>
//people/businesses will use the exact match<br>
<br>
//products and services can use both similar and exact<br>
<br>
//activites, tasks etc.<br>
<br>
//all adds into the calculations.<br>
<br>
//this allows us to run calculations on the optimisation of everyones time and value<br>
<br>
//this must be done with a couple of select bars";


//this probably requires some form of system ID


require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/end.php";