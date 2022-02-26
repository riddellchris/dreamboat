<style>
.make-discussion-input::placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
  color: #878787;
  opacity: 1; /* Firefox */
}

.make-discussion-input:-ms-input-placeholder { /* Internet Explorer 10-11 */
  color: #878787;
}

.make-discussion-input::-ms-input-placeholder { /* Microsoft Edge */
  color: #878787;
}



<?php
if(!isset($_SESSION)){session_start();}

echo "
	#discussion_submit{			background-color:	".$_SESSION['masked_domain_primary_colour_darker'].";}
	#discussion_submit:hover{	background-color:	".$_SESSION['masked_domain_primary_colour'].";}
	#textarea_input{			outline: 6px inset 	".$_SESSION['masked_domain_primary_colour_darker'].";}
	#textarea_input:focus{		outline: 8px inset 	".$_SESSION['masked_domain_primary_colour'].";}
";
?>


#textarea_input{
	font-family: Comfortaa;
	max-width:1087px;
	text-align: left;
	display: block;
	margin-left: auto;
	margin-right: auto;
	overflow-x:hidden;
	resize: vertical;
 // 	-webkit-box-shadow: 0px -12px 12px 0px rgba(0, 0, 0, 0.3); //taken out to allow for the top buttons now
  //	-moz-box-shadow: 0px -12px 12px 0px rgba(0, 0, 0, 0.3); //taken out to allow for the top buttons now
  // 	box-shadow: 0px -12px 12px 0px rgba(0, 0, 0, 0.3); //taken out to allow for the top buttons now
}

</style>