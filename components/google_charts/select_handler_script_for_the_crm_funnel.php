      function selectHandler() {
          var selectedItem = chart.getSelection()[0];
          if (selectedItem) {
            var topping 		= data.getValue(selectedItem.row, 0);
            var primary_folder 		= <?php echo "'".$_GET['primary_folder']."'"; ?>;
            var secondary_folder 	= <?php echo "'".$_GET['secondary_folder']."'"; ?>;
            
            
            var random_cache_buster = Math.random();
            //THE RANDOME BIT AT THE END IS SIMPLY JUST TO BUST THE CACHING ISSUE THAT CAN OCCUR IF YOU KEEP GOING TO THE SAME PAGE
  	    window.location.href = 'http://dreamboat.com.au/components/crm/funnel_charts_focus.php?focus='+topping+'&cache='+random_cache_buster+'&primary_folder='+primary_folder+'&secondary_folder='+secondary_folder;
         }
      }  
      google.visualization.events.addListener(chart, 'select', selectHandler);  