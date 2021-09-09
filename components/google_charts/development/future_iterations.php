<?php
if(!isset($_SESSION)){session_start();}

CR 20.08.30
There is a print issue with google charts		<<< solved most likely by slowly reading this:   https://developers.google.com/chart/interactive/docs/printing				
Probably need to display and then add class to hide so at least it loads and then hides as appropriate... it's something about going to google default size to be honest						


development_notes_as_we_go("Chris Riddell","20.08.21",
	"As building /legal/prospectus/ it seems pretty likely, if not inevitable that a whole lot of charts are going to be built so a simple system will occur to create and build and load them all up");