<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/start.php";
require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/spacings/start_of_page_top_of_centering_divs.php";

echo "
<style>
  th{
    font-family: Barlow Semi Condensed, sans-serif;
    text-transform: uppercase;
  }
  td, th{
    padding: 8px;
  }

</style>
";

//these two unsets are only required because obviously further 
if(!is_array($sql)){    unset($sql);}
if(!is_array($result)){ unset($result);}

$sql['api_connections'] = "SELECT * FROM api_connections 
        WHERE user_id = '".$_SESSION['viewing_client_id']."'
        AND originally_connected_successfully = 'yes'
        AND deleted = 'no'
        AND active = 'yes'
        ORDER BY platform_name ASC";
require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";
$result['api_connections'] = mysqli_query($conn, $sql['api_connections']);

//if there are none then a "splash page" is probably required in order to send these people to connect more applications

$number_of_currently_connected_applications = mysqli_num_rows($result['api_connections']);
if($number_of_currently_connected_applications == 0){
  echo "<div colspan='5' class='prompt-font'>";
    echo "<br>";
    echo "You have no connected applications. <br>Click <a style='color:red;' href='/data/apis/'>here</a> to add some.";
  echo "</div>";
}
else{

  echo "<div>";
  //connection table
    //then status of all api connections
    //and their related endpoint status
    echo "<table style='margin: 0 auto;'>";
      echo "<tr>";
        echo "<th>";
          echo "application";
        echo "</th>";
        echo "<th>";
          echo "endpoint";
        echo "</th>";
        echo "<th>";
          echo "status";
        echo "</th>";
        echo "<th>";
          echo "match %";
        echo "</th>";
        echo "<th>";
          echo "activate"; //or if activated simply state that
        echo "</th>";
      echo "</tr>";

    while($row = mysqli_fetch_array($result['api_connections'], MYSQLI_ASSOC)){
      echo "<tr style='font-family:Helvetica;'>";
        echo "<td>";
          echo "<a href='http://".$row['platform_web_address']."' target='_blank' style='color:#4332ff;'>".ucfirst($row['platform_name'])."</a>";
        echo "</td>";

        //now i'm not entirely sure where these endpoints are supposed to be
        //how to store or track them
        //potentially now I should just write them out
        //but in reality this is going to require more than that
        //






      echo "</tr>";
    }
    echo "</table>";
  echo "</div>";

  echo "<br><br><hr style='border-top: 1px solid #4332ff;'><br>";


  echo "<div>";
    //matching table
    echo "<table style='margin: 0 auto;'>";
      echo "<tr>";
        echo "<th>";
        echo "</th>";
        echo "<th colspan ='3' style='background-color:#4332ff;color:white;font-family:Helvetica;font-weight:700;'>";
          echo "Dreamboat";
        echo "</th>";  
        echo "<th>";
        echo "</th>";
      echo "</tr>";
      echo "<tr>";
        echo "<th>";
          echo "application name";
        echo "</th>";
        echo "<th>";
          echo "major category"; //select
                                  //this pretty much based on the database
        echo "</th>";
        echo "<th>";
          echo "minor category"; //select
        echo "</th>";  
        echo "<th>";
          echo "name";
        echo "</th>"; 
        echo "<th>";//select/confirm/edit //no header though just make it like that.
        echo "</th>"; 
      echo "</tr>";















      //so this means that 


    echo "</table>";
  echo "</div>";

}


require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/spacings/end_of_page_bottom_of_centering_divs.php";
require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/end.php";