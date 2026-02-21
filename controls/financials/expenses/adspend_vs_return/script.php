<?php
if(!isset($_SESSION)){session_start();}

if($_GET['primary_folder'] != 'reporting'){
  $location_string = $_GET['primary_folder']."_".$_GET['secondary_folder']."_".$_GET['tertiary_folder'];
}
else{
  $location_string = 'financials_expenses_adspend_vs_return';

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
            if($_SESSION['viewing_client_id'] == 4383){ require $_SERVER['DOCUMENT_ROOT']."/financials/expenses/adspend_vs_return/user_specific_calculations/".$_SESSION['viewing_client_id'].".php";  $setup_completed = 'yes';}
            if($_SESSION['viewing_client_id'] == 4398){ require $_SERVER['DOCUMENT_ROOT']."/financials/expenses/adspend_vs_return/user_specific_calculations/".$_SESSION['viewing_client_id'].".php";  $setup_completed = 'yes';}
            if($setup_completed == 'no'){               require $_SERVER['DOCUMENT_ROOT']."/financials/expenses/adspend_vs_return/dummy_data.php";}
            unset($setup_completed);

            ?>


        ]);



                       
        var options = {

          <?php
                echo "title: 'Adspend vs Return";
                if(isset($sub_title)){echo " - ".$sub_title;}
                echo "',";
                ?>


          vAxes: {  0: {title: '%'},
                    1: {title: '$'},
                    },
         // hAxis: {title: 'Month'},
          seriesType: 'bars',
          colors: ['#3c78d8', '#f6b26b'],
          series: { 0: {targetAxisIndex:0, color: '#cecece'},
                    1: {targetAxisIndex:1, color: '#f6b26b', type: 'line',  lineWidth: 10},
                    2: {targetAxisIndex:1, color: '#3c78d8', type: 'line',  lineWidth: 10}
        }
        };

        <?php
          $chart_type = "ColumnChart";
          echo "var chart = new google.visualization.".$chart_type."(document.getElementById('".$location_string."_div'));";
        ?>
        chart.draw(data, options);
      }


      $(window).resize(function(){<?php echo $location_string; ?>();});	
    </script>