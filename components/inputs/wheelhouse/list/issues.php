<?php
if(!isset($_SESSION)){session_start();}

require $_SERVER['DOCUMENT_ROOT']."/back_of_house/database/connection.php";
$sql= "SELECT * FROM wheelhouse_list WHERE user_id ='".$_SESSION['user_id']."' AND item_type='issue' AND item_status='active' AND item_deleted!='yes'";
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) != 0){
	echo "<select name = 'all_issues_for_user'>";
	echo " <option value=''>Select an existing issue or...</option>";

	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
	echo " <option value='".$row['item_id']."'>".$row['item_title']."</option>";
	}
	echo "</select>";
} 


echo "<input name='standard_input' autofocus autocomplete='off' style='font-size: 20px;
    color: #281e96;padding: 4px;font-family: Playfair Display;display: block;margin-left: auto;margin-right: auto;max-width:1100px;width:100%;text-align:center;' placeholder='Add a new issue'></input>";




?>










