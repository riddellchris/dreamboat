
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart_process_diagram_1);

      function drawChart_process_diagram_1() {
        var data = google.visualization.arrayToDataTable([
          [''   ,''   ,''  , ''],
          [0    ,0    ,0   , 0 ],
          [1000 ,1000 ,''  , '' ],
          [500  ,''   ,''  ,500  ],
          [175  ,''   ,''  ,700 ],
          [500  ,''   ,500 ,''   ],
          [100  ,''   ,500 ,''   ]


        ]);

        var options = {
          chartArea: {
            height: '100%',
            width: '100%'
          },
           vAxis: { gridlines: { count: 0 },
                    textPosition: 'none',
                    axisFontSize : 0 },
           hAxis: { gridlines: { count: 0 },
                    textPosition: 'none',
                    axisFontSize : 0 },

          title: '',
          legend: 'none',
           series: {
            0: { color: 'white', lineWidth: 0 },
            1: { color: 'red', lineWidth: 10, lineDashStyle: [10, 2] },
            2: { color: 'red', lineWidth: 10, lineDashStyle: [10, 2] }
           }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

        chart.draw(data, options);
      }

      $(window).resize(function(){drawChart_process_diagram_1();});	
     
    </script>
  </head>


