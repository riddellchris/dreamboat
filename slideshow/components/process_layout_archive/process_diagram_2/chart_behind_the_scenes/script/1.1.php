
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart_process_diagram_1);

      function drawChart_process_diagram_1() {
      var data = new google.visualization.DataTable();
      data.addColumn('number', 'x axis');
      data.addColumn('number', 'line 1');
      data.addColumn('number', 'line 2');
      data.addColumn('number', 'line 3');


      data.addRows([
        [500,  500,  null,    null],
        [100,  500,  null,    null],        
        [500,   null, 500,   null],        
        [210,   null, 660,   null],        

        [540,   null, null,   500],
        [900,   null, null,   500]

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
            0: { color: 'green', lineWidth: 10, lineDashStyle: [10,2] },
            1: { color: 'green', lineWidth: 10, lineDashStyle: [10,2] },
            2: { color: '#cecece', lineWidth: 10, lineDashStyle: [14, 2, 2, 7] }
           }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

        chart.draw(data, options);
      }

      $(window).resize(function(){drawChart_process_diagram_1();});	
     
    </script>



