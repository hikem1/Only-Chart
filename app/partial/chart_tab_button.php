<button zb-id="<?php echo $zbInstrument->getId() ?>" class="d-flex p-0 nav-link border ms-1" id="nav-<?php echo $zbInstrument->getId() ?>-tab" data-bs-toggle="tab" data-bs-target="#nav-<?php echo $zbInstrument->getId() ?>" type="button" role="tab" aria-controls="nav-<?php echo $zbInstrument->getId() ?>" aria-selected="true">
    <i class="fa-solid fa-star px-2"></i>
    <span class="py-2 p pe-2"><?php echo ucfirst(strtolower($zbInstrument->getName())) ?></span>
    <i class="m-1 fa-solid fa-xmark"></i>
</button>