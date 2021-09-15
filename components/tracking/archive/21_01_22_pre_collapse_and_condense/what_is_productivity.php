<div class='prompt-font' style='text-align:center;'>What&#39;s most important in assessing your productivity?</div>

<?php 
if(!isset($_SESSION)){session_start();} 

$sql = "SELECT * FROM tracking_kpi_settings 
	WHERE client_id = '".mysqli_real_escape_string($conn, $_SESSION['viewing_client_id'])."' 
	ORDER BY entry_id DESC LIMIT 1"; // select column
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);


if($row['kpi_1_title'] != ''){$kpi_1_title = $row['kpi_1_title'];}else{$kpi_1_title = 'KPI #1';}
if($row['kpi_2_title'] != ''){$kpi_2_title = $row['kpi_2_title'];}else{$kpi_2_title = 'KPI #2';}
if($row['kpi_3_title'] != ''){$kpi_3_title = $row['kpi_3_title'];}else{$kpi_3_title = 'KPI #3';}
if($row['kpi_4_title'] != ''){$kpi_4_title = $row['kpi_4_title'];}else{$kpi_4_title = 'KPI #4';}






?>

<select name = 'what_is_productivity' style='width:100%; padding-right: 25%;background-color:gold;color:#4332ff;height:55px;font-size:2em' >
  <option <?php if($_SESSION['viewing_client_what_is_productivity'] == 'kpi_1'){	echo 'selected';} 	?> value="kpi_1"	><?php echo $kpi_1_title;?></option>
  <option <?php if($_SESSION['viewing_client_what_is_productivity'] == 'kpi_2'){	echo 'selected';} 	?> value="kpi_2"	><?php echo $kpi_2_title;?></option>
  <option <?php if($_SESSION['viewing_client_what_is_productivity'] == 'kpi_3'){	echo 'selected';} 	?> value="kpi_3"	><?php echo $kpi_3_title;?></option>
  <option <?php if($_SESSION['viewing_client_what_is_productivity'] == 'kpi_4'){	echo 'selected';} 	?> value="kpi_4"	><?php echo $kpi_4_title;?></option>
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