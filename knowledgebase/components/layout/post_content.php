<br>
<br>


<style>
.faq_link {
  animation: faq_link 5s infinite;
}

@keyframes faq_link {
  0% { color: #ff0000; }
  50% { color: #281396; }
  100% { color: #ff0000; }
}

</style>

<?php

echo "<style>
      @media print{
        #page_end{  display: none;}
      }
      </style>
";


//these should probably be in a collapsible section sitting at the end/bottom of the page
  echo "<div id='page_end'>";
        echo "<BR><BR><BR>Provide feedback, request information or ask a question using the form below and we'll get back to you as soon as possible.";
        require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/feedback/display.php";

        //roadmap
          //shows all the relevant things to this knowledgebase page
          //these things can be clickable and take you to relevant pages as required
        //require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/dev_ops/management/roadmap_display.php";
        //require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/dev_ops/management/anticipated_timelines.php";

        //not usre we need this as we have "our plan" and I think that's all we need as it will have links with target='_blank' coming off it 
        //require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/tours/tour_bar.php";



        echo "		<div style='height: 110px;'></div>";
  echo "</div>"; //page end
echo "</div>";
	
?>

</section>


<?php require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/end.php";?>
	