<?php
if(!isset($_SESSION)){session_start();}

if(!isset($_SESSION['sales']['worksheets']['client_product_matrix']['specific_view'])){
    require $_SERVER['DOCUMENT_ROOT']."/components/sub_menus/views/defaults.php";
}




header("Location: /sales/worksheets/client_product_matrix/".$_SESSION['sales']['worksheets']['client_product_matrix']['specific_view']."/index.php");
exit();
