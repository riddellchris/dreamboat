<?php
require $_SERVER['DOCUMENT_ROOT']."/account/security/logged_in_check.php";
require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/start.php";





?>


<style type='text/css'>
    .Table
    {
        display: inline-block;
    }
    .Title
    {
        display: table-caption;
        text-align: center;
        font-weight: bold;
        font-size: larger;
    }
    .Heading
    {
        display: table-row;
        font-weight: bold;
        text-align: center;
    }
    .Row
    {
        display: table-row;
    }
    .Cell
    {
        display: table-cell;
      //  border: solid;
       // border-width: thin;
      //  padding-left: 5px;
       // padding-right: 5px;
    }
</style>	

<form method='post' action = 'update.php' style='text-align:center;'>

<div class="Table">
    <div class="Title" style='padding-top:50px;'>
	What timezone do you live in?
<?php
	require $_SERVER['DOCUMENT_ROOT']."/components/inputs/pieces/selects/timezone.php";
	

	
?>
    </div>
    <div class="Title">
	What day does your work week START?
<?php
	require $_SERVER['DOCUMENT_ROOT']."/components/inputs/pieces/selects/first_day_of_week.php";
?>
    </div>
    <div class="Title">
	What day does your work week END?
<?php
	require $_SERVER['DOCUMENT_ROOT']."/components/inputs/pieces/selects/last_day_of_week.php";








	
	require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";
	$sql = "SELECT * FROM user_work_schedules WHERE user_id = '".mysqli_real_escape_string($conn, $_SESSION['viewing_client_id'])."'";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
	
?>
    </div>    
   
    <div class="Title" style='padding-top:25px;padding-bottom:10px;'>
	And what times do you work during the week?
    </div>
    <div class="Heading">
        <div class="Cell">
            <p>Day of the week</p>
        </div>
        <div class="Cell">
            <p>Start work</p>
        </div>
        <div class="Cell">
            <p>Finish work</p>
        </div>
    </div>
    <div class="Row">
        <div class="Cell">
            <p>Monday</p>
        </div>
        <div class="Cell">
            <?php 
            $timename = 'am_monday';
            $selected = $row['am_monday'];
            require $_SERVER['DOCUMENT_ROOT']."/components/inputs/pieces/selects/time_of_day.php";?>
        </div>
        <div class="Cell">
            <?php 
            $timename = 'pm_monday';
            $selected = $row['pm_monday'];
            require $_SERVER['DOCUMENT_ROOT']."/components/inputs/pieces/selects/time_of_day.php";?>
        </div>
    </div>
    <div class="Row">
        <div class="Cell">
            <p>Tuesday</p>
        </div>
        <div class="Cell">
            <?php 
            $timename = 'am_tuesday';
            $selected = $row['am_tuesday'];
            require $_SERVER['DOCUMENT_ROOT']."/components/inputs/pieces/selects/time_of_day.php";?>
        </div>
        <div class="Cell">
            <?php 
            $timename = 'pm_tuesday';
            $selected = $row['pm_tuesday'];
            require $_SERVER['DOCUMENT_ROOT']."/components/inputs/pieces/selects/time_of_day.php";?>
        </div>
    </div>
    <div class="Row">
        <div class="Cell">
            <p>Wednesday</p>
        </div>
        <div class="Cell">
            <?php 
            $timename = 'am_wednesday';
            $selected = $row['am_wednesday'];
            require $_SERVER['DOCUMENT_ROOT']."/components/inputs/pieces/selects/time_of_day.php";?>
        </div>
        <div class="Cell">
            <?php 
            $timename = 'pm_wednesday';
            $selected = $row['pm_wednesday'];
            require $_SERVER['DOCUMENT_ROOT']."/components/inputs/pieces/selects/time_of_day.php";?>
        </div>
    </div>
    <div class="Row">
        <div class="Cell">
            <p>Thursday</p>
        </div>
        <div class="Cell">
            <?php 
            $timename = 'am_thursday';
            $selected = $row['am_thursday'];
            require $_SERVER['DOCUMENT_ROOT']."/components/inputs/pieces/selects/time_of_day.php";?>
        </div>
        <div class="Cell">
            <?php 
            $timename = 'pm_thursday';
            $selected = $row['pm_thursday'];
            require $_SERVER['DOCUMENT_ROOT']."/components/inputs/pieces/selects/time_of_day.php";?>
        </div>
    </div>
    <div class="Row">
        <div class="Cell">
            <p>Friday</p>
        </div>
        <div class="Cell">
            <?php 
            $timename = 'am_friday';
            $selected = $row['am_friday'];
            require $_SERVER['DOCUMENT_ROOT']."/components/inputs/pieces/selects/time_of_day.php";?>
        </div>
        <div class="Cell">
            <?php 
            $timename = 'pm_friday';
            $selected = $row['pm_friday'];
            require $_SERVER['DOCUMENT_ROOT']."/components/inputs/pieces/selects/time_of_day.php";?>
        </div>
    </div>
    <div class="Row">
        <div class="Cell">
            <p>Saturday</p>
        </div>
        <div class="Cell">
            <?php 
            $timename = 'am_saturday';
            $selected = $row['am_saturday'];
            require $_SERVER['DOCUMENT_ROOT']."/components/inputs/pieces/selects/time_of_day.php";?>
        </div>
        <div class="Cell">
            <?php 
            $timename = 'pm_saturday';
            $selected = $row['pm_saturday'];
            require $_SERVER['DOCUMENT_ROOT']."/components/inputs/pieces/selects/time_of_day.php";?>
        </div>
    </div>
    <div class="Row">
        <div class="Cell">
            <p>Sunday</p>
        </div>
        <div class="Cell">
            <?php 
            $timename = 'am_sunday';
            $selected = $row['am_sunday'];
            require $_SERVER['DOCUMENT_ROOT']."/components/inputs/pieces/selects/time_of_day.php";?>
        </div>
        <div class="Cell">
            <?php 
            $timename = 'pm_sunday';
            $selected = $row['pm_sunday'];
            require $_SERVER['DOCUMENT_ROOT']."/components/inputs/pieces/selects/time_of_day.php";?>
        </div>
    </div>
</div>

		
	





<?php

$max_width = "600px";
require $_SERVER['DOCUMENT_ROOT']."/components/inputs/pieces/submits/standard.php";
echo "<br>";
//echo "<a class='grey-button wide-button' style='padding-top:0px;' href='/account/services/".$_SESSION['access_time_settings_from']."/'>back</a>";

echo "<a class='grey-button wide-button' style='padding-top:0px;' href='/account/'>back</a>";
echo "</div></form>";


require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/end.php";
?>