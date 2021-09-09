<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/layout/pre_content.php";

paragraph_detailed('yes',8,8,8,"While for endless reasons, results may vary in general you can expect that within the first 6 months, a 10% improvement to productivity of each staff member is to be achieved. This is typically achieved as a by-product of the initial network building process. Waste is easily identified by both <a href='/knowledgebase/initial_solution/pilots/' target='_blank'>Pilots</a> and users as part of the 'what do you actually do every day' process & subsequent discussions.");

paragraph_detailed('no',8,8,8,"Following this initial period of mapping and improvements, expecting an additional 5% improvement in productivity from each staff member is expected every 6 months due to ongoing issue identification and removal independent of standard business processes. This improvement is possible thanks to a continuous focus on productivity across the organisation with each and every individual.");



//initial_solution/expectations
include_knowledgebase_image('/knowledgebase/current_service/expectations/diagrams/expectation_chart.svg', 'default', '65vh');



paragraph_detailed('no',8,8,8,"The vast majority, if not all of these improvements should be measurable via financial metrics, as most if not all of these improvement statistics are derived from waste removal which is directly attributable to costs.");


require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/layout/post_content.php";