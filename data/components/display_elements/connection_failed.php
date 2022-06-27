<?php
if(!isset($_SESSION)){session_start();}

echo "<span style='color: red;' class='blink_me'>Connection failed</span><BR>";
echo "<div style='width:100%; text-align: right; font-size: 16px;' class='prompt-font'>Try to refresh page or delete & reconnect</div>"; 