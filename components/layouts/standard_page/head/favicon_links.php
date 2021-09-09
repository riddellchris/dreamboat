<link rel="apple-touch-icon" sizes="57x57" href="/components/design/favicons/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="/components/design/favicons/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="/components/design/favicons/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="/components/design/favicons/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="/components/design/favicons/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="/components/design/favicons/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="/components/design/favicons/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="/components/design/favicons/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="/components/design/favicons/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="/components/design/favicons/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="/components/design/favicons/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="/components/design/favicons/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="/components/design/favicons/favicon-16x16.png">
<link rel="icon" href="/components/design/favicons/favicon.ico" type="image/x-icon">		
<link rel="manifest" href="/components/design/favicons/manifest.json">
<link rel="shortcut icon" href="/components/design/favicons/favicon.ico" type="image/x-icon">
<meta name="msapplication-TileImage" content="/components/design/favicons/ms-icon-144x144.png">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="theme-color" content="#ffffff">	



<?php
if(!isset($_SESSION)){session_start();}

if($_SERVER['SERVER_PORT'] == '8888'){
    echo "
        <meta http-equiv='cache-control' content='max-age=0' />
        <meta http-equiv='cache-control' content='no-cache' />
        <meta http-equiv='expires' content='0' />
        <meta http-equiv='expires' content='Tue, 01 Jan 1980 1:00:00 GMT' />
        <meta http-equiv='pragma' content='no-cache' />
    ";
}

?>