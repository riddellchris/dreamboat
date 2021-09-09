<script type='text/javascript'>
        google.charts.load('current',   {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart_household_debt_to_gdp_script);

      function drawChart_household_debt_to_gdp_script() {

        var data = new google.visualization.DataTable();
        data.addColumn('date',   'Quarter');
        data.addColumn('number',   'Household debt to GDP ratio');
        data.addColumn('number',   'Critical_date_1');
        data.addRows([
<?php
/**/?>
[new Date(1988,6,1),44.4534965175235,null],
[new Date(1988,9,1),44.1930234923218,null],
[new Date(1988,12,1),45.532889017676,null],
[new Date(1989,3,1),46.7922926173666,null],
[new Date(1989,6,1),48.1639412918087,null],
[new Date(1989,9,1),47.6689699620696,null],
[new Date(1989,12,1),47.9503057611844,null],
[new Date(1990,3,1),48.5396866945876,null],
[new Date(1990,6,1),49.4558475384638,null],
[new Date(1990,9,1),48.221776221659,null], 
[new Date(1990,12,1),48.544554670686,null],
[new Date(1991,3,1),49.1132484036544,null],
[new Date(1991,6,1),49.7931007858551,null],

[new Date(1991,9,1),50.1661985808086,null],
[new Date(1991,12,1),51.2758815673913,null],
[new Date(1992,3,1),51.2173234397711,null],
[new Date(1992,6,1),51.3683966493266,null],
[new Date(1992,9,1),52.1112928856367,null],
[new Date(1992,12,1),51.2120952444919,null],
[new Date(1993,3,1),50.4932130318936,null],
[new Date(1993,6,1),52.3289981981413,null],
[new Date(1993,9,1),52.0571617144055,null],
[new Date(1993,12,1),52.7247524054248,null],
[new Date(1994,3,1),53.2607252537256,null],
[new Date(1994,6,1),55.2287630834527,null],
[new Date(1994,9,1),55.9935700519277,null],
[new Date(1994,12,1),56.8343502262068,null],
[new Date(1995,3,1),57.2643079890495,null],
[new Date(1995,6,1),57.4296628950181,null],
[new Date(1995,9,1),58.4274194353436,null],
[new Date(1995,12,1),59.7200161581934,null],
[new Date(1996,3,1),60.2829288049296,null],
[new Date(1996,6,1),61.019217680949,null],
[new Date(1996,9,1),61.3245000898042,null],
[new Date(1996,12,1),61.9288448705792,null],
[new Date(1997,3,1),62.2269141828219,null],
[new Date(1997,6,1),63.0563956078041,null],
[new Date(1997,9,1),63.9790855252628,null],
[new Date(1997,12,1),65.6336279626861,null],
[new Date(1998,3,1),65.707321436558,null],
[new Date(1998,6,1),67.489844825535,null],
[new Date(1998,9,1),67.7066374556978,null],
[new Date(1998,12,1),69.0904370459668,null],
[new Date(1999,3,1),69.5170453154554,null],
[new Date(1999,6,1),71.2575352045725,null],
[new Date(1999,9,1),71.7175813497838,null],
[new Date(1999,12,1),73.1382460987786,null],
[new Date(2000,3,1),73.7627509530938,null],
[new Date(2000,6,1),76.008920134558,null],
[new Date(2000,9,1),76.03125032392,null],
[new Date(2000,12,1),77.1150905737896,null],
[new Date(2001,3,1),77.9177438510624,null],
[new Date(2001,6,1),78.635291248646,null],
[new Date(2001,9,1),79.7089283065963,null],
[new Date(2001,12,1),81.1155584318866,null],
[new Date(2002,3,1),82.2143910147704,null],
[new Date(2002,6,1),85.2109734020332,null],
[new Date(2002,9,1),88.1979308204477,null],
[new Date(2002,12,1),89.1905121929341,null],
[new Date(2003,3,1),91.1688528171602,null],
[new Date(2003,6,1),93.5204308155864,null],
[new Date(2003,9,1),95.17398831927,null],
[new Date(2003,12,1),97.4564015826512,null],
[new Date(2004,3,1),98.9561418376503,null],
[new Date(2004,6,1),101.09247923221,null],
[new Date(2004,9,1),102.55667921327,null],
[new Date(2004,12,1),103.570839749622,null],
[new Date(2005,3,1),104.579423163508,null],
[new Date(2005,6,1),106.428171799576,null],
[new Date(2005,9,1),106.302243765812,null],
[new Date(2005,12,1),107.301276781719,null],
[new Date(2006,3,1),107.631793866634,null],
[new Date(2006,6,1),110.26871911325,null],
[new Date(2006,9,1),111.062944509122,null],
[new Date(2006,12,1),112.054904153971,null],
[new Date(2007,3,1),111.711102466849,null],
[new Date(2007,6,1),114.646855809881,null],
[new Date(2007,9,1),113.992310777982,null],
[new Date(2007,12,1),114.807920960254,null],
[new Date(2008,3,1),115.011091768649,null],
[new Date(2008,6,1),115.53294714406,null],
[new Date(2008,9,1),114.069338065908,null],
[new Date(2008,12,1),112.65380105871,null],
[new Date(2009,3,1),111.908300841788,null],
[new Date(2009,6,1),113.466230288605,null],
[new Date(2009,9,1),116.537526014206,null],
[new Date(2009,12,1),117.72990374584,null],
[new Date(2010,3,1),118.289619812537,null],
[new Date(2010,6,1),118.3662969238,null],
[new Date(2010,9,1),116.950069382514,null],
[new Date(2010,12,1),116.37738792683,null],
[new Date(2011,3,1),115.867464143051,null],
[new Date(2011,6,1),115.724365662107,null],
[new Date(2011,9,1),114.443259242441,null],
[new Date(2011,12,1),113.713792007681,null],
[new Date(2012,3,1),113.393341965666,null],
[new Date(2012,6,1),113.958247536562,null],
[new Date(2012,9,1),113.872733731504,null],
[new Date(2012,12,1),114.031581420768,null],
[new Date(2013,3,1),114.058751053758,null],
[new Date(2013,6,1),115.562922527053,null],
[new Date(2013,9,1),115.359497576337,null],
[new Date(2013,12,1),116.31667363974,null],
[new Date(2014,3,1),116.243092529372,null],
[new Date(2014,6,1),117.584144797512,null],
[new Date(2014,9,1),118.530313701916,null],
[new Date(2014,12,1),119.956295742056,null],
[new Date(2015,3,1),121.561110126599,null],
[new Date(2015,6,1),123.885742291521,null],
[new Date(2015,9,1),124.328517203379,null],
[new Date(2015,12,1),125.155341776287,null],
[new Date(2016,3,1),126.192707208071,null],
[new Date(2016,6,1),127.779674375282,null],
[new Date(2016,9,1),128.090190189891,null],
[new Date(2016,12,1),127.925812123625,null],
[new Date(2017,3,1),127.182994927366,null],
[new Date(2017,6,1),127.611999956911,null],
[new Date(2017,9,1),127.152021374648,null],
[new Date(2017,12,1),127.718506950282,null],
[new Date(2018,3,1),128.167646609464,null],
[new Date(2018,6,1),128.537851739134,null],
[new Date(2018,9,1),127.92908288963,null],
[new Date(2018,12,1),127.538138472966,null],
[new Date(2019,3,1),126.859540445411,null],
[new Date(2019,6,1),126.667439781694,null],
[new Date(2019,9,1),125.032504880795,null],
[new Date(2019,12,1),124.952069835866,null],
[new Date(2020,3,1),124.929419405247,null]

          
        ]);

	var chartwidth = $('economic_background_household_debt_to_gdp').width();
	var chartheight = $('economic_background_household_debt_to_gdp').height();


        var options = {
          title: 'Household debt to GDP ratio (%)', 
          width: chartwidth, 
			'chartArea': {'width': '84%', 'height': '90%'},
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

        var chart = new google.visualization.LineChart(document.getElementById('economic_background_household_debt_to_gdp'));
        chart.draw(data,  options);
        var chart = new google.visualization.LineChart(document.getElementById('economic_background_household_debt_to_gdp_print'));
        chart.draw(data,  options);
      }
      
     $(window).resize(function(){drawChart_household_debt_to_gdp_script();});	
      </script>