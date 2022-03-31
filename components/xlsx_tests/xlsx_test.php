<?php





 $export = '
 <table> 
 <tr> 
 <th> id </th>
 <th>firstname</th> 
 <th>lastname</th> 
 <th>dob</th> 
 </tr>
 ';

 $export .= '
 <tr>
 <td>312321</td> 
 <td>Chris</td> 
 <td>Riddell</td> 
 <td>18/06/1986</td> 
 
 
 </tr>
 ';
 
 $export .= '</table>';
 header('Content-Type: application/xlsx');
 header('Content-Disposition: attachment; filename=info.xlsx');
 echo $export;
 
