<?php
if(!isset($_SESSION)){session_start();}
?>

<select name = 'wheelhouse_group'>
  <option <?php if($_SESSION['menu_set_wheelhouse_group_dreams'] == 'all'	){echo 'selected';} ?> value=""	>please select</option>	
  <option <?php if($_SESSION['menu_set_wheelhouse_group_dreams'] == 'here'	){echo 'selected';} ?> value="here"	>here</option>
  <option <?php if($_SESSION['menu_set_wheelhouse_group_dreams'] == 'near'	){echo 'selected';} ?> value="near"	>near</option>
  <option <?php if($_SESSION['menu_set_wheelhouse_group_dreams'] == 'far'	){echo 'selected';} ?> value="far"	>far</option>
  <option <?php if($_SESSION['menu_set_wheelhouse_group_dreams'] == 'distant'	){echo 'selected';} ?> value="distant"	>distant</option>
  <option <?php if($_SESSION['menu_set_wheelhouse_group_dreams'] == 'ultimate'	){echo 'selected';} ?> value="ultimate"	>ultimate</option>
</select>

