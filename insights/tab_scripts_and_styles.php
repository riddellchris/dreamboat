<style>
/* Set height of body and the document to 100% to enable "full page tabs" */
body, html {
  height: 100%;
  margin: 0;
  font-family: Arial;
}

/* Style tab links */
.tablink {
  background-color: #2b1eba;
  color: white;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  width: 20%;
  font-size: 14px;
  text-transform: uppercase;
}
@media screen and (min-width: 480px){.tablink {  padding: 14px 16px;}}
@media screen and (max-width: 480px){.tablink {  padding: 5px 7px;}}

.tablink:hover {
  background-color: #777;
}

/* Style the tab content (and add height:100% for full page content) */
.tabcontent {
  color: white;
  display: none;
  padding: 48px 20px 0px;
}

.revenue_profit:hover{background-color: red;}
.revenue_income:hover{background-color: #0dc10d;}
.income_hours:hover{background-color: orange;}
.productivity:hover{background-color: blue;}

</style>

<script>

function openPage(pageName, elmnt, color) {
  // Hide all elements with class="tabcontent" by default */
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }

  // Remove the background color of all tablinks/buttons
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].style.backgroundColor = "";
  }

  // Show the specific tab content
  document.getElementById(pageName).style.display = "block";

  // Add the specific color to the button used to open the tab content
  elmnt.style.backgroundColor = color;
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>