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
[new Date(1989,3,1),46.73841306039,null],
[new Date(1989,6,1),48.2022322362292,null],
[new Date(1989,9,1),47.703960490075,null],
[new Date(1989,12,1),47.9823580089753,null],
[new Date(1990,3,1),48.5658050520463,null],
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
[new Date(1996,3,1),60.4380860348767,null],
[new Date(1996,6,1),61.1642053678704,null],
[new Date(1996,9,1),61.4597414430495,null],
[new Date(1996,12,1),62.1753055079993,null],
[new Date(1997,3,1),62.5861933687443,null],
[new Date(1997,6,1),63.5218189673796,null],
[new Date(1997,9,1),64.5896073640548,null],
[new Date(1997,12,1),66.3951013481071,null],
[new Date(1998,3,1),66.5426295861079,null],
[new Date(1998,6,1),68.3995749491603,null],
[new Date(1998,9,1),68.6014008240338,null],
[new Date(1998,12,1),69.9194551288933,null],
[new Date(1999,3,1),70.2824100029988,null],
[new Date(1999,6,1),71.9651993105524,null],
[new Date(1999,9,1),72.3815000802259,null],
[new Date(1999,12,1),73.9904384569778,null],
[new Date(2000,3,1),74.5538396133123,null],
[new Date(2000,6,1),76.7183194759994,null],
[new Date(2000,9,1),76.6534127385633,null],
[new Date(2000,12,1),77.637641079739,null],
[new Date(2001,3,1),78.349322649226,null],
[new Date(2001,6,1),78.9707861543099,null],
[new Date(2001,9,1),79.9622725286203,null],
[new Date(2001,12,1),81.2815710234908,null],
[new Date(2002,3,1),82.2951292759924,null],
[new Date(2002,6,1),85.262218597582,null],
[new Date(2002,9,1),88.1432676021866,null],
[new Date(2002,12,1),89.1057832185458,null],
[new Date(2003,3,1),91.0941572073214,null],
[new Date(2003,6,1),93.3436648119795,null],
[new Date(2003,9,1),94.9027647164844,null],
[new Date(2003,12,1),97.1224018587074,null],
[new Date(2004,3,1),98.6022012522858,null],
[new Date(2004,6,1),100.722951569657,null],
[new Date(2004,9,1),102.173003218506,null],
[new Date(2004,12,1),103.187354410807,null],
[new Date(2005,3,1),104.187157680346,null],
[new Date(2005,6,1),106.023624602471,null],
[new Date(2005,9,1),105.935015125954,null],
[new Date(2005,12,1),106.924656908354,null],
[new Date(2006,3,1),107.267078025437,null],
[new Date(2006,6,1),109.89959873525,null],
[new Date(2006,9,1),110.7265409413,null],
[new Date(2006,12,1),111.656467710796,null],
[new Date(2007,3,1),111.332861714797,null],
[new Date(2007,6,1),114.263307473833,null],
[new Date(2007,9,1),113.602182486089,null],
[new Date(2007,12,1),114.433632822717,null],
[new Date(2008,3,1),114.646513261444,null],
[new Date(2008,6,1),115.217804508828,null],
[new Date(2008,9,1),113.796149557818,null],
[new Date(2008,12,1),112.420985274344,null],
[new Date(2009,3,1),111.688021644248,null],
[new Date(2009,6,1),113.234013322694,null],
[new Date(2009,9,1),116.276437654829,null],
[new Date(2009,12,1),117.383607984332,null],
[new Date(2010,3,1),118.007217101392,null],
[new Date(2010,6,1),118.079624645109,null],
[new Date(2010,9,1),116.640944398635,null],
[new Date(2010,12,1),116.078409799391,null],
[new Date(2011,3,1),115.59845931563,null],
[new Date(2011,6,1),115.483607956429,null],
[new Date(2011,9,1),114.227586879571,null],
[new Date(2011,12,1),113.531893144337,null],
[new Date(2012,3,1),113.284013047604,null],
[new Date(2012,6,1),113.866212160747,null],
[new Date(2012,9,1),113.807604160857,null],
[new Date(2012,12,1),114.039291322523,null],
[new Date(2013,3,1),114.115972072983,null],
[new Date(2013,6,1),115.584304022522,null],
[new Date(2013,9,1),115.35972227687,null],
[new Date(2013,12,1),116.274254033466,null],
[new Date(2014,3,1),116.212067339456,null],
[new Date(2014,6,1),117.523089273523,null],
[new Date(2014,9,1),118.493080414187,null],
[new Date(2014,12,1),119.978035490285,null],
[new Date(2015,3,1),121.612550019897,null],
[new Date(2015,6,1),123.930099571627,null],
[new Date(2015,9,1),124.97367714637,null],
[new Date(2015,12,1),125.893894710116,null],
[new Date(2016,3,1),126.96027123655,null],
[new Date(2016,6,1),128.565706699063,null],
[new Date(2016,9,1),129.36323901211,null],
[new Date(2016,12,1),128.7523145723,null],
[new Date(2017,3,1),128.076869994451,null],
[new Date(2017,6,1),128.443715988657,null],
[new Date(2017,9,1),127.9741224392,null],
[new Date(2017,12,1),128.652742369054,null],
[new Date(2018,3,1),129.161156129861,null],
[new Date(2018,6,1),129.219564672256,null],
[new Date(2018,9,1),128.497583053253,null],
[new Date(2018,12,1),128.001596669803,null],
[new Date(2019,3,1),127.193001202501,null],
[new Date(2019,6,1),126.969462199312,null],
[new Date(2019,9,1),125.798909676746,null],
[new Date(2019,12,1),125.534391417642,null],
[new Date(2020,3,1),124.942049557517,null],
[new Date(2020,6,1),127.038159817695,null],
[new Date(2020,9,1),128.514698371695,null],
[new Date(2020,12,1),129.375595626159,null],
[new Date(2021,3,1),129.226763444806,null],
[new Date(2021,6,1),126.763735950138,null],
[new Date(2021,9,1),126.047283284944,null],
[new Date(2021,12,1),125.710559486241,null],
[new Date(2022,3,1),124.639043500628,null]

          
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