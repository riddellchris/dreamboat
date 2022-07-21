<?php
if(!isset($_SESSION)){session_start();}

echo "
['Month',         'Dollars', { role: 'annotation' }],
['Website',       450,        '450'],    
['Other',         450,        '450'],
['Wholesale',     288,        '288'],
['Distribution',  288,        '288']
";

$sub_title = "Dummy data only";

$legend = "colors: ['#f6b26b', '#3c78d8', 'green', 'red']";