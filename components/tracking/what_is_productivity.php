<div class='prompt-font' style='text-align:center;'>What&#39;s most important in assessing your productivity?</div>

<?php 
if(!isset($_SESSION)){session_start();} 
require $_SERVER['DOCUMENT_ROOT']."/components/tracking/productivity_title_creation.php";
?>

<select name = 'what_is_productivity' style='max-width:1200px; width: 100%; background-color:gold;color:#4332ff;height:55px;font-size:2em' >

<?php
  if(isset($kpi_1_title)){
    echo "<option ";
    if($_SESSION['viewing_client_what_is_productivity'] == 'kpi_1'){	echo 'selected';}  
    echo "value='kpi_1'	>";
    echo $kpi_1_title;
    echo "</option>";
  }
  if(isset($kpi_2_title)){
    echo "<option ";
    if($_SESSION['viewing_client_what_is_productivity'] == 'kpi_2'){	echo 'selected';}  
    echo "value='kpi_2'	>";
    echo $kpi_2_title;
    echo "</option>";
  }
  if(isset($kpi_3_title)){
    echo "<option ";
    if($_SESSION['viewing_client_what_is_productivity'] == 'kpi_3'){	echo 'selected';}  
    echo "value='kpi_3'	>";
    echo $kpi_3_title;
    echo "</option>";
  }
  if(isset($kpi_4_title)){
    echo "<option ";
    if($_SESSION['viewing_client_what_is_productivity'] == 'kpi_4'){	echo 'selected';}  
    echo "value='kpi_4'	>";
    echo $kpi_4_title;
    echo "</option>";
  }
  if(isset($kpi_5_title)){
    echo "<option ";
    if($_SESSION['viewing_client_what_is_productivity'] == 'kpi_5'){	echo 'selected';}  
    echo "value='kpi_5'	>";
    echo $kpi_5_title;
    echo "</option>";
  }
?>

  <option <?php if($_SESSION['viewing_client_what_is_productivity'] == 'commission'){	echo 'selected';} 	?> value="commission"	>Commission</option>
  <option <?php if($_SESSION['viewing_client_what_is_productivity'] == 'sales'){	echo 'selected';} 	?> value="sales"	>Sales</option>
  <option <?php if($_SESSION['viewing_client_what_is_productivity'] == 'revenue'){	echo 'selected';} 	?> value="revenue"	>Revenue</option>
  <option <?php if($_SESSION['viewing_client_what_is_productivity'] == 'profit'){	echo 'selected';} 	?> value="profit"	>Profit</option>
  <option <?php if($_SESSION['viewing_client_what_is_productivity'] == 'income'){	echo 'selected';} 	?> value="income"	>Income</option>
</select>

<?php
if($_SESSION['dreamboat_crew'] == 'yes'){
echo "
<div class='pilots_eyes_only_font' style='text-align:center;'>
	We know this single measure of productivity is not everything but it is important to have a focus at the very least
</div>
";


}


?>