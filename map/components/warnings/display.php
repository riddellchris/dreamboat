<style>

#warnings_box{
    color: #4332ff; 
    position: fixed; 
    top: 115; 
    width: 400px; 
    left: calc(50% - 200px);
    text-align:center; 
    text-transform:uppercase;
    font-family: helvetica;
    z-index: 2000;
}


#body:fullscreen 		#warnings_box       {  		top:  10;}
</style>

<?php
if(!isset($_SESSION)){session_start();}

//these will change with each display for each user
//while clearly linked to sliding layers it should probably / for code cleanliness and simpliciy be done with all separate code



echo "<div id='warnings_box'>";

if($_SESSION['dreamboat_crew'] == 'yes'){
    require $_SERVER['DOCUMENT_ROOT']."/map/components/diagnostics/menu/display.php";
echo "<br>";
}


require $_SERVER['DOCUMENT_ROOT']."/map/components/warnings/check_and_create.php";

echo "  
	    <div style='margin-top: 15px;'>";
		
	if($display_chart == 'no'){
	//	echo "<div class='prompt-font' style='width:100%;text-align:center;height:65vh;bottom: 0;position: absolute;'>";
			echo $map_warning;
			echo "<br><br>";
	//	echo "</div>";
	}

		echo " optimal comparison: <span style='color: red;'>insufficient inputs</span></div>
      </div>";
// <input type='checkbox'></input>";//on/off <greyed out insufficient inputs as yet"; //this really is the "end of the line here as this is what it's all about"; keep building and optimising this
//comparative variance.  -- uses all data for similar people
//this should really be a checkbox but essentially be model driven checks against all these things/