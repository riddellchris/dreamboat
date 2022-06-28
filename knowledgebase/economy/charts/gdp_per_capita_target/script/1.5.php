<script type='text/javascript'>
        google.charts.load('current',   {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart_gdp_per_capita_percentage_change_target_script);

      function drawChart_gdp_per_capita_percentage_change_target_script() {

        var data = new google.visualization.DataTable();
        data.addColumn('date',   'Quarter');
        data.addColumn('number',   'GDP per Capita Annual Change (%)');
        data.addColumn('number',   'Target line');
        data.addColumn('number',   'Higher water marks');
        data.addColumn('number',   'Lower water marks');    
        data.addRows([
<?php
/**/
?>


[new Date(1988,6,1),4.02683481398506,null,null,null],
[new Date(1988,9,1),3.24828285301427,null,null,null],
[new Date(1988,12,1),2.31437079225433,null,null,null],
[new Date(1989,3,1),1.74115985871301,null,null,null],
[new Date(1989,6,1),2.12339614291629,null,null,null],
[new Date(1989,9,1),2.83262198105572,null,null,null],
[new Date(1989,12,1),3.09201216096991,null,null,null],
[new Date(1990,3,1),3.13349578624973,null,null,null],
[new Date(1990,6,1),2.05249567301599,null,null,null],
[new Date(1990,9,1),0.692777041092234,null,null,null],
[new Date(1990,12,1),0.112194319009417,null,null,null],
[new Date(1991,3,1),-1.01359333442766,null,null,null],
[new Date(1991,6,1),-1.65748877515996,null,null,null],
[new Date(1991,9,1),-1.77330186150972,null,null,null],
[new Date(1991,12,1),-2.1890547485962,null,null,null],
[new Date(1992,3,1),-1.60389542830537,null,null,null],
[new Date(1992,6,1),-0.703609399135316,null,null,null],
[new Date(1992,9,1),0.0973897070023306,null,null,null],
[new Date(1992,12,1),1.52337034491696,null,null,null],
[new Date(1993,3,1),2.44143031665995,null,null,null],
[new Date(1993,6,1),3.11365624486681,null,null,null],
[new Date(1993,9,1),3.32552713246027,null,null,null],
[new Date(1993,12,1),2.98606027440867,null,null,null],
[new Date(1994,3,1),2.91160246371806,null,null,null],
[new Date(1994,6,1),2.98511916650357,null,null,null],
[new Date(1994,9,1),3.46042408335239,null,null,null],
[new Date(1994,12,1),3.82338859635898,null,null,null],
[new Date(1995,3,1),3.50024388898098,null,null,null],
[new Date(1995,6,1),2.73622770722919,null,null,null],
[new Date(1995,9,1),2.29802628906755,null,null,null],
[new Date(1995,12,1),1.67043151806733,null,null,null],
[new Date(1996,3,1),1.99450352403695,null,null,null],
[new Date(1996,6,1),2.60141992474205,null,null,null],
[new Date(1996,9,1),2.4393688880158,null,null,null],
[new Date(1996,12,1),2.83617578023438,null,null,null],
[new Date(1997,3,1),2.50666934145992,null,null,null],
[new Date(1997,6,1),2.79020899339204,null,null,null],
[new Date(1997,9,1),3.25165787388928,null,null,null],
[new Date(1997,12,1),3.58811682259204,null,null,null],
[new Date(1998,3,1),4.12795902775636,null,null,null],
[new Date(1998,6,1),3.5762716148635,null,null,null],
[new Date(1998,9,1),3.62603641190947,null,null,null],
[new Date(1998,12,1),3.55525492338546,null,null,null],
[new Date(1999,3,1),3.51100382248451,null,null,null],
[new Date(1999,6,1),3.79484020525287,null,null,null],
[new Date(1999,9,1),3.46038728145255,null,null,null],
[new Date(1999,12,1),3.16962031018048,null,null,null],
[new Date(2000,3,1),2.78795823250009,null,null,null],
[new Date(2000,6,1),2.73007641140268,null,null,null],
[new Date(2000,9,1),2.61204405911257,null,null,null],
[new Date(2000,12,1),1.9050422526602,null,null,null],
[new Date(2001,3,1),1.38594193397882,null,null,null],
[new Date(2001,6,1),0.736703203427954,null,null,null],
[new Date(2001,9,1),0.610732363147502,null,null,null],
[new Date(2001,12,1),1.36557875579907,null,null,null],
[new Date(2002,3,1),1.99699304040073,null,null,null],
[new Date(2002,6,1),2.83806944685396,null,null,null],
[new Date(2002,9,1),3.17123102163999,null,null,null],
[new Date(2002,12,1),3.00584399902336,null,null,null],
[new Date(2003,3,1),2.73926734087042,null,null,null],
[new Date(2003,6,1),1.93120813908962,null,null,null],
[new Date(2003,9,1),1.73858796334167,null,null,null],
[new Date(2003,12,1),1.86424061642876,null,null,null],
[new Date(2004,3,1),2.28700206354368,null,null,null],
[new Date(2004,6,1),3.0971396961652,null,null,null],
[new Date(2004,9,1),3.24886080598226,null,null,null],
[new Date(2004,12,1),2.97299196620102,null,null,null],
[new Date(2005,3,1),2.49344863550757,null,null,null],
[new Date(2005,6,1),1.91229906292593,null,null,null],
[new Date(2005,9,1),1.66840698152878,null,null,null],
[new Date(2005,12,1),1.64944920097298,null,null,null],
[new Date(2006,3,1),1.49351043294442,null,null,null],
[new Date(2006,6,1),1.34963880043759,null,null,null],
[new Date(2006,9,1),1.11199427712152,null,null,null],
[new Date(2006,12,1),1.03094797881013,null,null,null],
[new Date(2007,3,1),1.39089157095234,null,null,null],
[new Date(2007,6,1),1.89209623038058,null,null,null],
[new Date(2007,9,1),2.34889065689478,null,null,null],
[new Date(2007,12,1),2.43890895627822,null,null,null],
[new Date(2008,3,1),2.06333547946485,null,null,null],
[new Date(2008,6,1),1.52196953655243,null,null,null],
[new Date(2008,9,1),0.936701355324221,null,null,null],
[new Date(2008,12,1),0.365594388013746,null,null,null],
[new Date(2009,3,1),-0.0228322475958491,null,null,null],
[new Date(2009,6,1),-0.211201149548294,null,null,null],
[new Date(2009,9,1),-0.346378771987974,null,null,null],
[new Date(2009,12,1),0.0951480247628309,null,null,null],
[new Date(2010,3,1),0.422832945842612,null,null,null],
[new Date(2010,6,1),0.595125431294634,null,null,null],
[new Date(2010,9,1),0.978570560985462,null,null,null],
[new Date(2010,12,1),1.02032789362201,null,null,null],
[new Date(2011,3,1),0.964742280160929,null,null,null],
[new Date(2011,6,1),1.05614870910458,null,null,null],
[new Date(2011,9,1),1.13668242862457,null,null,null],
[new Date(2011,12,1),1.23140145379311,null,null,null],
[new Date(2012,3,1),1.82075221662279,null,null,null],
[new Date(2012,6,1),2.11862770521029,null,null,null],
[new Date(2012,9,1),2.12353423278811,null,null,null],
[new Date(2012,12,1),1.93926018706848,null,null,null],
[new Date(2013,3,1),1.35613435316164,null,null,null],
[new Date(2013,6,1),0.849697180852527,null,null,null],
[new Date(2013,9,1),0.584826917961341,null,null,null],
[new Date(2013,12,1),0.584479442897799,null,null,null],
[new Date(2014,3,1),0.75363011911897,null,null,null],
[new Date(2014,6,1),1.04424367122101,null,null,null],
[new Date(2014,9,1),1.16392992762662,null,null,null],
[new Date(2014,12,1),1.07032446972449,null,null,null],
[new Date(2015,3,1),0.948969395036942,null,null,null],
[new Date(2015,6,1),0.712351524422744,null,null,null],
[new Date(2015,9,1),0.695704522186285,null,null,null],
[new Date(2015,12,1),0.839421963186459,null,null,null],
[new Date(2016,3,1),0.890079712288868,null,null,null],
[new Date(2016,6,1),1.14934159584017,null,null,null],
[new Date(2016,9,1),1.03258456554769,null,null,null],
[new Date(2016,12,1),1.01549828634799,null,null,null],
[new Date(2017,3,1),0.853470969502938,null,null,null],
[new Date(2017,6,1),0.618407061062786,null,null,null],
[new Date(2017,9,1),0.835377653531391,null,null,null],
[new Date(2017,12,1),0.824077041788097,null,null,null],
[new Date(2018,3,1),1.06678588358189,null,null,null],
[new Date(2018,6,1),1.33655799409752,null,null,null],
[new Date(2018,9,1),1.2315770110676,null,null,null],
[new Date(2018,12,1),1.18629674169787,null,null,null],
[new Date(2019,3,1),0.932112433562903,null,null,null],
[new Date(2019,6,1),0.60770911807262,null,null,null],
[new Date(2019,9,1),0.48005606307627,null,null,null],
[new Date(2019,12,1),0.477032643581348,null,null,null],
[new Date(2020,3,1),0.465870094089432,null,null,null],
[new Date(2020,6,1),-1.23194583426803,null,null,null],
[new Date(2020,9,1),-2.13755928014596,null,null,null],
[new Date(2020,12,1),-2.54831329176629,null,null,null],
[new Date(2021,3,1),-2.23972858440882,null,null,null],
[new Date(2021,6,1),1.47955490357355,null,null,null],
[new Date(2021,9,1),3.25270418448468,null,null,null],
[new Date(2021,12,1),4.29417017720714,null,null,null],

[new Date(1988,3,1),    null,           2.54,   null, null],
[new Date(2025,3,16),   null,           0.484,  null, null],
[new Date(2030,3,1),    null,           0.484,  null, null],
[new Date(2037,9,20),   null,           1.0,    null, null],
[new Date(1995,12,1),   null,           null ,  null,  1.67],
[new Date(2009,9,1),    null,           null ,  null,  -0.348],
[new Date(1999,6,1),    null,           null,   3.795,  null],
[new Date(2018,6,1),    null,           null,   1.303,  null]
        ]);




        var options = {
          title: 'GDP per Capita Annual % Change (Source: ABS)', 
              titleTextStyle: {
            fontName: 'Barlow Semi Condensed', // i.e. 'Times New Roman'
            fontSize: 20 // 12, 18 whatever you want (don't specify px)
            
        },
        backgroundColor: { fill:'transparent' },
		'chartArea': {'width': '89%', 'height': '90%'},
          legend: 'none', 
          series: {

            1: { color: 'red', 
<?php
if(!isset($_SESSION)){session_start();}
if($_GET['primary_folder'] == 'slideshows'){echo "lineWidth:13";}
else{ echo "lineWidth:10";}
?>            
            
            },
            2: { color: '#b5b5b5', lineWidth: 3, lineDashStyle: [10, 2] }     ,                
            3: { color: '#b5b5b5', lineWidth: 3, lineDashStyle: [10, 2] }
          },


          hAxis: {
            format: 'yy', 
            gridlines: {color: 'none'}, 
            textStyle : {
                fontName: 'Barlow Semi Condensed',
                bold: true
            },
            ticks: [
        new Date(2037,1,1),       
        new Date(2036,1,1), 
        new Date(2035,1,1),
        new Date(2034,1,1), 
        new Date(2033,1,1),
        new Date(2032,1,1),       
        new Date(2031,1,1), 
        new Date(2030,1,1),
        new Date(2029,1,1), 
        new Date(2028,1,1),
        new Date(2027,1,1),       
        new Date(2026,1,1), 
        new Date(2025,1,1),
        new Date(2024,1,1), 
        new Date(2023,1,1),
        new Date(2022,1,1),             
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
            gridlines: {color: 'none'}, 
            minValue: 0,
            ticks: [ -3, -2, -1, 0, 1, 2, 3, 4],
            viewWindowMode:'explicit',
            viewWindow: {
              max:4.2,
              min:-3
            },
            textStyle : {
                fontName: 'Barlow Semi Condensed',
                bold: true
            }
          }

      


        };
        
        var chart = new google.visualization.LineChart(document.getElementById('economic_background_gdp_per_capita_percentage_change_target'));
        chart.draw(data,  options);

        var chart = new google.visualization.LineChart(document.getElementById('economic_background_gdp_per_capita_percentage_change_print'));
        chart.draw(data,  options);
      }
      
     $(window).resize(function(){drawChart_gdp_per_capita_percentage_change_target_script();});	
      </script>

