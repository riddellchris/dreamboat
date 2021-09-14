<?php
if(!isset($_SESSION)){session_start();}
//ideally this would have something about the file location up here

$development_version    = "1.7";
$current_version        = "1.7";


//$test = "fail";
//if(isset($_SESSION['dreamboat_developer'])){
      
        


//old version // failing on development server as         
if($_SESSION['dreamboat_developer'] == 'yes'){

        if($_SESSION['dreamboat_developer_view'] == 'live'){    $display_version = $current_version;}
        if($_SESSION['dreamboat_developer_view'] == 'future'){  $display_version = $development_version;}
        }
else{
        $display_version = $current_version;
}


//$display_version ;
require dirname(__FILE__)."/".basename(__FILE__, ".php")."/".$display_version.".php";



/*

1.7
trying to make it look a fair bit better


1.6
Data update 05.06.21


1.5
Not entirely sure I'll get to it
This really should be about multiple charts per size to nail the text sizes but perhaps all that's needed is a little work on the div changes to give it appropriate spacing...
So now the only thing is just making that title better


1.4
Nice so now a few changes
Full red - trendline - opacity from 0.2 >> 1
{format: 'percent'}: on vaxis


1.3
now what we really need is tur turn the multiples into just start of year dates
so add back the ticks but for literally every year
so this goes back into the haxis
, 
ticks: [	
        new Date(2021,1,1),       
        new Date(2020,1,1), 
        new Date(2019,1,1),
        new Date(2018,1,1), 
        new Date(2017,1,1),
        new Date(2016,1,1), 
        new Date(2015,1,1),
        new Date(2014,1,1), 
        new Date(2013,1,1),
        new Date(2012,1,1), 
        new Date(2011,1,1),
        new Date(2010,1,1), 
        new Date(2009,1,1),
        new Date(2008,1,1), 
        new Date(2007,1,1),
        new Date(2006,1,1), 
        new Date(2005,1,1),
        new Date(2004,1,1), 
        new Date(2003,1,1),
        new Date(2002,1,1), 
        new Date(2001,1,1),
        new Date(2000,1,1), 
        new Date(1999,1,1),
        new Date(1998,1,1), 
        new Date(1997,1,1),
        new Date(1996,1,1), 
        new Date(1995,1,1),
        new Date(1994,1,1), 
        new Date(1993,1,1),
        new Date(1992,1,1), 
        new Date(1991,1,1),
        new Date(1990,1,1),
        new Date(1989,1,1),
        new Date(1988,1,1)
        ]



1.2
nope - remove - gridlines from haxis
careful with , 's 
nicer - much nicer



1.1
No vertical markers by removing the following from options/haxis
, 
ticks: [	new Date(2020,1,1), 
        new Date(2018,1,1), 
        new Date(2016,1,1), 
        new Date(2014,1,1), 
        new Date(2012,1,1), 
        new Date(2010,1,1), 
        new Date(2008,1,1), 
        new Date(2006,1,1), 
        new Date(2004,1,1), 
        new Date(2002,1,1), 
        new Date(2000,1,1), 
        new Date(1998,1,1), 
        new Date(1996,1,1), 
        new Date(1994,1,1), 
        new Date(1992,1,1), 
        new Date(1990,1,1)
        ]



1.0
Just the basic chart to start
Now to make something great
*/
