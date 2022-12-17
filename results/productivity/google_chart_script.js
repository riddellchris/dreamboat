function drawChart(element,arrOfTitle,arrOfInputs,options){
  console.log('hi')
  let data = google.visualization.arrayToDataTable([arrOfTitle,arrOfInputs]);
  let options = options

  let chart = new google.visualization.LineChart(document.getElementById(element));

  chart.draw(data, options);
};