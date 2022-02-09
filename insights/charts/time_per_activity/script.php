<?php
if(!isset($_SESSION)){session_start();}
?>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Tag', 'Hours spent'],


<?php

          //OK so this is the only place this needs to be now such that this works now
          //so all that needs to happen here is for each label that is on we simply produce the elapsed time.
          //it's probably best to sort this by elapsed time first
          //so first sort that way
          //then present
          //it's pretty much that easy

          $unique_labels = array_unique($_SESSION['tag_use']['label']);
          sort($unique_labels);

         // echo '<pre>' , var_dump($_SESSION['tag_use']['gap_in_seconds']) , '</pre>';exit();




          //for each unique label sort through 
          for($i = 0; $i < count($unique_labels); $i ++){
            if(!isset($total_time[$i])){$total_time[$i] = 0;}//hop

            for($j = 0; $j < count($_SESSION['tag_use']['label']); $j ++){
              if($_SESSION['tag_use']['label'][$j] == $unique_labels[$i]){
                $total_time[$i] += $_SESSION['tag_use']['gap_in_seconds'][$j] / 3600;

              }
            }
          }
                    
       //   echo "total time: ";
       //   echo '<pre>' , var_dump($total_time) , '</pre>';exit();


          for($i = 0; $i < count($unique_labels); $i ++){
            echo "['".$unique_labels[$i]."', ".$total_time[$i]."]";
            if($i <> count($unique_labels)){echo ",";}
          }



?>

        ]);

        var options = {
          chart: {
            title: 'Time per tag',
            subtitle: 'From 0BC to Today',
          },
          titleTextStyle: {
                  fontName: 'Barlow Semi Condensed', // i.e. 'Times New Roman'
                  fontSize: 20 // 12, 18 whatever you want (don't specify px)
              },
          legend: {position: 'none'},
          'chartArea': {'width': '90%', 'height': '90%'},
          hAxis: {
            title: '',
            textStyle : {
                fontName: 'Barlow Semi Condensed',
                bold: true
            }
          },
          vAxis: {
            textStyle : {
                fontName: 'Barlow Semi Condensed',
                bold: true
            }
          }
        };

        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }

    $(window).resize(function(){drawChart();});	
    </script>

