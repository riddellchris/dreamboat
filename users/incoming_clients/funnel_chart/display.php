<?php
if(!isset($_SESSION)){session_start();}

require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";


$sql = "SELECT * FROM user_account_details";
$result = mysqli_query($conn, $sql);
$total_users_entered = mysqli_num_rows($result);


$sql = "SELECT * FROM user_account_details 
	WHERE 	dead		= 'yes' AND
		call_1_made 	= 'yes' AND
		call_2_made 	= 'no' AND
		call_3_made 	= 'no' AND
		email_sent 	= 'no' AND
		walkthrough_had = 'no' AND 
		contract_sent   = '0000-00-00' AND
		session_1_had 	= 'no' AND
		session_2_had 	= 'no' AND
		session_3_had 	= 'no' AND
		session_4_had 	= 'no' AND
 		cooling_off_date   = '0000-00-00'
		";
$result = mysqli_query($conn, $sql);
$total_dropout = mysqli_num_rows($result);
$call_1_percent_remaining = (1- ($total_dropout / $total_users_entered)) * 100;

$sql = "SELECT * FROM user_account_details 
	WHERE 	dead		= 'yes' AND
		call_2_made 	= 'yes' AND
		call_3_made 	= 'no' AND
		email_sent 	= 'no' AND
		walkthrough_had = 'no' AND
 		contract_sent   = '0000-00-00' AND
		session_1_had 	= 'no' AND
		session_2_had 	= 'no' AND
 		cooling_off_date   = '0000-00-00' AND		
		session_3_had 	= 'no' AND
		session_4_had 	= 'no'
";
$result = mysqli_query($conn, $sql);
$total_dropout = $total_dropout + mysqli_num_rows($result);
$call_2_percent_remaining = (1- ($total_dropout / $total_users_entered)) * 100;
	
$sql = "SELECT * FROM user_account_details 
	WHERE 	dead		= 'yes' AND
		call_3_made 	= 'yes' AND
		email_sent 	= 'no' AND
		walkthrough_had = 'no' AND 
		contract_sent   = '0000-00-00' AND
		session_1_had 	= 'no' AND
		session_2_had 	= 'no' AND
 		cooling_off_date   = '0000-00-00' AND
		session_3_had 	= 'no' AND
		session_4_had 	= 'no'
";
$result = mysqli_query($conn, $sql);
$total_dropout = $total_dropout + mysqli_num_rows($result);
$call_3_percent_remaining = (1- ($total_dropout / $total_users_entered)) * 100;

$sql = "SELECT * FROM user_account_details 
	WHERE 	dead		= 'yes' AND
		email_sent 	= 'yes' AND
		walkthrough_had = 'no' AND
 		contract_sent   = '0000-00-00' AND
		session_1_had 	= 'no' AND
		session_2_had 	= 'no' AND
 		cooling_off_date   = '0000-00-00' AND
		session_3_had 	= 'no' AND
		session_4_had 	= 'no'";
$result = mysqli_query($conn, $sql);
$total_dropout = $total_dropout + mysqli_num_rows($result);
$email_sent_percent_remaining = (1- ($total_dropout / $total_users_entered)) * 100;



$sql = "SELECT * FROM user_account_details 
	WHERE 	dead		= 'yes' AND
		walkthrough_had = 'yes' AND
 		contract_sent   = '0000-00-00' AND		
		session_1_had 	= 'no' AND
		session_2_had 	= 'no' AND
 		cooling_off_date   = '0000-00-00' AND
		session_3_had 	= 'no' AND
		session_4_had 	= 'no'";
$result = mysqli_query($conn, $sql);
$total_dropout = $total_dropout + mysqli_num_rows($result);
$walkthrough_had_percent_remaining = (1- ($total_dropout / $total_users_entered)) * 100;

//!= '0000-00-00' means it is not empty
//this is important when the date is ontop
$sql = "SELECT * FROM user_account_details 
	WHERE 	dead		= 'yes' AND
 		contract_sent   != '0000-00-00' AND		
		session_1_had 	= 'no' AND
		session_2_had 	= 'no' AND
 		cooling_off_date   = '0000-00-00' AND
		session_3_had 	= 'no' AND
		session_4_had 	= 'no'";
