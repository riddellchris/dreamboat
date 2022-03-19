<script type="text/javascript">
        google.charts.load('current',   {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawVisualization);

      function drawVisualization() {
        // Some raw data (not necessarily accurate)
        var data = new google.visualization.DataTable();
        data.addColumn('date',   'Month');
        data.addColumn('number',   'Carry over WIP');      
        data.addColumn('number',   'Work completed this month');
        data.addColumn('number',   'Work invoiced this month');
        data.addColumn('number',   'Total uninvoiced at month end'); 
        data.addColumn('number',   'WIP');        
        data.addRows([
           [new Date(2021,1,1),   55000,             45000, 45000,         599,         682],
          [new Date(2021,2,1),   55000,             45000, 45000,         587,         623],
          [new Date(2021,3,1),   55000,             45000, 45000,         615,         609.4],
          [new Date(2021,4,1),   55000,             45000, 45000,          522,         614.6],
          [new Date(2021,5,1),   55000,             45000, 45000,         599,         682],
          [new Date(2021,6,1),   55000,             45000, 45000,         587,         623],
          [new Date(2021,7,1),   55000,             45000, 45000,         615,         609.4],
          [new Date(2021,8,1),   55000,             45000, 45000,          522,         614.6],
          [new Date(2021,9,1),   55000,             45000, 45000,         599,         682],
          [new Date(2021,10,1),   55000,             45000, 45000,         587,         623],
          [new Date(2021,11,1),   55000,             45000, 45000,         615,         609.4],
          [new Date(2021,12,1),   55000,             45000, 45000,          629,         569.6],



          [new Date(2022,1,1),   55000,             45000, 45000,         599,         682],
          [new Date(2022,2,1),   55000,             45000, 45000,         587,         623],
          [new Date(2022,3,1),   55000,             45000, 45000,         615,         609.4],
          [new Date(2022,4,1),   55000,             45000, 45000,          522,         614.6],
          [new Date(2022,5,1),   55000,             45000, 45000,         599,         682],
          [new Date(2022,6,1),   55000,             45000, 45000,         587,         623],
          [new Date(2022,7,1),   55000,             45000, 45000,         615,         609.4],
          [new Date(2022,8,1),   55000,             45000, 45000,          522,         614.6],
          [new Date(2022,9,1),   55000,             45000, 45000,         599,         682],
          [new Date(2022,10,1),   55000,             45000, 45000,         587,         623],
          [new Date(2022,11,1),   55000,             45000, 45000,         615,         609.4],
          [new Date(2022,12,1),   55000,             45000, 45000,          629,         569.6]
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