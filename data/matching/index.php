<?php
if(!isset($_SESSION)){session_start();}

require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/start.php";
require $_SERVER['DOCUMENT_ROOT']."/data/components/styling/tables.php";



//if there are
echo "  <div style='width: 100%;  text-align: center; margin-top: 30vh;'>";
    echo "<div style='width: 100%;  text-align: center;'>";
        echo "
        <span class='prompt-font'>
            Nothing to do here just yet<br>
            Go to <a href='/insights/display/' style='color:red;'>display</a> for now.
        </span>
        ";
    echo "</div>";
/*
    echo "<div style='float: left;width: 50vw;  min-height: 50px;  '>";
        require $_SERVER['DOCUMENT_ROOT']."/data/matching/external_side/index.php";

    echo "</div>";
    echo "<div style='margin-left: 50vw; width: 50vw;   min-height: 50px; '>";
        require $_SERVER['DOCUMENT_ROOT']."/data/matching/dreamboat_side/index.php";
    echo "</div>";






    echo "<div style='width: 100%;'>";
    echo "<form>";
        echo "<table class='data_tables'>";

            echo "<tr>";
                echo "<td colspan = '4'>";
                    require $_SERVER['DOCUMENT_ROOT']."/components/inputs/pieces/submits/standard.php";
                echo "</td>";
            echo "</tr>";


            echo "<tr>";
                //in this initial case because of the people and organisation bit 
                //the first matching really should be a person or not match
                //then poppinpu 
                    echo "<th>";
                        echo "Person";
                    echo "</th>";
                    echo "<th>";
                        echo "Organisation";
                    echo "</th>";

                echo "<th>";

                echo "</th>";
                echo "<th>";
                    
                echo "</th>";
            echo "</tr>";



            //so this side is going to be as simple as spitting out everything from this one thing
            //which we already have the data for - so that makes it pretty easy.
            //there probably is a bit of work in here to make it really great
            //i'm not sure what the answer is for now
            //but say we do that for this then what we actually 
            $sql = "    SELECT * FROM api_xero_data_contacts 
                        WHERE user_id = '".$_SESSION['viewing_client_id']."'
                        AND ContactStatus = 'ACTIVE'
                        ORDER BY Name";
                       // echo $sql; exit();
                        //ideally we just order this by last enagaged with
                            //last invoice size but for now let's just roll with what we have here.
            require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";
            $result = mysqli_query($conn, $sql);

            while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                echo "<tr>";
                    

                    echo "<td style='text-align: center;'>";
                        echo "<input type='radio' ";
                        if($row['dreamboat_person'] == 'yes'){echo " selected ";}
                        echo " name='".$row['ContactID']."' value='Person'></input>";
                    echo "</td>";
                    echo "<td  style='text-align: center;'>";
                        if($row['dreamboat_organisation'] == 'yes'){echo " selected ";}
                        echo "<input type='radio' name='".$row['ContactID']."' value ='Organisation'></input>";
                    echo "</td>";

                    echo "<td>";
                        echo $row['Name'];
                    echo "</td>";
                    echo "<td>";
                        //then this one has to simply have a select of the currently unmatched dreamboat endpoints
                        //this unmatched bit is critical
                    echo "</td>";
                echo "</tr>";
            }

            






        echo "</table>";

    echo "</form>";

    echo "</div>";
*/

echo "</div>";

require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/end.php";