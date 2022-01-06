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
[new Date(1988,6,1),44.4011552462296,null],
[new Date(1988,9,1),44.1411349954439,null],
[new Date(1988,12,1),45.4804369345119,null],
[new Date(1989,3,1),46.7382817985228,null],
[new Date(1989,6,1),48.2019703764467,null],
[new Date(1989,9,1),47.7037087846858,null],
[new Date(1989,12,1),47.9821112159796,null],
[new Date(1990,3,1),48.5656829721985,null],
[new Date(1990,6,1),49.5231819460692,null],
[new Date(1990,9,1),48.2893998878295,null],
[new Date(1990,12,1),48.6111647206407,null],
[new Date(1991,3,1),49.1794287033963,null],
[new Date(1991,6,1),49.9767464836587,null],
[new Date(1991,9,1),50.3477141791853,null],
[new Date(1991,12,1),51.4536441425314,null],
[new Date(1992,3,1),51.393970306776,null],
[new Date(1992,6,1),51.5453566062164,null],
[new Date(1992,9,1),52.2842021736026,null],
[new Date(1992,12,1),51.3828141082428,null],
[new Date(1993,3,1),50.6615808046778,null],
[new Date(1993,6,1),52.4922637574491,null],
[new Date(1993,9,1),52.225624352822,null],
[new Date(1993,12,1),52.8909812829046,null],
[new Date(1994,3,1),53.4227160880264,null],
[new Date(1994,6,1),55.4461795872839,null],
[new Date(1994,9,1),56.1969354116898,null],
[new Date(1994,12,1),57.0223601660851,null],
[new Date(1995,3,1),57.4391677141777,null],
[new Date(1995,6,1),57.6036503974223,null],
[new Date(1995,9,1),58.5977309730351,null],
[new Date(1995,12,1),59.8829914876209,null],
[new Date(1996,3,1),60.4379696932364,null],
[new Date(1996,6,1),61.1640896396703,null],
[new Date(1996,9,1),61.4596266913622,null],
[new Date(1996,12,1),62.1751908037834,null],
[new Date(1997,3,1),62.5860791691148,null],
[new Date(1997,6,1),63.521704612759,null],
[new Date(1997,9,1),64.5894926744903,null],
[new Date(1997,12,1),66.3948694937065,null],
[new Date(1998,3,1),66.5424009510622,null],
[new Date(1998,6,1),68.3992266286884,null],
[new Date(1998,9,1),68.6010565512535,null],
[new Date(1998,12,1),69.9192241822088,null],
[new Date(1999,3,1),70.2821809126142,null],
[new Date(1999,6,1),71.9650834931957,null],
[new Date(1999,9,1),72.3813850929506,null],
[new Date(1999,12,1),73.9903224035573,null],
[new Date(2000,3,1),74.5537247749947,null],
[new Date(2000,6,1),76.7180876936974,null],
[new Date(2000,9,1),76.6530725752889,null],
[new Date(2000,12,1),77.6379804490967,null],
[new Date(2001,3,1),78.3492101772579,null],
[new Date(2001,6,1),78.9704508788316,null],
[new Date(2001,9,1),79.9619375809839,null],
[new Date(2001,12,1),81.2807908791126,null],
[new Date(2002,3,1),82.294463420982,null],
[new Date(2002,6,1),85.2615413130685,null],
[new Date(2002,9,1),88.1430381015738,null],
[new Date(2002,12,1),89.1053271971474,null],
[new Date(2003,3,1),91.0934680893717,null],
[new Date(2003,6,1),93.3430838649448,null],
[new Date(2003,9,1),94.9022992804097,null],
[new Date(2003,12,1),97.121348512291,null],
[new Date(2004,3,1),98.6003364109935,null],
[new Date(2004,6,1),100.721085079006,null],
[new Date(2004,9,1),102.172306026639,null],
[new Date(2004,12,1),103.185738132639,null],
[new Date(2005,3,1),104.184060804622,null],
[new Date(2005,6,1),106.021216228349,null],
[new Date(2005,9,1),105.934116504381,null],
[new Date(2005,12,1),106.923324541546,null],
[new Date(2006,3,1),107.265111760375,null],
[new Date(2006,6,1),109.898498750377,null],
[new Date(2006,9,1),110.727955045583,null],
[new Date(2006,12,1),111.658295521951,null],
[new Date(2007,3,1),111.331604921083,null],
[new Date(2007,6,1),114.262887512048,null],
[new Date(2007,9,1),113.601671070935,null],
[new Date(2007,12,1),114.431307196877,null],
[new Date(2008,3,1),114.644922565691,null],
[new Date(2008,6,1),115.21653354558,null],
[new Date(2008,9,1),113.795961310366,null],
[new Date(2008,12,1),112.419710447321,null],
[new Date(2009,3,1),111.685171005615,null],
[new Date(2009,6,1),113.233115150438,null],
[new Date(2009,9,1),116.274405930096,null],
[new Date(2009,12,1),117.381750273987,null],
[new Date(2010,3,1),118.007957688693,null],
[new Date(2010,6,1),118.078082691606,null],
[new Date(2010,9,1),116.638756591129,null],
[new Date(2010,12,1),116.075515041984,null],
[new Date(2011,3,1),115.595303354367,null],
[new Date(2011,6,1),115.481816053106,null],
[new Date(2011,9,1),114.226480641004,null],
[new Date(2011,12,1),113.530036308524,null],
[new Date(2012,3,1),113.284547150622,null],
[new Date(2012,6,1),113.866744078961,null],
[new Date(2012,9,1),113.80813306945,null],
[new Date(2012,12,1),114.038237497566,null],
[new Date(2013,3,1),114.114177665028,null],
[new Date(2013,6,1),115.582122692711,null],
[new Date(2013,9,1),115.358382908512,null],
[new Date(2013,12,1),116.273586860405,null],
[new Date(2014,3,1),116.212140602472,null],
[new Date(2014,6,1),117.522795364401,null],
[new Date(2014,9,1),118.490354399496,null],
[new Date(2014,12,1),119.976176561182,null],
[new Date(2015,3,1),121.610671405559,null],
[new Date(2015,6,1),123.928266596823,null],
[new Date(2015,9,1),124.971455992587,null],
[new Date(2015,12,1),125.890052963141,null],
[new Date(2016,3,1),126.959268036657,null],
[new Date(2016,6,1),128.564620979568,null],
[new Date(2016,9,1),129.361613790372,null],
[new Date(2016,12,1),128.747919457399,null],
[new Date(2017,3,1),128.075982479796,null],
[new Date(2017,6,1),128.441963483715,null],
[new Date(2017,9,1),127.974480658675,null],
[new Date(2017,12,1),128.652742369054,null],
[new Date(2018,3,1),129.1609431385,null],
[new Date(2018,6,1),129.210447476054,null],
[new Date(2018,9,1),128.500129620544,null],
[new Date(2018,12,1),127.996663173206,null],
[new Date(2019,3,1),127.183587566838,null],
[new Date(2019,6,1),126.956930740148,null],
[new Date(2019,9,1),125.795402297685,null],
[new Date(2019,12,1),125.519391102629,null],
[new Date(2020,3,1),125.519210631699,null],
[new Date(2020,6,1),127.596695727444,null],
[new Date(2020,9,1),129.099595047615,null],
[new Date(2020,12,1),130.057976895691,null],
[new Date(2021,3,1),129.968840272967,null],
[new Date(2021,6,1),127.455612368584,null],
[new Date(2021,9,1),126.464465227054,null],

          
        ]);

	var chartwidth = $('economic_background_household_debt_to_gdp').width();
	var chartheight = $('economic_background_household_debt_to_gdp').height();


        var options = {
          title: 'Household debt to GDP ratio (Sources: ABS & RBA)', 
          titleTextStyle: {
              fontName: 'Barlow Semi Condensed', // i.e. 'Times New Roman'
              fontSize: 20 // 12, 18 whatever you want (don't specify px)
          },
          width: chartwidth, 
			'chartArea': {'width': '90%', 'height': '90%'},
          legend: 'none', 
          hAxis: {
            textStyle : {
                fontName: 'Barlow Semi Condensed',
                bold: true
            },  
            format: 'yy', 
            gridlines: {color: 'none'},             
            ticks: [	
              
                   new Date(2021,1,1),       
                    new Date(2020,1,1), 
                    new Date(2019,1,1),
                    new Date(2018,1,1), 
                    new Date(2017,1,1),
                    new Date(2016,1,1), 
                    new Date(2015,1,1),
                    new Date(2014,1,1), 
                    new Date(2013,1,1),
                    new Date(2012,1,1), 
                    new Date(2011,1,1),
                    new Date(2010,1,1), 
                    new Date(2009,1,1),
                    new Date(2008,1,1), 
                    new Date(2007,1,1),
                    new Date(2006,1,1), 
                    new Date(2005,1,1),
                    new Date(2004,1,1), 
                    new Date(2003,1,1),
                    new Date(2002,1,1), 
                    new Date(2001,1,1),
                    new Date(2000,1,1), 
                    new Date(1999,1,1),
                    new Date(1998,1,1), 
                    new Date(1997,1,1),
                    new Date(1996,1,1), 
                    new Date(1995,1,1),
                    new Date(1994,1,1), 
                    new Date(1993,1,1),
                    new Date(1992,1,1), 
                    new Date(1991,1,1),
                    new Date(1990,1,1),
                    new Date(1989,1,1), 
                    new Date(1988,1,1)
            		
            		
            		
            		]
          }, 
          vAxis: {

            textStyle : {
                fontName: 'Barlow Semi Condensed',
                bold: true
            },   
            gridlines: {color: 'none'}, 
            minValue: '40'
          }
        };

        var chart = new google.visualization.LineChart(document.getElementById('economic_background_household_debt_to_gdp'));
        chart.draw(data,  options);
        var chart = new google.visualization.LineChart(document.getElementById('economic_background_household_debt_to_gdp_print'));
        chart.draw(data,  options);
      }
      
     $(window).resize(function(){drawChart_household_debt_to_gdp_script();});	
      </script>