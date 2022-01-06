<script type='text/javascript'>
        google.charts.load('current',   {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart_gdp_per_capita_percentage_change_script);

      function drawChart_gdp_per_capita_percentage_change_script() {

        var data = new google.visualization.DataTable();
        data.addColumn('date',   'Quarter');
        data.addColumn('number',   'GDP per Capita Annual Change (%)');
        data.addColumn('number',   'Higher water marks');
        data.addColumn('number',   'Lower water marks');        
        data.addRows([
<?php
/**/
?>

[new Date(1988,6,1),4.02683481398506,null],
[new Date(1988,9,1),3.24841433342921,null],
[new Date(1988,12,1),2.31450014447252,null],
[new Date(1989,3,1),1.74128737227683,null],
[new Date(1989,6,1),2.12339614291629,null],
[new Date(1989,9,1),2.83236564422197,null],
[new Date(1989,12,1),3.09175726285744,null],
[new Date(1990,3,1),3.13324297721772,null],
[new Date(1990,6,1),2.05249567301599,null],
[new Date(1990,9,1),0.692899818146324,null],
[new Date(1990,12,1),0.112315281802258,null],
[new Date(1991,3,1),-1.01347475161894,null],
[new Date(1991,6,1),-1.65748877515996,null],
[new Date(1991,9,1),-1.77330186150972,null],
[new Date(1991,12,1),-2.1890547485962,null],
[new Date(1992,3,1),-1.60389542830537,null],
[new Date(1992,6,1),-0.703609399135316,null],
[new Date(1992,9,1),0.0973897070023306,null],
[new Date(1992,12,1),1.52337034491696,null],
[new Date(1993,3,1),2.44143031665995,null],
[new Date(1993,6,1),3.11365624486681,null],
[new Date(1993,9,1),3.32552713246027,null],
[new Date(1993,12,1),2.98606027440867,null],
[new Date(1994,3,1),2.91160246371806,null],
[new Date(1994,6,1),2.98511916650357,null],
[new Date(1994,9,1),3.46042408335239,null],
[new Date(1994,12,1),3.82338859635898,null],
[new Date(1995,3,1),3.50024388898098,null],
[new Date(1995,6,1),2.73622770722919,null],
[new Date(1995,9,1),2.29802628906755,null],
[new Date(1995,12,1),1.67043151806733,null],
[new Date(1996,3,1),1.99450352403695,null],
[new Date(1996,6,1),2.60141992474205,null],
[new Date(1996,9,1),2.4393688880158,null],
[new Date(1996,12,1),2.83617578023438,null],
[new Date(1997,3,1),2.50666934145992,null],
[new Date(1997,6,1),2.79031013768002,null],
[new Date(1997,9,1),3.25175830816485,null],
[new Date(1997,12,1),3.58821630172334,null],
[new Date(1998,3,1),4.12815646809036,null],
[new Date(1998,6,1),3.57626711967877,null],
[new Date(1998,9,1),3.6260318958615,null],
[new Date(1998,12,1),3.55515547590805,null],
[new Date(1999,3,1),3.51071374650836,null],
[new Date(1999,6,1),3.79474257718707,null],
[new Date(1999,9,1),3.46029115306572,null],
[new Date(1999,12,1),3.16980177128512,null],
[new Date(2000,3,1),2.78840975275956,null],
[new Date(2000,6,1),2.73016502544014,null],
[new Date(2000,9,1),2.61151729692997,null],
[new Date(2000,12,1),1.9058191787688,null],
[new Date(2001,3,1),1.38593277674323,null],
[new Date(2001,6,1),0.736445991809625,null],
[new Date(2001,9,1),0.611079887722311,null],
[new Date(2001,12,1),1.36361704513869,null],
[new Date(2002,3,1),1.99622710293965,null],
[new Date(2002,6,1),2.83824331723229,null],
[new Date(2002,9,1),3.17123823566462,null],
[new Date(2002,12,1),3.00629588720062,null],
[new Date(2003,3,1),2.73968993691089,null],
[new Date(2003,6,1),1.93112779529499,null],
[new Date(2003,9,1),1.737637865459,null],
[new Date(2003,12,1),1.86409953572693,null],
[new Date(2004,3,1),2.28747185290186,null],
[new Date(2004,6,1),3.09722095902963,null],
[new Date(2004,9,1),3.2491402874764,null],
[new Date(2004,12,1),2.97340318347558,null],
[new Date(2005,3,1),2.49350754089332,null],
[new Date(2005,6,1),1.91229906292593,null],
[new Date(2005,9,1),1.66769133941444,null],
[new Date(2005,12,1),1.64887083032098,null],
[new Date(2006,3,1),1.49291312009721,null],
[new Date(2006,6,1),1.34963880043759,null],
[new Date(2006,9,1),1.11461495303138,null],
[new Date(2006,12,1),1.03466733329246,null],
[new Date(2007,3,1),1.39174066850022,null],
[new Date(2007,6,1),1.89209623038058,null],
[new Date(2007,9,1),2.34508651568063,null],
[new Date(2007,12,1),2.43416058728096,null],
[new Date(2008,3,1),2.06446557241474,null],
[new Date(2008,6,1),1.52196953655243,null],
[new Date(2008,9,1),0.940245450864047,null],
[new Date(2008,12,1),0.367619567211984,null],
[new Date(2009,3,1),-0.0275861590617212,null],
[new Date(2009,6,1),-0.211201149548294,null],
[new Date(2009,9,1),-0.347816339499299,null],
[new Date(2009,12,1),0.0955317473072282,null],
[new Date(2010,3,1),0.429850533281513,null],
[new Date(2010,6,1),0.595125431294634,null],
[new Date(2010,9,1),0.977880425417598,null],
[new Date(2010,12,1),1.01885074690454,null],
[new Date(2011,3,1),0.958699022711172,null],
[new Date(2011,6,1),1.05614870910458,null],
[new Date(2011,9,1),1.13852708983262,null],
[new Date(2011,12,1),1.23179798407584,null],
[new Date(2012,3,1),1.82285147498931,null],
[new Date(2012,6,1),2.11862770521029,null],
[new Date(2012,9,1),2.12314856064361,null],
[new Date(2012,12,1),1.94072217713974,null],
[new Date(2013,3,1),1.35678300508046,null],
[new Date(2013,6,1),0.849638282229609,null],
[new Date(2013,9,1),0.585115076947129,null],
[new Date(2013,12,1),0.583007010467339,null],
[new Date(2014,3,1),0.752224614332375,null],
[new Date(2014,6,1),1.04430268349818,null],
[new Date(2014,9,1),1.1634597700192,null],
[new Date(2014,12,1),1.07124802275817,null],
[new Date(2015,3,1),0.949039555228532,null],
[new Date(2015,6,1),0.712239265700326,null],
[new Date(2015,9,1),0.696597034102014,null],
[new Date(2015,12,1),0.840078908285742,null],
[new Date(2016,3,1),0.891305198936348,null],
[new Date(2016,6,1),1.14939947308144,null],
[new Date(2016,9,1),1.02179334241953,null],
[new Date(2016,12,1),0.996863740465981,null],
[new Date(2017,3,1),0.828359255891216,null],
[new Date(2017,6,1),0.587023016478052,null],
[new Date(2017,9,1),0.805740585471126,null],
[new Date(2017,12,1),0.791565294230337,null],
[new Date(2018,3,1),1.03124731983395,null],
[new Date(2018,6,1),1.30295676052,null],
[new Date(2018,9,1),1.19720759771154,null],
[new Date(2018,12,1),1.15176398369138,null],
[new Date(2019,3,1),0.8973128042955,null],
[new Date(2019,6,1),0.571380483610048,null],
[new Date(2019,9,1),0.443085534780738,null],
[new Date(2019,12,1),0.439440137987128,null],
[new Date(2020,3,1),0.426521872486468,null],
[new Date(2020,6,1),-1.27887805111128,null],
[new Date(2020,9,1),-2.20600241907276,null],
[new Date(2020,12,1),-2.63858753440666,null],
[new Date(2021,3,1),-2.34474698020058,null],
[new Date(2021,6,1),1.33049742845482,null],
[new Date(1995,12,1), null ,null, 1.554],
[new Date(2009,9,1), null ,null, -0.334],
[new Date(1999,6,1),null,3.93, null],
[new Date(2018,6,1),null,1.38, null]


        ]);




        var options = {
          title: 'GDP per Capita Annual % Change (Source: ABS)', 
              titleTextStyle: {
                  fontName: 'Barlow Semi Condensed', // i.e. 'Times New Roman'
                  fontSize: 20 // 12, 18 whatever you want (don't specify px)
              },
        backgroundColor: { fill:'transparent' },

                    titleFontSize: 15,
		'chartArea': {'width': '89%', 'height': '90%'},
          legend: 'none', 

          trendlines: { 0: {   color: 'red',

<?php
if(!isset($_SESSION)){session_start();}
if($_GET['primary_folder'] == 'slideshows'){echo "lineWidth:13,";}
else{ echo "lineWidth:10,";}
?>

                 
                 		opacity: 1
                 } },    // Draw a trendline for data series 0.,
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
            textStyle : {
                fontName: 'Barlow Semi Condensed',
                bold: true
            },
            minValue: 0,
            ticks: [ -3, -2, -1, 0, 1, 2, 3, 4],
            viewWindowMode:'explicit',
            viewWindow: {
              max:4.2,
              min:-1
            }
          },

                    series: {          
                       1: { color: '#b5b5b5', lineWidth: 3, lineDashStyle: [10, 2] }     ,                
                      2: { color: '#b5b5b5', lineWidth: 3, lineDashStyle: [10, 2] }
                    
                    }
        };
        
        var chart = new google.visualization.LineChart(document.getElementById('economic_background_gdp_per_capita_percentage_change'));
        chart.draw(data,  options);

        var chart = new google.visualization.LineChart(document.getElementById('economic_background_gdp_per_capita_percentage_change_print'));
        chart.draw(data,  options);
      }
      
     $(window).resize(function(){drawChart_gdp_per_capita_percentage_change_script();});	
      </script>