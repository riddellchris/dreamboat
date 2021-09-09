<!--



	<select 
	<?php
		//for timezone - don't do this because normally you want to adjust more than one thing at a time.
		//but for everything else include on change this form submit
		if($_SERVER['REQUEST_URI'] != "/account/settings/time/"){
			echo "onchange='this.form.submit()'";
		
		}
		
	
	
	?>
	
		name = <?php echo "'".$timename."'";?>>
	  <option <?php if($selected == 'daily'){	echo 'selected';} ?> value="daily"		>Workdaily</option>	
	  <option <?php if($selected == 'weekly'){	echo 'selected';} ?> value="weekly"		>Weekly</option>	
	  <option <?php if($selected == 'fortnightly'){	echo 'selected';} ?> value="fortnightly"	>Fortnightly</option>
	  <option <?php if($selected == 'monthly'){	echo 'selected';} ?> value="monthly"		>Monthly</option>
	  <option <?php if($selected == 'quarterly'){	echo 'selected';} ?> value="quarterly"		>Quarterly</option>
	</select>



-->