<?php

echo "
<style>
li.nostyle {
    list-style-type: none;
}

.page-left-bar {
  width: 200px;
  background-color: #fff;
}

ol {
  margin-left: 0px;
  padding-left: 20px;
}

.handbook-page ol {
  color: #687074;
  counter-reset: item;
}

ol {
  counter-reset: item;
  color: #687074;
}

ol li {
  display: block;
  padding: 5px 0;
}

ol li a {
  text-decoration: none;
  color: #687074;
  padding-left: 10px;
}

ol li:before {
  content: counters(item, '.') ' ';
  counter-increment: item;
  font-weight: bold;
}

</style>

<script>
$(document).ready(function(){
  $('#expList').find('ol').hide();

  $('#expList > li').click(function(){
    $(this).find('ol').slideToggle();
  });
});
</script>

";



function listFolderFiles($dir){
    $ffs = scandir($dir);

    unset($ffs[array_search('.', $ffs, true)]);
    unset($ffs[array_search('..', $ffs, true)]);

    // prevent empty ordered elements
    if (count($ffs) < 1)
        return;

    echo "<ol id='expList'>";
    foreach($ffs as $ff){
        echo '<li class="nostyle">'.$ff;
        if(is_dir($dir.'/'.$ff)) listFolderFiles($dir.'/'.$ff);
        echo '</li>';
    }
    echo '</ol>';
}

listFolderFiles('/home/customer/www/dreamboat.com.au/backups_total_chronological/2020/');