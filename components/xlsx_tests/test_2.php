<?php
//https://github.com/shuchkin/simplexlsxgen
require $_SERVER['DOCUMENT_ROOT']."/components/xlsx_tests/SimpleXLSXGen.php";

$data = [
    ['Integer','' ,123],
    ['Float','2' , 12.35],
    ['Percent','' , '12%'],
    ['Datetime','' , '2020-05-20 02:38:00'],
    ['Date','' ,'2020-05-20'],
    ['Time','2' ,'02:38:00'],
    ['Datetime PHP','' , new DateTime('2021-02-06 21:07:00')],
    ['String','' , 'Long UTF-8 String in autoresized column'],
    ['Hyperlink','' , 'https://github.com/shuchkin/simplexlsxgen'],
    ['Hyperlink + Anchor','' , '<a href="https://github.com/shuchkin/simplexlsxgen">SimpleXLSXGen</a>'],
    ['RAW string', '' ,"\0".'2020-10-04 16:02:00']
];
$xlsx = Shuchkin\SimpleXLSXGen::fromArray( $data );
$xlsx->saveAs('books.xlsx'); // or downloadAs('books.xlsx') or $xlsx_content = (string) $xlsx 
$xlsx->downloadAs('books_2021.xlsx');
exit();