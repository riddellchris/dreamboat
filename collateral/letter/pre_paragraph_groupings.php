<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/start.php";
require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/spacings/start_of_page_top_of_centering_divs.php";
require $_SERVER['DOCUMENT_ROOT']."/components/functions/copy_functions.php";

echo "
<style>
p{font-family:  Barlow Semi Condensed, sans-serif;	}
ul{font-family: Barlow Semi Condensed, sans-serif;	}

.importance_class_8{font-size: 1.5vmin;}

#letter_container{}
#letter_inside{
	max-width:1200px;
//	margin-top: 8px;
	margin: 0 auto;
	text-align:left;
	}

</style>
";


echo "<div id='letter_container'>";
	echo "<div id='letter_inside'>";
		paragraph_detailed('no',8,8,8,"Dear fellow Australian,");
		paragraph_detailed('no',8,8,8,"I write to you today to ask for your assistance in turning our economy around.");
		paragraph_detailed('no',8,8,8,"Unfortunately the times ahead are not looking rosy with an aging population, a heavier load on the workforce and declining productivity improvement across the economy.");
		paragraph_detailed('no',8,8,8,"As a result we at Dreamboat are using Science, Technology and Engineering and Mathematics to do everything we can to turn this around.");
		paragraph_detailed('no',8,8,8,"Every day we are:");
		list_start();
			point_detailed_start('no',8,8,8,"Mapping more and more of the economy");
			point_detailed_start('no',8,8,8,"Collecting data from members of the workforce");
			point_detailed_start('no',8,8,8,"Collecting business data directly from applications used by every business");
			point_detailed_start('no',8,8,8,"Finding probability & statistics based optimisations &");
			point_detailed_start('no',8,8,8,"Delivering them directly to each and every member of the workforce");
		list_end();

		paragraph_detailed('no',8,8,8,"That said, our work has only begun and to turn this ship around, we need your help because we cannot do this alone.");

		paragraph_detailed('no',8,8,8,"To ensure that we give our country a great, stable and prosperous future we need to achieve:");
		list_start();
			point_detailed_start('no',8,8,8,"New productivity improvement across the country");
			point_detailed_start('no',8,8,8,"Do this without further burdening already devastated Government Budgets & Balance Sheets");
			point_detailed_start('no',8,8,8,"Improved GDP per Capita to manage our debt at the very least, but ideally repay it in time");
		list_end();

		paragraph_detailed('no',8,8,8,"As a result we are asking for a small piece of everyone’s time, a tiny piece of everyone’s budgets and plenty of commitment to help us & everyone across the board find new ways to improve our individual, business and collective economic productivity.");


		paragraph_detailed('no',8,8,8,"And in return we will:");
		list_start();
			point_detailed_start('no',8,8,8,"Work for you every day");
			point_detailed_start('no',8,8,8,"Deliver you, your staff and you business every optimisation we can as we strive to achieve 10% productivity improvements across the country &");
			point_detailed_start('no',8,8,8,"Deliver our country every possible opportunity that the best of Science, Technology, Engineering and Mathematics can deliver to help us tackle one of, if not the most pressing issue facing our world today.");
		list_end();


		paragraph_detailed('no',8,8,8,"Yours Sincerely,");

		echo "<br><br><br><br>";
		//[digitised signature]


		paragraph_detailed('no',8,8,8,"Christopher Riddell");
		paragraph_detailed('no',8,8,8,"Managing Director");
	echo "</div>";
echo "</div>";



require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/spacings/end_of_page_bottom_of_centering_divs.php";
require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/end.php";