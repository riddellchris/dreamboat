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
[new Date(1988,6,1),44.4536336985033,null],
[new Date(1988,9,1),44.1928913057133,null],
[new Date(1988,12,1),45.5322293215108,null],
[new Date(1989,3,1),46.7915032404088,null],
[new Date(1989,6,1),48.1632863957011,null],
[new Date(1989,9,1),47.6687181383555,null],
[new Date(1989,12,1),47.9496884494567,null],
[new Date(1990,3,1),48.5390758512724,null],
[new Date(1990,6,1),49.4552364760509,null],
[new Date(1990,9,1),48.2205988632146,null],
[new Date(1990,12,1),48.5439683866262,null],
[new Date(1991,3,1),49.1125386284754,null],
[new Date(1991,6,1),49.7923799459054,null],
[new Date(1991,9,1),50.165715249175,null],
[new Date(1991,12,1),51.2751413013924,null],
[new Date(1992,3,1),51.216590015728,null],
[new Date(1992,6,1),51.3675460343294,null],
[new Date(1992,9,1),52.1106822011752,null],
[new Date(1992,12,1),51.2115022071528,null],
[new Date(1993,3,1),50.4925201433534,null],
[new Date(1993,6,1),52.3281721458242,null],
[new Date(1993,9,1),52.056000998903,null],
[new Date(1993,12,1),52.7240552524175,null],
[new Date(1994,3,1),53.2603774899011,null],
[new Date(1994,6,1),55.2282885820269,null],
[new Date(1994,9,1),55.9928631843832,null],
[new Date(1994,12,1),56.8336425479283,null],
[new Date(1995,3,1),57.2636044775967,null],
[new Date(1995,6,1),57.4294308611324,null],
[new Date(1995,9,1),58.4291692622231,null],
[new Date(1995,12,1),59.7195477310074,null],
[new Date(1996,3,1),60.2824637566561,null],
[new Date(1996,6,1),61.0191020011981,null],
[new Date(1996,9,1),61.3239264285754,null],
[new Date(1996,12,1),61.930905467781,null],
[new Date(1997,3,1),62.2283930079595,null],
[new Date(1997,6,1),63.0566230318812,null],
[new Date(1997,9,1),63.9785166149441,null],
[new Date(1997,12,1),65.6329393909192,null],
[new Date(1998,3,1),65.7077735537475,null],
[new Date(1998,6,1),67.4897301192615,null],
[new Date(1998,9,1),67.7065240512732,null],
[new Date(1998,12,1),69.0895230409755,null],
[new Date(1999,3,1),69.5156839289707,null],
[new Date(1999,6,1),71.2575352045725,null],
[new Date(1999,9,1),71.7172391857506,null],
[new Date(1999,12,1),73.1387053829344,null],
[new Date(2000,3,1),73.7621823944552,null],
[new Date(2000,6,1),76.0088052178173,null],
[new Date(2000,9,1),76.03125032392,null],
[new Date(2000,12,1),77.1153155939691,null],
[new Date(2001,3,1),77.9186401295225,null],
[new Date(2001,6,1),78.635291248646,null],
[new Date(2001,9,1),79.7092628736525,null],
[new Date(2001,12,1),81.1147782452534,null],
[new Date(2002,3,1),82.2137244701479,null],
[new Date(2002,6,1),85.211199424936,null],
[new Date(2002,9,1),88.1977008016941,null],
[new Date(2002,12,1),89.1910836595696,null],
[new Date(2003,3,1),91.1701192623013,null],
[new Date(2003,6,1),93.5205474497616,null],
[new Date(2003,9,1),95.1764442773268,null],
[new Date(2003,12,1),97.4544000425253,null],
[new Date(2004,3,1),98.9553208234167,null],
[new Date(2004,6,1),101.09247923221,null],
[new Date(2004,9,1),102.554223516507,null],
[new Date(2004,12,1),103.571885213358,null],
[new Date(2005,3,1),104.579423163508,null],
[new Date(2005,6,1),106.428171799576,null],
[new Date(2005,9,1),106.303147376619,null],
[new Date(2005,12,1),107.302393340271,null],
[new Date(2006,3,1),107.631793866634,null],
[new Date(2006,6,1),110.266507122804,null],
[new Date(2006,9,1),111.059009924374,null],
[new Date(2006,12,1),112.053607587369,null],
[new Date(2007,3,1),111.710050304739,null],
[new Date(2007,6,1),114.646223074192,null],
[new Date(2007,9,1),113.993852144988,null],
[new Date(2007,12,1),114.806905300705,null],
[new Date(2008,3,1),115.009693784083,null],
[new Date(2008,6,1),115.533536028517,null],
[new Date(2008,9,1),114.066599895705,null],
[new Date(2008,12,1),112.654896441302,null],
[new Date(2009,3,1),111.91124727734,null],
[new Date(2009,6,1),113.469021156129,null],
[new Date(2009,9,1),116.540582034211,null],
[new Date(2009,12,1),117.730556567753,null],
[new Date(2010,3,1),118.28906237728,null],
[new Date(2010,6,1),118.365386611991,null],
[new Date(2010,9,1),116.948399980166,null],
[new Date(2010,12,1),116.375592840884,null],
[new Date(2011,3,1),115.865964137042,null],
[new Date(2011,6,1),115.723875539995,null],
[new Date(2011,9,1),114.443259242441,null],
[new Date(2011,12,1),113.71487762233,null],
[new Date(2012,3,1),113.394717056384,null],
[new Date(2012,6,1),113.958475725667,null],
[new Date(2012,9,1),113.875531368151,null],
[new Date(2012,12,1),114.030979304009,null],
[new Date(2013,3,1),114.062561409852,null],
[new Date(2013,6,1),115.563749815336,null],
[new Date(2013,9,1),115.358381152327,null],
[new Date(2013,12,1),116.317341304793,null],
[new Date(2014,3,1),116.24433841405,null],
[new Date(2014,6,1),117.585468068226,null],
[new Date(2014,9,1),118.531050547084,null],
[new Date(2014,12,1),119.956592942389,null],
[new Date(2015,3,1),121.562311092669,null],
[new Date(2015,6,1),123.88566601443,null],
[new Date(2015,9,1),124.324254831474,null],
[new Date(2015,12,1),125.157553934033,null],
[new Date(2016,3,1),126.197915149397,null],
[new Date(2016,6,1),127.783367382758,null],
[new Date(2016,9,1),128.562710487974,null],
[new Date(2016,12,1),128.389897719996,null],
[new Date(2017,3,1),127.678063605649,null],
[new Date(2017,6,1),128.080624581227,null],
[new Date(2017,9,1),127.619446679181,null],
[new Date(2017,12,1),128.230974510901,null],
[new Date(2018,3,1),128.687595828786,null],
[new Date(2018,6,1),128.688747181602,null],
[new Date(2018,9,1),127.995592102945,null],
[new Date(2018,12,1),127.549271546465,null],
[new Date(2019,3,1),126.771965262062,null],
[new Date(2019,6,1),126.281164516689,null],
[new Date(2019,9,1),124.723540499341,null],
[new Date(2019,12,1),124.578352366516,null],
[new Date(2020,3,1),124.624583511288,null],
[new Date(2020,6,1),126.871553793454,null],
[new Date(2020,9,1),128.40678518006,null],
[new Date(2020,12,1),129.431378834067,null]

          
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