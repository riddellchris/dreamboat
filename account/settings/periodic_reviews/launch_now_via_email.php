<?php
if(!isset($_SESSION)){session_start();}


//obviously change these to match the actually accurate prompt id and review but this is all that's required
if($_GET['review'] == 'end_of_week_reviews'){$_SESSION['next_prompt_id'] = '339';}
//if($_GET['review'] == 'target_market'){$_SESSION['next_prompt_id'] = '2';}
//if($_GET['review'] == 'target_market'){$_SESSION['next_prompt_id'] = '2';}
//if($_GET['review'] == 'target_market'){$_SESSION['next_prompt_id'] = '2';}
//if($_GET['review'] == 'target_market'){$_SESSION['next_prompt_id'] = '2';}

header("Location: /reviews/questions.php");
exit();