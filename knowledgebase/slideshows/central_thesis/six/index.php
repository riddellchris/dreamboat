<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/start.php";

echo "<div class='slideshow_title_container'>";
      echo "E.G. INDIVIDUAL OPTIMISATIONS";

echo "</div>";

//require $_SERVER['DOCUMENT_ROOT']."/slideshows/components/process_diagram_2/display.php";

echo "<div class='slideshow_descriptive_text'>";

list_start();
//  point_detailed_start('yes', 10,8,8,"Improve the expected productivity of each individual based on statistics, structural changes & individual/business alignment");
list_end();
echo "</div>";


echo "
<style>
@media only screen and (max-width: 600px){  
  .slideshow_column{width: 86%; margin: 2%;}
    #slideshow_column_1{float:left;}
    #slideshow_column_2{float:left;}
    #slideshow_column_3{float:left;}
    #slideshow_column_4{float:left;}
    #bottom_pad{height: 0px;}
}
@media only screen and (min-width: 600px) and (max-width: 1200px){  
    .slideshow_column{  width: 93%; margin: 2%;}
    #slideshow_column_1{float:left;}
    #slideshow_column_2{float:none;}
    #slideshow_column_3{float:none;}
    #slideshow_column_4{float:left;}   

    #bottom_pad{height: 100px;}
   
    }
@media only screen and (min-width: 1200px){      
    .slideshow_column{width: 20.5%; margin: 2%;}
    #slideshow_column_1{float:left;}
    #slideshow_column_2{float:left;}
    #slideshow_column_3{float:left;}
    #slideshow_column_4{float:left;}      
    #bottom_pad{height: 100px;}    
    }

.db_info_box_title{
    width:       100%;
    text-align:  center;
    font-family: Barlow Semi Condensed, sans-serif;
    font-weight: 500;
    font-size:   34px;
    color:       black;
    padding-bottom: 8px;
    padding-left: 20px;
}

.db_info_box{
    //font-family: Gloria Hallelujah;  
    font-family: Comfortaa;     
    color: #281e96;  
    padding-top: 30px;
    padding-left: 40px;
    padding-bottom: 40px;
    }
    .db_info_box{box-shadow: -6px -4px 2px 0px rgb(0 0 0 / 5%);}


ul.intab{	list-style: '◥';
	text-indent: 0.25em;
	padding-inline-start: 1em;
	margin-block-start: 0.25em;	
	margin-block-end: 0.25em;	
	}

</style>
";

echo "<div id='slideshow_diagram_block'>";

  echo "<div id='slideshow_column_1' class='slideshow_column'>";
    echo "<div class='db_info_box_title'>Time</div>";

    echo "<div class='db_info_box blue'>";
        echo "Time spend per activity vs highest productivity improvement.                        
                	<ul class='intab'>
						        <li>revenue production</li>
                      <li>efficiency maximisation</li>
					</ul>";

    echo "</div>";  
    echo "<div class='db_info_box blue'>";
        echo "Time spend vs various network connections.
        <ul class='intab'>
                        <li>same organisation</li>
                        <li>other organisations</li>
                      </ul>";

    echo "</div>";
    echo "<div class='db_info_box blue'>";
        echo "Time spend per business domain
          <ul class='intab'>
                        <li>market segments</li>
                        <li>supply vs demand</li>
                         <li>people vs admin</li>
                    </ul>
                        ";
    echo "</div>";
  echo "</div>";

  echo "<div id='slideshow_column_2' class='slideshow_column'>";
    echo "<div class='db_info_box_title'>Activity</div>";
    echo "<div class='db_info_box red'>";
            echo "Historical activity comparisons that optimised productivity.
            <ul class='intab'>
                          <li>based on your previous activity records</li>
                        <li>based on comparative prople records</li>  
                    </ul>";          


    echo "</div>";  
    echo "<div class='db_info_box red'>";
                echo "Comparative activity optimisations vs other individuals.
                <ul class='intab'>
                        <li>same organisation</li>
                        <li>other organisations</li>
                      </ul>
                ";

    echo "</div>";

  echo "</div>";


//Motivation

  echo "<div id='slideshow_column_3' class='slideshow_column'>";
    echo "<div class='db_info_box_title'>Skills</div>";
    echo "<div class='db_info_box blue'>";


    

    echo "</div>";  
    echo "<div class='db_info_box blue'>";   


    echo "</div>";
    echo "<div class='db_info_box blue'>";
    
    echo "</div>";
    echo "<div class='db_info_box_title'>Structures</div>";
  echo "</div>";


//Organisation
  echo "<div id='slideshow_column_4' class='slideshow_column'>";
    echo "<div class='db_info_box_title'>Direction</div>";
    echo "<div class='db_info_box red'>";
       echo "Task & activity related
       <ul class='intab'>
      					 
                        <li></li>
                        <li>Trust</li>
                         <li>Direction</li>
                          <li></li>
                        </ul>
                        ";    
    echo "</div>";  
    echo "<div class='db_info_box red'>"; 
        echo "Planning
          <ul class='intab'>
                <li>Time spent</li>
                        <li>Required knowledge</li>
                        <li>product & service breakdown</li>
                    </ul>
                        ";
    echo "</div>";
    echo "<div class='db_info_box_title'>Motivation</div>";
    echo "<div class='db_info_box red'>"; 
        echo "Direction";   
    echo "</div>";
    require $_SERVER['DOCUMENT_ROOT']."/slideshows/components/disclaimer.php";
  echo "</div>";


echo "</div>";


echo "<div id='bottom_pad' style='display:inline-block;'>&nbsp;</div>";

require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/end.php";    