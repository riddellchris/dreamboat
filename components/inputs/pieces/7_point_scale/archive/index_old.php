<style>
	.radioGroupBelow label {
	  display: inline-block;
	  text-align: center;
	  margin: 0.2 0.1em;
	  font-size:22px;
	}
	.radioGroupBelow label input[type="radio"] {
	  display: block;
	  margin: 0.5em auto;
	}
</style>

<br>
<div class="radioGroupBelow">
		<span style='color:red;font-size:16px;'><?php echo $row['5_by_5_negative_5']; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
		<span style='color:green;font-size:16px;'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['5_by_5_positive_5']; ?></span>
</div>
<div class="radioGroupBelow">
	<label for="option">

		<input type="radio" name="radio" value='-5' onclick="document.getElementById('main_form').submit();">
	 </label>	
	<label for="option">

		<input type="radio" name="radio" value='-4' onclick="document.getElementById('main_form').submit();">
	</label>		
	<label for="option">

		<input type="radio" name="radio" value='-3' onclick="document.getElementById('main_form').submit();">
	</label>		
	<label for="option">

		<input type="radio" name="radio" value='-2' onclick="document.getElementById('main_form').submit();">
	</label>		
	<label for="option">

		<input type="radio" name="radio" value='-1' onclick="document.getElementById('main_form').submit();">
	</label>		
	<label for="option">

		<input type="radio" name="radio" value='1' onclick="document.getElementById('main_form').submit();">
	</label>		
	<label for="option">

		<input type="radio" name="radio" value='2' onclick="document.getElementById('main_form').submit();">
	</label>		
	<label for="option">

		<input type="radio" name="radio" value='3' onclick="document.getElementById('main_form').submit();">
	</label>		
	<label for="option">

		<input type="radio" name="radio" value='4' onclick="document.getElementById('main_form').submit();">
	</label>		
	<label for="option">
		 <input type="radio" name="radio" value='5' onclick="document.getElementById('main_form').submit();">

	</label>
</div>