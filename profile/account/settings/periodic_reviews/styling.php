<?php
if(!isset($_SESSION)){session_start();}


echo "
<style>
//put the radio style in here...
input[type=radio] {
    -webkit-appearance: radio;
    border: 0px;
    /* width: 100%; */
    height: 1em;
}
.launch{
margin-left:8px;
color:white;
background-color:red;
border: 2px solid black;
padding:6px;
text-decoration:none;
}
.launch:hover{
color: black;
background-color: #fc4242;
}

.launch.email{
color: black;
background-color: #ffb300;
}

.launch.email:hover{
color: black;
background-color: #ff9100;
}


.reviews_table_row{display:table-row; padding-top:10px; padding-bottom:10px;}

.reviews_table_cells{display:table-cell;height:60px;}

</style>

";

?>