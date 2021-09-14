<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";

$sql = "SELECT timezone_id FROM user_work_schedules WHERE user_id = '".mysqli_real_escape_string($conn, $_SESSION['user_id'])."'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
$selected_timezone = $row['timezone_id'];

?>

<style>
@media screen and (max-width: 600px){.timezone{font-size: 10px;}}
@media screen and (min-width: 600px){.timezone{font-size: 18px;}}
</style>

<select name='timezone_id' class='timezone'>
	<option <?php if($selected_timezone==1){echo 'selected';} ?> value="1" gmtAdjustment="GMT-12:00" useDaylightTime="0" decimal_GMT_adjustment="-12">(GMT-12:00) International Date Line West</option>
	<option <?php if($selected_timezone==2){echo 'selected';} ?>  value="2" gmtAdjustment="GMT-11:00" useDaylightTime="0" decimal_GMT_adjustment="-11">(GMT-11:00) Midway Island, Samoa</option>
	<option <?php if($selected_timezone==3){echo 'selected';} ?>  value="3" gmtAdjustment="GMT-10:00" useDaylightTime="0" decimal_GMT_adjustment="-10">(GMT-10:00) Hawaii</option>
	<option <?php if($selected_timezone==4){echo 'selected';} ?>  value="4" gmtAdjustment="GMT-09:00" useDaylightTime="1" decimal_GMT_adjustment="-9">(GMT-09:00) Alaska</option>
	<option <?php if($selected_timezone==5){echo 'selected';} ?>  value="5" gmtAdjustment="GMT-08:00" useDaylightTime="1" decimal_GMT_adjustment="-8">(GMT-08:00) Pacific Time (US & Canada)</option>
	<option <?php if($selected_timezone==6){echo 'selected';} ?>  value="6" gmtAdjustment="GMT-08:00" useDaylightTime="1" decimal_GMT_adjustment="-8">(GMT-08:00) Tijuana, Baja California</option>
	<option <?php if($selected_timezone==7){echo 'selected';} ?>  value="7" gmtAdjustment="GMT-07:00" useDaylightTime="0" decimal_GMT_adjustment="-7">(GMT-07:00) Arizona</option>
	<option <?php if($selected_timezone==8){echo 'selected';} ?>  value="8" gmtAdjustment="GMT-07:00" useDaylightTime="1" decimal_GMT_adjustment="-7">(GMT-07:00) Chihuahua, La Paz, Mazatlan</option>
	<option <?php if($selected_timezone==9){echo 'selected';} ?>  value="9" gmtAdjustment="GMT-07:00" useDaylightTime="1" decimal_GMT_adjustment="-7">(GMT-07:00) Mountain Time (US & Canada)</option>
	<option <?php if($selected_timezone==10){echo 'selected';} ?>  value="10" gmtAdjustment="GMT-06:00" useDaylightTime="0" decimal_GMT_adjustment="-6">(GMT-06:00) Central America</option>
	<option <?php if($selected_timezone==11){echo 'selected';} ?>  value="11" gmtAdjustment="GMT-06:00" useDaylightTime="1" decimal_GMT_adjustment="-6">(GMT-06:00) Central Time (US & Canada)</option>
	<option <?php if($selected_timezone==12){echo 'selected';} ?>  value="12" gmtAdjustment="GMT-06:00" useDaylightTime="1" decimal_GMT_adjustment="-6">(GMT-06:00) Guadalajara, Mexico City, Monterrey</option>
	<option <?php if($selected_timezone==13){echo 'selected';} ?>  value="13" gmtAdjustment="GMT-06:00" useDaylightTime="0" decimal_GMT_adjustment="-6">(GMT-06:00) Saskatchewan</option>
	<option <?php if($selected_timezone==14){echo 'selected';} ?>  value="14" gmtAdjustment="GMT-05:00" useDaylightTime="0" decimal_GMT_adjustment="-5">(GMT-05:00) Bogota, Lima, Quito, Rio Branco</option>
	<option <?php if($selected_timezone==15){echo 'selected';} ?>  value="15" gmtAdjustment="GMT-05:00" useDaylightTime="1" decimal_GMT_adjustment="-5">(GMT-05:00) Eastern Time (US & Canada)</option>
	<option <?php if($selected_timezone==16){echo 'selected';} ?>  value="16" gmtAdjustment="GMT-05:00" useDaylightTime="1" decimal_GMT_adjustment="-5">(GMT-05:00) Indiana (East)</option>
	<option <?php if($selected_timezone==17){echo 'selected';} ?>  value="17" gmtAdjustment="GMT-04:00" useDaylightTime="1" decimal_GMT_adjustment="-4">(GMT-04:00) Atlantic Time (Canada)</option>
	<option <?php if($selected_timezone==18){echo 'selected';} ?>  value="18" gmtAdjustment="GMT-04:00" useDaylightTime="0" decimal_GMT_adjustment="-4">(GMT-04:00) Caracas, La Paz</option>
	<option <?php if($selected_timezone==19){echo 'selected';} ?>  value="19" gmtAdjustment="GMT-04:00" useDaylightTime="0" decimal_GMT_adjustment="-4">(GMT-04:00) Manaus</option>
	<option <?php if($selected_timezone==20){echo 'selected';} ?>  value="20" gmtAdjustment="GMT-04:00" useDaylightTime="1" decimal_GMT_adjustment="-4">(GMT-04:00) Santiago</option>
	<option <?php if($selected_timezone==21){echo 'selected';} ?>  value="21" gmtAdjustment="GMT-03:30" useDaylightTime="1" decimal_GMT_adjustment="-3.5">(GMT-03:30) Newfoundland</option>
	<option <?php if($selected_timezone==22){echo 'selected';} ?>  value="22" gmtAdjustment="GMT-03:00" useDaylightTime="1" decimal_GMT_adjustment="-3">(GMT-03:00) Brasilia</option>
	<option <?php if($selected_timezone==23){echo 'selected';} ?>  value="23" gmtAdjustment="GMT-03:00" useDaylightTime="0" decimal_GMT_adjustment="-3">(GMT-03:00) Buenos Aires, Georgetown</option>
	<option <?php if($selected_timezone==24){echo 'selected';} ?>  value="24" gmtAdjustment="GMT-03:00" useDaylightTime="1" decimal_GMT_adjustment="-3">(GMT-03:00) Greenland</option>
	<option <?php if($selected_timezone==25){echo 'selected';} ?>  value="25" gmtAdjustment="GMT-03:00" useDaylightTime="1" decimal_GMT_adjustment="-3">(GMT-03:00) Montevideo</option>
	<option <?php if($selected_timezone==26){echo 'selected';} ?>  value="26" gmtAdjustment="GMT-02:00" useDaylightTime="1" decimal_GMT_adjustment="-2">(GMT-02:00) Mid-Atlantic</option>
	<option <?php if($selected_timezone==27){echo 'selected';} ?>  value="27" gmtAdjustment="GMT-01:00" useDaylightTime="0" decimal_GMT_adjustment="-1">(GMT-01:00) Cape Verde Is.</option>
	<option <?php if($selected_timezone==28){echo 'selected';} ?>  value="28" gmtAdjustment="GMT-01:00" useDaylightTime="1" decimal_GMT_adjustment="-1">(GMT-01:00) Azores</option>
	<option <?php if($selected_timezone==29){echo 'selected';} ?>  value="29" gmtAdjustment="GMT+00:00" useDaylightTime="0" decimal_GMT_adjustment="0">(GMT+00:00) Casablanca, Monrovia, Reykjavik</option>
	<option <?php if($selected_timezone==30){echo 'selected';} ?>  value="30" gmtAdjustment="GMT+00:00" useDaylightTime="1" decimal_GMT_adjustment="0">(GMT+00:00) Greenwich Mean Time : Dublin, Edinburgh, Lisbon, London</option>
	<option <?php if($selected_timezone==31){echo 'selected';} ?>  value="31" gmtAdjustment="GMT+01:00" useDaylightTime="1" decimal_GMT_adjustment="1">(GMT+01:00) Amsterdam, Berlin, Bern, Rome, Stockholm, Vienna</option>
	<option <?php if($selected_timezone==32){echo 'selected';} ?>  value="32" gmtAdjustment="GMT+01:00" useDaylightTime="1" decimal_GMT_adjustment="1">(GMT+01:00) Belgrade, Bratislava, Budapest, Ljubljana, Prague</option>
	<option <?php if($selected_timezone==33){echo 'selected';} ?>  value="33" gmtAdjustment="GMT+01:00" useDaylightTime="1" decimal_GMT_adjustment="1">(GMT+01:00) Brussels, Copenhagen, Madrid, Paris</option>
	<option <?php if($selected_timezone==34){echo 'selected';} ?>  value="34" gmtAdjustment="GMT+01:00" useDaylightTime="1" decimal_GMT_adjustment="1">(GMT+01:00) Sarajevo, Skopje, Warsaw, Zagreb</option>
	<option <?php if($selected_timezone==35){echo 'selected';} ?>  value="35" gmtAdjustment="GMT+01:00" useDaylightTime="1" decimal_GMT_adjustment="1">(GMT+01:00) West Central Africa</option>
	<option <?php if($selected_timezone==36){echo 'selected';} ?>  value="36" gmtAdjustment="GMT+02:00" useDaylightTime="1" decimal_GMT_adjustment="2">(GMT+02:00) Amman</option>
	<option <?php if($selected_timezone==37){echo 'selected';} ?>  value="37" gmtAdjustment="GMT+02:00" useDaylightTime="1" decimal_GMT_adjustment="2">(GMT+02:00) Athens, Bucharest, Istanbul</option>
	<option <?php if($selected_timezone==38){echo 'selected';} ?>  value="38" gmtAdjustment="GMT+02:00" useDaylightTime="1" decimal_GMT_adjustment="2">(GMT+02:00) Beirut</option>
	<option <?php if($selected_timezone==39){echo 'selected';} ?>  value="39" gmtAdjustment="GMT+02:00" useDaylightTime="1" decimal_GMT_adjustment="2">(GMT+02:00) Cairo</option>
	<option <?php if($selected_timezone==40){echo 'selected';} ?>  value="40" gmtAdjustment="GMT+02:00" useDaylightTime="0" decimal_GMT_adjustment="2">(GMT+02:00) Harare, Pretoria</option>
	<option <?php if($selected_timezone==41){echo 'selected';} ?>  value="41" gmtAdjustment="GMT+02:00" useDaylightTime="1" decimal_GMT_adjustment="2">(GMT+02:00) Helsinki, Kyiv, Riga, Sofia, Tallinn, Vilnius</option>
	<option <?php if($selected_timezone==42){echo 'selected';} ?>  value="42" gmtAdjustment="GMT+02:00" useDaylightTime="1" decimal_GMT_adjustment="2">(GMT+02:00) Jerusalem</option>
	<option <?php if($selected_timezone==43){echo 'selected';} ?>  value="43" gmtAdjustment="GMT+02:00" useDaylightTime="1" decimal_GMT_adjustment="2">(GMT+02:00) Minsk</option>
	<option <?php if($selected_timezone==44){echo 'selected';} ?>  value="44" gmtAdjustment="GMT+02:00" useDaylightTime="1" decimal_GMT_adjustment="2">(GMT+02:00) Windhoek</option>
	<option <?php if($selected_timezone==45){echo 'selected';} ?>  value="45" gmtAdjustment="GMT+03:00" useDaylightTime="0" decimal_GMT_adjustment="3">(GMT+03:00) Kuwait, Riyadh, Baghdad</option>
	<option <?php if($selected_timezone==46){echo 'selected';} ?>  value="46" gmtAdjustment="GMT+03:00" useDaylightTime="1" decimal_GMT_adjustment="3">(GMT+03:00) Moscow, St. Petersburg, Volgograd</option>
	<option <?php if($selected_timezone==47){echo 'selected';} ?>  value="47" gmtAdjustment="GMT+03:00" useDaylightTime="0" decimal_GMT_adjustment="3">(GMT+03:00) Nairobi</option>
	<option <?php if($selected_timezone==48){echo 'selected';} ?>  value="48" gmtAdjustment="GMT+03:00" useDaylightTime="0" decimal_GMT_adjustment="3">(GMT+03:00) Tbilisi</option>
	<option <?php if($selected_timezone==49){echo 'selected';} ?>  value="49" gmtAdjustment="GMT+03:30" useDaylightTime="1" decimal_GMT_adjustment="3.5">(GMT+03:30) Tehran</option>
	<option <?php if($selected_timezone==50){echo 'selected';} ?>  value="50" gmtAdjustment="GMT+04:00" useDaylightTime="0" decimal_GMT_adjustment="4">(GMT+04:00) Abu Dhabi, Muscat</option>
	<option <?php if($selected_timezone==51){echo 'selected';} ?>  value="51" gmtAdjustment="GMT+04:00" useDaylightTime="1" decimal_GMT_adjustment="4">(GMT+04:00) Baku</option>
	<option <?php if($selected_timezone==52){echo 'selected';} ?>  value="52" gmtAdjustment="GMT+04:00" useDaylightTime="1" decimal_GMT_adjustment="4">(GMT+04:00) Yerevan</option>
	<option <?php if($selected_timezone==53){echo 'selected';} ?>  value="53" gmtAdjustment="GMT+04:30" useDaylightTime="0" decimal_GMT_adjustment="4.5">(GMT+04:30) Kabul</option>
	<option <?php if($selected_timezone==54){echo 'selected';} ?>  value="54" gmtAdjustment="GMT+05:00" useDaylightTime="1" decimal_GMT_adjustment="5">(GMT+05:00) Yekaterinburg</option>
	<option <?php if($selected_timezone==55){echo 'selected';} ?>  value="55" gmtAdjustment="GMT+05:00" useDaylightTime="0" decimal_GMT_adjustment="5">(GMT+05:00) Islamabad, Karachi, Tashkent</option>
	<option <?php if($selected_timezone==56){echo 'selected';} ?>  value="56" gmtAdjustment="GMT+05:30" useDaylightTime="0" decimal_GMT_adjustment="5.5">(GMT+05:30) Sri Jayawardenapura</option>
	<option <?php if($selected_timezone==57){echo 'selected';} ?>  value="57" gmtAdjustment="GMT+05:30" useDaylightTime="0" decimal_GMT_adjustment="5.5">(GMT+05:30) Chennai, Kolkata, Mumbai, New Delhi</option>
	<option <?php if($selected_timezone==58){echo 'selected';} ?>  value="58" gmtAdjustment="GMT+05:45" useDaylightTime="0" decimal_GMT_adjustment="5.75">(GMT+05:45) Kathmandu</option>
	<option <?php if($selected_timezone==59){echo 'selected';} ?>  value="59" gmtAdjustment="GMT+06:00" useDaylightTime="1" decimal_GMT_adjustment="6">(GMT+06:00) Almaty, Novosibirsk</option>
	<option <?php if($selected_timezone==60){echo 'selected';} ?>  value="60" gmtAdjustment="GMT+06:00" useDaylightTime="0" decimal_GMT_adjustment="6">(GMT+06:00) Astana, Dhaka</option>
	<option <?php if($selected_timezone==61){echo 'selected';} ?>  value="61" gmtAdjustment="GMT+06:30" useDaylightTime="0" decimal_GMT_adjustment="6.5">(GMT+06:30) Yangon (Rangoon)</option>
	<option <?php if($selected_timezone==62){echo 'selected';} ?>  value="62" gmtAdjustment="GMT+07:00" useDaylightTime="0" decimal_GMT_adjustment="7">(GMT+07:00) Bangkok, Hanoi, Jakarta</option>
	<option <?php if($selected_timezone==63){echo 'selected';} ?>  value="63" gmtAdjustment="GMT+07:00" useDaylightTime="1" decimal_GMT_adjustment="7">(GMT+07:00) Krasnoyarsk</option>
	<option <?php if($selected_timezone==64){echo 'selected';} ?>  value="64" gmtAdjustment="GMT+08:00" useDaylightTime="0" decimal_GMT_adjustment="8">(GMT+08:00) Beijing, Chongqing, Hong Kong, Urumqi</option>
	<option <?php if($selected_timezone==65){echo 'selected';} ?>  value="65" gmtAdjustment="GMT+08:00" useDaylightTime="0" decimal_GMT_adjustment="8">(GMT+08:00) Kuala Lumpur, Singapore</option>
	<option <?php if($selected_timezone==66){echo 'selected';} ?>  value="66" gmtAdjustment="GMT+08:00" useDaylightTime="0" decimal_GMT_adjustment="8">(GMT+08:00) Irkutsk, Ulaan Bataar</option>
	<option <?php if($selected_timezone==67){echo 'selected';} ?>  value="67" gmtAdjustment="GMT+08:00" useDaylightTime="0" decimal_GMT_adjustment="8">(GMT+08:00) Perth</option>
	<option <?php if($selected_timezone==68){echo 'selected';} ?>  value="68" gmtAdjustment="GMT+08:00" useDaylightTime="0" decimal_GMT_adjustment="8">(GMT+08:00) Taipei</option>
	<option <?php if($selected_timezone==69){echo 'selected';} ?>  value="69" gmtAdjustment="GMT+09:00" useDaylightTime="0" decimal_GMT_adjustment="9">(GMT+09:00) Osaka, Sapporo, Tokyo</option>
	<option <?php if($selected_timezone==70){echo 'selected';} ?>  value="70" gmtAdjustment="GMT+09:00" useDaylightTime="0" decimal_GMT_adjustment="9">(GMT+09:00) Seoul</option>
	<option <?php if($selected_timezone==71){echo 'selected';} ?>  value="71" gmtAdjustment="GMT+09:00" useDaylightTime="1" decimal_GMT_adjustment="9">(GMT+09:00) Yakutsk</option>
	<option <?php if($selected_timezone==72){echo 'selected';} ?>  value="72" gmtAdjustment="GMT+09:30" useDaylightTime="0" decimal_GMT_adjustment="9.5">(GMT+09:30) Adelaide</option>
	<option <?php if($selected_timezone==73){echo 'selected';} ?>  value="73" gmtAdjustment="GMT+09:30" useDaylightTime="0" decimal_GMT_adjustment="9.5">(GMT+09:30) Darwin</option>
	<option <?php if($selected_timezone==74){echo 'selected';} ?>  value="74" gmtAdjustment="GMT+10:00" useDaylightTime="0" decimal_GMT_adjustment="10">(GMT+10:00) Brisbane</option>
	<option <?php if($selected_timezone==75){echo 'selected';} ?>  value="75" gmtAdjustment="GMT+10:00" useDaylightTime="1" decimal_GMT_adjustment="10">(GMT+10:00) Canberra, Melbourne, Sydney</option>
	<option <?php if($selected_timezone==76){echo 'selected';} ?>  value="76" gmtAdjustment="GMT+10:00" useDaylightTime="1" decimal_GMT_adjustment="10">(GMT+10:00) Hobart</option>
	<option <?php if($selected_timezone==77){echo 'selected';} ?>  value="77" gmtAdjustment="GMT+10:00" useDaylightTime="0" decimal_GMT_adjustment="10">(GMT+10:00) Guam, Port Moresby</option>
	<option <?php if($selected_timezone==78){echo 'selected';} ?>  value="78" gmtAdjustment="GMT+10:00" useDaylightTime="1" decimal_GMT_adjustment="10">(GMT+10:00) Vladivostok</option>
	<option <?php if($selected_timezone==79){echo 'selected';} ?>  value="79" gmtAdjustment="GMT+11:00" useDaylightTime="1" decimal_GMT_adjustment="11">(GMT+11:00) Magadan, Solomon Is., New Caledonia</option>
	<option <?php if($selected_timezone==80){echo 'selected';} ?>  value="80" gmtAdjustment="GMT+12:00" useDaylightTime="1" decimal_GMT_adjustment="12">(GMT+12:00) Auckland, Wellington</option>
	<option <?php if($selected_timezone==81){echo 'selected';} ?>  value="81" gmtAdjustment="GMT+12:00" useDaylightTime="0" decimal_GMT_adjustment="12">(GMT+12:00) Fiji, Kamchatka, Marshall Is.</option>
	<option <?php if($selected_timezone==82){echo 'selected';} ?>  value="82" gmtAdjustment="GMT+13:00" useDaylightTime="0" decimal_GMT_adjustment="13">(GMT+13:00) Nuku'alofa</option>
</select>											
