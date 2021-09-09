
<br>
<style>
    .fas{display:block;}
    #process_diagram{
        width: 100%;
    }
    #process_diagram_left_block{
        display: inline-block;
        margin-left: 10%; 
        text-align: center;
        width: 10%;
        float:left;
    }
    #process_diagram_central_block{
        display: inline-block;
        margin-left: 25%;
        width: 10%;  
        margin-top: 30vh;
		float:left;
    }
    #process_diagram_right_block{
        display: inline-block;
        width: 40%;  
		height: 40%;
		margin-top: 20vh;
		margin-left:  5%;
		background-image: url("/knowledgebase/components/diagrams/combo_chart_1.svg");
		background-repeat: no-repeat;
    }



</style>




    <div id='process_diagram_left_block'>
        <i class='fas fa-users'     style='font-size: 8vmax;    padding-top: 8vh;     color: forestgreen;'></i>
        <i class='fas fa-database'  style='font-size: 8vmax;    padding-top: 8vh;     color: #cecece;'></i>
        <i class='fas fa-database'  style='font-size: 8vmax;    padding-top: 8vh;     color: #cecece;'></i>
    </div>
    <div id='process_diagram_central_block'>
        <i class='fas fa-server'    style='font-size: 10vmax;   padding-top: 2%;        color: #4332ff;'></i>
    </div>
    <div id='process_diagram_right_block'>
		<?php
		/*
			require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/functions/include_images.php";
			include_knowledgebase_image('/knowledgebase/components/diagrams/combo_chart_1.svg', 'default', '100%');
			*/
		?>
	</div>