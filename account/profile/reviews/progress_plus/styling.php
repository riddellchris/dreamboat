<?php

echo"

<style>
table{
       table-layout: fixed;
        background-color:transparent;       
        width:100%;
    }
td{padding: 0px;}    
.Title{
	display: table-caption;
	text-align: center;
	font-weight: bold;
	font-size: larger;
}  
.full-word-heading{
        font-weight: bold;
        text-align: center;
        background-color:transparent;
        color:white;
        text-transform:uppercase;
        font-family: Helvetica;
	    font-weight: 700;
	    color:#281e96;
    }
.broken-word-heading{
	font-weight: bold;
	text-align: center;
	background-color:transparent;
	color:white;
	text-transform:uppercase;
	font-family: Helvetica;
	    font-weight: 700;
	    color:#281e96;
}


@media screen and (min-width: 900px){
	.full-description{display: inline-block;}
	.brief-description{display: none;}
	.full-word-heading{font-size:medium;}
	.broken-word-heading{display:none;}
	
	}    
@media screen and (max-width: 900px){
	.full-description{ display: none;}
	.brief-description{display: inline-block;}
	.comment_cell{padding: 75px 30px;}
}
@media screen and (max-width: 900px) and (min-width: 600px){
	.broken-word-heading{font-size:small;}
	.full-word-heading{display:none;}
	.comment_cell{padding: 75px 20px;}
	} 
@media screen and (max-width: 600px){
	.broken-word-heading{ font-size:xx-small;}
	.full-word-heading{display:none;}
	.comment_cell{padding: 75px 10px;}
	} 



.Row{       
        display: table-row;
    }

.comment_row{
	width:100%;
	font-family:helvetica;
	font-size:18px;
	padding-top:7px;
	min-height:50px;
}  
    
.comment_cell{
//background-image: linear-gradient(to bottom,#bfe3ff,#0090ff);
//background-color:#bfe3ff;
    display: none;
    color: white;
}

.standard_cell{
   font-family:helvetica;
   font-size:18px;
   text-align:center;
   -moz-box-shadow:    inset 0 0 3px #281e96;
   -webkit-box-shadow: inset 0 0 3px #281e96;
   box-shadow:         inset 0 0 3px #281e96;
}

@media screen and (max-width: 400px)				{.standard_cell{height:40px;}}
@media screen and (max-width: 600px) 	and (min-width: 400px)	{.standard_cell{height:40px;}}
@media screen and (max-width: 800px) 	and (min-width: 600px)	{.standard_cell{height:50px;}}
@media screen and (max-width: 1000px) 	and (min-width: 800px)	{.standard_cell{height:60px;}}
@media screen and (max-width: 1200px) 	and (min-width: 1000px)	{.standard_cell{height:70px;}}
@media screen and (min-width: 1200px)				{.standard_cell{height:80px;}}
    
.no_entry	{background-color: #ffffff; 	color: #cecece;}    
.plus_five	{background-color: #017c0d; 	color: #ffffff;}    
.plus_four	{background-color: #21b72f; 	color: #ffffff;}   
.plus_three	{background-color: #27ce36; 	color: #ffffff;}   
.plus_two	{background-color: #93ff9b; 	color: #034c0a;}       
.plus_one	{background-color: #d6ffd9; 	color: #034c0a;} 
.zero		{background-color: #ffffff;     color: #281e96;} 
.minus_one	{background-color: #ffdbdb; 	color: #910e0e;} 
.minus_two	{background-color: #ffaaaa; 	color: #910e0e;} 
.minus_three	{background-color: #ff6363; 	color: #ffffff;} 
.minus_four	{background-color: #d83131; 	color: #ffffff;} 
.minus_five	{background-color: #910e0e; 	color: #ffffff;}    
    
.plus_five:hover	{background-color: #bfe3ff; color: white;}    
.plus_four:hover	{background-color: #bfe3ff; color: white;}   
.plus_three:hover	{background-color: #bfe3ff; color: white;}   
.plus_two:hover		{background-color: #bfe3ff; color: white;}       
.plus_one:hover		{background-color: #bfe3ff; color: white;} 
.zero:hover		{background-color: #bfe3ff; color: white;} 
.minus_one:hover	{background-color: #bfe3ff; color: white;} 
.minus_two:hover	{background-color: #bfe3ff; color: white;} 
.minus_three:hover	{background-color: #bfe3ff; color: white;} 
.minus_four:hover	{background-color: #bfe3ff; color: white;} 
.minus_five:hover	{background-color: #bfe3ff; color: white;} 

.plus_five.pressed	{background-color: #bfe3ff; color: white;-moz-box-shadow:    inset 0 0 0px #281e96; -webkit-box-shadow: inset 0 0 0px #281e96;    box-shadow:      inset 0 0 0px #281e96;}    
.plus_four.pressed	{background-color: #bfe3ff; color: white;-moz-box-shadow:    inset 0 0 0px #281e96; -webkit-box-shadow: inset 0 0 0px #281e96;    box-shadow:      inset 0 0 0px #281e96;}   
.plus_three.pressed	{background-color: #bfe3ff; color: white;-moz-box-shadow:    inset 0 0 0px #281e96; -webkit-box-shadow: inset 0 0 0px #281e96;    box-shadow:      inset 0 0 0px #281e96;}   
.plus_two.pressed	{background-color: #bfe3ff; color: white;-moz-box-shadow:    inset 0 0 0px #281e96; -webkit-box-shadow: inset 0 0 0px #281e96;    box-shadow:      inset 0 0 0px #281e96;}       
.plus_one.pressed	{background-color: #bfe3ff; color: white;-moz-box-shadow:    inset 0 0 0px #281e96; -webkit-box-shadow: inset 0 0 0px #281e96;    box-shadow:      inset 0 0 0px #281e96;} 
.zero.pressed		{background-color: #bfe3ff; color: white;-moz-box-shadow:    inset 0 0 0px #281e96; -webkit-box-shadow: inset 0 0 0px #281e96;    box-shadow:      inset 0 0 0px #281e96;} 
.minus_one.pressed	{background-color: #bfe3ff; color: white;-moz-box-shadow:    inset 0 0 0px #281e96; -webkit-box-shadow: inset 0 0 0px #281e96;    box-shadow:      inset 0 0 0px #281e96;} 
.minus_two.pressed	{background-color: #bfe3ff; color: white;-moz-box-shadow:    inset 0 0 0px #281e96; -webkit-box-shadow: inset 0 0 0px #281e96;    box-shadow:      inset 0 0 0px #281e96;} 
.minus_three.pressed	{background-color: #bfe3ff; color: white;-moz-box-shadow:    inset 0 0 0px #281e96; -webkit-box-shadow: inset 0 0 0px #281e96;    box-shadow:      inset 0 0 0px #281e96;} 
.minus_four.pressed	{background-color: #bfe3ff; color: white;-moz-box-shadow:    inset 0 0 0px #281e96; -webkit-box-shadow: inset 0 0 0px #281e96;    box-shadow:      inset 0 0 0px #281e96;} 
.minus_five.pressed	{background-color: #bfe3ff; color: white;-moz-box-shadow:    inset 0 0 0px #281e96; -webkit-box-shadow: inset 0 0 0px #281e96;    box-shadow:      inset 0 0 0px #281e96;} 
</style> ";

?>