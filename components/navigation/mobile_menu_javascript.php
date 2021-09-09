<?php
if(!isset($_SESSION)){session_start();}

if($_GET['primary_folder'] == 'knowledgebase'){$change_to_display = "'inline-block'";}
else{$change_to_display = "'block'";}

?>

<script>
function myFunction() {
  var y = document.getElementById('mobile_menu_icon');
  var x = document.getElementById('mobile_menu');
  if (x.style.display === <?php echo $change_to_display;?>) {
    x.style.display = 'none';
    y.classList.remove('mobile_menu_red');
    y.classList.add('mobile_menu_white');

  } else {
    x.style.display = <?php echo $change_to_display;?>;
    y.classList.remove('mobile_menu_white');
    y.classList.add('mobile_menu_red');
    

<?php
if($_SESSION['dreamboat_crew']== 'yes'){    
    //this line of code pushes all the accordians down if you open up the mobile menu
echo "
	hide_all_accordian_details();
   ";
    }
?>
    
   // x.scrollTop = 0; // For Safari
//x.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
    

    
  }

<?php
if($_GET['primary_folder'] != 'slideshow'){  

        echo "
        //remove the shadow from the top nav bar and replace when required
        var z = document.getElementById('main_top_nav_bar');  
        if (z.classList.contains('shadow')) { 
            z.classList.remove('shadow');

        }
        else{
            z.classList.add('shadow');
        }";
}


//footer always around so always keep this one
echo "
    var z = document.getElementById('footer');  
     if (z.classList.contains('footer_shadow')) { 
    	z.classList.remove('footer_shadow');
    }
    else{
        z.classList.add('footer_shadow');
    }";


//obviously this is critical and applicable only when slideshow is on
if($_GET['primary_folder'] == 'slideshow'){  
    echo "
    var a = document.getElementById('slideshow_menu');  
    if (a.style.display === 'block') { a.style.display = 'none';}
    else{a.style.display = 'block';}
    ";
}

?>



/*
    var z = document.getElementById('main_text');  
     if (z.classList.contains('hero_text_no_mobile')) { 
    	z.classList.remove('hero_text_no_mobile');
        z.classList.add('hero_text_mobile');    	
    }
    else{
     	z.classList.remove('hero_text_mobile');   
        z.classList.add('hero_text_no_mobile');
    }
*/


        
    

}	

//ensures we go to the top of the page when this opens
//function topFunction() {
//  var x = document.getElementById('big_div');
//	
//}
</script>