<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/account/security/logged_in_check.php";
require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/start.php";
require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/spacings/start_of_page_top_of_centering_divs.php";


//no extention to the action URL needed here
?>


<form action='add_new_submit.php' method='post'>




<input class='secure_input'     name='first_name'       placeholder = 'first name'></input><br>
<input class='secure_input'     name='second_name'      placeholder = 'second name'></input><br>
<input class='secure_input'     name='phone_number'     placeholder = 'phone number'></input><br>
<input class='secure_input'     name='email'            placeholder = 'email'></input><br>
<input class='secure_input'     name='business_name'    placeholder = 'business name'></input><br>


<?php
echo "<input name ='client_gained' type='hidden' value='";


$echo_no = 'on';
if(isset($_POST['page'])){
    if($_POST['page'] == 'regular_users'){$echo_no = 'off';}
}
if($echo_no == 'on'){echo "no";}else{echo "yes";}
unset($echo_no);

echo "'>";
?>


	
<input type = 'submit' class='login-submit'>
</form>

<span class='prompt-font' style='text-transform:none;'>
The new user&#39;s password will be: &#39;hello&#39;<br>
Lowercase hello<br>
They can use this immediately and ideally reset it
</span>

<?php
require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/spacings/end_of_page_bottom_of_centering_divs.php";
require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/end.php";
?>