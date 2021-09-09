<script type='text/javascript' 
    <?php  
        if(!isset($_SESSION)){session_start();}
        if($_SESSION['logged_in'] == 'yes' && 
            $_SESSION['dreamboat_crew'] == 'yes'
            //&& $_SESSION['dreamboat_developer'] == 'yes'
            ){
            echo " name     ='GDP_percentage_change'
                   location ='".dirname(__FILE__)."'";
            }
            ?>
    >
      google.charts.load('current',   {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart_gdp_percentage_change_script);

      function drawChart_gdp_percentage_change_script() {

        var data = new google.visualization.DataTable();
        data.addColumn('date',   'Quarter');
        data.addColumn('number',   'GDP percentage annual change (%)');
        data.addColumn('number',   'Critical_date_1');
        data.addRows([
<?php
/**/?>

[new Date(1988,6,1),4.3,null],
[new Date(1988,9,1),3.3,null],
[new Date(1988,12,1),2.9,null],
[new Date(1989,3,1),3.5,null],
[new Date(1989,6,1),5.5,null],
[new Date(1989,9,1),5.5,null],
[new Date(1989,12,1),3.6,null],
[new Date(1990,3,1),3.4,null],
[new Date(1990,6,1),1.4,null],
[new Date(1990,9,1),0,null],
[new Date(1990,12,1),0.9,null],
[new Date(1991,3,1),-1.2,null],
[new Date(1991,6,1),-1.4,null],
[new Date(1991,9,1),-0.4,null],
[new Date(1991,12,1),-0.9,null],
[new Date(1992,3,1),1.1,null],
[new Date(1992,6,1),1.9,null],
[new Date(1992,9,1),2.5,null],
[new Date(1992,12,1),4.5,null],
[new Date(1993,3,1),4.5,null],
[new Date(1993,6,1),4.4,null],
[new Date(1993,9,1),3.5,null],
[new Date(1993,12,1),3.3,null],
[new Date(1994,3,1),4.3,null],
[new Date(1994,6,1),4.9,null],
[new Date(1994,9,1),5.6,null],
[new Date(1994,12,1),4.7,null],
[new Date(1995,3,1),3,null],
[new Date(1995,6,1),2.2,null],
[new Date(1995,9,1),3.7,null],
[new Date(1995,12,1),2.8,null],
[new Date(1996,3,1),4.5,null],
[new Date(1996,6,1),4.8,null],
[new Date(1996,9,1),3.3,null],
[new Date(1996,12,1),4.1,null],
[new Date(1997,3,1),3,null],
[new Date(1997,6,1),5.3,null],
[new Date(1997,9,1),4.6,null],
[new Date(1997,12,1),5.1,null],
[new Date(1998,3,1),5.2,null],
[new Date(1998,6,1),3.2,null],
[new Date(1998,9,1),5,null],
[new Date(1998,12,1),5.1,null],
[new Date(1999,3,1),5.2,null],
[new Date(1999,6,1),4.5,null],
[new Date(1999,9,1),3.8,null],
[new Date(1999,12,1),4,null],
[new Date(2000,3,1),3.6,null],
[new Date(2000,6,1),4.2,null],
[new Date(2000,9,1),3.2,null],
[new Date(2000,12,1),1.1,null],
[new Date(2001,3,1),1.7,null],
[new Date(2001,6,1),1.6,null],
[new Date(2001,9,1),2.6,null],
[new Date(2001,12,1),4.2,null],
[new Date(2002,3,1),4,null],
[new Date(2002,6,1),4.9,null],
[new Date(2002,9,1),4,null],
[new Date(2002,12,1),3.5,null],
[new Date(2003,3,1),2.8,null],
[new Date(2003,6,1),1.4,null],
[new Date(2003,9,1),2.8,null],
[new Date(2003,12,1),3.8,null],
[new Date(2004,3,1),4.5,null],
[new Date(2004,6,1),4.9,null],
[new Date(2004,9,1),4,null],
[new Date(2004,12,1),3.1,null],
[new Date(2005,3,1),3.1,null],
[new Date(2005,6,1),2.8,null],
[new Date(2005,9,1),3.1,null],
[new Date(2005,12,1),3.1,null],
[new Date(2006,3,1),2.5,null],
[new Date(2006,6,1),2.3,null],
[new Date(2006,9,1),2.7,null],
[new Date(2006,12,1),3.2,null],
[new Date(2007,3,1),4.5,null],
[new Date(2007,6,1),4.9,null],
[new Date(2007,9,1),4.5,null],
[new Date(2007,12,1),3.7,null],
[new Date(2008,3,1),3.3,null],
[new Date(2008,6,1),2.9,null],
[new Date(2008,9,1),2.6,null],
[new Date(2008,12,1),1.6,null],
[new Date(2009,3,1),1.5,null],
[new Date(2009,6,1),1.9,null],
[new Date(2009,9,1),1.4,null],
[new Date(2009,12,1),2.6,null],
[new Date(2010,3,1),2.1,null],
[new Date(2010,6,1),2,null],
[new Date(2010,9,1),2.4,null],
[new Date(2010,12,1),2.7,null],
[new Date(2011,3,1),1.9,null],
[new Date(2011,6,1),2.6,null],
[new Date(2011,9,1),3.3,null],
[new Date(2011,12,1),3.4,null],
[new Date(2012,3,1),4.6,null],
[new Date(2012,6,1),4.2,null],
[new Date(2012,9,1),3.4,null],
[new Date(2012,12,1),2.9,null],
[new Date(2013,3,1),2.3,null],
[new Date(2013,6,1),2,null],
[new Date(2013,9,1),2.2,null],
[new Date(2013,12,1),2.4,null],
[new Date(2014,3,1),2.8,null],
[new Date(2014,6,1),2.8,null],
[new Date(2014,9,1),2.5,null],
[new Date(2014,12,1),2.1,null],
[new Date(2015,3,1),2.2,null],
[new Date(2015,6,1),1.8,null],
[new Date(2015,9,1),2.4,null],
[new Date(2015,12,1),2.6,null],
[new Date(2016,3,1),2.7,null],
[new Date(2016,6,1),3.3,null],
[new Date(2016,9,1),2.3,null],
[new Date(2016,12,1),2.7,null],
[new Date(2017,3,1),2.1,null],
[new Date(2017,6,1),2.1,null],
[new Date(2017,9,1),3,null],
[new Date(2017,12,1),2.5,null],
[new Date(2018,3,1),3.1,null],
[new Date(2018,6,1),3.2,null],
[new Date(2018,9,1),2.5,null],
[new Date(2018,12,1),2.2,null],
[new Date(2019,3,1),1.8,null],
[new Date(2019,6,1),1.6,null],
[new Date(2019,9,1),1.9,null],
[new Date(2019,12,1),2.2,null],
[new Date(2020,3,1),1.4,null],
[new Date(2020,6,1),-6.2,null],

          
        ]);




        var options = {
          title: 'GDP percentage annual change (%)', 
		'chartArea': {'width': '89%', 'height': '90%'},
          legend: 'none', 
          trendlines: { 0: {   color: 'red',
                 		lineWidth: 10,
                 		opacity: 0.2
                 } },    // Draw a trendline for data series 0.,
          hAxis: {
            format: 'yy',
            gridlines: {color: 'none'}
          }, 
          vAxis: {
            gridlines: {color: 'none'}, 
            minValue: 0
          }
        };
        
        var chart = new google.visualization.LineChart(document.getElementById('economic_background_gdp_percentage_change'));
        chart.draw(data,  options);

        var chart = new google.visualization.LineChart(document.getElementById('economic_background_gdp_percentage_change_print'));
        chart.draw(data,  options);
      }
      
     $(window).resize(function(){drawChart_gdp_percentage_change_script();});	
      </script>