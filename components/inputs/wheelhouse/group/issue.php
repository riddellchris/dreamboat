<?php
if(!isset($_SESSION)){session_start();}
?>

<select name = 'wheelhouse_group'>
  <option <?php if($_SESSION['menu_set_wheelhouse_group_issues'] == 'all'	){echo 'selected';} ?> value=""	>please select</option>	
  <option <?php if($_SESSION['menu_set_wheelhouse_group_issues'] == 'critical'	){echo 'selected';} ?> value="critical"	>here</option>
  <option <?php if($_SESSION['menu_set_wheelhouse_group_issues'] == 'urgent'	){echo 'selected';} ?> value="urgent"	>near</option>
  <option <?php if($_SESSION['menu_set_wheelhouse_group_issues'] == 'strategic'	){echo 'selected';} ?> value="strategic"	>far</option>
  <option <?php if($_SESSION['menu_set_wheelhouse_group_issues'] == 'concerns'	){echo 'selected';} ?> value="concerns"	>distant</option>

</select>

