<?php

//so the first thing to do here is list out all the databases that are "subsidary" 
/*
activities
channels
issues
management
organisations
people
products_and_services
promotions
sales
systems
upgrades
wheelhouse

assets
biz_dev
events
marketing_angles
one_to_ones
target_markets
*/

//now we can probably straighten them up a little more
$database_number = 0;
$database_name[$database_number] = 'activities';            $database_number ++;
$database_name[$database_number] = 'assets';                $database_number ++;
$database_name[$database_number] = 'biz_dev';               $database_number ++;
$database_name[$database_number] = 'channels';              $database_number ++;
$database_name[$database_number] = 'events';                $database_number ++;
$database_name[$database_number] = 'issues';                $database_number ++;
$database_name[$database_number] = 'management';            $database_number ++;
$database_name[$database_number] = 'marketing_angles';      $database_number ++;
$database_name[$database_number] = 'one_to_ones';           $database_number ++;
$database_name[$database_number] = 'organisations';         $database_number ++;
$database_name[$database_number] = 'people';                $database_number ++;
$database_name[$database_number] = 'products_and_services'; $database_number ++;
$database_name[$database_number] = 'promotions';            $database_number ++;
$database_name[$database_number] = 'sales';                 $database_number ++;
$database_name[$database_number] = 'systems';               $database_number ++;
$database_name[$database_number] = 'target_markets';        $database_number ++;
$database_name[$database_number] = 'upgrades';              $database_number ++;
$database_name[$database_number] = 'wheelhouse';            $database_number ++;

//now all we need to do is go through each of these and see if it's within the system items_all
//now potentially the easiest way to do this is the other way around
    //but that's not going to cut it.

//for loop going through all databases
    $sql = "SELECT item_id FROM ".$database_name[0];
    
    //now we pretty much just need to see if that is within items_all

        //potentially in time we could build this out to check and assess any other issues that may occur here 
            //such as things that are deleted in one (items_all for example) but not the other (activities) and visa versa
            //if this was to occur it should really signify a problem associated with the code / platform itself and therefore trigger an alert to development obviously
            //probably though this shouldn't even exist as a problem if the database is cleaned and designed perfectly/properly

    //so anyway from that SQL we should just collect every item id
    require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";

    $result = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
        $ids_to_check[] = $row['item_id'];
    }

    //therefore once we have pulled them all out we can easily find and fix the rest of these 
    //so now all we need to do is 
    $sql = "SELECT * FROM items_all
            WHERE   item_id             = '".mysqli_real_escape_string($conn, $ids_to_check[])."'
            AND     found_in_database   = '".mysqli_real_escape_string($conn, $database_name[0])."'";

    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) == 0){

            //if not in there add 

            //most of that should be pretty simple honestly 

            //this should really just cover
            //item_id
            //user_id
            //category
            //found_in_primary_folder
            //found_in_secondary_folder
            //title
            //deleted_or_not
            //people_referrer //this is only an issue if we have to doeal with the other things like people

            $sql = "INSERT INTO $database_name[0] 
                        ()
                    VALUES()
                    
                    ";
            mysqli_query($conn, $sql);
            //I suspect that there is some straightening out required here within some of those values
            //this could potentially create a whole lot of mes to fix "everywhere"
            //Another solution though is to simply adjust it with a similar table to "items_central_index"
            //again this isn't critical today BUT is important for the future unquestinoably
                //the main reason why is to really ensure that the development environment perfectly aligns with everything else
                //further to that it's really important to ensure "data quality"

                //so honestly with this planned out I think that I can probably just leave it right now until it really becomes a massive issue because the complexity of a solution is almost ridiculous
                //and more importantly should really follow a database cleanup and clean out as simple as it is now
    }

//then make this a daily cron job
