<script type="text/javascript">
        google.charts.load('current',   {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawVisualization);

      function drawVisualization() {
        // Some raw data (not necessarily accurate)
        var data = new google.visualization.DataTable();
        data.addColumn('date',   'Month');
   
        data.addColumn('number',   'Work completed this month');
        data.addColumn('number',   'Work invoiced from this month');
        data.addColumn('number',   'Total invoices sent this month'); 
        data.addColumn('number',   'WIP at month end');        
        data.addRows([
          [new Date(2021,1,1), 35000,29750,29750,5250],
[new Date(2021,2,1), 36000,21600,26850,14400],
[new Date(2021,3,1), 37000,25900,40300,11100],
[new Date(2021,4,1), 39000,19500,30600,19500],
[new Date(2021,5,1), 42000,18900,38400,23100],
[new Date(2021,6,1), 41000,24600,47700,16400],
[new Date(2021,7,1), 40000,34000,50400,6000],
[new Date(2021,8,1), 38000,34200,40200,3800],
[new Date(2021,9,1), 36000,34200,38000,1800],
[new Date(2021,10,1), 38000,32300,34100,5700],
[new Date(2021,11,1), 45000,31500,37200,13500],
[new Date(2021,12,1), 48000,28800,42300,19200],
[new Date(2022,1,1), 50000,35000,54200,15000],
[new Date(2022,2,1), 52000,36400,51400,15600],
[new Date(2022,3,1), 54000,37800,53400,16200],
[new Date(2022,4,1), 52000,41600,57800,10400],
[new Date(2022,5,1), 55000,49500,59900,5500],
[new Date(2022,6,1), 47000,32900,38400,14100],
[new Date(2022,7,1), 48000,38400,52500,9600],
[new Date(2022,8,1), 46000,41400,51000,4600],
[new Date(2022,9,1), 48000,38400,43000,9600],
[new Date(2022,10,1), 52000,46800,56400,5200],
[new Date(2022,11,1), 50000,45000,50200,5000]
        ]);

        var options = {
          title : 'WIP & associated information',
          vAxis: {title: '$'},
          hAxis: {title: 'Month', format: 'MMM-yy'},
          seriesType: 'bars',
          series: {3: {type: 'line'}}
        };

        var chart = new google.visualization.ComboChart(document.getElementById('insights_wip_valuation'));
        chart.draw(data, options);
      }

      $(window).resize(function(){drawVisualization();});	
    </script>