<?php
if(!isset($_SESSION)){session_start();}

echo "
<style>
.diagnostics_switch{
    width: calc(50% - 8px);
    float: left;
    text-align:center;
	box-shadow: 4px 0px 8px 4px rgb(0 0 0 / 13%);
	padding: 4px;
    color: white;
}";


if($_SESSION['display_map_diagnostics'] == 'on'){

    echo "
    .diagnostics_off{        background-color: grey;}
    .diagnostics_off:hover{  background-color: green;}    
    .diagnostics_on{         background-color: red;}
//    .diagnostics_on:hover{   background-color: red;}   
    ";



}
else{


    echo "
    .diagnostics_off{        background-color: green;}
//    .diagnostics_off:hover{  background-color: green;}    
    .diagnostics_on{         background-color: grey;}
    .diagnostics_on:hover{   background-color: red;}   
    ";




}
echo "
</style>
";






    echo "<div style='width: 100%; margin-bottom: 6px;'>";
		//echo $_SESSION['display_map_diagnostics'] ;
        echo "<a class='diagnostics_switch diagnostics_off' "; 
			if($_SESSION['display_map_diagnostics'] == 'on'){    echo " href='/map/components/diagnostics/menu/change.php?to=off&from=".$_GET['secondary_folder']."' ";} 
		echo ">LIVE</a>";

        echo "<a class='diagnostics_switch diagnostics_on'  "; 
			if($_SESSION['display_map_diagnostics'] == 'off'){   echo " href='/map/components/diagnostics/menu/change.php?to=on&from=".$_GET['secondary_folder']."'  ";} 
		echo ">DIAGNOSTICS</a>";

    echo "</div>";