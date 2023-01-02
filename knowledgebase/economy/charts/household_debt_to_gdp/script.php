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
[new Date(1988,6,1),44.3568575889049,null],
[new Date(1988,9,1),44.1001593906145,null],
[new Date(1988,12,1),45.440454364058,null],
[new Date(1989,3,1),46.7012953484195,null],
[new Date(1989,6,1),48.16193932025,null],
[new Date(1989,9,1),47.6632188271019,null],
[new Date(1989,12,1),47.9397005583377,null],
[new Date(1990,3,1),48.5173875484662,null],
[new Date(1990,6,1),49.4776345735146,null],
[new Date(1990,9,1),48.2465757429578,null],
[new Date(1990,12,1),48.5687496685805,null],
[new Date(1991,3,1),49.1404176762432,null],
[new Date(1991,6,1),49.9367961803223,null],
[new Date(1991,9,1),50.3065700448258,null],
[new Date(1991,12,1),51.4137397835211,null],
[new Date(1992,3,1),51.3541899867106,null],
[new Date(1992,6,1),51.5087270314872,null],
[new Date(1992,9,1),52.2508128845119,null],
[new Date(1992,12,1),51.3501518660805,null],
[new Date(1993,3,1),50.6320907617504,null],
[new Date(1993,6,1),52.4604812698213,null],
[new Date(1993,9,1),52.195520381729,null],
[new Date(1993,12,1),52.8629409241396,null],
[new Date(1994,3,1),53.3918446264474,null],
[new Date(1994,6,1),55.4158671626272,null],
[new Date(1994,9,1),56.1621256152257,null],
[new Date(1994,12,1),56.9832807081112,null],
[new Date(1995,3,1),57.3976377068232,null],
[new Date(1995,6,1),57.5603593656499,null],
[new Date(1995,9,1),58.5584042633698,null],
[new Date(1995,12,1),59.8455077334158,null],
[new Date(1996,3,1),60.4050629988976,null],
[new Date(1996,6,1),61.1281194038882,null],
[new Date(1996,9,1),61.417885523544,null],
[new Date(1996,12,1),62.1314047316617,null],
[new Date(1997,3,1),62.5390643517962,null],
[new Date(1997,6,1),63.4766809084776,null],
[new Date(1997,9,1),64.5455965021861,null],
[new Date(1997,12,1),66.3515411661039,null],
[new Date(1998,3,1),66.4994454573861,null],
[new Date(1998,6,1),68.3529315971963,null],
[new Date(1998,9,1),68.5519756879553,null],
[new Date(1998,12,1),69.8669540362667,null],
[new Date(1999,3,1),70.2244977055182,null],
[new Date(1999,6,1),71.9075683629084,null],
[new Date(1999,9,1),72.3281851994723,null],
[new Date(1999,12,1),73.9374399500949,null],
[new Date(2000,3,1),74.5025421263351,null],
[new Date(2000,6,1),76.6628475854501,null],
[new Date(2000,9,1),76.5926847798132,null],
[new Date(2000,12,1),77.5735534976219,null],
[new Date(2001,3,1),78.2850413736422,null],
[new Date(2001,6,1),78.9094781140496,null],
[new Date(2001,9,1),79.9002434617612,null],
[new Date(2001,12,1),81.2216549792696,null],
[new Date(2002,3,1),82.2364644338496,null],
[new Date(2002,6,1),85.2053641833856,null],
[new Date(2002,9,1),88.0948694361207,null],
[new Date(2002,12,1),89.0644182763137,null],
[new Date(2003,3,1),91.064649326685,null],
[new Date(2003,6,1),93.317993855083,null],
[new Date(2003,9,1),94.8775214018847,null],
[new Date(2003,12,1),97.0965429585143,null],
[new Date(2004,3,1),98.5751679557554,null],
[new Date(2004,6,1),100.691930144696,null],
[new Date(2004,9,1),102.139780985384,null],
[new Date(2004,12,1),103.151231133157,null],
[new Date(2005,3,1),104.146110359718,null],
[new Date(2005,6,1),105.979030090317,null],
[new Date(2005,9,1),105.887409181721,null],
[new Date(2005,12,1),106.873273819347,null],
[new Date(2006,3,1),107.214450684068,null],
[new Date(2006,6,1),109.842758361278,null],
[new Date(2006,9,1),110.66794177945,null],
[new Date(2006,12,1),111.593928131138,null],
[new Date(2007,3,1),111.26869677958,null],
[new Date(2007,6,1),114.195313898977,null],
[new Date(2007,9,1),113.535226285977,null],
[new Date(2007,12,1),114.370369062023,null],
[new Date(2008,3,1),114.577656675749,null],
[new Date(2008,6,1),115.157806534125,null],
[new Date(2008,9,1),113.733497565452,null],
[new Date(2008,12,1),112.357643150195,null],
[new Date(2009,3,1),111.624184400273,null],
[new Date(2009,6,1),113.159692881841,null],
[new Date(2009,9,1),116.196330704849,null],
[new Date(2009,12,1),117.288568719959,null],
[new Date(2010,3,1),117.902332813955,null],
[new Date(2010,6,1),117.971966145713,null],
[new Date(2010,9,1),116.5418753186,null],
[new Date(2010,12,1),115.995540648702,null],
[new Date(2011,3,1),115.536617276823,null],
[new Date(2011,6,1),115.439803716969,null],
[new Date(2011,9,1),114.193145503998,null],
[new Date(2011,12,1),113.501263118308,null],
[new Date(2012,3,1),113.255331484291,null],
[new Date(2012,6,1),113.839090920008,null],
[new Date(2012,9,1),113.785394438316,null],
[new Date(2012,12,1),114.02469005435,null],
[new Date(2013,3,1),114.108720021017,null],
[new Date(2013,6,1),115.577459436174,null],
[new Date(2013,9,1),115.35540664573,null],
[new Date(2013,12,1),116.270918244719,null],
[new Date(2014,3,1),116.20378921357,null],
[new Date(2014,6,1),117.518607319139,null],
[new Date(2014,9,1),118.485639426945,null],
[new Date(2014,12,1),119.970377072598,null],
[new Date(2015,3,1),121.600678152923,null],
[new Date(2015,6,1),123.921622517658,null],
[new Date(2015,9,1),124.9690051559,null],
[new Date(2015,12,1),125.894586249473,null],
[new Date(2016,3,1),126.965210297956,null],
[new Date(2016,6,1),128.582925559416,null],
[new Date(2016,9,1),129.388783574838,null],
[new Date(2016,12,1),128.78718301053,null],
[new Date(2017,3,1),128.108606725452,null],
[new Date(2017,6,1),128.484182941712,null],
[new Date(2017,9,1),128.017983407686,null],
[new Date(2017,12,1),128.685371284217,null],
[new Date(2018,3,1),129.180754340653,null],
[new Date(2018,6,1),129.24959038065,null],
[new Date(2018,9,1),128.404495633947,null],
[new Date(2018,12,1),128.179365085231,null],
[new Date(2019,3,1),127.551738188457,null],
[new Date(2019,6,1),126.667492575814,null],
[new Date(2019,9,1),125.23560958242,null],
[new Date(2019,12,1),125.129303875025,null],
[new Date(2020,3,1),125.139486442844,null],
[new Date(2020,6,1),127.379315888699,null],
[new Date(2020,9,1),128.511685956824,null],
[new Date(2020,12,1),129.093591954767,null],
[new Date(2021,3,1),128.465558389638,null],
[new Date(2021,6,1),126.006187038947,null],
[new Date(2021,9,1),124.959071868349,null],
[new Date(2021,12,1),124.668882260472,null],
[new Date(2022,3,1),123.527841791114,null],
[new Date(2022,6,1),122.389801384113,null],
[new Date(2022,9,1),119.811275962896,null]
          
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