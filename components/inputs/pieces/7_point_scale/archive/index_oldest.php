<style>
	.radioGroupBelow label {
	  display: inline-block;
	  text-align: center;
	  margin: 0 0.2em;
	  font-size:22px;
	}
	.radioGroupBelow label input[type="radio"] {
	  display: block;
	  margin: 0.5em auto;
	}
</style>


<div class="radioGroupBelow">
	<label for="option">
		<?php echo $row['5_by_5_negative_5']; ?>
		<input type="radio" name="radio" value='-5'>
	 </label>	
	<label for="option">
		<?php echo $row['5_by_5_negative_4']; ?>
		<input type="radio" name="radio" value='-4'>
	</label>		
	<label for="option">
		<?php echo $row['5_by_5_negative_3']; ?>
		<input type="radio" name="radio" value='-3'>
	</label>		
	<label for="option">
		<?php echo $row['5_by_5_negative_2']; ?>
		<input type="radio" name="radio" value='-2'>
	</label>		
	<label for="option">
		<?php echo $row['5_by_5_negative_1']; ?>
		<input type="radio" name="radio" value='-1'>
	</label>		
	<label for="option">
		<?php echo $row['5_by_5_positive_1']; ?>
		<input type="radio" name="radio" value='1'>
	</label>		
	<label for="option">
		<?php echo $row['5_by_5_positive_2']; ?>
		<input type="radio" name="radio" value='2'>
	</label>		
	<label for="option">
		<?php echo $row['5_by_5_positive_3']; ?>
		<input type="radio" name="radio" value='3'>
	</label>		
	<label for="option">
		<?php echo $row['5_by_5_positive_4']; ?>
		<input type="radio" name="radio" value='4'>
	</label>		
	<label for="option">
		<?php echo $row['5_by_5_positive_5']; ?>
		 <input type="radio" name="radio" value='5'>
	</label>
</div>