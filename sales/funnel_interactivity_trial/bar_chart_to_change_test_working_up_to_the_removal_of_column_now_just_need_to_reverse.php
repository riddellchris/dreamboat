<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/account/security/logged_in_check.php";
require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/start.php";
?>

<script type="text/javascript">
    google.charts.load("current", {packages:["corechart"]});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ["Element", "Density", { role: "style" } ],
        ["Copper", 8.94, "#b87333"],
        ["Silver", 10.49, "silver"],
        ["Gold", 19.30, "gold"],
        ["Platinum", 21.45, "color: #e5e4e2"]
      ]);

      var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       2]);

      var options = {
        title: "Density of Precious Metals, in g/cm^3",
        width: 600,
        height: 400,
        bar: {groupWidth: "95%"},
        legend: { position: "none" },
      };
      var chart = new google.visualization.BarChart(document.getElementById("barchart_values"));
      
      
       function selectHandler() {
          var selectedItem = chart.getSelection()[0];
          if (selectedItem) {
            var topping = data.getValue(selectedItem.row, 0);
           
           // alert('The user selected ' + topping);
           //this creates a basic alert but we want this to be everything
           
           var appBanners = document.getElementsByClassName(topping);

		for (var i = 0; i < appBanners.length; i ++) {
		    appBanners[i].style.display = 'none';
		}
           
//view = new google.visualization.DataView(data);
	      data.removeRow(selectedItem.row);
	      chart.draw(view, options);
           
           
           
           
           
           
          }
        }
      google.visualization.events.addListener(chart, 'select', selectHandler);
      
      chart.draw(view, options);
  }
  </script>
<div id="barchart_values" style="width: 900px; height: 300px;"></div>

<div style='margin-top:100px;'>&nbsp;</div>

<div class = 'Copper	Silver	Gold	Platinum'>1</div>
<div class = 'Copper		Gold	Platinum'>2</div>
<div class = 'Copper	Silver		Platinum'>3</div>
<div class = 'Copper	Silver	Gold	Platinum'>4</div>
<div class = 'Copper	Silver	Gold	Platinum'>5</div>
<div class = 'Copper	Silver	Gold	Platinum'>6</div>
<div class = 'Copper	Silver	Gold	Platinum'>7</div>
<div class = 'Copper	Silver	Gold	Platinum'>8</div>
<div class = 'Copper	Silver	Gold	Platinum'>9</div>
<div class = 'Copper	Silver	Gold	Platinum'>10</div>
<div class = 'Copper	Silver	Gold	Platinum'>11</div>
<div class = 'Copper	Silver	Gold	Platinum'>12</div>
<div class = 'Copper	Silver	Gold	Platinum'>13</div>
<div class = 'Copper	Silver	Gold	Platinum'>14</div>
<div class = 'Copper	Silver	Gold	Platinum'>15</div>


<?php
require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/end.php";
?>