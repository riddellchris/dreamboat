<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/layout/pre_content.php";

paragraph_start('yes', 10, 9, 9, "Background.");
paragraph_start('no', 7,8,8, "To connect the Dreamboat platform with your Xero account and take advantage of:");
    list_start();
        point_detailed_start('no',8,8,8,"Automated reporting");
        point_detailed_start('no',8,8,8,"Financial insights");
        point_detailed_start('no',8,8,8,"Combination reporting of financial & other data");
    list_end();
paragraph_start('no', 7,8,8, "… we use an <a href='https://en.wikipedia.org/wiki/API' style='color:red;' target='_blank'>API </a>(Application Programming Interface) to connect in a <span style='color:black;'>READ ONLY</span> way to your Xero account.");
echo "<br><br><br>";

paragraph_start('yes', 10, 9, 9, "Instructions.");
paragraph_start('no', 7,8,8, "To complete this yourself follow the instructions below.");
paragraph_start('no', 7,8,8, "OR");
paragraph_start('no', 7,8,8, "Set up a brief connection meeting on Zoom at any point.");
echo "<br><br><br>";


paragraph_start('yes', 10, 9, 9, "Step 1.");
paragraph_start('no', 7,8,8, "To make that connection, either you or your advisor with access to your Xero account must access the Dreamboat Platform via:");
paragraph_start('no', 7,8,8, "<a href='https://dreamboat.com.au/account/security/'>https://dreamboat.com.au/account/security/</a>");
paragraph_start('no', 7,8,8, "Set up a brief connection meeting on Zoom at any point.");
include_knowledgebase_image('/knowledgebase/components/diagrams/xero/account_security_image.png', 'default', '65vh');
echo "<br><br><br>";

paragraph_start('yes', 10, 9, 9, "Step 2.");
paragraph_start('no', 7,8,8, "Then visit the DATA page from the menu or via this URL:");
paragraph_start('no', 7,8,8, "<a href='https://dreamboat.com.au/data/'>https://dreamboat.com.au/data/</a>");
include_knowledgebase_image('/knowledgebase/components/diagrams/xero/data_connection_in_navigation.png', 'default', '65vh');
echo "<br><br><br>";


paragraph_start('yes', 10, 9, 9, "Step 3.");
paragraph_start('no', 7,8,8, "Add Xero as a source and click <span style='color: #4332ff;'>ADD</span>");
paragraph_start('no', 7,8,8, "<a href='https://dreamboat.com.au/data/'>https://dreamboat.com.au/data/</a>");
include_knowledgebase_image('/knowledgebase/components/diagrams/xero/add_and_connect_data_sources.png', '75%', '65vh');
echo "<br><br><br>";


paragraph_start('yes', 10, 9, 9, "Step 4.");
paragraph_start('no', 7,8,8, "And then click connect to Xero.");
include_knowledgebase_image('/knowledgebase/components/diagrams/xero/data_sources_connect_xero.png', '85%', '65vh');
echo "<br><br><br>";



paragraph_start('yes', 10, 9, 9, "Step 5.");
paragraph_start('no', 7,8,8, "From here you will be redirected to Xero’s Authorisation process.");
paragraph_start('no', 7,8,8, "Here you can see the data that Dreamboat will <span style='color:red;'>READ ONLY</span> to help prepare your dashboards and reports.");
paragraph_start('yes', 7,8,8, "If you have access to multiple organisation’s please make sure to select the organisation.");
echo "<br><br><br>";
include_knowledgebase_image('/knowledgebase/components/diagrams/xero/allow_access_to_xero.png', '85%', '65vh');
paragraph_start('no', 7,8,8, "Then click  'Allow Access' and relax.");
echo "<br><br><br>";



/*

paragraph_start('yes', 10, 9, 9, "Step 5a.");
paragraph_start('no', 7,8,8, "Upon successful completion you will return to the Dreamboat platform you may need to confirm the tenant you connected.");
paragraph_start('no', 7,8,8, "<a href='https://dreamboat.com.au/account/security/'>https://dreamboat.com.au/account/security/</a>");
paragraph_start('no', 7,8,8, "Set up a brief connection meeting on Zoom at any point.");
echo "<br><br><br>";
include_knowledgebase_image('/knowledgebase/components/diagrams/xero/account_security_image.png', 'default', '65vh');
echo "<br><br><br>";
*/


echo "<br><br><br>";
paragraph_start('yes', 10, 9, 9, "Step 6.");
paragraph_start('no', 7,8,8, "Upon successful completion of these processes you should return to the Data page and see the updated connection status.");
echo "<br><br><br>";
include_knowledgebase_image('/knowledgebase/components/diagrams/xero/xero_connection_status.png', 'default', '65vh');


echo "<br><br><br>";
echo "<br><br><br>";
paragraph_start('yes', 10, 9, 9, "Step 7.");
paragraph_start('no', 7,8,8, "At this point Dreamboat staff will be notified and your reporting will not necessarily appear instantaneously as some mapping and matching is required but your account will be set up in the coming days to match the required reporting of you and or your advisor.");
	


echo "<br><br><br>";
paragraph_start('yes', 10, 9, 9, "Support:");
paragraph_start('no', 7,8,8, "For support at any time <a href='/knowledgebase/support/xero/assistance/' style='color:red;'>click here</a>");


require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/layout/post_content.php";