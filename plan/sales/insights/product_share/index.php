<?php
if(!isset($_SESSION)){session_start();}

if(!isset($_SESSION['sales']['insights']['product_share']['specific_view'])){
    require $_SERVER['DOCUMENT_ROOT']."/components/sub_menus/views/defaults.php";
}




header("Location: /sales/insights/product_share/".$_SESSION['sales']['insights']['product_share']['specific_view']."/index.php");
exit();
