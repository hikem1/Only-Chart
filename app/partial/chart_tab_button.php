<button zb-id="<?php echo $zbInstrument->getId() ?>" class="nav-link" id="nav-<?php echo $zbInstrument->getId() ?>-tab" data-bs-toggle="tab" data-bs-target="#nav-<?php echo $zbInstrument->getId() ?>" type="button" role="tab" aria-controls="nav-<?php echo $zbInstrument->getId() ?>" aria-selected="true">
    <i class="fa-regular fa-star"></i>
    <?php echo ucfirst(strtolower($zbInstrument->getName())) ?>
    <i class="m-1 fa-solid fa-xmark"></i>
</button>