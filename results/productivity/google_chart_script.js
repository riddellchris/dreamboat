function drawChart(){
  let data = google.visualization.arrayToDataTable([


  ])
  let options = {
    title: '',
    curveType: 'function',
   
  };

  let chart = new google.visualization.LineChart(document.getElementById('curve_chart1'));

  chart.draw(data, options);
};