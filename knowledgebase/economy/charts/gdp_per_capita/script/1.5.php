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

[new Date(1986,6,1),2.47311012582231,null,null],
[new Date(1986,9,1),1.13799012153979,null,null],
[new Date(1986,12,1),0.571647540416759,null,null],
[new Date(1987,3,1),0.271856374753215,null,null],
[new Date(1987,6,1),1.01074424095638,null,null],
[new Date(1987,9,1),2.36769227495288,null,null],
[new Date(1987,12,1),3.38098490686935,null,null],
[new Date(1988,3,1),4.10098233579363,null,null],
[new Date(1988,6,1),4.042067176216,null,null],
[new Date(1988,9,1),3.25449907277302,null,null],
[new Date(1988,12,1),2.31229126511605,null,null],
[new Date(1989,3,1),1.74005114050141,null,null],
[new Date(1989,6,1),2.13215430814728,null,null],
[new Date(1989,9,1),2.8398503966148,null,null],
[new Date(1989,12,1),3.10087912268019,null,null],
[new Date(1990,3,1),3.14424320406631,null,null],
[new Date(1990,6,1),2.05424177905829,null,null],
[new Date(1990,9,1),0.702721632455944,null,null],
[new Date(1990,12,1),0.129650679711671,null,null],
[new Date(1991,3,1),-1.00235356581124,null,null],
[new Date(1991,6,1),-1.64436464407181,null,null],
[new Date(1991,9,1),-1.76524698316237,null,null],
[new Date(1991,12,1),-2.1906428978082,null,null],
[new Date(1992,3,1),-1.59711453389583,null,null],
[new Date(1992,6,1),-0.689862372533112,null,null],
[new Date(1992,9,1),0.114091243880653,null,null],
[new Date(1992,12,1),1.55181543366397,null,null],
[new Date(1993,3,1),2.46083038204504,null,null],
[new Date(1993,6,1),3.12593237895523,null,null],
[new Date(1993,9,1),3.33349827597341,null,null],
[new Date(1993,12,1),2.98081628534968,null,null],
[new Date(1994,3,1),2.91035704862227,null,null],
[new Date(1994,6,1),2.98372124892568,null,null],
[new Date(1994,9,1),3.45972647588135,null,null],
[new Date(1994,12,1),3.82779562262507,null,null],
[new Date(1995,3,1),3.49820189001198,null,null],
[new Date(1995,6,1),2.73668733986284,null,null],
[new Date(1995,9,1),2.29921006256556,null,null],
[new Date(1995,12,1),1.67121463942438,null,null],
[new Date(1996,3,1),2.00772896684225,null,null],
[new Date(1996,6,1),2.60349903044055,null,null],
[new Date(1996,9,1),2.43655968024448,null,null],
[new Date(1996,12,1),2.82861674273925,null,null],
[new Date(1997,3,1),2.48909299854107,null,null],
[new Date(1997,6,1),2.79501316458294,null,null],
[new Date(1997,9,1),3.26360345965265,null,null],
[new Date(1997,12,1),3.60726782602517,null,null],
[new Date(1998,3,1),4.14463338491634,null,null],
[new Date(1998,6,1),3.57552150890352,null,null],
[new Date(1998,9,1),3.62520671854818,null,null],
[new Date(1998,12,1),3.55541890316281,null,null],
[new Date(1999,3,1),3.52273626271086,null,null],
[new Date(1999,6,1),3.81436647281127,null,null],
[new Date(1999,9,1),3.47746464133546,null,null],
[new Date(1999,12,1),3.17737396400392,null,null],
[new Date(2000,3,1),2.78748250060344,null,null],
[new Date(2000,6,1),2.71894718792766,null,null],
[new Date(2000,9,1),2.59999275323716,null,null],
[new Date(2000,12,1),1.89760004311226,null,null],
[new Date(2001,3,1),1.37838542742829,null,null],
[new Date(2001,6,1),0.739690827719648,null,null],
[new Date(2001,9,1),0.604948460585541,null,null],
[new Date(2001,12,1),1.35524885387662,null,null],
[new Date(2002,3,1),1.98197269260465,null,null],
[new Date(2002,6,1),2.81728827844696,null,null],
[new Date(2002,9,1),3.16189435794058,null,null],
[new Date(2002,12,1),3.00131781782373,null,null],
[new Date(2003,3,1),2.74089922066788,null,null],
[new Date(2003,6,1),1.93227364842696,null,null],
[new Date(2003,9,1),1.73692852395862,null,null],
[new Date(2003,12,1),1.86669074963636,null,null],
[new Date(2004,3,1),2.29228535203666,null,null],
[new Date(2004,6,1),3.10828616922142,null,null],
[new Date(2004,9,1),3.26077933513531,null,null],
[new Date(2004,12,1),2.97539795378396,null,null],
[new Date(2005,3,1),2.49173052865053,null,null],
[new Date(2005,6,1),1.9057931213482,null,null],
[new Date(2005,9,1),1.66206904569989,null,null],
[new Date(2005,12,1),1.65196166955796,null,null],
[new Date(2006,3,1),1.49994496043794,null,null],
[new Date(2006,6,1),1.36312446655731,null,null],
[new Date(2006,9,1),1.12864870413606,null,null],
[new Date(2006,12,1),1.04442527948184,null,null],
[new Date(2007,3,1),1.40096252765769,null,null],
[new Date(2007,6,1),1.90142772677974,null,null],
[new Date(2007,9,1),2.35317780263097,null,null],
[new Date(2007,12,1),2.44507911808653,null,null],
[new Date(2008,3,1),2.06939916318533,null,null],
[new Date(2008,6,1),1.51339819493724,null,null],
[new Date(2008,9,1),0.918524923318595,null,null],
[new Date(2008,12,1),0.347979382569135,null,null],
[new Date(2009,3,1),-0.0290880170763842,null,null],
[new Date(2009,6,1),-0.207620816724584,null,null],
[new Date(2009,9,1),-0.313795133210249,null,null],
[new Date(2009,12,1),0.130831379814164,null,null],
[new Date(2010,3,1),0.452175561474261,null,null],
[new Date(2010,6,1),0.628826261600744,null,null],
[new Date(2010,9,1),0.982315371395267,null,null],
[new Date(2010,12,1),0.997272955218592,null,null],
[new Date(2011,3,1),0.914169964348348,null,null],
[new Date(2011,6,1),0.978744500693677,null,null],
[new Date(2011,9,1),1.05755408595522,null,null],
[new Date(2011,12,1),1.16765656997095,null,null],
[new Date(2012,3,1),1.78117679175625,null,null],
[new Date(2012,6,1),2.10360308680292,null,null],
[new Date(2012,9,1),2.11618676942041,null,null],
[new Date(2012,12,1),1.9314081956074,null,null],
[new Date(2013,3,1),1.34539052383737,null,null],
[new Date(2013,6,1),0.828664537489639,null,null],
[new Date(2013,9,1),0.571896145721658,null,null],
[new Date(2013,12,1),0.581069224182446,null,null],
[new Date(2014,3,1),0.750459213677898,null,null],
[new Date(2014,6,1),1.06009264780323,null,null],
[new Date(2014,9,1),1.17351763575027,null,null],
[new Date(2014,12,1),1.07406247929218,null,null],
[new Date(2015,3,1),0.952234322598361,null,null],
[new Date(2015,6,1),0.693104732409084,null,null],
[new Date(2015,9,1),0.674371432149597,null,null],
[new Date(2015,12,1),0.814507371083187,null,null],
[new Date(2016,3,1),0.867816459658509,null,null],
[new Date(2016,6,1),1.13852824885934,null,null],
[new Date(2016,9,1),1.02110386064328,null,null],
[new Date(2016,12,1),1.00210901822289,null,null],
[new Date(2017,3,1),0.846487423496092,null,null],
[new Date(2017,6,1),0.604889349171134,null,null],
[new Date(2017,9,1),0.827315750649837,null,null],
[new Date(2017,12,1),0.832029077958486,null,null],
[new Date(2018,3,1),1.07805668808844,null,null],
[new Date(2018,6,1),1.34849992332868,null,null],
[new Date(2018,9,1),1.25212640491951,null,null],
[new Date(2018,12,1),1.22283144828204,null,null],
[new Date(2019,3,1),0.986795983715586,null,null],
[new Date(2019,6,1),0.664994785283447,null,null],
[new Date(2019,9,1),0.494858874788448,null,null],
[new Date(2019,12,1),0.441587801721879,null,null],
[new Date(2020,3,1),0.372597950479891,null,null],
[new Date(2020,6,1),-1.27851513063857,null,null],
[new Date(2020,9,1),-2.00294809432603,null,null],
[new Date(2020,12,1),-2.24810931213372,null,null],
[new Date(2021,3,1),-1.71956850076173,null,null],
[new Date(2021,6,1),2.10572171345806,null,null],
[new Date(2021,9,1),3.75251451155277,null,null],
[new Date(2021,12,1),4.69130331095204,null,null],
[new Date(2022,3,1),4.43750691647918,null,null],
[new Date(2022,6,1),2.52241165033986,null,null],
[new Date(1995,12,1), null ,null, 1.67],
[new Date(2009,9,1), null ,null, -0.348],
[new Date(1999,6,1),null,3.795, null],
[new Date(2018,6,1),null,1.303, null]


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
            ticks: [ -3, -2, -1, 0, 1, 2, 3, 4, 5],
            viewWindowMode:'explicit',
            viewWindow: {
              max:5,
              min:-3
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