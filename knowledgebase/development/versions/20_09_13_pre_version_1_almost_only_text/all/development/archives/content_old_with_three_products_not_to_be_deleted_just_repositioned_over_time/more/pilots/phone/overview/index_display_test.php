<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/start.php";
?>


<!-- how this  first element looks right now is just supposed to be like a navigation flag https://www.google.com/search?q=navigation+flags&oq=navigation+flag&aqs=chrome.0.0j69i57j0l6.1855j0j7&sourceid=chrome&ie=UTF-8 -->
<style>
.center-text{  background: -webkit-linear-gradient(#ff0000, #ff0040);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;font-family: HELVETICA;font-weight:700;}
@media screen and (min-width: 800px) and (min-height: 1050px){.center-text{font-size:70px;}.hero-image{height:52vh;}}
@media screen and (max-width: 800px){.center-text{font-size:40px;}.hero-image{height:72vh;}}
@media screen and (max-height: 1050px){.center-text{font-size:40px;}.hero-image{height:72vh;}}
@media screen and (min-width: 800px){
.hero-text{padding-left:6%;}
}
@media screen and (max-width: 800px){
.hero-text{padding-left:3%;}
}

@media screen and (min-height: 800px){.hero_text_no_mobile{top:25vh;}}
@media screen and (max-height: 800px){.hero_text_no_mobile{top:14vh;}}

.hero-text{
left:0%;transform:translate(0%,0%);
}

.hero-subtext{
	font-family: Cormorant Garamond;
	text-transform: none;
	color: WHITE;
	}
@media screen and (min-width: 600px){.hero-text{font-size:60px;}.hero-subtext{font-size:36px;}}
@media screen and (max-width: 600px){.hero-text{font-size:25px;}.hero-subtext{font-size:24px;}}
</style>
<div class='hero-image'>
	<div class='hero-text hero_text_no_mobile' id='main_text' style='text-align:left;'>
		<p class='center-text' style='margin:0px;width:100%;'>
			<span style='font-size:larger;text-transform:none;'>
				The weekly sales & marketing meeting that works.
			</span>
		</p>
	</div>	  
</div>


<!--
<div class='top-right' style='color:red;'>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['', 28, 28, 38, 38],
          ['', 38, 38, 55, 55],
          ['', 55, 55, 77, 77],
          ['', 77, 77, 66, 66],
          ['', 66, 66, 22, 22],
          ['', 28, 28, 38, 38],
          ['', 38, 38, 55, 55],
          ['', 55, 55, 77, 77],
          ['', 77, 77, 66, 66],
          ['', 66, 66, 22, 22],         
          ['', 28, 28, 38, 38],
          ['', 38, 38, 55, 55],
          ['', 55, 55, 77, 77],
          ['', 77, 77, 66, 66],
          ['', 66, 66, 22, 22],
          ['', 28, 28, 38, 38],
          ['', 38, 38, 55, 55],
          ['', 55, 55, 77, 77],
          ['', 77, 77, 66, 66],
          ['', 66, 66, 22, 22],    
          ['', 28, 28, 38, 38],
          ['', 38, 38, 55, 55],
          ['', 55, 55, 77, 77],
          ['', 77, 77, 66, 66],
          ['', 66, 66, 22, 22],
          ['', 28, 28, 38, 38],
          ['', 38, 38, 55, 55],
          ['', 55, 55, 77, 77],
          ['', 77, 77, 66, 66],
          ['', 66, 66, 22, 22]
          // Treat the first row as data.
        ], true);

        var options = {
        
         'chartArea': {'width': '100%', 'height': '100%'},
          legend: 'none',
          bar: { groupWidth: '50%' }, // Remove space between bars.
          candlestick: {
            fallingColor: { strokeWidth: 1, fill: '#a52714' }, // red
            risingColor: { strokeWidth: 1, fill: '#ff0000' }   // green
          },
            hAxis: {
  		title: '', 
  		titleTextStyle: {  color: '#FF0000' },
  		minorGridlines: {count: 0 }, 
            	gridlines: {count: 0, } ,
       		baselineColor: '#ffffff',
 		gridlineColor: '#ffffff'
  		},
  vAxis: {	title: '',

  		titleTextStyle: {   color: '#FF0000' },
  		minorGridlines: {count: 0 }, 
            	gridlines: {count: 0, } ,
       		baselineColor: '#ffffff',
 		gridlineColor: '#ffffff'
  		},
        };

        var chart = new google.visualization.CandlestickChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
           $(window).resize(function(){
		drawChart();
	}); 
      
    </script>
<div id="chart_div" style="width: 100%; height: 100%;max-height:450px;"></div>
-->

