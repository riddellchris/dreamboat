<?php
if(!isset($_SESSION)){session_start();}

echo "
              ['Month',         'Dollars', { role: 'annotation' }],
              ['DB_Website',       450,        '450'],    
              ['DB_Other',         450,        '450'],
              ['DB_Wholesale',     288,        '288'],
              ['DB_Distribution',  288,        '288']
              ";

              $sub_title = "Dummy data for Chris only";

              $legend = "colors: ['#f6b26b', '#3c78d8', 'green', 'red']";