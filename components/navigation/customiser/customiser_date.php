<!-- connect to database: user_customiser_control -->
<?php
$user_to_display = $_SESSION['viewing_client_id'];


$sql = "SELECT * FROM user_customiser_control WHERE user_id = $user_to_display";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC); // to get the matching row

// TODO:link data from front-end to the back-end

//get data from database
var_dump($_SESSION['customiser_start_date']);
$customiser_start_date = $_POST['customiser_start_date'];
$customiser_end_date = $_POST['customiser_start_date'];




// get the q parameter from URL
$q = $_REQUEST["q"];
$row[$q];

$hint = "";

// lookup all hints from array if $q is different from ""
if ($q !== "") {
  $q = strtolower($q);
  $len=strlen($q);
  foreach($a as $name) {
    if (stristr($q, substr($name, 0, $len))) {
      if ($hint === "") {
        $hint = $name;
      } else {
        $hint .= ", $name";
      }
    }
  }
}

// Output "no suggestion" if no hint was found or output correct values
echo $hint === "" ? "no suggestion" : $hint;


?>