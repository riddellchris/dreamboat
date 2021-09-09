<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/layout/pre_content.php";

paragraph_detailed('yes',8,9,8, "Having been the 'lucky country' for 30 something years, our economy is in <a href='/knowledgebase/economy/problem/' target='_blank'>dire straits</a>.");

paragraph_detailed('no', 8, 8, 8, "We believe that Australia deserves better over the next 30 years than a long hangover from 30 years of debt, digging and construction but a new direction is needed.<br>
	Without a new direction households will bear the brunt of a slowly <a href='/knowledgebase/economy/problem/' target='_blank'>decaying economy</a> that neither the RBA, banks or Government can save alone.");

paragraph_detailed('yes', 8, 8, 8, "This means that standards of living will actually decrease across the country as <a href='https://www.investopedia.com/terms/p/per-capita-gdp.asp' target='_blank'>GDP per Capita</a> actually falls in real terms.");	
	
paragraph_detailed('no', 8, 8, 8, "If however, we can focus on becoming world leaders in creative productivity we will have both an identity, vision and direction for the centuries to come.");	



require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/layout/post_content.php";