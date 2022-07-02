<?php
if(!isset($_SESSION)){session_start();}

echo "<style>";

require $_SERVER['DOCUMENT_ROOT']."/reporting/components/print_width_setup.php";

echo"
.chart_row td{width: 50%; height: 22.5vh;}
.print_link{
    font-family: helvetica;
    margin-top: 30px;

    font-weight: 800;
}

.google_charts_print{
    width:100%;
    height:100%;
}

.title_blocks{
    width: calc(100%/3);
}

table{
    font-family: Barlow Semi Condensed;

}

@media print {
    #reporting_notes{
       box-shadow: none;
   }
}
</style>";