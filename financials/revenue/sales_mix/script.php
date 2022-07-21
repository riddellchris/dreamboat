<?php
if(!isset($_SESSION)){session_start();}


if($_GET['primary_folder'] != 'reporting'){
  $location_string = $_GET['primary_folder']."_".$_GET['secondary_folder']."_".$_GET['tertiary_folder'];
}
else{
  $location_string = 'financials_revenue_sales_mix';

}

?>



<?php
    echo "<script name='".$location_string."' type='text/javascript'>";
    echo "

      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(".$location_string.");";?>

      function <?php echo $location_string; ?>()            
                    {
        // Some raw data (not necessarily accurate)
        var data = google.visualization.arrayToDataTable([


<?php

    $setup_completed = 'no';
    if($_SESSION['viewing_client_id'] == 1){    require $_SERVER['DOCUMENT_ROOT']."/financials/revenue/sales_mix/user_specific_calculations/1.php";     $setup_completed = 'yes';}
    if($_SESSION['viewing_client_id'] == 4383){ require $_SERVER['DOCUMENT_ROOT']."/financials/revenue/sales_mix/user_specific_calculations/".$_SESSION['viewing_client_id'].".php";  $setup_completed = 'yes';}
    if($_SESSION['viewing_client_id'] == 4398){ require $_SERVER['DOCUMENT_ROOT']."/financials/revenue/sales_mix/user_specific_calculations/".$_SESSION['viewing_client_id'].".php";  $setup_completed = 'yes';}
    if($setup_completed == 'no'){               require $_SERVER['DOCUMENT_ROOT']."/financials/revenue/sales_mix/dummy_data.php";}
    unset($setup_completed);

?>

          



        ]);



                       
        var options = {
  
         
          
       

                <?php
                echo "title: 'Sales Mix";
                if(isset($sub_title)){echo " - ".$sub_title;}
                echo "',";

                echo $legend.",";
                ?>


          vAxis: {title: '$'},
          //hAxis: {title: 'Month'},
          seriesType: 'bars',
         // colors: ['#f6b26b', '#3c78d8', 'green', 'red'],
        isStacked: true
        };


        <?php
          $chart_type = "PieChart";
          echo "var chart = new google.visualization.".$chart_type."(document.getElementById('".$location_string."_div'));";
        ?>
        chart.draw(data, options);
      }

      $(window).resize(function(){<?php echo $location_string; ?>();});	
    </script>