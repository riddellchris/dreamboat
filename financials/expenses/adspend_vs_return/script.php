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

                if($_SESSION['viewing_client_id'] != 4383){  //Tricia Ong / mel
                  echo "['Month',   'Return', { role: 'annotation' }, 'Websales', { role: 'annotation' }, 'Adspend', { role: 'annotation' }],
                        ['Dec-21',  4,  '4',  614.6,  '614',  614.6, '614'],          
                        ['Jan-22',  5,  '5',  614.6,  '614',  614.6, '614'],
                        ['Feb-22',  6,  '6',  682,    '682',  614.6, '614'],
                        ['Mar-22',  5,  '5',  623,    '623',  614.6, '614'],
                        ['Apr-22',  5,  '5',  609.4,  '609',  614.6, '614'],
                        ['May-22',  5,  '5',  569.6,  '569',  614.6, '614']
                      ";

                      $sub_title = "Dummy data only";

                    }
                else{

                  if( $_SESSION['viewing_client_id'] == 4383){

                    $sql = "SELECT * FROM api_xero_reports_pnl_account_past_12_separate_calendar_months
                            WHERE         user_id = '".$_SESSION['viewing_client_id']."'
                            AND           latest_version_for_this_user = 'yes'
                            AND           date_index > -7
                            ORDER BY date_index ASC          
                            ";
                    //echo $sql; exit();
                    $result = mysqli_query($conn, $sql);

                    unset($extracted);

                    $extracted['website']       = array();
                    $extracted['adspend']       = array();

                    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                      $date_index = $row['date_index'];
                      if($row['account_name'] == 'LAM _Shopify'){                       if(!isset($extracted['website'][$date_index])){ $extracted['website'][$date_index]  = 0;} $extracted['website'][$date_index]  += $row['value'];}
                      if($row['account_name'] == 'Advertising and Marketing - LAM'){    if(!isset($extracted['adspend'][$date_index])){ $extracted['adspend'][$date_index]  = 0;} $extracted['adspend'][$date_index]  += $row['value'];}                      
                      $extracted['date_index_end'][$date_index] = $row['date_index_end'];
                    }





                    echo "['Month',     'Website', { role: 'annotation' }, 'Wholesale', { role: 'annotation' }, 'Distribution', { role: 'annotation' }, 'Manufacturing', { role: 'annotation' }, 'Other', { role: 'annotation' }],";
                    for($extraction_counter = -6; $extraction_counter < 0; $extraction_counter ++){

                        $correct_elements = 0;
                        if(isset($extracted['adspend'][$extraction_counter] )){$adspend = $extracted['adspend'][$extraction_counter]; $correct_elements ++;}
                        if(isset($extracted['website'][$extraction_counter] )){$website = $extracted['website'][$extraction_counter]; $correct_elements ++;}
                        if($correct_elements == 2){
                          $computed['return_on_adspend'][$extraction_counter] = $extracted['website'][$extraction_counter] / $extracted['adspend'][$extraction_counter];

                        }


                      echo " ['".$extracted['date_index_end'][$extraction_counter]."',      
                                ".$computed['return_on_adspend'][$extraction_counter].",  '".$computed['return_on_adspend'][$extraction_counter]."',                       
                                ".$extracted['website'][$extraction_counter].",           '".$extracted['website'][$extraction_counter]."',    
                                ".$extracted['adspend'][$extraction_counter].",           '".$extracted['adspend'][$extraction_counter]."' ]      ";

                      $sub_title = $row['accurate_as_at_string'];

                      //RAW_Contract Manufacturing not included as not a sales item

                    }   
                  }
                }
            ?>


        ]);



                       
        var options = {
          title : 'Adpend vs Return',
          vAxes: {  0: {title: '%'},
                    1: {title: '$'},
                    },
          hAxis: {title: 'Month'},
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