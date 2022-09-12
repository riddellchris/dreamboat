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
                                                                            echo "<img src='/components/whitelabeling/prime_strategies/WEB_NO BG_Vertical Logo with Tag.png' width='140' height='140'>";
                                                                            $go_to_dummy['logo'] = 'no';
                            }
                            if($_SESSION['viewing_client_id'] == '4398'){   echo "<img src='/components/whitelabeling/prime_strategies/shy tiger.jpg' alt='Shy Tiger' ' height='100' style='margin-bottom: 0px;'>";
                                                                            $go_to_dummy['logo'] = 'no';
                            }
                            if($_SESSION['viewing_client_id'] == '4400'){   echo "<img src='/components/whitelabeling/actioncoach_steve_rouget/EastsidePlumbingandGasfitting-1-1920x677.png'  ' height='100' style='margin-bottom: 0px;'>";
                                $go_to_dummy['logo'] = 'no';
                            }
                            if($_SESSION['viewing_client_id'] == '4401'){   echo "<img src='/components/whitelabeling/actioncoach_steve_rouget/GC-Electrical-RGBlogo-2.png' ' height='100' style='margin-bottom: 0px;'>";
                                $go_to_dummy['logo'] = 'no';
                            }
                            if($_SESSION['viewing_client_id'] == '4402'){   echo "<img src='/components/whitelabeling/actioncoach_steve_rouget/Allways_logo-removebg-preview-1-1.png' ' height='100' style='margin-bottom: 0px;'>";
                                $go_to_dummy['logo'] = 'no';
                            }

                            //Emily Cubbins clients
                            if($_SESSION['viewing_client_id'] == '4390'){   echo "<img src='/components/whitelabeling/maestrobd/SuttonIT.png' ' height='75px; margin-left: 25px;' style='margin-bottom: 0px;'>";
                                $go_to_dummy['logo'] = 'no';
                            }
                            if($_SESSION['viewing_client_id'] == '4391' OR
                                $_SESSION['viewing_client_id'] == '4389'
                                ){   echo "<img src='/components/whitelabeling/maestrobd/EclipsePropertyAdvisory.jpg' ' height='100' style='margin-bottom: 0px;margin-left: 12.5px;'>";
                                $go_to_dummy['logo'] = 'no';
                            }
                            if($_SESSION['viewing_client_id'] == '4392' OR
                                $_SESSION['viewing_client_id'] == '4388'){   echo "<img src='/components/whitelabeling/maestrobd/MatthiesLawyers.gif' ' height='95px; margin-left:5px;margin-bottom: 0px;'>";
                                $go_to_dummy['logo'] = 'no';
                            }
                            if($_SESSION['viewing_client_id'] == '4387'){   echo "<img src='/components/whitelabeling/maestrobd/LakeyLaw.jpg' ' height='95px; margin-left:5px;margin-bottom: 0px;'>";
                                $go_to_dummy['logo'] = 'no';
                            }
                            

                        //Garreth Bohannes clients
                        if( $_SESSION['viewing_client_id'] == '4393'
                            ){
                                echo "<img src='/components/whitelabeling/bbsc/noble_amour.png' ' height='95px; margin-left:5px;margin-bottom: 0px;'>";
                                $go_to_dummy['logo'] = 'no';
                        }



                            if($go_to_dummy['logo'] == 'yes'){                 echo "<div style='margin-left: 25px;'>Your Logo</div>";}

                        echo "</td>";
                        echo "<td class='title_blocks' style='text-align:center;'>";
                            echo "<span style='font-size: 30px; text-decoration: underline; padding-bottom: 5px; font-weight: 800;'>";
    

                                $sql_to_extract_title = "SELECT business_name FROM user_account_details 
                                                         WHERE user_id = '".$_SESSION['viewing_client_id']."'";
                                                     //   echo $sql_to_extract_title;exit();
                                require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";
                                $result_to_extract_title = mysqli_query($conn, $sql_to_extract_title);
                                //echo mysqli_num_rows($result_to_extract_title);

                                 $row_to_extract_title = mysqli_fetch_array($result_to_extract_title, MYSQLI_ASSOC);
                                //var_dump($row_to_extract_title);
                                //exit();
                                //echo $row_to_extract_title['business_name'];

                                $go_to_dummy['title'] = 'yes';
                                if(isset($row_to_extract_title['business_name'])){
                                    if($row_to_extract_title['business_name'] != ''){
                                        echo $row_to_extract_title['business_name'];
                                        $go_to_dummy['title'] = 'no';
                                    }
                                }

                            /*
                                if($_SESSION['viewing_client_id'] == '1'){      echo "Dreamboat";                   $go_to_dummy['title'] = 'no';}
                                if($_SESSION['viewing_client_id'] == '4231'){   echo "National PC";                 $go_to_dummy['title'] = 'no';}
                                if($_SESSION['viewing_client_id'] == '4383'){   echo "Laila and Me / Rawvolution";  $go_to_dummy['title'] = 'no';}
                                if($_SESSION['viewing_client_id'] == '4398'){   echo "Shy Tiger";                   $go_to_dummy['title'] = 'no';}
                            */

                                if($go_to_dummy['title'] == 'yes'){echo "Your Company Name";}
                            echo "</span>";
                            
                            echo "<br>";




                            
                            echo "MONTHLY KPI DASHBOARD";

                            echo "<br>";

                                    echo "Accurate as at:<br>".date("F j, Y");

                            echo "<br>";
                            echo "<i>Powered by dreamboat.com.au</i>";

                        echo "</td>";
                        echo "<td class='title_blocks' style='text-align:right;'>";

                        if($_SESSION['viewing_client_id'] == '4231'){   echo "<img src='/components/whitelabeling/dreamboat/screenshot_dreamboat_logo.png' alt='Dreamboat Logo'  style=' margin-left: 25px; max-width:300; min-height:40px;'>";

                        }

                        //Tricia Ong's clients
                        if( $_SESSION['viewing_client_id'] == '4383' OR
                            $_SESSION['viewing_client_id'] == '4398'
                            ){
                            echo "<img src='/components/whitelabeling/prime_strategies/Prime-Strategies-logo-1500pxW.PNG' style='max-height:100;'>";
                        }
                        //Steve Rouget's clients
                        if( $_SESSION['viewing_client_id'] == '4400' OR
                            $_SESSION['viewing_client_id'] == '4401' OR
                            $_SESSION['viewing_client_id'] == '4402'
                            ){
                            echo "<img src='/components/whitelabeling/actioncoach_steve_rouget/ActionCoach-logo.gif'style='max-height:100;'>";
                        }
                        //Emily Cubbins' clients
                        if( $_SESSION['viewing_client_id'] == '4387' OR
                            $_SESSION['viewing_client_id'] == '4388' OR
                            $_SESSION['viewing_client_id'] == '4389' OR
                            $_SESSION['viewing_client_id'] == '4390' OR
                            $_SESSION['viewing_client_id'] == '4391' OR
                            $_SESSION['viewing_client_id'] == '4392'
                            ){

                                if($_SESSION['viewing_client_id'] == '4387'){   echo "<img src='/components/whitelabeling/maestrobd/Maestro_RGB.png'style='    max-height: 75px;margin-right: 25px;'>";}
                                else{                                           echo "<img src='/components/whitelabeling/maestrobd/Maestro_RGB.png'style='max-height:100;'>";}

                            
                        }
                        //Garreth Bohannes clients
                        if( $_SESSION['viewing_client_id'] == '4393'
                            ){
                            echo "<img src='/components/whitelabeling/bbsc/BBSC Logo 2.png' style='max-height: 200; margin-right: 70;'>";
                        }

                        echo "</td>";
                        
                    echo "</tr>";


                    echo "</table>";
            echo "</td>";
            echo "<td>";
            echo "</td>";
        echo "</tr>";