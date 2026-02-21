<script type='text/javascript'>
        google.charts.load('current',   {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart_gdp_script);

      function drawChart_gdp_script(){

        var data = new google.visualization.DataTable();
        data.addColumn('date',   'Quarter');
        data.addColumn('number',   'GDP ($b AUD)');
        data.addColumn('number',   'Critical_date_1');
        data.addRows([
<?php
/**/?>

[new Date(1988,6,1),324.051,null],
[new Date(1988,9,1),334.322,null],
[new Date(1988,12,1),345.1,null],
[new Date(1989,3,1),355.659,null],
[new Date(1989,6,1),367.717,null],
[new Date(1989,9,1),378.588,null],
[new Date(1989,12,1),388.375,null],
[new Date(1990,3,1),397.312,null],
[new Date(1990,6,1),404.666,null],
[new Date(1990,9,1),409.566,null],
[new Date(1990,12,1),413.997,null],
[new Date(1991,3,1),415.167,null],
[new Date(1991,6,1),414.453,null],
[new Date(1991,9,1),415.166,null],
[new Date(1991,12,1),415.595,null],
[new Date(1992,3,1),418.993,null],
[new Date(1992,6,1),422.721,null],
[new Date(1992,9,1),426.658,null],
[new Date(1992,12,1),431.773,null],
[new Date(1993,3,1),437.235,null],
[new Date(1993,6,1),443.431,null],
[new Date(1993,9,1),448.482,null],
[new Date(1993,12,1),453.766,null],
[new Date(1994,3,1),459.453,null],
[new Date(1994,6,1),465.569,null],
[new Date(1994,9,1),475.276,null],
[new Date(1994,12,1),481.86,null],
[new Date(1995,3,1),488.381,null],
[new Date(1995,6,1),495.009,null],
[new Date(1995,9,1),500.871,null],
[new Date(1995,12,1),509.958,null],
[new Date(1996,3,1),518.505,null],
[new Date(1996,6,1),527.483,null],
[new Date(1996,9,1),534.496,null],
[new Date(1996,12,1),540.987,null],
[new Date(1997,3,1),547.035,null],
[new Date(1997,6,1),554.529,null],
[new Date(1997,9,1),562.29,null],
[new Date(1997,12,1),571.905,null],
[new Date(1998,3,1),581.334,null],
[new Date(1998,6,1),588.37,null],
[new Date(1998,9,1),597.036,null],
[new Date(1998,12,1),604.719,null],
[new Date(1999,3,1),612.749,null],
[new Date(1999,6,1),620.587,null],
[new Date(1999,9,1),628.797,null],
[new Date(1999,12,1),636.98,null],
[new Date(2000,3,1),648.677,null],
[new Date(2000,6,1),661.425,null],
[new Date(2000,9,1),675.321,null],
[new Date(2000,12,1),685.408,null],
[new Date(2001,3,1),695.486,null],
[new Date(2001,6,1),705.308,null],
[new Date(2001,9,1),714.738,null],
[new Date(2001,12,1),727.779,null],
[new Date(2002,3,1),740.059,null],
[new Date(2002,6,1),754.005,null],
[new Date(2002,9,1),766.874,null],
[new Date(2002,12,1),780.37,null],
[new Date(2003,3,1),791.879,null],
[new Date(2003,6,1),801.828,null],
[new Date(2003,9,1),813.819,null],
[new Date(2003,12,1),827.725,null],
[new Date(2004,3,1),843.697,null],
[new Date(2004,6,1),861.069,null],
[new Date(2004,9,1),876.997,null],
[new Date(2004,12,1),891.611,null],
[new Date(2005,3,1),906.184,null],
[new Date(2005,6,1),922.284,null],
[new Date(2005,9,1),941.141,null],
[new Date(2005,12,1),961.01,null],
[new Date(2006,3,1),979.56,null],
[new Date(2006,6,1),996.989,null],
[new Date(2006,9,1),1016.149,null],
[new Date(2006,12,1),1037.08,null],
[new Date(2007,3,1),1061.719,null],
[new Date(2007,6,1),1087.148,null],
[new Date(2007,9,1),1109.345,null],
[new Date(2007,12,1),1130.368,null],
[new Date(2008,3,1),1151.755,null],
[new Date(2008,6,1),1177.143,null],
[new Date(2008,9,1),1208.081,null],
[new Date(2008,12,1),1234.143,null],
[new Date(2009,3,1),1253.403,null],
[new Date(2009,6,1),1260.375,null],
[new Date(2009,9,1),1258.447,null],
[new Date(2009,12,1),1262.387,null],
[new Date(2010,3,1),1273.214,null],
[new Date(2010,6,1),1300.273,null],
[new Date(2010,9,1),1331.027,null],
[new Date(2010,12,1),1361.432,null],
[new Date(2011,3,1),1390.386,null],
[new Date(2011,6,1),1416.674,null],
[new Date(2011,9,1),1444.667,null],
[new Date(2011,12,1),1466.458,null],
[new Date(2012,3,1),1484.342,null],
[new Date(2012,6,1),1498.211,null],
[new Date(2012,9,1),1506.055,null],
[new Date(2012,12,1),1515.068,null],
[new Date(2013,3,1),1526.679,null],
[new Date(2013,6,1),1536.588,null],
[new Date(2013,9,1),1549.927,null],
[new Date(2013,12,1),1567.936,null],
[new Date(2014,3,1),1586.145,null],
[new Date(2014,6,1),1599.475,null],
[new Date(2014,9,1),1608.629,null],
[new Date(2014,12,1),1614.488,null],
[new Date(2015,3,1),1619.527,null],
[new Date(2015,6,1),1624.153,null],
[new Date(2015,9,1),1633.4,null],
[new Date(2015,12,1),1640.737,null],
[new Date(2016,3,1),1647.764,null],
[new Date(2016,6,1),1660.869,null],
[new Date(2016,9,1),1674.905,null],
[new Date(2016,12,1),1702.758,null],
[new Date(2017,3,1),1736.376,null],
[new Date(2017,6,1),1763.773,null],
[new Date(2017,9,1),1791.281,null],
[new Date(2017,12,1),1808.272,null],
[new Date(2018,3,1),1826.127,null],
[new Date(2018,6,1),1849.915,null],
[new Date(2018,9,1),1873.624,null],
[new Date(2018,12,1),1899.591,null],
[new Date(2019,3,1),1923.123,null],
[new Date(2019,6,1),1948.826,null],
[new Date(2019,9,1),1975.088,null],
[new Date(2019,12,1),1994.047,null],
[new Date(2020,3,1),2009.405,null]


          
        ]);

	var chartwidth = $('economic_background_gdp').width();
	var chartheight = $('economic_background_gdp').height();


        var options = {
          title: 'GDP', 
          width: chartwidth, 

          legend: 'none', 
          hAxis: {
            format: 'yy', 
            gridlines: {count: 15}
          }, 
          vAxis: {
            gridlines: {color: 'none'}, 
            minValue: 0
          }
        };

        var chart = new google.visualization.LineChart(document.getElementById('economic_background_gdp'));
        chart.draw(data,  options);
        var chart = new google.visualization.LineChart(document.getElementById('economic_background_gdp_print'));
        chart.draw(data,  options);
      }
      
     $(window).resize(function(){drawChart_gdp_script();});	
      </script>