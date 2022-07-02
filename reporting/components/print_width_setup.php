<?php
if(!isset($_SESSION)){session_start();}

if($_GET['tertiary_folder'] == 'print'){

if($_SESSION['user_id'] == '4397'){ $print_width = '1070px';}
else{ $print_width = '1120px';}

echo "table{width: ".$print_width.";}";
}
else{echo "table{width:100%;}";}