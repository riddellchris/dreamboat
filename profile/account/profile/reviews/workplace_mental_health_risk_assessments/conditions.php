<?php
if(!isset($_SESSION)){session_start();}

require $_SERVER['DOCUMENT_ROOT']."/layouts/start_of_page.php";

echo "<div style='height:95vh;'>";

echo "<style>
@media screen and (min-height: 800px) {.inside{margin:auto;margin-top:20vh;}}
@media screen and (max-height: 800px) {.inside{margin:auto;margin-top:4vh;}}
</style>";

echo "<div class='inside' style='max-width:1100px;font-size:1.4em;padding-bottom:120px;'>";
echo"
Hi & Welcome to the Dreamboat, Workplace Mental Health Risk Assessment Process.<br><br>
Your employer has asked you to complete this 10-15 minute survey to ensure you are:<br> 
 - Well looked after<br>
 - As happy &<br>
 - As successful as possible within the workplace<br>
<br>
By continuing on past this page Dreamboat will <span style='color:red;'>NOT</span> share any individual responses with your employer but <span style='color:red;'>WILL</span>  share with them:<br>
<br>
1. An estimate for the productivity gains possible for you by improving the environment you work in<br>
2. A grade of <span style='color:green'>'low'</span>, <span style='color:orange;'>'moderate'</span> or <span style='color: red;'>'significant'</span> for the impact the workplace is having on you<br>
3. A 'yes' or 'no' recommendation if Dreamboat's support service would improve your productivity by helping you manage your situation better.<br>
<br>
To begin this questionnaire please click the button below and accept these conditions. <br>
<br>
<a class='wide-button blue-button' href='/risk_assessments/questions/' style='margin-left: auto;margin-right: auto;width:100%;max-width:1100px;' >Accept & Begin</a>
";
echo "</div>";
echo "</div>";
$_SESSION['next_prompt_id'] = 282;
require $_SERVER['DOCUMENT_ROOT']."/layouts/end_of_page.php";

?>