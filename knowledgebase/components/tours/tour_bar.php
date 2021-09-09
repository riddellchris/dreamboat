<?php

echo "
<style>
.tour_bar{
	position: fixed;
	bottom:50px;
	height:50px;
	
	font-family: Helvetica;
	text-transform: uppercase;
	}
	
.next_on_tour{	height: 100%;
		text-align:center;
		color: white;
		font-size: 18px;
		padding-top: 12px;
		background-color: #64ff2b;
		color: #478a2f;
		}
.next_on_tour:hover{
		background-color: #4abd20;
		
}
	

@media only screen and (min-width: 768px) {.tour_bar{margin-left:25vw;	width:75vw;}}	
@media only screen and (max-width: 768px) {.tour_bar{width:100vw;	}	}
	
select{	padding: 	unset;
	margin: 	unset;
	height:		100%;
	width: 		100%;
	text-align:	center;
	font-family:	Helvetica;
	text-transform: uppercase;
	text-align-last:center;
}
select:hover{background-color:#4332ff;}	
</style>

";


//if url is part of the tour then show the right select option.
//otherwise keep to limited options

echo "
<div class='tour_bar'>
	<div style='float:left;width:50%;'>";

if(!isset($_SESSION['knowledgebase_tour'])){$_SESSION['knowledgebase_tour'] = 'standard';}


	//tick off list.... in $_SESSION variables. if get sidetracked, next just takes you to what is next on the tour
echo "<form method='post' action='/knowledgebase/components/tours/change_tour.php'>";
echo "	<select onchange='this.form.submit()'>
		<option>select a tour</option>";


echo "		<option ";
if($_SESSION['knowledgebase_tour'] == 'snapshot'){echo " selected ";}
echo ">Snapshot tour</option>";
		//default
		//snapshot tour
			//economic problem
			//productivity improvement
			//productivity management
			//what is productivity
			//productivity resistance
			//universality		
			//inputs 
			//outputs
		
		
echo "		<option ";
if($_SESSION['knowledgebase_tour'] == 'standard'){echo " selected ";}
echo ">Standard tour</option>";
		//standard tour - use to talk through with most people
			//economic problem
			//economic solution
			//productivity improvement
			//productivity management

						//our model of productivity
							//what is productivity
							//factors
							//productivity resistance		

echo "		<option>Due dilligence tour</option>";
//dd tour
//all the nitty gritty
	
	
	
		
echo "		<option>Book tour</option>";
		//book tour a.k.a. top to bottom according to index
echo "	</select>";
echo "</form>";
	

	
	
	
	echo "</div>";	
	
	
				
	echo "
	<div 
		class='next_on_tour' ";
		?>
		onclick="location.href='/knowledgebase/components/tours/next_on_tour.php'"
	<?php
	echo "
	>NEXT ></div>


</div>";

?>