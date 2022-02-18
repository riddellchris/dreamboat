<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/start.php";
require $_SERVER['DOCUMENT_ROOT']."/insights/menu/display.php";

echo "<style>
        .preparations_table{
            font-family: Barlow Semi Condensed;
            border: 1px solid transparent;
            border-spacing: 0px;

        }
        th{font-size: larger;}
        td{padding: 4px 10px ;
            border: 1px solid transparent;
            }
        tr:nth-child(even) {background: #e0e0e0;}
        tr:nth-child(odd) {background: #FFF;}
    </style>";




//this should allow for the same grouping and collection of data such that the xero element works all the way along
//i.e. pick groups of clients and view it
//this is fundamentally different to the data matching because that's really just about seeing all the same things fall into the same place at the same time pretty much.
//so now what do i need to achiee?

echo "  <div style='width: 100%;  text-align: center;'>";



    if(!isset($_SESSION['tag_use']['label'])){
        echo "
            <span class='prompt-font'>
                Nothing to do here just yet<br>
                Go to <a href='/insights/display/' style='color:red;'>display</a> for now.
            </span>
        ";
    }
    else{
        //echo "<div  '>";
        echo "<table class = 'preparations_table'  style='margin: 0 auto; padding-top: 30px;'>";
            echo "<form>";

                    echo "<tr>";
                        echo "<th style='text-align:left;'>Label</th>";
                        echo "<th style='text-align:center;width:35px;'>ON</th>";
                        echo "<th style='text-align:center;width:35px;'>OFF</th>";                    
                    echo "</tr>";





                    //for each distinct label produce an on / off radio button
                    $unique_labels = array_unique($_SESSION['tag_use']['label']);
                    sort($unique_labels);
                    //this should be if not set or if not the same
                    $set_anew = 'no';
                    if(!isset($_SESSION['tag_display']['names'])){ $set_anew = 'yes';}
                    if(isset($_SESSION['tag_display']['names'])){ 
                        if($_SESSION['tag_display']['names'] != $_SESSION['tag_display']['names']){$set_anew = 'yes';}
                        }

                    if($set_anew == 'yes'){$_SESSION['tag_display']['names'] = $unique_labels;}
                    //something should happen here to store this data properly
                    //$_SESSION['insights']['timeular']['tags']['display'] = 'show';
                    //or something like that which will become clearer now.


                    //echo '<pre>' , var_dump($unique_labels) , '</pre>';exit();

                    $number_of_labels_to_display = count($unique_labels);

                    
                    for($i = 0; $i < $number_of_labels_to_display; $i ++){
                        echo "<tr>";
                            echo "<td style='text-align:left;'>".$unique_labels[$i]."</td>";
                            echo "<td style='text-align:center;'><input type='radio' name='".$unique_labels[$i]."_selector'></input></td>";
                            echo "<td style='text-align:center;'><input type='radio' name='".$unique_labels[$i]."_selector'></input></td>";                    
                        echo "</tr>";
                    }
                    //submit form on change of each or just save button - recommended

                    echo "<tr>";
                        echo "<td colspan = '3' style='background-color:white;'>";
                            echo "<input type='submit' class='login-submit'></input>";
                        echo "</td>";
                    echo "</tr>";
                echo "</form>";
            echo "</table>";
            //echo "</div>";
    }


echo "  </div>";






//this could very easily cut itself up from here holy crap
//this is bloody close/
//i guess there is some matching 

//for now there is some division and matching that could/should occur here
//i think i just need to break this shit down honestly.


require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/end.php";