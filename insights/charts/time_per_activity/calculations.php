<?php
if(!isset($_SESSION)){session_start();}



//defaults occur prior to these calculations but are stored in script control now



//reset to clean up mess - iff created
unset($_SESSION['tag_use']);

if($_SESSION['viewing_client_id'] == 4231 OR $_SESSION['viewing_client_id'] == 1){

    require $_SERVER['DOCUMENT_ROOT']."/data/components/platforms/timeular/all_data_as_json.php";

    //now we just want to sort the response
        //to be honest a simple for loop should sort this out
            //holy fuck i'm about to produce that first chart pretty much aren't I
            //holy shit!

    //now let's find all labels
    //so within each time entry
    //so we take response.


 /*   
    if($_GET['secondary_folder'] == 'display'){
        echo '<pre>' , var_dump($response['timeEntries']) , '</pre>';
    }
  */  
    $number_of_entries = count($response['timeEntries']);

    for($i = 0; $i < $number_of_entries; $i++){
        //count the number of 
        if(isset($response['timeEntries'][$i]['note']['tags'])){
            $number_of_tags = count($response['timeEntries'][$i]['note']['tags']);

            //then for each of the tags all we want to do there is to store
            for($j = 0; $j < $number_of_tags; $j++){
                    if(isset($_SESSION['tag_use']['timeEntries_number'])){
                        $entry_number = count($_SESSION['tag_use']['timeEntries_number']);
                    }
                    else{
                        $entry_number = 0;
                    }
                //the timeEntries number
                //the start time
                //the end time
                //such that we can then cut across and simply calculate the total time later
                    $_SESSION['tag_use']['timeEntries_number'][$entry_number]        = $i;
                    $_SESSION['tag_use']['started_at'][$entry_number]                = $response['timeEntries'][$i]['duration']['startedAt'];
                    $_SESSION['tag_use']['stopped_at'][$entry_number]                = $response['timeEntries'][$i]['duration']['stoppedAt'];    

                        $date[1] = new DateTime($response['timeEntries'][$i]['duration']['startedAt']);
                        $date[1] = $date[1] -> format('U');
                        $date[2] = new DateTime($response['timeEntries'][$i]['duration']['stoppedAt']);
                        $date[2] = $date[2] -> format('U');
                        $gap = $date[2] - $date[1]; 

                        //so probably in here goes those time calculations and then
                        //i can simply pull that out and i'm done here
                        //plus the infrastructure is there to make the rest work as well.

                    $_SESSION['tag_use']['gap_in_seconds'][$entry_number]                = $gap;  
                   
//echo "LABEL: ";                    
//echo                
                    $_SESSION['tag_use']['label'][$entry_number]                     = $response['timeEntries'][$i]['note']['tags'][$j]['label'];
//echo "<br>";


                    //if($_SESSION['tag_use']['label'][$entry_number] == 'GOUGH PLASTICS'){echo "<BR>".$gap;}      
                    //if($_SESSION['tag_use']['label'][$entry_number] == 'WOOLLY FLEECE'){echo "<BR>".$gap;}
                    //this produces the correct numbers frankly
                    //so why don't we just calculate it here
                    
                    /*
                    $labels_to_display = array();
                    $labels_to_display['name'] = array();
                    $labels_to_display['duration'] = array();
                    //if this label hasn't yet been found then we just add it 
                    if(!in_array($_SESSION['tag_use']['label'][$entry_number], $_SESSION['tag_use']['label'])){
                        $labels_to_display['name'][count($labels_to_display)]       = $_SESSION['tag_use']['label'][$entry_number];
                        $labels_to_display['duration'][count($labels_to_display)]   = $gap;
                    }
                    else{
                        //find the appropriate key and add to the gap
                        //where the appropriate key is 
                        $appropriate_key = array_search($_SESSION['tag_use']['label'][$entry_number], $labels_to_display['name']);
                        $labels_to_display['duration'][$appropriate_key] += $gap;
                    }
*/

                    //this needs some sort of conditional thing here for sure
                    //this need to be created only for the first time viewing this
                    //this really shouldn't go here
                    /*
                    $_SESSION['tag_use']['option']['default_altered'][$entry_number] = 'no';   
                    $_SESSION['tag_use']['option']['current_setting'][$entry_number] = 'show'; //other than this it's to hide it
                    */
                    //the biggest proble                      



                    //$tag_use['time_elapsed']        = $response['timeEntries']

            }
        }
    }

   // echo '<pre>' , var_dump($labels_to_display['name']) , '</pre>';
 //   echo '<pre>' , var_dump($labels_to_display['duration']) , '</pre>';


    //it really should go at the end here 
    //once all the labels are sorted pretty much
    //then add it on

    $_SESSION['tag_use']['option']['default_altered'][$entry_number] = 'no';   
    $_SESSION['tag_use']['option']['current_setting'][$entry_number] = 'show'; //other than this it's to hide it

/*
    if($_GET['secondary_folder'] == 'display'){
        echo '<pre>' , var_dump($_SESSION['tag_use']['gap_in_seconds']) , '</pre>';
    }
*/
}