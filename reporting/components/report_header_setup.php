<?php
if(!isset($_SESSION)){session_start();}


echo "<tr>";
            echo "<td style='width:100%;' colspan='2'>";
                echo "<table >";
                    echo "<tr>";
                        echo "<td class='title_blocks'>";
                            $go_to_dummy['logo'] = 'yes';
                            if($_SESSION['viewing_client_id'] == '1'){   echo "<img src='/components/whitelabeling/dreamboat/screenshot_dreamboat_logo.png' alt='Dreamboat Logo'  style=' margin-left: 25px; max-width:300; min-height:40px;'>";
                                $go_to_dummy['logo'] = 'no';
}
                            if($_SESSION['viewing_client_id'] == '4231'){   echo "<img src='/components/whitelabeling/national_pc/NationalPCLogo.png' alt='National PC Logo'  style='margin-top: 10px; margin-left: 25px;  max-width:300; '>";
                                                                            $go_to_dummy['logo'] = 'no';
                            }

                            if($_SESSION['viewing_client_id'] == '4383'){   echo "<img src='/components/whitelabeling/prime_strategies/laila PNG.png' alt='Laila & Me' width='100' height='100' style='margin-bottom: 20px;'>";
                                                                            echo "<img src='/components/whitelabeling/prime_strategies/WEB_NO BG_Vertical Logo with Tag.png' alt='Prime Strategies logo' width='140' height='140'>";
                                                                            $go_to_dummy['logo'] = 'no';
                            }
                            if($_SESSION['viewing_client_id'] == '4398'){   echo "<img src='/components/whitelabeling/prime_strategies/shy tiger.jpg' alt='Shy Tiger' ' height='100' style='margin-bottom: 0px;'>";
                                
                                $go_to_dummy['logo'] = 'no';
}


                            if($go_to_dummy['logo'] == 'yes'){                 echo "<div style='margin-left: 25px;'>Your Logo</div>";}

                        echo "</td>";
                        echo "<td class='title_blocks' style='text-align:center;'>";
                            echo "<span style='font-size: 30px; text-decoration: underline; padding-bottom: 5px; font-weight: 800;'>";
                                $go_to_dummy['title'] = 'yes';
                                if($_SESSION['viewing_client_id'] == '1'){      echo "Dreamboat";                   $go_to_dummy['title'] = 'no';}
                                if($_SESSION['viewing_client_id'] == '4231'){   echo "National PC";                 $go_to_dummy['title'] = 'no';}
                                if($_SESSION['viewing_client_id'] == '4383'){   echo "Laila and Me / Rawvolution";  $go_to_dummy['title'] = 'no';}
                                if($_SESSION['viewing_client_id'] == '4398'){   echo "Shy Tiger";                   $go_to_dummy['title'] = 'no';}

                                if($go_to_dummy['title'] == 'yes'){echo "Your Company Name";}
                            echo "</span>";
                            
                            echo "<br>";




                            
                            echo "MONTHLY KPI DASHBOARD";

                            echo "<br>";

                                    echo "Accurate as at:<br>".date("F j, Y");

                            echo "<br>";
                            echo "";

                        echo "</td>";
                        echo "<td class='title_blocks' style='text-align:right;'>";

                        if($_SESSION['viewing_client_id'] == '4231'){   echo "<img src='/components/whitelabeling/dreamboat/screenshot_dreamboat_logo.png' alt='Dreamboat Logo'  style=' margin-left: 25px; max-width:300; min-height:40px;'>";

                        }


                            if( $_SESSION['viewing_client_id'] == '4383' OR
                                $_SESSION['viewing_client_id'] == '4398'
                                ){
                                echo "<img src='/components/whitelabeling/prime_strategies/Prime-Strategies-logo-1500pxW.PNG' alt='Laila & Me' style='max-height:100;'>";
                            }
                        echo "</td>";
                        
                    echo "</tr>";


                    echo "</table>";
            echo "</td>";
            echo "<td>";
            echo "</td>";
        echo "</tr>";