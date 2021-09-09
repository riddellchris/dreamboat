<?php
//edit the titles - done
if(!function_exists(lhs_side_bar_block)){
	function lhs_side_bar_block($descriptor,
				    $display_descriptor, 
				    $title_placeholder,
				    $row){
	echo "	<a  class='to_history' href='/components/lhs_side_panels/view_history.php?view=".$descriptor."'>< ".$display_descriptor."</a><br>
		<textarea rows='4'  class='secure_input standard_textarea'  name='".$descriptor."'   	
		placeholder='".$title_placeholder."'	
		title='".$title_placeholder."'
		>".$row[$descriptor]."</textarea><br>";
	}
}