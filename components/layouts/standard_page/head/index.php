<?php
if(!isset($_SESSION)){session_start();}
?>

<head>
    <?php
    require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/head/title.php"; 
    ?>

	<meta name='author' content= 'Dreamboat Enterprises PTY. LTD. - Australia'>

	<!-- nerdy stuff-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<html lang="en" xml:lang="en" xmlns= "http://www.w3.org/1999/xhtml">
	<meta name="google" content="notranslate" />
	<meta http-equiv="Content-Language" content="en">
	<meta charset="UTF-8">
		
	<!-- mobile menu bars -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<?php 
    require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/head/favicon_links.php"; 
    require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/head/font_inclusions.php";    
    ?>
<!--
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
 -->

	<script src="https://kit.fontawesome.com/922d083a4a.js" crossorigin="anonymous"></script>	
	<script type="text/javascript" src="https://www.google.com/jsapi"></script>
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
    <link rel='stylesheet' type='text/css' href='/components/design/base_css/files/2.0.php'>
	
	<?php
    require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/head/script_inclusions.php";
	?>
</head>