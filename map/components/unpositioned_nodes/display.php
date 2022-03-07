<?php
    if($_SESSION['dreamboat_crew'] == 'yes'){
        $start_from_bottom = '100';
    }
    else{
        $start_from_bottom = '50';
    }

require $_SERVER['DOCUMENT_ROOT']."/map/components/unpositioned_nodes/styling.php";
?>






<div id='unpositioned_nodes_container'>

<?php

$warning_displayed = 'no';
echo "

        <table>";

		if($warning_displayed == 'no'  ){
        echo "
		    <tr>";
            //if(isset($unpositioned_nodes)){
             //   if(count($unpositioned_nodes['items_all_id']) != 0){
                    if(  (count($nodes['items_all_id']) - count($positioned_ids)) != 0){
                        echo " <td colspan='6' class='blink_me' style='color: red;text-align: center;font-family: Barlow Semi Condensed; weight: 600;text-transform: uppercase;'>As yet unplaced nodes</td>";

                        

                            //this should all be done with some sort of order by / select
                            //this is because it's going to get pretty hectic when you add in all the contacts and businesses.
                            //so hectic
                            //invoice size
                            //related to those already on the board
                            //alphabetical
                            //reverse alphabetical
                            //potential improvement value
                            //productivity impact uncertainty
                            //network impacts
                            //that sort of thing - absolutely.
                            //brilliant





                    }
                    else{
                        echo " <td colspan='6'  style='color: black;text-align: center;font-family: Barlow Semi Condensed; weight: 600;text-transform: uppercase;'>THERE ARE NO CURRENTLY UNPLACED NODES FOR THIS VIEW</td>";

                    }
                //}
           // }
            echo "            </tr>";
        	$warning_displayed = 'yes';
		}

echo "
<style>
	.unpositioned_link{color: #4332ff; font-family: Barlow Semi Condensed; font-weight: 600; margin-bottom: 2px;}
	.unpositioned_link:visited{color: #4332ff;}
</style>
";


//reorder these unpositioned nodes in order of the menu
//this seems a little complex but really not too hard
//i can sort the array or i can just print in a predefined order and do it that way.
//this woul


//sequece

//this needs to simply take our the primary folders and secondary folders in order then produce a titlte
//then we print and 

/* NOT CRITIAL
$printed = 0;
while($printed < count($unpositioned_nodes['items_all_id'])){

    //go through sequence with a for loop
    //if match echo add to printed
        echo "
            <form method='post' action='/map/components/positioning/position_node_for_view.php?item_id=".$unpositioned_nodes['items_all_id'][$i]."'  autocomplete='off'>
                    <tr>
                        <td style='padding-right: 4px; padding-bottom: 4px;'>
                            <a class='unpositioned_link'
                            href='/components/items/go_to.php?db=".$unpositioned_nodes['database'][$i]."&item_id=".$unpositioned_nodes['id'][$i]."' 
                            target='_blank'
                            >".strtoupper($unpositioned_nodes['secondary_folder'][$i])." - ".$unpositioned_nodes['title'][$i]." </a>               
                        </td>
                        <td>
                            X: 
                        </td>
                        <td>
                            <input class='x_and_y' name='x'></input>
                        </td>
                        <td>
                            Y:
                        </td>
                        <td style='padding-right: 8px;'>
                            <input class='x_and_y'   name='y'></input>
                        </td>
                        <td>
                <input class='position_submit' type='submit' value='&#9654; Position &#9654;' style='width: 100%; float:right;'></input>
                        </td>
                    </tr>
                </form>
        ";

        $printed ++;
}*/

/* OLD WAY */
if(  (count($nodes['items_all_id']) - count($positioned_ids)) != 0){
    for($i = 0; $i < count($unpositioned_nodes['items_all_id']); $i++){
    echo "
        <form method='post' action='/map/components/positioning/position_node_for_view.php?item_id=".$unpositioned_nodes['items_all_id'][$i]."'  autocomplete='off'>
                <tr>
                    <td style='padding-right: 4px; padding-bottom: 4px;'>
                        <a class='unpositioned_link'";
                            if($unpositioned_nodes['database'][$i] == 'issues'){echo " style= 'color:red;'";}


                                    echo "
                        href='/components/items/go_to.php?db=".$unpositioned_nodes['database'][$i]."&item_id=".$unpositioned_nodes['id'][$i]."' 
                        target='_blank'
                        >".strtoupper($unpositioned_nodes['secondary_folder'][$i])." - ".$unpositioned_nodes['title'][$i]." </a>               
                    </td>
                    <td";
                                            if($unpositioned_nodes['database'][$i] == 'issues'){echo " style= 'color:red;'";}
                    echo ">
                        X: 
                    </td>
                    <td>
                        <input class='x_and_y' name='x'></input>
                    </td>
                    <td";
                                            if($unpositioned_nodes['database'][$i] == 'issues'){echo " style= 'color:red;'";}
                    echo ">
                        Y:
                    </td>
                    <td style='padding-right: 8px;'>
                        <input class='x_and_y'   name='y'></input>
                    </td>
                    <td>
            <input class='position_submit ";
            if($unpositioned_nodes['database'][$i] == 'issues'){echo " red ";}
                echo " ' type='submit' value='&#9654; Position &#9654;' style='width: 100%; float:right;'></input>
                    </td>
                </tr>
            </form>

    ";
    }/**/
}
echo"        </table>

";





?>

</div>
