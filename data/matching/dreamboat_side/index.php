<?php
if(!isset($_SESSION)){session_start();}


        echo "<div style='width: 100%; text-align: center;'>";
            echo "<span class='prompt-font'>Select dreamboat endpoint to match</span>";


                echo "<form>";

                    echo "<select>";
                        //the full list goes in there
                        echo "<option>People</option>";
                        echo "<option>Organisations</option>";
                    echo "</select>";
                echo "</form>";












        echo "</div>";



        //then we need to set that up where we get to this connection point to the items currently on file.
        //not all of those will be visible via the platform
        //though to be frank most if not all of these things will be sorted.


        //what we need is to pull out a list of these things


        //    this means that really there should just be one single matching table. which operates for all api connections
        //this pretty much should be as simple as



 

