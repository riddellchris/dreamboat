<?php
require $_SERVER['DOCUMENT_ROOT']."/components/functions/html/start_style_tag.php";
start_style_tag();
?>
	.knowledge_image{		display:	inline-block;	}
	.knowlegebase_image_div{	width:		100%;
					text-align:	center;}

	//old color theme
	//.left{	background-color: #C9DAF8;	}	
	.left{	background-color: #ffe0e0;	}
	.right{	
		//font-family: Barlow Semi Condensed;
		font-family: Helvetica;		
		padding-top:12px;
		padding-left: 1vw;
		padding-right: 1vw;
		}	
	#knowledgebase_breadcrumbs{
		text-transform:uppercase;
	}

	p{font-family: Helvetica;}

	@media print {
		.left{display:none;}	
		.right{	margin-left:2vw; margin-right: 2vw;
				width: 96vw;
				height:100vh;
		}
		#knowledgebase_breadcrumbs{
			display: none;
		}		
	}


	@media only screen and (min-width: 768px) {
		.left{	overflow-y: auto;
			width:25vw;
			height:  calc(100vh - 90px);
			float:left;
			//box-shadow: 10px 0 5px -2px #888;
			position: fixed;
		}
		.right{	margin-left:25vw;
			width:71vw;
			height:100vh;
		}
		#knowledgebase_breadcrumbs{
			display: none;
		}	
	}
	@media only screen and (max-width: 768px) {	
		.left{	width:100vw;
			float: none;
			box-shadow: none;
			position: unset;
			display: none;
			height: 100vh;
		}
		.right{	margin-left:0vw;
			width: 98vw;
			height:100vh;
		}
		#knowledgebase_breadcrumbs{
			display: inline-block;
		}
	}	


	
	#knowledgebase_breadcrumbs{
				background-color: #C9DAF8;
				width:100vw;
				margin-left: -1vw;
				margin-right: -1vw;
				margin-top: -12px;
				padding-top: 12px;
				padding-bottom: 12px;
	}
	.breadcrumb_links{
				clear: left;
				float: left;  
				background-color: #99beff;
				color: #4332ff;
				font-weight: 700;
				padding: 1vh 1vw;	  
	    }
	    
	    
	.can_select:hover{background-color: red;}
</style>