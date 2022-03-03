<?php
if(!isset($_SESSION)){session_start();}


echo "<style>
			.highlights_package{
				color: ".$_SESSION['masked_domain_primary_colour'].";
				padding-top: 11vh;
			}
			.highlights_number{
				font-family: Barlow Semi Condensed;
				font-size: 5em;
				color: ".$_SESSION['masked_domain_primary_colour'].";
			}

			.highlights_text{
				color: ".$_SESSION['masked_domain_primary_colour'].";
				font-family: Comfortaa;	
				font-size: 3em;
			}
		</style>
	";