<script>

<!-- Originally sourced from https://www.w3schools.com/howto/howto_js_collapsible.asp -->
var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    
	  if (content.classList.contains('new_hidden')) {
	    content.classList.remove('new_hidden');

	
	  } else {
	    content.classList.add('new_hidden');
	  }    

    
    
    
  });
}

</script>