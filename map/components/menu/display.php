<?php
if(!isset($_SESSION)){session_start();}
//require $_SERVER['DOCUMENT_ROOT']."/map/components/menu/set_select_defaults.php";
require $_SERVER['DOCUMENT_ROOT']."/map/components/menu/styling.php";
?>

<div id ='map_menu_container'>

    <?php
        if($_SESSION['dreamboat_crew'] == 'yes'){
            echo "<div style='width:100%;'>";
            if($_GET['secondary_folder'] == 'economy'){echo "<span class='pilots_eyes_only_font blink_me'>this page is for dreamboat crew only</span>";}
            if($_GET['secondary_folder'] == 'business'){echo "<span class='pilots_eyes_only_font blink_me'>
                                        At present this view is only available for dreamboat crew.<br>
                                        user access will soon be controlled by access in /profile/details/</span>";}	
            echo "</div>";
        }
    ?>



    <form method = 'post' action='/map/components/menu/change.php' style='display:inline-block;'>
        
        
        <?php

        //primary_node_selection
		$first_principle_node_inclusion = 'yes'; $map_node_select_count = 1;
        require $_SERVER['DOCUMENT_ROOT']."/map/components/menu/components/principle_node_inclusion.php";   $map_node_select_count ++;     
        require $_SERVER['DOCUMENT_ROOT']."/map/components/menu/components/principle_node_inclusion.php";   $map_node_select_count ++;
        require $_SERVER['DOCUMENT_ROOT']."/map/components/menu/components/principle_node_inclusion.php";   $map_node_select_count ++;
        require $_SERVER['DOCUMENT_ROOT']."/map/components/menu/components/principle_node_inclusion.php";

        //almost certainly there needs to be a secondary "prebuilt layer" and a following set of custom layers in time.

        require $_SERVER['DOCUMENT_ROOT']."/map/components/menu/components/issue_inclusion.php";

        //mathematical ways to represent these things - not possible right now 21.08.21
        //probably going to be great for analysts later on obviously
        //require $_SERVER['DOCUMENT_ROOT']."/components/map_engine/menu/components/pre_build_arrangements.php";

        require $_SERVER['DOCUMENT_ROOT']."/map/components/menu/components/edge_color.php";
        require $_SERVER['DOCUMENT_ROOT']."/map/components/menu/components/edge_thickness.php";

        //ideally in the future some settings about:
        //		$top_sub_menu_options = add_top_sub_menu_option('2D'	,$top_sub_menu_options);
        //		$top_sub_menu_options = add_top_sub_menu_option('3D'	,$top_sub_menu_options);	//3d, click and movable version of the network	

        ?>



        <a class='add_new_item_button' style='z-index:2000;float:left;clear:left;' href='/components/items/add_new_what.php'>Add node</a>	
        <a class='add_new_item_button' style='z-index:2000;float:left;clear:left;' href='/components/items/add_new_issue.php'>Add issue</a>
        
    </form>



</div>