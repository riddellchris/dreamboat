
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart_process_diagram_1);

      function drawChart_process_diagram_1() {
      var data = new google.visualization.DataTable();
      data.addColumn('number', 'x axis');
      data.addColumn('number', 'line 1');
      data.addColumn('number', 'line 2');
      data.addColumn('number', 'line 3');
      data.addColumn('number', 'line 4');
      data.addColumn('number', 'line 5');
      data.addColumn('number', 'line 6');


      data.addRows([
        [500,  500,  null, null,   null,   null,   null],
        [100,  500,  null, null,   null,   null,   null],        
        [500,   null, 500, null,   null,   null,   null],        
        [210,   null, 660, null,   null,   null,   null],        
        [500,   null, null, 500,   null,   null,   null],        
        [175,   null, null, 280,   null,   null,   null],
        [540,   null, null, null,  500,   null,    null],
        [900,   null, null, null,  500,   null,    null],
        [740,   null, null, null,  null,   600,    null],
        [780,   null, null, null,  null,   500,    null],
        [740,   null, null, null,  null,   null,   400],
        [780,   null, null, null,  null,   null,   500]
      ]);

        var options = {
          chartArea: {
            height: '100%',
            width: '100%'
          },
           vAxis: { gridlines: { count: 0 },          
                  viewWindow: {min:0, max:1000},
                 textPosition: 'none',
                    axisFontSize : 0 },
           hAxis: { gridlines: { count: 0 },
                viewWindow: {min:0, max:1000},
                textPosition: 'none',
                    axisFontSize : 0 },

          title: '',
          legend: 'none',
           series: {
            0: { color: '#ababab', lineWidth: 10, lineDashStyle: [14, 2, 2, 7] },
            1: { color: '#858585', lineWidth: 10, lineDashStyle: [30, 65] },
            2: { color: '#cecece', lineWidth: 10, lineDashStyle: [10, 2] },
            3: { color: 'green', lineWidth: 10, lineDashStyle: [4, 4] },
            4: { color: 'green', lineWidth: 10, lineDashStyle: [4, 4] },
            5: { color: 'green', lineWidth: 10, lineDashStyle: [4, 4] }
           }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

        chart.draw(data, options);
      }

      $(window).resize(function(){drawChart_process_diagram_1();});	
     
    </script>



