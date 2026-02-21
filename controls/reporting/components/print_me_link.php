<?php
if(!isset($_SESSION)){session_start();}

if($_GET['tertiary_folder'] != 'print'){
    echo "  <div style='text-align:center; width: 100%;'>
                <a href='/reporting/".$_GET['secondary_folder']."/print/' target='_blank' class='blink_me print_link'>PRINT</a>
            </div>";
}