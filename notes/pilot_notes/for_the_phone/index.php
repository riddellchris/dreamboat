<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/account/security/logged_in_check.php";
require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/start.php";


echo "
<div style='width: 100%; text-align: center;'>
    <div class='blink_me'>
        <span style='color: #4332ff;'>@mention</span> everything you can<br>
        Such that can we tag and compile data from it ASAP

    </div>
</div>
";



require $_SERVER['DOCUMENT_ROOT']."/components/discussion/display.php";
require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/end.php";