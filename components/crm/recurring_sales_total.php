<?php
if(!isset($_SESSION)){session_start();}

$sql = "SELECT * FROM sales WHERE status = 'active' AND mode = 'recurring_sales' AND user_id = '".mysqli_real_escape_string($conn, $_SESSION['viewing_client_id'])."'";
require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";
$result = mysqli_query($conn, $sql);

$total_recurring_sales = 0;
$total_recurring_gross_profit = 0;

while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
$total_recurring_sales 		+= $row['price'];
$total_recurring_gross_profit   += $row['gross_profit'];
}

echo "<div class='prompt-font' style='color:red'>";
	echo "revenue: ".$total_recurring_sales;
	echo "<br>";
	echo "gross profit: ".$total_recurring_gross_profit;
echo "</div>";	

?>