<?php
if(!isset($_SESSION)){session_start();}

if($_GET['primary_folder'] != 'reporting'){
  $location_string = $_GET['primary_folder']."_".$_GET['secondary_folder']."_".$_GET['tertiary_folder'];
}
else{
  $location_string = 'financials_revenue_shopify_comparison';

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
                echo " ['Month', 'Revenue', { role: 'annotation' }, 'Shopify Revenue', { role: 'annotation' }],";
                if(
                     //Chris
                    $_SESSION['viewing_client_id'] != 4383){  //Tricia Ong / mel
                      echo "
                      ['Dec-21',   450,   '450',      375,   '375'],          
                      ['Jan-22',   450,    '450',     375,   '375'],
                      ['Feb-22',   288,    '450',     375,   '375'],
                      ['Mar-22',   397,    '450',     375,   '375'],
                      ['Apr-22',   215,     '450',    375,   '375'],
                      ['May-22',   366,     '450',    375,   '375']
                      ";

                      $sub_title = "Dummy data only";


                    }
                else{

                  if( $_SESSION['viewing_client_id'] == 4383){

                    $sql = "SELECT * FROM api_xero_reports_pnl_account_past_12_separate_calendar_months
                            WHERE         user_id = '".$_SESSION['viewing_client_id']."'
                            AND           latest_version_for_this_user = 'yes'
                            AND          ( account_name = 'Total Income' OR  account_name = 'LAM _Shopify' ) 
                            AND           date_index > -7
                            ORDER BY date_index ASC          
                            ";
                    //echo $sql; exit();
                    $result = mysqli_query($conn, $sql);

                    unset($extracted);






                    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                      $date_index = $row['date_index'];
                      if($row['account_name'] == 'Total Income'){ $extracted['Total Income'][$date_index] = $row['value'];}
                      if($row['account_name'] == 'LAM _Shopify'){ $extracted['LAM _Shopify'][$date_index] = $row['value'];} 
                                                                  $extracted['date_index_end'][$date_index] = $row['date_index_end'];                                    
                    }

                    for($extraction_counter = -6; $extraction_counter < 0; $extraction_counter ++){
                      echo " ['".$extracted['date_index_end'][$extraction_counter]."',       
                                ".$extracted['Total Income'][$extraction_counter].",      '".$extracted['Total Income'][$extraction_counter]."',       
                                ".$extracted['LAM _Shopify'][$extraction_counter].",      '".$extracted['LAM _Shopify'][$extraction_counter]."'],      ";

                      $sub_title = $row['accurate_as_at_string'];

                      //RAW_Contract Manufacturing not included as not a sales item

                    }   
                  }
                }
            ?>
        ]);



                       
        var options = {
          title : 'Shopify Comparison',
          vAxis: {title: '$'},
          hAxis: {title: 'Month'},
          seriesType: 'bars',
          colors: ['#3c78d8', '#f6b26b']
        };

        <?php
          $chart_type = "ColumnChart";
          echo "var chart = new google.visualization.".$chart_type."(document.getElementById('".$location_string."_div'));";
        ?>
        chart.draw(data, options);
      }


      $(window).resize(function(){<?php echo $location_string; ?>();});	
    </script>