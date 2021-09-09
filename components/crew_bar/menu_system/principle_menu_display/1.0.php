<?php
if(!isset($_SESSION)){session_start();}

echo "
<style>
.admin_layer_one_menu{
height:		20px;
width:		calc((100% / 9) - 2%);
font-family: 	Helvetica;
font-family: 	initial;
text-transform: uppercase;
float:left;
padding:  10px 1%;
box-sizing: content-box;
text-align: center;
}

.admin_layer_one_menu.shadow{
box-shadow: 	4px 0px 8px 4px rgba(0, 0, 0, 0.2), 6px 0px 20px 6px rgba(0, 0, 0, 0.19);
}

.admin_layer_one_menu_container{
//bottom:50;
//position:fixed;
width:100%;
}




.notes{		    background-color: white;	color: #281e96;}
.advice{	    background-color: #abefff;	color: #281e96;}
.knowledge{	    background-color: #7c70ff;	color: white;}
.comparison{	background-color: #4332ff;	color: #ffffff;}
.controls{	    background-color: #281e96;	color: #ffffff;}
.technology{	background-color: #9c9c9c;	color: #ff0000;}
.other{		    background-color: #9c9c9c;	color: #00ff00;}

.admin_layer_one_menu.knowledge:hover{	background-color: red;	color: white;}
.admin_layer_one_menu.notes:hover{	    background-color: red; 	color: white;}
.admin_layer_one_menu.advice:hover{	    background-color: red; 	color: white;}
.admin_layer_one_menu.comparison:hover{	background-color: red; 	color: white;}
.admin_layer_one_menu.charts:hover{	    background-color: red; 	color: white;}
.admin_layer_one_menu.controls:hover{	background-color: red; 	color: white;}
.admin_layer_one_menu.technology:hover{	background-color: red; 	color: white;}
.admin_layer_one_menu.other:hover{	    background-color: #00FF00; 	color: black;}

.admin_layer_one_menu.red{	background-color: #ff0000; color:white;}

.knowledge.alert{	background-color: orange;	color: #281e96;}
.notes.alert{		background-color: orange;	color: #281e96;}
.advice.alert{		background-color: orange;	color: #281e96;}
.comparison.alert{	background-color: orange;	color: #281e96;}
.charts.alert{		background-color: orange;	color: #281e96;}
.controls.alert{	background-color: orange;	color: #281e96;}
.technology.alert{	background-color: orange;	color: #281e96;}
.other.alert{		background-color: orange;	color: #281e96;}

.knowledge.alert:hover{		background-color: #ffc169;	color: #281e96;}
.notes.alert:hover{		    background-color: #ffc169;	color: #281e96;}
.advice.alert:hover{		background-color: #ffc169;	color: #281e96;}
.comparison.alert:hover{	background-color: #ffc169;	color: #281e96;}
.charts.alert:hover{		background-color: #ffc169;	color: #281e96;}
.controls.alert:hover{		background-color: #ffc169;	color: #281e96;}
.technology.alert:hover{	background-color: #ffc169;	color: #281e96;}
.other.alert:hover{		    background-color: #ffc169;	color: #281e96;}

@media only screen and (max-width: 800px) {.admin_layer_one_menu_container{display: none;}}
@media only screen and (min-width: 800px) {.admin_layer_one_menu_container{display: block;}}
@media only screen and (max-height: 600px) {.admin_layer_one_menu_container{display: none;}}
@media only screen and (min-height: 600px) {.admin_layer_one_menu_container{display: block;}}

.admin_layer_one_menu_details{	width:100%;	display: none;}

@media only screen and (max-width: 1090px) {.admin_layer_one_menu_details{height:calc(100vh - 225px);}}
@media only screen and (min-width: 1090px) {.admin_layer_one_menu_details{height:calc(100vh - 100px);}}

#top{	display:none;}
</style>";


echo "
<script>
function ChangeAdminLayerOneMenu(to) {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     document.getElementById('admin_container').innerHTML = this.responseText;
    }
  };
  xhttp.open('GET', '/components/crew_bar/menu_system/container_calculations.php?primary_folder=".$_GET['primary_folder']."&secondary_folder=".$_GET['secondary_folder']."&tertiary_folder=".$_GET['tertiary_folder']."&change_to=primary_layer&to='+to);
  xhttp.send();
}


function UnsetAdminLayerOneMenu() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     document.getElementById('admin_container').innerHTML = this.responseText;
    }
  };
  xhttp.open('GET', '/components/crew_bar/menu_system/container_calculations.php?change_to=primary_layer&to=closed');
  xhttp.send();
}

</script>
";



// admin_container_calculations.php?change=primary_menu&to='+name, true);
//$_SESSION['admin_principle_menu_layer'] = 'advice';


function admin_layer_one_menu($name){
	echo "<div id='".$name."_admin_layer_one_menu'  class='".$name." admin_layer_one_menu ";
	if($_SESSION['admin_principle_menu_layer'] == $name){echo " red ";}
			
			echo "'"; //shadow class removed 2.7.20
	
	//this makes sure that if we are selected we can't select this again... i.e. it cannot change
	if($_SESSION['admin_principle_menu_layer'] != $name){echo ' onclick="ChangeAdminLayerOneMenu(&#39;'.$name.'&#39;);"';}
	//however if we do adjust this we should 
	if($_SESSION['admin_principle_menu_layer'] == $name){echo ' onclick="UnsetAdminLayerOneMenu();"';}	
	
	
	echo '>'.ucfirst($name).'</div>';
	

}

echo "<div class='admin_layer_one_menu_container' style='border-top: #cecece 3px solid;'>";
	//top layer pilot only menu accordian

	admin_layer_one_menu('users');
	admin_layer_one_menu('notes');
	admin_layer_one_menu('interrogation');
	admin_layer_one_menu('advice');
	admin_layer_one_menu('knowledge');
	admin_layer_one_menu('comparison');
	admin_layer_one_menu('controls');	
	admin_layer_one_menu('technology');
	admin_layer_one_menu('other');	
			
echo "</div>";
	
	
	


