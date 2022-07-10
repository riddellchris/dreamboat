<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/layout/pre_content.php";

paragraph_start('yes', 10, 9, 9, "To disconnect there are two options:");



paragraph_start('yes', 10, 9, 9, "Option 1.");
paragraph_start('no', 7,8,8, "In Dreamboat: Simply click on the <span style='color:red;'>DELETE</span> button next to the Xero connection:");
include_knowledgebase_image('/knowledgebase/components/diagrams/xero/delete_connection_option_1.png', '85%', '65vh');
echo "<br><br><br>";

paragraph_start('yes', 10, 9, 9, "Option 2.");
paragraph_start('no', 7,8,8, "In Xero simply visit:");
paragraph_start('no', 7,8,8, "<a href='https://go.xero.com/Settings/OrganisationSettings/'>https://go.xero.com/Settings/OrganisationSettings/</a>");

paragraph_start('no', 7,8,8, "Or click on the organisation’s name in the top left hand corner then settings");
include_knowledgebase_image('/knowledgebase/components/diagrams/xero/xero_organisation_selection.png', '85%', '65vh');
paragraph_start('no', 7,8,8, "Then click on connected apps in the left hand column:");
include_knowledgebase_image('/knowledgebase/components/diagrams/xero/xero_connected_applications.png', '85%', '65vh');
paragraph_start('no', 7,8,8, "Then click disconnect next to Dreamboat.");
include_knowledgebase_image('/knowledgebase/components/diagrams/xero/xero_apps_disconnection.png', '85%', '65vh');
paragraph_start('no', 7,8,8, "At this point the system will be disconnected and your data will be deleted within 28 days.");

echo "<br><br><br>";
paragraph_start('yes', 10, 9, 9, "Support:");
paragraph_start('no', 7,8,8, "For support at any time <a href='/knowledgebase/support/xero/assistance/' style='color:red;'>click here</a>");
echo "<br><br><br>";





	
	
require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/layout/post_content.php";