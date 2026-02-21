<?php
if(!isset($_SESSION)){session_start();}


    echo "<tr>";
        echo "<td colspan='2'>";
            echo "<form action='/reporting/notes/submit.php'>";

                echo "<textarea id='reporting_notes' name='textarea_input' style='max-width:1100px;margin-left: auto; margin-right: auto; display: block; text-align: left;' rows='10'>";

                $sql = "SELECT * FROM notes 
                        WHERE user_id           = '".mysqli_real_escape_string($conn, $_SESSION['user_id'])."'
                        AND viewing_client_id = '".mysqli_real_escape_string($conn, $_SESSION['viewing_client_id'])."'
                        ORDER BY entry_id DESC LIMIT 1";
                    //    echo $sql; exit();
                $result = mysqli_query($conn, $sql);
                if(mysqli_num_rows($result) != 0){
                    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                    echo stripslashes(str_replace('\r\n', PHP_EOL, $row['text']));              

                }

                echo "</textarea>";
                    
                    $display_submit = 'yes';
                    if(isset($_GET['tertiary_folder'])){
                        if($_GET['tertiary_folder'] == 'print'){
                            $display_submit = 'no';
                        }
                    }
                    if($display_submit == 'yes'){
                        require $_SERVER['DOCUMENT_ROOT']."/components/inputs/pieces/submits/standard.php";

                    }

            echo "</form>";


            echo "<div style='height: 300px;display:block;'>&nbsp;</div>";
        echo "</td>";
    echo "</tr>";