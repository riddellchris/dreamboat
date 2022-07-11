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

          if(
              $_SESSION['viewing_client_id'] != 1 AND   //Chris
              $_SESSION['viewing_client_id'] != 4383){  //Tricia Ong / mel
                echo "
                ['Month',         'Dollars', { role: 'annotation' }],
                ['Website',       450,        '450'],    
                ['Other',         450,        '450'],
                ['Wholesale',     288,        '288'],
                ['Distribution',  288,        '288']
                ";

                $sub_title = "Dummy data only";


              }
          else{

            if($_SESSION['viewing_client_id'] == 1){
              echo "
              ['Month',         'Dollars', { role: 'annotation' }],
              ['DB_Website',       450,        '450'],    
              ['DB_Other',         450,        '450'],
              ['DB_Wholesale',     288,        '288'],
              ['DB_Distribution',  288,        '288']
              ";

              $sub_title = "Dummy data for Chris only";

            }
            if($_SESSION['viewing_client_id'] == 4383){

              $sql = "SELECT * FROM api_xero_reports_pnl_by_calendar_month
                      WHERE user_id = '".$_SESSION['viewing_client_id']."'
                      AND   latest_version_for_this_user = 'yes'";
              $result = mysqli_query($conn, $sql);

              $to_present = array();
              $to_present['label'] = array();
              $to_present['value'] = array();

              $shopify['value']       = 0;
              $distributors['value']  = 0;
              $wholesale['value']     = 0;
              $other['value']         = 0;


              while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                if($row['date_index'] > -4){ // summing over the past 3 months

                  if($row['account_name'] == 'LAM _Shopify'){               $shopify['value']       += $row['value'];}
                  if($row['account_name'] == 'LAM_Distributors'){           $distributors['value']  += $row['value'];}
                  if($row['account_name'] == 'RAW_Distributors'){           $distributors['value']  += $row['value'];}                
                  if($row['account_name'] == 'LAM_Wholesale'){              $wholesale['value']     += $row['value'];}
                  if($row['account_name'] == 'Sale from wholesale'){        $wholesale['value']     += $row['value'];}
                  
                  if($row['account_name'] == 'RAW_Other'){                  $other['value']         += $row['value'];}
                  if($row['account_name'] == 'Sales from Market Stalls'){   $other['value']         += $row['value'];}


                  //RAW_Contract Manufacturing not included as not a sales item
                }
                if($row['date_inded'] == -1){
                  $sub_title = $row['accurate_as_at_string'];
                }
              }


              //this is because pie charts cannot have negative values
//                if($shopify['value'] < 0){
                                          echo " ['Month',         'Dollars',                   { role: 'annotation' }],";
              if($shopify['value']      > 0){  echo " ['Website',       ".$shopify['value'].",      '".$shopify['value']."'],      ";}
              if($wholesale['value']    > 0){  echo " ['Wholesale',     ".$wholesale['value'].",    '".$wholesale['value']."'],    ";}
              if($distributors['value'] > 0){  echo " ['Distributors',  ".$distributors['value'].", '".$distributors['value']."'],  ";}
              if($other['value']        > 0){  echo " ['Other',         ".$other['value'].",        '".$other['value']."']        ";}
              
            }
          }

?>

          



        ]);



                       
        var options = {
  
         
          
       

                <?php
                echo "title: 'Sales Mix";
                if(isset($sub_title)){echo " - ".$sub_title;}
                echo "',";
                ?>


          vAxis: {title: '$'},
          //hAxis: {title: 'Month'},
          seriesType: 'bars',
          colors: ['#f6b26b', '#3c78d8', 'green', 'red'],
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