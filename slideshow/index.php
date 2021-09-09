<?php
if(!isset($_SESSION)){session_start();}
if(!isset($_SESSION['slideshow_last_page'])){$_SESSION['slideshow_last_page'] = 'one';}

header("Location: /slideshow/".$_SESSION['slideshow_last_page']."/");
exit();