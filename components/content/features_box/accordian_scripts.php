<!-- this has to be at the end of the page now to ensure (I THINK) that it can hear all the buttons in a class. I suspect!!! -->
<script>
var coll = document.getElementsByClassName("day_collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var day_content = this.nextElementSibling;
    if (day_content.style.display === "block") {
      day_content.style.display = "none";
    } else {
      day_content.style.display = "block";
    }
  });
}
</script>

<style>
/* Style the button that is used to open and close the day_collapsible day_content */
.day_collapsible {
    background-color:transparent;
  color: #4332ff;
  cursor: pointer;
  padding: 18px;
  padding-left:10px;
  width: 100%;
  border: none;
  text-align: left;
  outline: none;
 font-size: 20px;
 max-width:1100px;
 margin:auto;
 display:block;
}


/* Add a background color to the button if it is clicked on (add the .active class with JS), and when you move the mouse over it (hover) */
//.active, .day_collapsible:hover {
//  background-color: #ccc;
//}

.question{
color:white;
 font-weight: 400;
}

/* Style the day_collapsible day_content. Note: hidden by default */
.day_content {
  font-family:helvetica;
  padding: 30 18px;
  display: none;
  overflow: hidden;
  color:#06004c;
   max-width:1100px;
   margin:auto;
   font-size: 20px;
   font-weight: 800;
   
}

.day_collapsible:before {
    content: '\002B';
    color: #06470c;;
    font-weight: bold;
    float: right;
    margin-left: 5px;
}
.day_collapsible.active:before {
    content: '\2014';
    color: #06470c;
    font-weight: bold;
    float: right;
    margin-left: 5px;
  
}





	/* Make sure that padding behaves as expected */
	//this has to stay off for now // as at 1/5/20 because it fucks with the footer and sub menu setting
	//* {box-sizing:border-box}
	
	/* day_container for skill bars */
	.day_container {
	  width: 100%; /* Full width */
	  background-color: #d1f1ff; /* Grey background */
	}
	
	.skills {
	  text-align: right; /* Right-align text */
	  padding: 10px; /* Add some padding */
	  color: white; /* White text color */
	}
	
</style>