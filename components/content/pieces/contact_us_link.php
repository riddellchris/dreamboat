<?php
if(!isset($_SESSION)){session_start();}
?>




<div style='padding-top:35vh;'>
	<div 
	
	<?php
		echo "style='";
		
			echo "width:";
			if(isset($width)){$width;unset($width);}else{echo "100%";}
			echo ";";
			
			echo "text-align:";
			if(isset($text_align)){$text_align;unset($text_align);}else{echo "center";}
			echo ";";	
				
			echo "padding-top:";
			if(isset($padding_top)){$padding_top;unset($padding_top);}else{echo "8vh";}
			echo ";";
			
			echo "padding-bottom:";
			if(isset($padding_bottom)){$padding_bottom;unset($padding_bottom);}else{echo "45vh";}
			echo ";";
			
		echo "'>";
	?>	
	
		<a  class='prompt-font link_font'  
		
		<?php
		echo "href='";
		if(isset($url)){echo $url;unset($url);}else{echo "/components/content/contact_us/";}
		echo "'>";
		
		if(isset($copy)){echo $copy;unset($copy);}else{echo "contact us here";}			
		?>
		
		
		</a>
	</div>
</div>