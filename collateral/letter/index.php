<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/start.php";
require $_SERVER['DOCUMENT_ROOT']."/components/functions/copy_functions.php";

echo "
<style>
p{font-family:  Barlow Semi Condensed, sans-serif;	}
ul{font-family: Barlow Semi Condensed, sans-serif;	}

.importance_class_8{font-size: 20px;}

#letter_container{}
#letter_inside{
	max-width:1200px;
	margin: 0 auto;
	text-align:left;
	}

@media only screen and (max-width: 1200px) {
	#letter_container{
		padding-left:5px; 
		padding-right: 5px;
		padding-top: 10px;
		padding-bottom: 120px;
		}	
	}
@media only screen and (min-height: 1170px)  and (min-width: 1200px)  {
	#letter_container{
		padding-top:	calc( (100vh - 1320px) / 2); 
		padding-bottom: calc( (100vh - 1220px) / 2); 
		}	
	}


</style>
";


echo "<div id='letter_container'>";
	echo "<div id='letter_inside'>";
		paragraph_detailed('no',8,8,8,"Dear fellow Australian,<br><br>");
		paragraph_detailed('no',8,8,8,"I write to you today to ask for your assistance in turning our <a href='/knowledgebase/economy/' target='_blank'>economy</a> around so that together we can build a stable prosperous future for our country. ");
        paragraph_detailed('no',8,8,8," Unfortunately the times ahead are not looking too rosy with an aging population, a heavier load on the workforce and declining productivity improvement across the economy, let alone the impacts of COVID-19.
		As a result we at Dreamboat are using Science, Technology and Engineering and Mathematics to do everything we can to turn this around.");
		paragraph_detailed('no',8,8,8,"Every day we are:");
		list_start();
			point_detailed_start('no',8,8,8,"Mapping more and more of the <a href='/knowledgebase/economy/' target='_blank'>economy</a> ");
			point_detailed_start('no',8,8,8,"Collecting data from members of the workforce");
			point_detailed_start('no',8,8,8,"Collecting business data directly from applications used by every business");
			point_detailed_start('no',8,8,8,"Finding both qualitative and quantitative optimisations &");
			point_detailed_start('no',8,8,8,"Delivering them directly to each and every member of the workforce");
		list_end();

		paragraph_detailed('no',8,8,8,"That said, our work has only begun and to turn this ship around, we need your help because we cannot do this alone. To ensure that we give our country a great, stable and prosperous future we need to achieve:");
		list_start();
			point_detailed_start('no',8,8,8,"New productivity improvements big and small across the country");
			point_detailed_start('no',8,8,8,"Do this without further burdening already devastated Government budgets & balance sheets");
			point_detailed_start('no',8,8,8,"Improved <a href='https://www.investopedia.com/terms/p/per-capita-gdp.asp' target='_blank'>GDP per Capita</a> to manage our debt at the very least, but ideally repay it in time");
		list_end();

		paragraph_detailed('no',8,8,8,"As a result we are asking for a small piece of everyone’s time, a tiny piece of everyone’s budgets and plenty of commitment to help us & 
                        everyone across the board find new ways to improve our individual, business and collective economic productivity. And in return we will:");
		list_start();
			point_detailed_start('no',8,8,8,"Work for you every day");
			point_detailed_start('no',8,8,8,"Deliver you, your staff and you business every optimisation we can as we strive to achieve 10% productivity improvements in every business across the country &");
			point_detailed_start('no',8,8,8,"Deliver our country every possible opportunity that the best of Science, Technology, Engineering and Mathematics can deliver to help us tackle one of, if not the most, pressing issues facing our world today.");
		list_end();

        paragraph_detailed('no',8,8,8,"We hope you'll join us in building a great future for Australia so please:");
		list_start();
			point_detailed_start('no',8,8,8,"Learn more about what we are doing via <a href='www.dreamboat.com.au' target='_blank'>www.dreamboat.com.au</a>");
			point_detailed_start('no',8,8,8,"Visit our knowledgebase at <a href='www.dreamboat.com.au/knowledgebase/' target='_blank'>www.dreamboat.com.au/knowledgebase</a>");
			point_detailed_start('no',8,8,8,"Contact me directly at <a href='mailto:chris.riddell@dreamboat.com.au'>chris.riddell@dreamboat.com.au</a>");
			point_detailed_start('no',8,8,8,"Or simply email us about your desire to join us now at <a href='mailto:helpoutnow@dreamboat.com.au'>helpoutnow@dreamboat.com.au</a>");            
		list_end();



		paragraph_detailed('no',8,8,8,"<br>Yours Sincerely,");

		//[digitised signature]
		echo "<img src='Chris R Signature.png' style='max-height: 100px;'>";
		echo "<br>";

		paragraph_detailed('no',8,8,8,"Christopher Riddell");
		paragraph_detailed('no',8,8,8,"Managing Director");
	echo "</div>";
echo "</div>";


require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/end.php";