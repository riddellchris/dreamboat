<?php

echo "

	function ".$function_name."() {
	  var x = document.getElementById('".$element_to_show_hide."');
	  if (x.classList.contains('hidden')) {
	    x.classList.remove('hidden');
	    x.classList.add('unhidden');
	
	  } else {
	    x.classList.remove('unhidden');
	    x.classList.add('hidden');
	  }
	}
	
	//hide only function
	function ".$hide_only_function_name."() {
	  var x = document.getElementById('".$element_to_show_hide."');
	    x.classList.remove('unhidden');
	    x.classList.add('hidden');
	}
	
	
	
	
";


