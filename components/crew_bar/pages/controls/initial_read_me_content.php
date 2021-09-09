<?php
if(!isset($_SESSION)){session_start();}

echo "

//opens and closes elements of the system.<br>
//new features/ page options as required.<br>

This is how to load people up into the system.<br><br>



//put in 5 activities here first<br>
//then put in two issues<br>
//two upgrades and carry on from there<br>
<br>
//after that some financial flows<br>
//some people and orgainsations that are most prominent<br>
//then look at the sales and marketing activites that are most critical<br>
<br>
//look at the tasks they have on in their wheelhouse, goals and objectives<br>
//then finally their products and services<br>




//controls//user settings //and checklists/checks (i.e. is email sending on for this or that



//turn on//off discussion about /time/allocation/ menu options..<br>
//just for one / discussion column<br>
//need to set for the user a specific page<br><br><br>
";

//run ajax changes so that nothing else is needed to change really 
echo "/time/allocation/discussion"; //on/off radio button
echo "<br>";
echo "/time/allocation/tracking";   //on/off radio button

//iff tracking on but discussion off then tracking will not display// text warning will be required for this // to show this



echo "others to build";
echo "/wheelhouse/homework/ - on/off";	echo "<BR>";
echo "how sales works and is calculated";echo "<BR>";

echo "industry related specifications// such as defaults for how sales works and is calculated";echo "<BR>";