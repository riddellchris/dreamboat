<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/layout/pre_content.php";

paragraph_detailed('yes',10,8,8,"In exactly the same way that '<a target='_blank' href='https://en.wikipedia.org/wiki/Hedge_fund'>hedge funds</a>' operate by collecting both <a href='https://www.google.com/search?q=qualitative+data' target='_blank'>qualitative data</a> & <a href='https://www.google.com/search?q=quantitative+data' target='_blank'>quantitative data</a> to produce a return, we are doing exactly the same thing.");

include_knowledgebase_image('/knowledgebase/components/diagrams/hedge_fund_diagram.svg', 'default', '65vh');


paragraph_detailed('yes',10,8,8,"However in our case there are a few key differences:");
list_start();
		point_detailed_start('no',8,8,8,"&nbsp;&nbsp;Our desired '<a href='https://www.investopedia.com/terms/a/alpha.asp' target='_blank'>alpha</a>' is an improvement across the country in <a href='/knowledgebase/productivity/' target='_blank'>productivity</a> by optimising the <a href='/knowledgebase/productivity/network_productivity/' target='_blank'>productivity networks</a> of each member of the workforce.");
		list_start();	
			point_detailed_start('no',8,8,8,"This has direct and indirect financial benefits to each user.");
			point_detailed_start('no',8,8,8,"Improved productivity, improved earnings & improved profitability most prominently.");
		list_end();
		point_detailed_start('no',8,8,8,"&nbsp;&nbsp;Unlike investing where beating the market is challenging because of its high level of maturity, productivity improvement using our primary data sources is as yet, almost untapped. Those data sources being:");
		list_start();	
			point_detailed_start('no',8,8,8,"SaaS application data. e.g. <a href='https://www.salesforce.com/au/' target='_blank'>Salesforce</a>, <a href='https://www.xero.com/au/' target='_blank'>Xero</a>, <a href='https://www.aroflo.com/au/' target='_blank'>Aroflo</a>, <a href='https://analytics.google.com/'>Google Analytics</a> etc");
			point_detailed_start('no',8,8,8,"Workforce members.");
		list_end();
		point_detailed_start('no',8,8,8,"&nbsp;&nbsp;There are almost guaranteed returns simply as a result of <a href='/knowledgebase/our_model/issue_removal' target='_blank'>issue removal</a> and a dedicated effort to improve productivity, let alone from 'higher tech' solutions.");	
		list_start();
			point_detailed_start('no',8,8,8,"The difficulty of self identification and removal of issues, let alone the limitations of management to address all issues ensures this return exists.");
		list_end();
		point_detailed_start('no',8,8,8,"Our execution loop is not to 'buy & sell' but to provide feedback to our users via our pilots and other <a href='/knowledgebase/current_service/pricing/' target='_blank'>access points</a> as they become available to each business and user.");

list_end();


//"untapped market unlike ETFs"

require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/layout/post_content.php";