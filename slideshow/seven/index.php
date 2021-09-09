<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/start.php";

echo "<div class='slideshow_title_container'>";
      echo "E.G. BUSINESS OPTIMISATIONS";

echo "</div>";

//require $_SERVER['DOCUMENT_ROOT']."/slideshow/components/process_diagram_2/display.php";

echo "<div class='slideshow_descriptive_text'>";
/*
list_start();
  point_detailed_start('yes', 10,8,8,"From: time utilisation, expense & revenue production <a target='_blank' href='/knowledgebase/our_model/optimisations/'>optimisations</a> to:");
  point_detailed_start('no', 10,8,8,"Identifying comparative process inefficiencies, and predicting the fastest path forward,");
  point_detailed_start('no', 10,8,8,"We drive you, your business and the economy forward using the evergrowing pool of data.");
list_end();*/
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
  echo "<div id='slideshow_column_3' class='slideshow_column'>";
    echo "<div class='db_info_box_title'>Revenue</div>";
    echo "<div class='db_info_box blue'>";
       echo "Product pricing distributions. 
       <ul class='intab'>
      					 <li>comparative</li>
                        <li>category based</li>
                        <li>customer based</li>
                        </ul>
                        ";      

    echo "</div>";  
    echo "<div class='db_info_box blue'>";
        echo "Invoice pricing distributions.
        <ul class='intab'>
                                <li>volume</li>
                        <li>value</li>
                        <li>product & service breakdown</li>
                    </ul>
                        ";
    echo "</div>";
    echo "<div class='db_info_box_title'>Financial</div>";
   echo "<div class='db_info_box blue'>";
       echo "Limiting factor analysis
       <ul class='intab'>
      					 <li>working capital</li>
                        <li>cash cycle</li>

                        </ul>
                        ";      

    echo "</div>";  


  echo "</div>";

  echo "<div id='slideshow_column_4' class='slideshow_column'>";
    echo "<div class='db_info_box_title'>Expense</div>";
    echo "<div class='db_info_box red'>";
 
         echo "Human interaction efficiencies.
         <ul class='intab'>
                         <li>cumulative meeting times</li>
                        <li>workflow issues</li>    
                         <li>trust & communication alterations</li>   
                         </ul>
                        ";          
    echo "</div>";  
    echo "<div class='db_info_box red'>";
        echo "Process inefficiencies.
        <ul class='intab'>
                <li>between related nodes</li>
                <li>in specific domains or activity areas</li>
              </ul>               
                ";
    echo "</div>";
    echo "<div class='db_info_box red'>";
        echo "Financial waste identification.
            
                ";
    echo "</div>";
  echo "</div>";


  echo "<div id='slideshow_column_1' class='slideshow_column'>";
    echo "<div class='db_info_box_title'>Structures</div>";

    echo "<div class='db_info_box blue'>";
      echo "Product, promotion, pricing structures.          
              <ul class='intab'>
                        <li>correct connection & alignment</li>
                        <li>simplification & streamlining</li>
                    </ul>    ";     


    echo "</div>";  



    echo "<div class='db_info_box_title'>Communication</div>";
    echo "<div class='db_info_box blue'>"; 
       echo "

          <ul class='intab'>
                        <li>two way communication testing</li>
                        <li>removal of extraneous features</li>
                    </ul>    ";         

    echo "</div>";


  echo "</div>";

  echo "<div id='slideshow_column_2' class='slideshow_column'>";
    echo "<div class='db_info_box_title'>Processes</div>";
    echo "<div class='db_info_box red'>"; 
       echo "Workflow optimisations. 
          <ul class='intab'>
                        <li>vs comparative flows</li>
                        <li>removal of extraneous features</li>
                    </ul>    ";         

    echo "</div>";
    echo "<div class='db_info_box_title'>Resources</div>";
    echo "<div class='db_info_box red'>
          <ul class='intab'>
                        <li>asset use maximisation</li>
    
                         <li>people vs admin</li>
                    </ul>";


    echo "</div>";  
 //   echo "<div class='db_info_box red'>";
       /*
                echo "Comparative activity optimisations vs other individuals.
                <ul class='intab'>
                        <li>same organisation</li>
                        <li>other organisations</li>
                      </ul>
                ";
 */
  //  echo "</div>";
    require $_SERVER['DOCUMENT_ROOT']."/slideshow/components/disclaimer.php";
  echo "</div>";




echo "</div>";






//direction

echo "<div id='bottom_pad' style='display:inline-block;'>&nbsp;</div>";

require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/end.php";