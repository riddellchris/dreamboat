<?php
if(!isset($_SESSION)){session_start();}
?>

<?php
require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/start.php";
require $_SERVER['DOCUMENT_ROOT']."/components/navigation/pieces/what_to_display_query.php";
require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";

$result = mysqli_query($conn, $sql);

?>
<?php
    $pages_data_options = ['financials','results','reporting','time','map','data'];
    $pages_settings_options = ['profile','notifications','business'];
    $pages_notebooks_options = ['activities','notes','upgrades','biz_dev'];
    $pages_uncategorised_options = ['highlights','insights','overview','network','management','sales','marketing','wheelhouse','issues'];
    
    $result = mysqli_query($conn, $sql);
    
?>
<div class="display-control-wrapper container mt-5">
    <div class='accordion' id='accordionDisplayControl'>
        <div class='accordion-item'>
            <h2 class='accordion-header' id='headingUncategorised'>
            <button class='accordion-button collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#collapseUncategorised' aria-expanded='false' aria-controls='collapseUncategorised'>
                Uncategorised
            </button>
            </h2>
            <div id="collapseUncategorised" class="accordion-collapse collapse" aria-labelledby="headingUncategorised">
                <?php
                $result = mysqli_query($conn, $sql);
                while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                    foreach ($pages_uncategorised_options as $option){
                        $value = $row[$option] == 'yes' ? 'On' : 'Off';
                        $isActive = $row[$option] == 'yes' ? 'active' : '';
                        $isActiveClass = $row[$option] == 'yes' ? 'bg-primary' : 'bg-secondary';
                        echo "<div class='accordion-body d-flex justify-content-between'";
                        echo "<h6>$option</h6>";
                        echo "<a class='page-toggle rounded p-2 text-white $isActiveClass' id='page-link__$option' href='change_settings.php?type=$option' aria-pressed='$value'
                        >$value</a>";
                        echo "</div>";
                    }
                }
                ?>
            </div>
        </div>
        <div class='accordion-item'>
            <h2 class='accordion-header' id='headingData'>
            <button class='accordion-button collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#collapseData' aria-expanded='false' aria-controls='collapseData'>
                Data
            </button>
            </h2>
            <div id="collapseData" class="accordion-collapse collapse" aria-labelledby="headingData">
                <?php
                $result = mysqli_query($conn, $sql);
                while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                    foreach ($pages_data_options as $option){
                        $value = $row[$option] == 'yes' ? 'On' : 'Off';
                        $isActive = $row[$option] == 'yes' ? 'active' : '';
                        $isActiveClass = $row[$option] == 'yes' ? 'bg-primary' : 'bg-secondary';
                        echo "<div class='accordion-body d-flex justify-content-between'";
                        echo "<h6>$option</h6>";
                        echo "<a class='page-toggle rounded p-2 text-white $isActiveClass' id='page-link__$option' href='change_settings.php?type=$option' aria-pressed='$value'
                        >$value</a>";
                        echo "</div>";
                    }
                }
                ?>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingSettings">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSettings" aria-expanded="false" aria-controls="collapseSettings">
                Settings
            </button>
            </h2>
            <div id="collapseSettings" class="accordion-collapse collapse" aria-labelledby="headingSettings" >        
                <?php
                $result = mysqli_query($conn, $sql);
                while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                    foreach ($pages_settings_options as $option){
                        $value = $row[$option] == 'yes' ? 'On' : 'Off';
                        $isActive = $row[$option] == 'yes' ? 'active' : '';
                        $isActiveClass = $row[$option] == 'yes' ? 'bg-primary' : 'bg-secondary';
                        echo "<div class='accordion-body d-flex justify-content-between'";
                        echo "<h6>$option</h6>";
                        echo "<a class='page-toggle rounded p-2 text-white $isActiveClass' id='page-link__$option' href='change_settings.php?type=$option' aria-pressed='$value'
                        >$value</a>";
                        echo "</div>";
                    }
                }
                ?>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingNotebooks">
                <button button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNotebooks" aria-expanded="false" aria-controls="collapseNotebooks">
                NoteBooks
                </button>
            </h2>
            <div id="collapseNotebooks" class="accordion-collapse collapse" aria-labelledby="headingNotebooks" >
            <?php
                $result = mysqli_query($conn, $sql);
                while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                    foreach ($pages_notebooks_options as $option){
                        $value = $row[$option] == 'yes' ? 'On' : 'Off';
                        $isActive = $row[$option] == 'yes' ? 'active' : '';
                        $isActiveClass = $row[$option] == 'yes' ? 'bg-primary' : 'bg-secondary';
                        echo "<div class='accordion-body d-flex justify-content-between'";
                        echo "<h6>$option</h6>";
                        echo "<a class='page-toggle rounded p-2 text-white $isActiveClass' id='page-link__$option' href='change_settings.php?type=$option' aria-pressed='$value'
                        >$value</a>";
                        echo "</div>";
                    }
                }
                ?>
            </div>
            </div>
        </div>
        
    </div>
</div>

<?php
require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/end.php";
?>

<script>


</script>

<style type="text/css">
    .accordion-button{
        font-weight:700;
    }
    
    .page-toggle{
        width:80px;
        display: block;
        text-align:center;
        text-decoration:none;
    }
    
</style>
