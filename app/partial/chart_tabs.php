<nav class="bg-light border-bottom">
    <div class="nav nav-tabs border-0" id="nav-tab" role="tablist">

    <?php 
        if(isset($_SESSION['selected_instrument'])){
            foreach($_SESSION['selected_instrument'] as $SerializedZbInstrument){ 
                $zbInstrument = unserialize($SerializedZbInstrument);
                include 'chart_tab_button.php'; 
            }
        } ?>
        
    </div>
</nav>
<div class="tab-content" id="nav-tabContent">

    <?php
        if(isset($_SESSION['selected_instrument'])){
            foreach($_SESSION['selected_instrument'] as $SerializedZbInstrument){
                $zbInstrument = unserialize($SerializedZbInstrument);
                include 'chart_tab_content.php'; 
            }
        } ?>
</div>