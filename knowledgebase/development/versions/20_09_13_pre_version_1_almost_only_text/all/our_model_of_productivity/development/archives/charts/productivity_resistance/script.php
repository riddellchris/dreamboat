<script>
google.charts.load('current', {
  callback: drawChart,
  packages:['corechart']
});

function drawChart() {
  var data = new google.visualization.DataTable();
  data.addColumn('number', 'x');
  data.addColumn('number', 'y0');
  data.addRows([
    [1,  37.8],
    [2,  30.9],
    [3,  25.4],
    [4,  11.7],
    [5,  11.9],
    [6,   8.8],
    [7,   7.6],
    [8,  12.3],
    [9,  16.9],
    [10, 12.8],
    [11,  5.3],
    [12,  6.6],
    [13,  4.8],
    [14,  4.2]
  ]);

  var view = new google.visualization.DataView(data);
  view.setColumns([0, 1, {
    label: 'y1=x',
    type: 'number',
    calc: function (dt, row) {
      return dt.getValue(row, 0)
    }
  }]);

  var options = {
    seriesType: 'scatter',
    series: {
      1: {
        type: 'line'
      }
    }
  };

  var chart = new google.visualization.ComboChart(document.getElementById('productivity_resistance_chart_div'));
  chart.draw(view, options);
}


</script>