$result = mysqli_query($conn, $sql);
$total_dropout = $total_dropout + mysqli_num_rows($result);
$contract_sent_percent_remaining = (1- ($total_dropout / $total_users_entered)) * 100;



$sql = "SELECT * FROM user_account_details 
	WHERE 	dead		= 'yes' AND
		session_1_had 	= 'yes' AND
		session_2_had 	= 'no' AND
 		cooling_off_date   = '0000-00-00' AND		
		session_3_had 	= 'no' AND
		session_4_had 	= 'no'
";
$result = mysqli_query($conn, $sql);
$total_dropout = $total_dropout + mysqli_num_rows($result);
$session_1_percent_remaining = (1- ($total_dropout / $total_users_entered)) * 100;

$sql = "SELECT * FROM user_account_details 
	WHERE 	dead		= 'yes' AND
		session_2_had 	= 'yes' AND
 		cooling_off_date   = '0000-00-00' AND		
		session_3_had 	= 'no' AND
		session_4_had 	= 'no'
";
$result = mysqli_query($conn, $sql);
$total_dropout = $total_dropout + mysqli_num_rows($result);
$session_2_percent_remaining = (1- ($total_dropout / $total_users_entered)) * 100;

//!= '0000-00-00' means it is not empty
//this is important when the date is ontop
$sql = "SELECT * FROM user_account_details 
	WHERE 	dead		= 'yes' AND
 		cooling_off_date   != '0000-00-00' AND		
		session_3_had 	= 'no' AND
		session_4_had 	= 'no'
";
$result = mysqli_query($conn, $sql);
$total_dropout = $total_dropout + mysqli_num_rows($result);
$cooling_off_percent_remaining = (1- ($total_dropout / $total_users_entered)) * 100;



$sql = "SELECT * FROM user_account_details 
	WHERE 	dead		= 'yes' AND
		session_3_had 	= 'yes' AND
		session_4_had 	= 'no'";
$result = mysqli_query($conn, $sql);
$total_dropout = $total_dropout + mysqli_num_rows($result);
$session_3_percent_remaining = (1- ($total_dropout / $total_users_entered)) * 100;


$sql = "SELECT * FROM user_account_details 
	WHERE 	dead		= 'yes' AND
		session_4_had 	= 'yes'";
$result = mysqli_query($conn, $sql);
$total_dropout = $total_dropout + mysqli_num_rows($result);
$session_4_percent_remaining = (1- ($total_dropout / $total_users_entered)) * 100;

?>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {          
        var data = google.visualization.arrayToDataTable([
          ['Year', '% of list remaining'],
          ['Call 1 made',  				<?php echo $call_1_percent_remaining; ?>],
          ['Call 2 made',  				<?php echo $call_2_percent_remaining; ?>],
          ['Call 3 made',  				<?php echo $call_3_percent_remaining; ?>],
          ['Link to slideshow sent',  			<?php echo $email_sent_percent_remaining; ?>],
          ['Initial walkthrough and discussion had', 	<?php echo $walkthrough_had_percent_remaining; ?>],
          ['Invoice/Contract sent', 			<?php echo $contract_sent_percent_remaining; ?>],          
          ['Session 1 had',  				<?php echo $session_1_percent_remaining; ?>],
          ['Session 2 had',  				<?php echo $session_2_percent_remaining; ?>],
          ['Cooling off over', 				<?php echo $cooling_off_percent_remaining; ?>],         
          ['Session 3 had',  				<?php echo $session_3_percent_remaining; ?>],
          ['Session 4 had',  				<?php echo $session_4_percent_remaining; ?>]      
        ]);

        var options = {
          title: '',
         
          vAxes:[
	      {title: '%'}
    		],
    

	  series: {
            0: { lineWidth: 10 },
            1: { lineWidth: 10}
          },
       colors: ['red', '#00ff00'],
          legend: { position: 'bottom' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart1'));

        chart.draw(data, options);
      }

      $(window).resize(function(){
		drawChart();
	});      
      
    </script>
    


	<div id="curve_chart1" style='max-width:1100px;margin:auto;height:500px;margin-top:10vh;'></div>
