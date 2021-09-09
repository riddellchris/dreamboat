<style>
	textarea{border-width: 0px;}
	body{padding:0px;margin:0px;}
	
	
	@media only screen and (min-width: 768px) {
		.left{	width:25vw;
			height:100vh;
			float:left;
			background-color: #ffd9d9;
			box-shadow: 10px 0 5px -2px #888;
		}
		.right{	margin-left:25vw;
			width:73vw;
			height:100vh;
		}		
		
		
		
		
			
	}
	@media only screen and (max-width: 768px) {	
		.left{display:none;}
		
		.right{	margin-left:0vw;
		width:100vw;
		height:100vh;}
	}	

	.files_in_folder_directory{
		color: #ff0000;
		text-decoration: none;
	}
</style>

<section class="container">
	<div id='knowledgebase_left' class='left'>
		<?php 
			//primary_menu()
		
			$primary_array = array();
			$primary_array = [
			'welcome',
			'instructions',
			'problems_and_solutions',
			'our_model_of_productivity',
			'causes_of_productivity_issues',
			'reasons_for_unresolved_productivity_issues',
			'our_model_of_productivity_improvement',
			'current_product_disclosure',
			'future_product_development',
			'your_options',
			'contact_us'
			];
			
			//what is open
			//primary_open_array
			
			
			
			
			$secondary_array = array();
			//all the sub pieces
	
			//what is open
			//secondary_open_array
			
			

			
		echo '<pre>' , var_dump($open_array) , '</pre>';	
			var_dump($primary_array);

		
		?>
	</div>
	<div title = 'knowledgebase_right' class='right'>
	</div>
</section>

	