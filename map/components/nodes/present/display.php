<?php
if(!isset($_SESSION)){session_start();}

//so what's actually required now
echo "
<style>
#map_display_name_overlay .x_and_y{width:100px;}
#map_display_name_overlay{padding: 6px;}

.reposition_submit{color: #b0b0b0;}
.reposition_submit:hover{color: black;}
.reposition.x_and_y{color: #b0b0b0;font-size: 16px;}
.reposition.x_and_y:hover{color: black;}
.reposition.x_and_y:focus{color: #black;}
</style>

";

//echo '<pre>' , var_dump($nodes) , '</pre>';
//exit();

echo "<div id='map_display_name_overlay' class='map_layer'>";
    for($k = 0; $k < count($nodes['database']) ; $k ++){

        if(isset($nodes['x_pos'][$k]) AND isset($nodes['y_pos'][$k])){


                //function create_go_to_link($db, $item_id){return " '/components/items/go_to.php?db=".$db."&item_id=".$item_id."' ";}	
                //get all the titles out and position them appropriately
                echo "<div style='
						padding: 6px;
					margin-left: calc(".$nodes['x_pos'][$k]."px + 300px);
                                margin-top: calc(".$nodes['y_pos'][$k]."px + 200px);
                                position: absolute;
                                z-index: 1800;
                                background-color:white;
								//opacity: 0.4;
                                border: 1px solid #f7f7f7;
                                -webkit-box-shadow: 0 0 10px #f2f2f2;
								color: #cecece;
                                box-shadow: 0 0 10px #f2f2f2;
                                '>";
					echo "<div class='map_node_link' style='text-align:center;'>";
						echo "<a 
						
							class='";
									if($nodes['database'][$k] == 'issues'){echo " issues ";}
									else{echo " standard_node ";}	               
										echo "'

							href='/components/items/go_to.php?db=".$nodes['database'][$k]."&item_id=".$nodes['id'][$k]."'

							style ='
									font-family: Barlow Semi Condensed;
									font-weight: 600;
									'

							target='_blank'
							
							>".$nodes['title'][$k]."</a>"; 
					echo "</div>";
					echo "<div class='map_node_reposition_form'>";
                        echo "<table>";
                            echo "<form method='post' action='/map/components/positioning/position_node_for_view.php?method=reposition&item_id=".$nodes['items_all_id'][$k]."'  autocomplete='off'>

                                    <tr>

                                        <td style='color: #b0b0b0; font-family: Helvetica;font-size: 16px;'>
                                            X: 
                                        </td>
                                        <td>
                                            <input class='reposition x_and_y' name='x' value='".$nodes['x_pos'][$k]."'></input>
                                        </td>
                                        <td style='color: #b0b0b0; font-family: Helvetica;'>
                                            Y:
                                        </td>
                                        <td style='padding-right: 8px;'>
                                            <input class='reposition x_and_y'   name='y' value='".$nodes['y_pos'][$k]."'></input>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan='4'>
                                <input class='reposition_submit' type='submit' value='move' style='width: 100%; float:right; padding: unset; text-transform: uppercase;'></input>
                                        </td>
                                    </tr>";


                            echo "</form>";
                        echo "</table>";
					echo "</div>";
				echo "</div>";		

                        //dots go underneath this
                        //then we make the lines to match
                
            }
    }

    //echo '<pre>' , var_dump($nodes['link']) , '</pre>';


echo "</div>";	