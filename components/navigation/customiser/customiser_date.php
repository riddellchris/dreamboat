<?php  
//connect to database: user_customiser_control
if (!isset($_SESSION)) {
  session_start();
  require $_SERVER['DOCUMENT_ROOT'] . "/account/security/logged_in_check.php";
  require $_SERVER['DOCUMENT_ROOT'] . "/components/back_of_house/database/connection.php";
}
$user_to_display = $_SESSION['viewing_client_id'];

$row = mysqli_fetch_array($result, MYSQLI_ASSOC); // to get the matching row

$request = 2;
if (isset($_GET['request'])) $request = $_GET['request'];
if ($request == 2) {

  // Read POST data
  $data = json_decode(file_get_contents("php://input"));
  $startMonth = $data->startMonth;
  $startYear = $data->startYear;
  $endMonth = $data->endMonth;
  $endYear = $data->endYear;

  // Insert record
  $sql = "UPDATE user_customiser_control SET start_date_month = $startMonth, start_date_year = $startYear, end_date_month = $endMonth, end_date_year = $endYear WHERE user_id = $user_to_display";

  if (mysqli_query($conn, $sql)) {
    $_SESSION['is_date_customised'] = true;
    // echo "Record updated successfully";
  } else {
    echo "Error updating record: " . mysqli_error($conn);
  }

  exit;
}
