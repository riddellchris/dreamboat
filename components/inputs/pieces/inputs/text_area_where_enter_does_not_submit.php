<textarea name='textarea_input' rows='4' style=  'display: block;margin-left: auto;margin-right: auto;overflow-x:hidden;resize: vertical;' autofocus
<?php
if(is_numeric(strpos($_SERVER['REQUEST_URI'],'/wheelhouse/')) == 1){
	echo "onkeydown = 'if(event.keyCode == 13){this.form.submit();event.preventDefault();return false;}'";
}
?>

 autocomplete='off'></textarea>