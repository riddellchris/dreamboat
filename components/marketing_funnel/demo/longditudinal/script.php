<script type='text/javascript'>
        google.charts.load('current',   {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart_gdp_per_capita_percentage_change_script);

      function drawChart_gdp_per_capita_percentage_change_script() {

        var data = new google.visualization.DataTable();
        data.addColumn('date',   'Quarter');
        data.addColumn('number',   'Conversion rate');
        data.addColumn('number',   'Qualified Leads');
        data.addColumn('number',   'New Enrolments');        
        data.addRows([
<?php
/**/
?>


[new Date(2009,3,1),-0.0275861590617212,null,null],
[new Date(2009,6,1),-0.211201149548294,null,null],
[new Date(2009,9,1),-0.347816339499299,null,null],
[new Date(2009,12,1),0.0955317473072282,null,null],
[new Date(2010,3,1),0.429850533281513,null,null],
[new Date(2010,6,1),0.595125431294634,null,null],
[new Date(2010,9,1),0.977880425417598,null,null],
[new Date(2010,12,1),1.01885074690454,null,null],
[new Date(2011,3,1),0.958699022711172,null,null],
[new Date(2011,6,1),1.05614870910458,null,null],
[new Date(2011,9,1),1.13852708983262,null,null],
[new Date(2011,12,1),1.23179798407584,null,null],
[new Date(2012,3,1),1.82285147498931,null,null],
[new Date(2012,6,1),2.11862770521029,null,null],
[new Date(2012,9,1),2.12314856064361,null,null],
[new Date(2012,12,1),1.94072217713974,null,null],
[new Date(2013,3,1),1.35678300508046,null,null],
[new Date(2013,6,1),0.849638282229609,null,null],
[new Date(2013,9,1),0.585115076947129,null,null],
[new Date(2013,12,1),0.583007010467339,null,null],
[new Date(2014,3,1),0.752224614332375,null,null],
[new Date(2014,6,1),1.04430268349818,null,null],
[new Date(2014,9,1),1.1634597700192,null,null],
[new Date(2014,12,1),1.07124802275817,null,null],
[new Date(2015,3,1),0.949039555228532,null,null],
[new Date(2015,6,1),0.712239265700326,null,null],
[new Date(2015,9,1),0.696597034102014,null,null],
[new Date(2015,12,1),0.840078908285742,null,null],
[new Date(2016,3,1),0.891305198936348,null,null],
[new Date(2016,6,1),1.14939947308144,null,null],
[new Date(2016,9,1),1.02179334241953,null,null],
[new Date(2016,12,1),0.996863740465981,null,null],
[new Date(2017,3,1),0.828359255891216,null,null],
[new Date(2017,6,1),0.587023016478052,null,null],
[new Date(2017,9,1),0.805740585471126,null,null],
[new Date(2017,12,1),0.791565294230337,null,null],
[new Date(2018,3,1),1.03124731983395,null,null],
[new Date(2018,6,1),1.30295676052,null,null],
[new Date(2018,9,1),1.19720759771154,null,null],
[new Date(2018,12,1),1.15176398369138,null,null],
[new Date(2019,3,1),0.8973128042955,null,null],
[new Date(2019,6,1),0.571380483610048,null,null],
[new Date(2019,9,1),0.443085534780738,200,null],
[new Date(2019,12,1),0.439440137987128,200,null],
[new Date(2020,3,1),0.426521872486468,200,null],
[new Date(2020,6,1),-1.27887805111128,200,null],
[new Date(2020,9,1),-2.20600241907276,200,300],
[new Date(2020,12,1),-2.63858753440666,200,400],
[new Date(2021,3,1),52,200,420],
[new Date(2021,6,1),50,200,400]


        ]);




        var options = {
          title: 'Critical Marketing Metrics (Source: Internal/Hubspot)', 
              titleTextStyle: {
                  fontName: 'Barlow Semi Condensed', // i.e. 'Times New Roman'
                  fontSize: 30 // 12, 18 whatever you want (don't specify px)
              },
        backgroundColor: { fill:'transparent' },

                    titleFontSize: 15,
		'chartArea': {'width': '89%', 'height': '90%'},
          legend: 'none', 

   // Draw a trendline for data series 0.,
          hAxis: {
            format: 'yy', 
            gridlines: {color: 'none'}, 
            
            textStyle : {
                fontName: 'Barlow Semi Condensed',
                bold: true
            },
            ticks: [

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
                new Date(2009,1,1)

                ]
            		
            		
            		
            		
          }, 
          vAxes: {
            0:{
              gridlines: {color: 'none'}, 
              textStyle : {
                  fontName: 'Barlow Semi Condensed',
                  bold: true
              },
              minValue: 0,

              title: 'Numbers of Students',
            },
            1:{
              gridlines: {color: 'none'}, 
              textStyle : {
                  fontName: 'Barlow Semi Condensed',
                  bold: true
              },
              minValue: 0,
              title: 'Conversion Ratio',

            }


          },

                    series: {          
                      0: { color: 'red', lineWidth: 5,  targetAxisIndex:1 }     , 
                       1: { color: 'green', lineWidth: 3, lineDashStyle: [10, 2], targetAxisIndex:0 }     ,                
                      2: { color: 'orange', lineWidth: 3, lineDashStyle: [10, 2], targetAxisIndex:0 }
                    
                    }
        };
        
        var chart = new google.visualization.LineChart(document.getElementById('economic_background_gdp_per_capita_percentage_change'));
        chart.draw(data,  options);

        var chart = new google.visualization.LineChart(document.getElementById('economic_background_gdp_per_capita_percentage_change_print'));
        chart.draw(data,  options);
      }
      
     $(window).resize(function(){drawChart_gdp_per_capita_percentage_change_script();});	
      </script>