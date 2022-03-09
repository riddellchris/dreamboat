<?php
if(!isset($_SESSION)){session_start();}


//translate start date into unix time
//translate end date into unix time
//then we can easily connect this and limit the time required so let's just do that first




$sql = "SELECT * FROM api_xero_data_invoice
        WHERE user_id = '".$_SESSION['viewing_client_id']."'
        AND Type = 'ACCREC'";
    //this should probably have some dates attached and associated to it in the coming weeks and months
    //to match with the appropriate display criteria
    //to do this on the way in we really need to clean it up such that we can pull out the appropraite data from the form into UTC
    //this sort of thing

require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";
$result = mysqli_query($conn, $sql);

while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
    //first let's pull out the contact ID and value id
    if(!isset($summed_revenue[$row['ContactID']])){$summed_revenue[$row['ContactID']] = 0;}
    $summed_revenue[$row['ContactID']] += $row['Total'];
}
//therefore giving us an organisable list
arsort($summed_revenue);

//so then what we need to do is pull out the biggest clients name which we can do just by getting out that key
$ordered_contact_ids = array_keys($summed_revenue);

$sql = "SELECT * FROM api_xero_data_contacts
        WHERE ContactID = '".$ordered_contact_ids[0]."'
        AND user_id = '".$_SESSION['viewing_client_id']."'";
     //   echo $sql;exit();
$result = mysqli_query($conn, $sql);

//so assuming that we are going monthly on this, that's all we need to worth through isn't it.
//interestingly now though we want to make this stick


$top_biller_done = 'no';
while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
    if($top_biller_done == 'no'){  $top_biller = $row['Name']; $top_biller_done = 'yes';}
}

//so what get's more difficult i guess is splitting this by client revenue over time.
//somehow we need to split this for each period or perhaps to do that we simply repeat this process but for every timeframe we need to in the meantime.
//this certainly seems to be the fastest and easiest way through all of this
//then we can simply cut it from there 

//https://stackoverflow.com/questions/10040291/converting-a-unix-timestamp-to-formatted-date-string

//so really this means that we can pull together the appropriate bits out of here

?>





    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Year', 'Sales', 'Expenses'],
          ['2013',  1000,      400],
          ['2014',  1170,      460],
          ['2015',  660,       1120],
          ['2016',  1030,      540]
        ]);

        var options = {
          title: 'Company Performance',
          hAxis: {title: 'Year',  titleTextStyle: {color: '#333'}},
          vAxis: {minValue: 0}
        };

        var chart = new google.visualization.AreaChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>