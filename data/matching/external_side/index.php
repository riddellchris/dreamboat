<?php
if(!isset($_SESSION)){session_start();}

  /*
    ok so this really just needs to be matching to the database but also 

    so what's interesting here is the matching function which will be:

    Those things entered in via the platform itself, that's interesting and challenging in itself.
    but there there is matching of each part of th api connection and implementation.
    That's what's really most interesting. 

    how that works i'm not entirely sure.
    perhaps in time there may be "cumulative matching etc etc but for now it's jsut singular.

    the only caveat to taht is that there may be typos so i guess we have to match to various things there don't we.

    hmm right ok.

    this is starting to shape up here.

    clearly the start of this page has to start with 
    */

    echo "<div name='matching_selection' style='width:100%; text-align:center;'>";


    //now let's pull out the correct number of active connections which really should be already built no?
    // i'm sure there is a better query than what currently exists here

    require $_SERVER['DOCUMENT_ROOT']."/data/components/sql_queries/get_active_connections.php";
    require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";
    $result = mysqli_query($conn, $sql);


    if(mysqli_num_rows($result) == 0){
    //first check how many rows there are and if there aren't any then.....
        //we just display an error and say that 
            echo "<span class='prompt-font' style='margin-top: 35vh;'>YOU HAVE NO CONNECTED APPLICATIONS<br>BEFORE MATCHING YOU MUST ADD SOME <a href='/data/apis/' style='color:red;'>HERE</a> </span>";
    }
    else{

        //else then we can do this            
        echo "<span class='prompt-font'>Select api to match with</span>";
        echo "<br>";
        echo "<form method='post' action='/data/matching/change_api_to_match.php'>";
            echo "<select name='api_for_matching'  onchange='this.form.submit()'>";

            $first_entry = 'yes';
                //check ho
                while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){





                    echo "<option value='".$row['platform_name']."'";
                        if(isset($row['platform_name']) && isset($_GET['api_for_matching'])){
                            if($row['platform_name'] == $_GET['api_for_matching']){
                                echo " selected ";
                                $present_matching_for = $row['platform_name'];
                            }
                        }

                    
                        echo ">".ucfirst($row['platform_name'])."</option>";

                    //now just take the first one as the default for now and store that to pull out the matching data
                    if($first == 'yes' && !isset($_GET['match_for'])){
                        $present_matching_for = $row['platform_name'];
                        $first = 'no';
                    }


                }


            echo "</select>";

            /*
            This is pretty much 
            going to be done simply by / dependent on the critical endpoint
            so that's easy now then - so easy
            echo "<select name='endpoint_for_matching'  onchange='this.form.submit()'>";
                    echo " ";
  
            echo "</select>";    
            */      
            //before we get to this we need to make the select work such that it all sticks
            //for that we need an onchange submit
        echo "</form>";

        //fuck yeah now all we need to do is pull out the appropriate system/elements
        //this isn't going to be exaclty as easy as I had thought though because really for each of these things there will be a few things to match.
        //in leighs case
                //timeular
                //tags with company name
                //so that's a little interesting isn't it.
                ///hmmmmmmmmmmmmmmmmmm
                //that's going to get a little complicated
                //i'm not entirely sure how to do that or start that
                //then ultimately that's got to flow through to the rest of the chaos when it comes to charting
                //though most importantly none - simply none of this is impossible now and that's bloody exciting




                    //so it seems like these are the endpoints that are required here

                    //but holy shit once i get this done then i can manage the translation to charts and insights and build it up from everywhere and it's all done - i mean stop 

                //   if($row['platform_name'] == 'xero'){

                        
                //  }

                //   if($row['platform_name'] == 'timeular'){
                        //activities that are tagged


                        
                //  }








    }







echo "</div>";






//this one really should just include