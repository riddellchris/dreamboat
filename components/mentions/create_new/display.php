<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/account/security/logged_in_check.php";
require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/start.php";

function strpos_all($haystack, $needle) {
    $offset = 0;
    $allpos = array();
    while (($pos = strpos($haystack, $needle, $offset)) !== FALSE) {
        $offset   = $pos + 1;
        $allpos[] = $pos;
    }
    return $allpos;
}


echo "<div style='width: 100%; margin-top: 15vh;'>";
    echo "<div style=' margin: 0 auto;'>";
        echo "<form method='post' action='/components/mentions/create_new/submit.php'>";
            //so now we want to find each @ and break it out
            //then suggest what it is 
            //then finally we can display those too

            //chop it up into strings starting with @

            //echo strpos($_SESSION['users_latest_discussion_input'], '@');
            substr_count($_SESSION['users_latest_discussion_input'], '@');

            //find the start point of each mention
            $array_of_at_symbols = strpos_all($_SESSION['users_latest_discussion_input'], '@');
            //var_dump($array_of_at_symbols);

          $number_of_mentions_found = count($array_of_at_symbols);


            for($i = 0; $i < $number_of_mentions_found; $i++){
                //take array key
                //if less than the array count
                if($i < ($number_of_mentions_found - 1)){
                    //we take up to the next one
                        //the length of the string will be

                    //the length of the string 

                    //$string[$i] = substr($_SESSION['users_latest_discussion_input'], )
                    
                    
                    //if the last one then take up to the end of the string


                }
            }
    
        //table         
            //string 'between' mentions'



            //define string in a standard input as part of the system
                //there may be multiple mentions for each for example short and longer names
                //this is l




            //connect to item
                //show list of currently of all items




            //submit
                //store in the mentions database
                //connecting each mention string to an item and database id







        echo "</form>";
    echo "</div>";
echo "</div>";

require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/end.php";