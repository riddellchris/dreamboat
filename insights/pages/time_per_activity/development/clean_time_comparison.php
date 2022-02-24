<?php



$date[1] = new DateTime($response['timeEntries'][$i]['duration']['startedAt']);
$date[1] = $date[1] -> format('U');
$date[2] = new DateTime($response['timeEntries'][$i]['duration']['stoppedAt']);
$date[2] = $date[2] -> format('U');
$gap = $date[2] - $date[1]; 

