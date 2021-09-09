<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/layout/pre_content.php";

paragraph_detailed('no', 10, 8, 9, "While typically associated with childhood behaviour, positive re-inforcement in productivity improvement is just as much about encouragement as it is enabling some sense of progress such that attempts to improve productivity are not deemed futile by each and every individual.");

paragraph_detailed('no', 8, 8, 9, "When no way to improve productivity is possible, no way to have control over said productivity and/or no recognition for productivity improvements are provided then productivity like any behivour grinds to a halt.");

paragraph_detailed('yes', 8, 8, 9, "However when simple progress is made, feedback is given and ultmilately a person's life improves as a result of this improved productivity it will continue to occur.");		
		
require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/layout/post_content.php";