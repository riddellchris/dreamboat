<button class="tablink Business_Owners" onclick="openPage('Business_Owners', this, 'blue')"  id="defaultOpen">Owners & Directors</button>
<button class="tablink Staff" onclick="openPage('Staff', this, '#0dc10d')" >Staff</button>
<button class="tablink Freelancers" onclick="openPage('Freelancers', this, 'orange')">Freelancers</button>

<div id="Freelancers" class="tabcontent">
Freelancers
<?php// require $_SERVER['DOCUMENT_ROOT']."/content/who_we_help/freelancers/index.php";?>
</div>

<div id="Business_Owners" class="tabcontent">
Business_Owners
<?php// require $_SERVER['DOCUMENT_ROOT']."/content/who_we_help/owners_and_directors/index.php";?>
</div>

<div id="Staff" class="tabcontent">
Staff
<?php// require $_SERVER['DOCUMENT_ROOT']."/content/who_we_help/staff/index.php";?>
</div>


 
<style>
/* Set height of body and the document to 100% to enable "full page tabs" */
body, html {
  height: 100%;
  margin: 0;
  font-family: Arial;
}

/* Style tab links */
.tablink {
  background-color: #281e96;
  color: white;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
 //   width: 25%;
    width: calc(100% / 3);
}
@media screen and (min-width: 480px){.tablink {  padding: 14px 16px;font-size: 17px; }}
@media screen and (max-width: 480px){.tablink {  padding: 5px 7px;font-size: 12px; }}

.tablink:hover {
  background-color: #777;
}

/* Style the tab content (and add height:100% for full page content) */
.tabcontent {
  color: white;
  display: none;
  padding: 48px 20px;
  padding-bottom: 140px; 
}


.Business_Owners:hover{background-color: blue;}
.Staff:hover{background-color: #0dc10d;}
.Freelancers:hover{background-color: orange;}



#Business_Owners {background-image: linear-gradient(blue, #4332ff, #281e96);}
#Staff {background-image: linear-gradient(#0dc10d, #28af28, green);}
#Freelancers {background-image: linear-gradient(orange, #ff8e05, #ff6d05);}


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