<style>
.shadow{background-color: grey;}
.sub-privacy-on{padding: 3px 0px;padding-top:10px;height: 26px;background-color:#00e200;}
.sub-privacy-on:hover{background-color: orange;}
.sub-privacy-off{padding: 3px 0px;padding-top:10px;height: 26px;background-color: orange;}
.sub-privacy-off:hover{background-color:#00ff00;}
.full-privacy{background-color: #00e200;}
.part-privacy{background-color: orange;}
</style>

<?php
if($_SESSION['flow_privacy'] == 'public' ){echo"<style>.shadow:hover{box-shadow: 0px 8px 20px rgba(0, 0, 0, 0);background-color:#ff0000;}</style>";}
if($_SESSION['flow_privacy'] == 'private'){echo"<style>.shadow:hover{box-shadow: 0px 8px 20px rgba(0, 0, 0, 0);background-color:#00e200;}</style>";}

?>