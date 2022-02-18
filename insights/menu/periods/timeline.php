<?php
if(!isset($_SESSION)){session_start();}

//essentially this is just about what sort of system is required here
//do we group data on the time axis daily, weekly, monthly or otherwise
//thus changing and enabling the way that we actually lay out all of these things

echo "<select>";
    echo "<option>Daily time increments</option>";
    echo "<option>Weekly time increments</option>";
    echo "<option>Monthly time increments</option>";    
echo "</select>";