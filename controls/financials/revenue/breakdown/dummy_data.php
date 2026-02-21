<?php
if(!isset($_SESSION)){session_start();}

echo "['Month',     'Website', { role: 'annotation' }, 'Wholesale', { role: 'annotation' }, 'Distribution', { role: 'annotation' }, 'Other', { role: 'annotation' }],";
echo "
['Dec 21',  450,  '450',  614.6,  '614',  614.6, '614', 614.6, '614'],          
['Jan 22',  450,  '450',  614.6,  '614',  614.6, '614', 614.6, '614'],
['Feb 22',  288,  '288',  682,    '682',  614.6, '614', 614.6, '614'],
['Mar 22',  397,  '397',  623,    '623',  614.6, '614', 614.6, '614'],
['Apr 22',  215,  '215',  609.4,  '609',  614.6, '614', 614.6, '614'],
['May 22',  366,  '366',  569.6,  '569',  614.6, '614', 614.6, '614']
";

$sub_title = "Dummy data only";