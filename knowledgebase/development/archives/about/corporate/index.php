<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/start.php";
require $_SERVER['DOCUMENT_ROOT']."/components/content/styling/all.php";
echo "
<style>
.hero-image {
  background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url(/components/design/images/shutterstock_140370058.jpg);

  }
</style>

<div class='hero-image'>
	<div class='hero-text hero_text_no_mobile'  id='main_text'  >
		<p style='margin:0px;'>about us</p>
	  </div>
</div>
";
?>

<div class='big-web-copy'>
Our mission<br><br>
<small>
Our mission is help the world&#39;s workforce specialise and improve their productivity so they all have the best life possible.
</small>
</div>
<div class='hero-image' style='background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.2)), url(/components/design/images/adventure-boat-freedom-1223649.jpg);height:100%;'></div>
<div class='big-web-copy'>
Our Focus<br><br>
<small>
Our focus is to build the best system possible to improve the productivity and quality of life for everyone who engages with it.<br><br>
We see both workplace mental health and productivity as the biggest issues and the biggest opporutunities for the world today and that's what we're out to improve.
</small>
</div>

<div class='hero-image' style='background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.2)), url(/components/design/images/surfers-surfing-waves-4760.jpg);height:100%;'></div>
<div class='big-web-copy'>
Our Passion<br><br>
<small>
Our passion is seeing people truly realise their full value to the world.<br><br>
It is endlessly amazing how much each individual can reach in a short space of time with the right guidance, focus, goals and support.<br><br>
Seeing this and enabling this each and every day is what we love to do with our technology and on the phone.
</small>
</div>


<div class='hero-image' style='height:120vh;background-image: linear-gradient(rgba(0, 0, 0, 0), rgba(0, 0, 0, 0)), url(/components/design/images/shutterstock_89601310.jpg);'>
	<div class='hero-text' style='text-align:left;'>
		<p style='margin:0px;padding-top:40px;'></p>
	  </div>
</div>
<?php
require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/end.php";
?>