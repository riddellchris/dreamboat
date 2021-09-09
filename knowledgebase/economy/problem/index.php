<?php
if(!isset($_SESSION)){session_start();}


//keep this for now,
//clearly it's just a redirect so I don't have to go and change all the old links right now
//CR 20.11.27


header("Location: /knowledgebase/economy/disaster/");
exit();