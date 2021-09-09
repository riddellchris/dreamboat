<script>
function make_private() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     document.getElementById("inputs_box_privacy_div").innerHTML = this.responseText;
    }
  };

  
  xhttp.open("GET", "/inputs/pieces/privacy/marked_private.php", true);
  xhttp.send();
}
function make_public() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     document.getElementById("inputs_box_privacy_div").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "/inputs/pieces/privacy/marked_public.php", true);
  xhttp.send();
}

function make_subpublic(type) {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     document.getElementById("inputs_box_privacy_div").innerHTML = this.responseText;
    }
  };

  
  xhttp.open("GET", "/inputs/pieces/privacy/make_subpublic.php?type="+type , true);
  xhttp.send();
}
function make_subprivate(type) {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     document.getElementById("inputs_box_privacy_div").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "/inputs/pieces/privacy/make_subprivate.php?type="+type , true);
  xhttp.send();
}
</script>