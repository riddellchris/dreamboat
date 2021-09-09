<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/start.php";
require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/styling/main_css.php";

echo "<div style='font-family: Barlow Semi Condensed'>";
    echo "<br>";
    list_start();
        point_detailed_start('no', 10, 10, 10,"If we fail to achieve this objective there are risks aplenty:");
    list_end();
    echo "<br>";
echo "</div>";

    //table

    echo "
    <style>
    @media only screen and (max-width: 800px) {
            .facts_and_risks_table{
                    width: 100%;
                }
            }
    @media only screen and (min-width: 800px){
            .facts_and_risks_table{
                    width: ;
                }
        }

    .facts_and_risks_facts{

        float:left;

    }
    .title_facts{
            font-size:40px;
        font-wdight:700;
        font-family: Helvetica;

        color:red;
    }

    .facts_and_risks_risks{
        float:left;
    }
    .title_risks{
        font-size:40px;
        font-wdight:700;

        font-family: Helvetica;
        background-color: red;
        color:white;
        text-align:center;
        width:100%
        }


    .facts_and_risks_facts_columns{
        width: 46%;
        padding: 0px 2%;
        
    }


    </style>

    <div style='width: 100%; text-align:center;'>
        <div class='facts_and_risks_inner_table'>

            <div class='facts_and_risks_facts_columns facts_and_risks_risks'>
                <div class='title_risks'>RISKS</div>";
    paragraph_detailed('no', 10, 10, 10,"the only question is what needs to be done");
    paragraph_detailed('no', 10, 10, 10,"and what opportunties exist to avoid this future that are as yet untapped?");


            echo "
            </div>

            <div class='facts_and_risks_facts_columns facts_and_risks_facts'>
                <div class='title_facts'>FACTS</div>
                
                <br>";
            paragraph_detailed('no', 10, 10, 10, "For the past 30 years:");
                list_start();
                    point_detailed_start('no', 10, 10, 10, "both sides of government have been doing all they can to improve the economy.");
                    point_detailed_start('no', 10, 10, 10, "the RBA has been doing all it can to manage and stabilise the economy.");
                    point_detailed_start('no', 10, 10, 10, "the people of Australia have been doing all they can for work hard.");  

                list_end();
        
            echo "
            </div>


        </div>
    </div>
    ";

echo "</div>";

require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/end.php";