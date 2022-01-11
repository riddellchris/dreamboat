<?php
if(!isset($_SESSION)){session_start();}

/*
CR 10.08.20
off for now until actually required AND
TECH staff can build and manage it properly.
THERE is LOTS of stuff pre built in here - don't forget or loose them
the flows are pretty self evident based on the titles really
*/

if(isset($_SESSION['dreamboat_crew'])){
	/*
	CR 20.08.14
	//notes, advice and knowledge would be good but honestly who cares right now
	I can manage it alone and perhaps we'll never have the bottom section only elements that matter in one single angle*/
	if(	//$_SESSION['viewing_client_id'] == '1' && //just for now
		$_SESSION['dreamboat_crew'] == 'yes' &&
		is_numeric(strpos($_SERVER['REQUEST_URI'],'/knowledgebase/')) != 1 
		){
		//echo "<div style='height:250px;'>&nbsp;</div>";
		require $_SERVER['DOCUMENT_ROOT']."/components/crew_bar/layouts/overarching_layout.php";
	}
}

//if($_GET['primary_folder'] == 'map'){echo "<div name='map_spacer' style='height:200px;'></div>";}
if(check_url('/slideshows/') == 1){


	echo "<div style='height: 80px;width:100%;'></div>";

	require $_SERVER['DOCUMENT_ROOT']."/slideshows/components/menu/div.php";
}


echo "<div id='footer' class='footer footer_shadow' style='width:100%;z-index: 2000;";


if(check_primary_folder('plan')){echo "background-color:transparent;box-shadow: unset;";}


$default_spacer = 'yes';
if(	is_numeric(strpos($_SERVER['REQUEST_URI'],'/profile/reviews/')) 							== 1 OR
	is_numeric(strpos($_SERVER['REQUEST_URI'],'/content/who_we_help/staff/')) 					== 1 OR
	is_numeric(strpos($_SERVER['REQUEST_URI'],'/content/who_we_help/freelancers/')) 			== 1 OR
	is_numeric(strpos($_SERVER['REQUEST_URI'],'/content/who_we_help/owners_and_directors/')) 	== 1){
			$default_spacer = 'no';
			echo "height: 50px;";
	}
if($default_spacer == 'yes'){
		echo "height:32px;";
	}
echo "'>";









require $_SERVER['DOCUMENT_ROOT']."/components/navigation/footer.php";
?>

</div>


		</div>
	</body>
</html>


<?php
/*
if(!isset($_SESSION)){session_start();}

echo $_GET['primary_folder'];
echo $_GET['secondary_folder'];

exit();
*/
?>