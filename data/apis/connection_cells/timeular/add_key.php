<?php
if(!isset($_SESSION)){session_start();}



//this just needs to be a very simple form such that we can connect these things
?>

<td style='margin: 8px; padding:8px; border: 1px black solid;'>
    <form method='post' action='/map/apis/connection_cells/timeular/store_key.php'>
        <input class='new_api_input' placeholder ='Enter Key'  name='api_key'  style='max-width: 300px;'></input><br>
        <input class='new_api_input'  placeholder ='Enter Secret' name='api_secret' style='max-width:300px;'></input><br>
        <input type='submit' class='login-submit' style='max-width:100px;'></input>
    </form>
</td>    