<style>
.design_lines{height:40px;background-color:red;margin-top:2vh;}
</style>

<?php
echo "<div class = 'design_lines'  style='margin-left:".rand (-25, 65)."%;width:75%;'></div>";
echo "<div class = 'design_lines'  style='margin-left:".rand (-25, 65)."%;width:75%;'></div>";
echo "<div class = 'design_lines'  style='margin-left:".rand (-25, 65)."%;width:75%;'></div>";
echo "<div class = 'design_lines'  style='margin-left:".rand (-25, 65)."%;width:75%;'></div>";
echo "<div class = 'design_lines'  style='margin-left:".rand (-25, 65)."%;width:75%;'></div>";
echo "<div class = 'design_lines'  style='margin-left:".rand (-25, 65)."%;width:75%;'></div>";
echo "<div class = 'design_lines'  style='margin-left:".rand (-25, 65)."%;width:75%;'></div>";
echo "<div class = 'design_lines'  style='margin-left:".rand (-25, 65)."%;width:75%;'></div>";
?>


<style>
//not just fa to not fuck with the mobile icon
i.fa_for_content{font-size: 4em;padding:4%;}
 @media screen and (max-width: 1200px){.icon-divs{float:center;width:100%;padding-top:6vh;}.fa-funnel-dollar{margin-top:200px;}}
  @media screen and (min-width: 1200px){.icon-divs{float:left;width:25%;}.fa-funnel-dollar{margin-top:0px;}}
</style>


<style>
@media screen and (min-width: 1200px){
.second_hero_image{height:32vh;}
}
@media screen and (max-width: 1200px){
.second_hero_image{height:50vh;}
}
</style>
<div class='hero-image second_hero_image' style='height:45vh;padding-bottom:14vh;padding-top:8vh;'>
	<div class='hero-text2 hero_text_no_mobile' id='main_text' style='text-align:left;'>
	<style>
	
.hero-subtext{
	font-family: Cormorant Garamond;
	text-transform: none;
	color: WHITE;
	}
@media screen and (min-width: 600px){.hero-text{font-size:60px;}.hero-subtext{font-size:36px;}}
@media screen and (max-width: 600px){.hero-text{font-size:25px;}.hero-subtext{font-size:24px;}}
	</style>
		<p class='center-text' style='margin:4%;width:80%;text-align: left;'>
	
				<span style='font-size:larger;text-transform:none;'>
				Be challenged,<br>Be stretched,<br>Chase more,<br>Move faster..<br><br><br>&nbsp;&nbsp;&nbsp;&nbsp;..all with half an hour a week.					
				</span>
		</p>						
	  </div>	  
</div>
<div style='width:100%;text-align:center;display: inline-block;margin-top:35vh;'>
	<div style=' display: inline-block;width:75%;' class='fa_for_content'>
		<div class='icon-divs'>
			<i style='font-size: 4em;display:inline-block;'  class="fa fa-search-dollar"></i><br>
			<span class='prompt-font'>review<br>progress</span>
		</div>

		<div class='icon-divs'>
			<i style='font-size: 4em;display:inline-block;'  class="fa fa-chart-bar"></i><br>
			<span class='prompt-font'>plan<br>ahead</span>
		</div>	
		<div class='icon-divs'>
			<i style='font-size: 4em;display:inline-block;' class="fa fa-door-open"></i><br>
			<span class='prompt-font'>close<br>more</span>
		</div>
		<div class='icon-divs'>
			<i style='font-size: 4em;display:inline-block;'  class="fa fa-hand-holding-usd"></i><br>
			<span class='prompt-font'>make<br>more</span>
		</div>

	</div>
</div>


<div class='hero-image' style='padding-top:35vh;'>
	<div class='hero-text2 hero_text_no_mobile' id='main_text' style='text-align:left;'>
	<style>
	
.hero-subtext{
	font-family: Cormorant Garamond;
	text-transform: none;
	color: WHITE;
	}
@media screen and (min-width: 600px){.hero-text{font-size:60px;}.hero-subtext{font-size:36px;}}
@media screen and (max-width: 600px){.hero-text{font-size:25px;}.hero-subtext{font-size:24px;}}
	</style>
		<p class='center-text' style='margin:0px;width:100%;text-align:center;'>
	
				<span style='font-size:larger;text-transform:none;'>
	
					Get your sales firing for $200+GST per month
					<br><br><br>
					
					<small>
					or get everything for $235+GST per month
					</small>
					
					
					<!--<br> ...after two weeks free.-->
								
				</span>

		</p>						

	  </div>
	  


</div>









<?php

require $_SERVER['DOCUMENT_ROOT']."/components/content/pieces/contact_us_link.php";
require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/end.php";
?>
