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


[new Date(1988,6,1),4.02741475285948, null, null, null],
[new Date(1988,9,1),3.24893082939098,null, null, null],
[new Date(1988,12,1),2.30850525673674,null, null, null],
[new Date(1989,3,1),1.73308674063599,null, null, null],
[new Date(1989,6,1),2.11778584928612,null, null, null],
[new Date(1989,9,1),2.81878293072008,null, null, null],
[new Date(1989,12,1),3.08212709434733,null, null, null],
[new Date(1990,3,1),3.1302284562574,null, null, null],
[new Date(1990,6,1),2.04958526543451,null, null, null],
[new Date(1990,9,1),0.700080344836576,null, null, null],
[new Date(1990,12,1),0.124766714506466,null, null, null],
[new Date(1991,3,1),-1.01226904831539,null, null, null],
[new Date(1991,6,1),-1.6593882966999,null, null, null],
[new Date(1991,9,1),-1.77727179050637,null, null, null],
[new Date(1991,12,1),-2.19263027484869,null, null, null],
[new Date(1992,3,1),-1.59904739916227,null, null, null],
[new Date(1992,6,1),-0.705645049762603,null, null, null],
[new Date(1992,9,1),0.0996359950211921,null, null, null],
[new Date(1992,12,1),1.52063469242872,null, null, null],
[new Date(1993,3,1),2.43557876889626,null, null, null],
[new Date(1993,6,1),3.10846298571871,null, null, null],
[new Date(1993,9,1),3.29699893164272,null, null, null],
[new Date(1993,12,1),2.95029122719771,null, null, null],
[new Date(1994,3,1),2.88386457624272,null, null, null],
[new Date(1994,6,1),2.9870043564584,null, null, null],
[new Date(1994,9,1),3.50439687361596,null, null, null],
[new Date(1994,12,1),3.87777868687587,null, null, null],
[new Date(1995,3,1),3.52145576734695,null, null, null],
[new Date(1995,6,1),2.68766596722621,null, null, null],
[new Date(1995,9,1),2.18956969973617,null, null, null],
[new Date(1995,12,1),1.5541830347618,null, null, null],
[new Date(1996,3,1),1.93034274668898,null, null, null],
[new Date(1996,6,1),2.6252995028791,null, null, null],
[new Date(1996,9,1),2.53897039673047,null, null, null],
[new Date(1996,12,1),2.96505095145891,null, null, null],
[new Date(1997,3,1),2.6137359110619,null, null, null],
[new Date(1997,6,1),2.84803536763028,null, null, null],
[new Date(1997,9,1),3.25475928705932,null, null, null],
[new Date(1997,12,1),3.55115824315819,null, null, null],
[new Date(1998,3,1),4.07392954450251,null, null, null],
[new Date(1998,6,1),3.53921714839831,null, null, null],
[new Date(1998,9,1),3.62824744938065,null, null, null],
[new Date(1998,12,1),3.61450427278302,null, null, null],
[new Date(1999,3,1),3.62529253247397,null, null, null],
[new Date(1999,6,1),3.93036896994711,null, null, null],
[new Date(1999,9,1),3.59489478996979,null, null, null],
[new Date(1999,12,1),3.27757698946625,null, null, null],
[new Date(2000,3,1),2.84727517117453,null, null, null],
[new Date(2000,6,1),2.75054519708156,null, null, null],
[new Date(2000,9,1),2.58071000385786,null, null, null],
[new Date(2000,12,1),1.83036997499302,null, null, null],
[new Date(2001,3,1),1.28948466285924,null, null, null],
[new Date(2001,6,1),0.630458733546356,null, null, null],
[new Date(2001,9,1),0.530755316233909,null, null, null],
[new Date(2001,12,1),1.31397787773445,null, null, null],
[new Date(2002,3,1),1.97478058034099,null, null, null],
[new Date(2002,6,1),2.82509863284901,null, null, null],
[new Date(2002,9,1),3.15816603433215,null, null, null],
[new Date(2002,12,1),2.9737683457071,null, null, null],
[new Date(2003,3,1),2.66067209370898,null, null, null],
[new Date(2003,6,1),1.80824098673851,null, null, null],
[new Date(2003,9,1),1.53816439644168,null, null, null],
[new Date(2003,12,1),1.63038350229289,null, null, null],
[new Date(2004,3,1),2.07919419797138,null, null, null],
[new Date(2004,6,1),2.94890185840546,null, null, null],
[new Date(2004,9,1),3.19482921857364,null, null, null],
[new Date(2004,12,1),2.98634478593093,null, null, null],
[new Date(2005,3,1),2.53272393039981,null, null, null],
[new Date(2005,6,1),1.95562053417708,null, null, null],
[new Date(2005,9,1),1.69833948557027,null, null, null],
[new Date(2005,12,1),1.68022382688407,null, null, null],
[new Date(2006,3,1),1.5478051728539,null, null, null],
[new Date(2006,6,1),1.41622948282525,null, null, null],
[new Date(2006,9,1),1.20963536562556,null, null, null],
[new Date(2006,12,1),1.1322415185653,null, null, null],
[new Date(2007,3,1),1.47348625561495,null, null, null],
[new Date(2007,6,1),1.96668748040394,null, null, null],
[new Date(2007,9,1),2.39778278359217,null, null, null],
[new Date(2007,12,1),2.4957251243721,null, null, null],
[new Date(2008,3,1),2.13851045074252,null, null, null],
[new Date(2008,6,1),1.60123128252165,null, null, null],
[new Date(2008,9,1),1.04789790532323,null, null, null],
[new Date(2008,12,1),0.472048369347982,null, null, null],
[new Date(2009,3,1),0.0710576746410087,null, null, null],
[new Date(2009,6,1),-0.142470566564786,null, null, null],
[new Date(2009,9,1),-0.333902401040117,null, null, null],
[new Date(2009,12,1),0.0602142638125865,null, null, null],
[new Date(2010,3,1),0.336607106542754,null, null, null],
[new Date(2010,6,1),0.491825094117729,null, null, null],
[new Date(2010,9,1),0.865099170373124,null, null, null],
[new Date(2010,12,1),0.944503938180719,null, null, null],
[new Date(2011,3,1),0.922769659985186,null, null, null],
[new Date(2011,6,1),1.04925615090909,null, null, null],
[new Date(2011,9,1),1.17122955074557,null, null, null],
[new Date(2011,12,1),1.24950499338288,null, null, null],
[new Date(2012,3,1),1.8191749764551,null, null, null],
[new Date(2012,6,1),2.11941421998932,null, null, null],
[new Date(2012,9,1),2.12748197906547,null, null, null],
[new Date(2012,12,1),1.95828292749442,null, null, null],
[new Date(2013,3,1),1.37413597771338,null, null, null],
[new Date(2013,6,1),0.834584439666026,null, null, null],
[new Date(2013,9,1),0.540917534464997,null, null, null],
[new Date(2013,12,1),0.512411209782099,null, null, null],
[new Date(2014,3,1),0.692657255926885,null, null, null],
[new Date(2014,6,1),1.01492732027435,null, null, null],
[new Date(2014,9,1),1.15681358622532,null, null, null],
[new Date(2014,12,1),1.08540337305514,null, null, null],
[new Date(2015,3,1),0.976245318985314,null, null, null],
[new Date(2015,6,1),0.732445968649463,null, null, null],
[new Date(2015,9,1),0.713668571431677,null, null, null],
[new Date(2015,12,1),0.853305876548397,null, null, null],
[new Date(2016,3,1),0.911825860265779,null, null, null],
[new Date(2016,6,1),1.17795752663013,null, null, null],
[new Date(2016,9,1),1.04923792844277,null, null, null],
[new Date(2016,12,1),1.025071365384,null, null, null],
[new Date(2017,3,1),0.851917543914504,null, null, null],
[new Date(2017,6,1),0.591519703922913,null, null, null],
[new Date(2017,9,1),0.813489522356608,null, null, null],
[new Date(2017,12,1),0.830252384007283,null, null, null],
[new Date(2018,3,1),1.08594137176558,null, null, null],
[new Date(2018,6,1),1.38018400291738,null, null, null],
[new Date(2018,9,1),1.28254558198511,null, null, null],
[new Date(2018,12,1),1.22244387117893,null, null, null],
[new Date(2019,3,1),0.957665078175449,null, null, null],
[new Date(2019,6,1),0.618362100900158,null, null, null],
[new Date(2019,9,1),0.433949788840198,null, null, null],
[new Date(2019,12,1),0.36237629243437,null, null, null],
[new Date(2020,3,1),0.300535628825497,null, null, null],
[new Date(2020,6,1),-1.49053867225496,null, null, null],
[new Date(2020,9,1),-2.44383071658279,  null,   null, null],
[new Date(1988,3,1),    null,           2.54,   null, null],
[new Date(2025,3,16),   null,           0.484,  null, null],
[new Date(2030,3,1),    null,           0.484,  null, null],
[new Date(2037,9,20),   null,           1.0,    null, null],
[new Date(1995,12,1),   null,           null ,  null,  1.554],
[new Date(2009,9,1),    null,           null ,  null,  -0.334],
[new Date(1999,6,1),    null,           null,   3.93,  null],
[new Date(2018,6,1),    null,           null,   1.38,  null]
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
if($_GET['primary_folder'] == 'slideshow'){echo "lineWidth:13";}
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
              min:-1
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

