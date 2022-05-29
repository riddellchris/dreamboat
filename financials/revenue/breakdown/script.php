<?php
if(!isset($_SESSION)){session_start();}

if($_GET['primary_folder'] != 'reporting'){
  $location_string = $_GET['primary_folder']."_".$_GET['secondary_folder']."_".$_GET['tertiary_folder'];
}
else{
  $location_string = 'financials_revenue_breakdown';

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
                      echo "['Month',     'Website', { role: 'annotation' }, 'Wholesale', { role: 'annotation' }, 'Distribution', { role: 'annotation' }, 'Other', { role: 'annotation' }],";
                      echo "
                      ['Dec-21',  450,  '450',  614.6,  '614',  614.6, '614', 614.6, '614'],          
                      ['Jan-22',  450,  '450',  614.6,  '614',  614.6, '614', 614.6, '614'],
                      ['Feb-22',  288,  '288',  682,    '682',  614.6, '614', 614.6, '614'],
                      ['Mar-22',  397,  '397',  623,    '623',  614.6, '614', 614.6, '614'],
                      ['Apr-22',  215,  '215',  609.4,  '609',  614.6, '614', 614.6, '614'],
                      ['May-22',  366,  '366',  569.6,  '569',  614.6, '614', 614.6, '614']
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
                    $extracted['other']         = array();
                    $extracted['distribution']  = array();
                    $extracted['wholesale']     = array();

                    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                      $date_index = $row['date_index'];
                      if($row['account_name'] == 'LAM _Shopify'){               if(!isset($extracted['website'][$date_index])){      $extracted['website'][$date_index]       = 0;} $extracted['website'][$date_index]       += $row['value'];}
                      if($row['account_name'] == 'LAM_Distributors'){           if(!isset($extracted['distribution'][$date_index])){ $extracted['distribution'][$date_index]  = 0;} $extracted['distribution'][$date_index]  += $row['value'];}
                      if($row['account_name'] == 'RAW_Distributors'){           if(!isset($extracted['distribution'][$date_index])){ $extracted['distribution'][$date_index]  = 0;} $extracted['distribution'][$date_index]  += $row['value'];}                
                      if($row['account_name'] == 'LAM_Wholesale'){              if(!isset($extracted['wholesale'][$date_index])){    $extracted['wholesale'][$date_index]     = 0;} $extracted['wholesale'][$date_index]     += $row['value'];}
                      if($row['account_name'] == 'Sale from wholesale'){        if(!isset($extracted['wholesale'][$date_index])){    $extracted['wholesale'][$date_index]     = 0;} $extracted['wholesale'][$date_index]     += $row['value'];}                   
                      if($row['account_name'] == 'RAW_Other'){                  if(!isset($extracted['other'][$date_index])){        $extracted['other'][$date_index]         = 0;} $extracted['other'][$date_index]         += $row['value'];}
                      if($row['account_name'] == 'Sales from Market Stalls'){   if(!isset($extracted['other'][$date_index])){        $extracted['other'][$date_index]         = 0;} $extracted['other'][$date_index]         += $row['value'];}
                      if($row['account_name'] == 'RAW_Contract Manufacturing'){ if(!isset($extracted['manufacturing'][$date_index])){$extracted['manufacturing'][$date_index] = 0;} $extracted['manufacturing'][$date_index] += $row['value'];}                      
                      
                      $extracted['period_for_chart_display'][$date_index] = $row['period_for_chart_display'];

                    }
                    echo "['Month',     'Website', { role: 'annotation' }, 'Wholesale', { role: 'annotation' }, 'Distribution', { role: 'annotation' }, 'Manufacturing', { role: 'annotation' }, 'Other', { role: 'annotation' }],";
                    for($extraction_counter = -6; $extraction_counter < 0; $extraction_counter ++){
                      echo " ['".$extracted['period_for_chart_display'][$extraction_counter]."',       
                                ".$extracted['website'][$extraction_counter].",                     '".$extracted['website'][$extraction_counter]."',    
                                ".$extracted['distribution'][$extraction_counter].",                '".$extracted['distribution'][$extraction_counter]."', 
                                ".$extracted['wholesale'][$extraction_counter].",                   '".$extracted['wholesale'][$extraction_counter]."',    
                                ".$extracted['manufacturing'][$extraction_counter].",               '".$extracted['manufacturing'][$extraction_counter]."',
                                ".$extracted['other'][$extraction_counter].",                       '".$extracted['other'][$extraction_counter]."'    

                              
                              
                              
                              ],      ";

                      $sub_title = $row['accurate_as_at_string'];

                      //RAW_Contract Manufacturing not included as not a sales item

                    }   
                  }
                }
            ?>




        ]);



                       
        var options = {

          <?php
                echo "title: 'Revenue Breakdown";
                if(isset($sub_title)){echo " - ".$sub_title;}
                echo "',";
                ?>



          vAxis: {title: '$'},
          //hAxis: {title: 'Month'},
          seriesType: 'bars',

          <?php
          if($_SESSION['viewing_client_id'] == 4383){
            echo "colors: ['#f6b26b', '#3c78d8', 'green', 'black', 'red'],";
          }
          else{
            echo "colors: ['#f6b26b', '#3c78d8', 'green',  'red'],";            
          }
          ?>
      //  isStacked: true,
        legend: {position: 'bottom'}
        };

        <?php
          $chart_type = "ColumnChart";
          echo "var chart = new google.visualization.".$chart_type."(document.getElementById('".$location_string."_div'));";
        ?>
        chart.draw(data, options);
      }


      $(window).resize(function(){<?php echo $location_string; ?>();});	
    </script>