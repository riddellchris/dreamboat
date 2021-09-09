<?php
if(!isset($_SESSION)){session_start();}

//This is critical to script development because we cannot properly build the script without knowing:
//how many series are required
    //this is a function of:
    //how many colors are actually required
    //how many thicknesses are actually required
    //how many dash types are actually required
    //then we can use this information to actually define:
        //how many series are required in the options: lineDashStyle

//this will grow and expand over time as we build up the entire system
    //to start with the simple objective is to just nail the ability to have multiple line colors

    //the first simple check here will be to see just how many relationships there are to display
    //this comes pretty simply from 
		//   components/map_engine/data_manipulation/arrays/relationships/build.php
		//   $number_of_active_relationships
			//check that this is correctly divided by two to remove the current duplications in the item relatinoships database

	//so then what we need to do is take this relationship id and go over to the edge data table
	//from here we will simply pull out the edge data to be displayed.

	//while ultimately we should use segments
	//what we can actually do is just give each and every relations it's own series
		//this avoids any further complications
		//this also avoids any what goes where shit

		//to do this we would have to use rgb colors

		//that's it
		//then as we go more complexity can keep going and applying here more and more