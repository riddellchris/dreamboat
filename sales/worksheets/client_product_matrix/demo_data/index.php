<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/start.php";

//get all items 
$sql = "SELECT * FROM api_xero_data_item 
        WHERE user_id = '".$_SESSION['viewing_client_id']."'";
require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";
$result = mysqli_query($conn, $sql);
$number_of_items = mysqli_num_rows($result);

//if there are no items then show error
//if there are no invoices then show error
//if there is no xero connection then show that error as well






//if there are enough invoices
    //then show that 
        while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
            $items_array = $row['Name']; //ideally in time match or use the comparative Dreamboat name
            //set up some dummy data for this one for sure
        }

        //then 

        //go either all time or last 12 months
        //

        //scan all invoice items



        //for each item make a column
        //count the number of tiems



//then in the table cells we can really see how this works
//from this in time we should also be able to see the value gains
//pull out all of that sort of data
        //maybe even use it as a sales estimating tool such that we can see what really goes where
        //that's going to be most crtiical
        

        //if a product has been sold in the selected timeframe then of course we can mark that green/
        //if not then red
        //if "target it" make it organge
        //probably store this too 


//then that's going to go through to grouping customers//
//naturally group by the number of products bought in the past year
        //enter these into the initial table
        //sales_worksheets_client_product_matrix
            //get this data out
            //entry_id
            //client_ranking
            //item order
            //user_id
            //latest version for this user
            //"targeted" -- this needs to change and adjust for each time it is targeted - not perfect but we are working on these things absolutely
            //"targeted by"
            //that's about it 

            //so we enter in in then change and review/refresh to group things together
            //not quite drag and drop yet but could be arranged


            //if 



//order and reset appropriately 
//that's absolutely the best way to make that work for sure


//echo "<div class='prompt-font' style='text-align:center; width: 100%; '>Based on data from the last 24 months</div>";


?>
<style>
        table{font-size: 1.3em; border-spacing: 0px; }
        th{padding: 2px 6px;}
        td{padding: 2px 6px; text-align: center; color: white;}
        .sold{                  background-color: green;}
        .sold:hover{            background-color: #0aa30a;}
        .not_sold{              background-color: #c70000; padding: unset;}
        .not_sold:hover{        background-color: red;}
        .in_action{             background-color: #c97500;}
        .in_action:hover{       background-color: #ff9f19;}
        th{font-family: Barlow Semi Condensed;}
        td a{width: 100%; text-decoration: none; color: white;}
</style>


<div style='width: 100%; text-align:center; margin-top: 50px;'>
        <table style='display: inline-block;'>
                  <!-- So to this means that the rest will all workout -->
                  <!-- these are just the item names ordered as apporpriate -->              
                <tr><th></th><th>Office 365</th><th>Cyber Security</th><th>VOIP</th><th>Web hosting</th></tr>
                <tr>
                        <th>Northern Electrics</th>
                        <td class='sold'><a>&#x2714;</a></td>
                        <td class='sold'><a>&#x2714;</a></td>
                        <td class='sold'><a>&#x2714;</a></td>
                        <td class='sold'><a>&#x2714;</a></td>
                        <td></td>
                </tr>
                <!-- So to make this work all we need to do is pull this off in such a way that I can pull the rest of this off

                        -->
                <tr>
                        <th>Penninsula Massage</th>
                        <td class='sold'><a>&#x2714;</a></td>
                        <td class='sold'><a>&#x2714;</a></td>
                        <td class='sold'><a>&#x2714;</a></td>
                        <td class='sold'><a>&#x2714;</a></td>
                        <td></td>
                </tr>
                <tr>
                        <th>Big Bobs Mobility</th>
                        <td class='sold'><a>&#x2714;</a></td>
                        <td class='sold'><a>&#x2714;</a></td>
                        <td class='not_sold'><a>&#x2718;</a></td>
                        <td class='not_sold'><a>&#x2718;</a></td>
                        <td></td>
                </tr>
                <tr>
                        <th>Green Point Plastics</th>
                        <td class='sold'><a>&#x2714;</a></td>
                        <td class='in_action'><a href='change_item.php?'>&#x27A0;</a></td>
                        <td class='not_sold'><a>&#x2718;</a></td>
                        <td class='not_sold'><a>&#x2718;</a></td>
                        <td></td>
                </tr>
                <tr>
                        <th>Illusive Blinks</th>
                        <td class='sold'><a>&#x2714;</a></td>
                        <td class='in_action'><a href='change_item.php?'>&#x27A0;</a></td>
                        <td class='not_sold'><a>&#x2718;</a></td>
                        <td class='not_sold'><a>&#x2718;</a></td>
                        <td></td>
                </tr>
        </table>
</div>








<?php
require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/end.php";
?>