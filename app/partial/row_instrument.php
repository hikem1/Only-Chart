<form method="GET" action="./app/api/index.php" class="d-flex border-bottom my-1" >
    <button type="submit" link="<?php echo $objZbInstrument->getLink() ?>" class="m-0 p-0 text-nowrap overflow-hidden instrument-name btn btn-link w-25 text-primary text-start text-decoration-none"><?php echo $objZbInstrument->getName() ?></button>
    <p class="d-flex m-0 w-25"><?php echo $objZbInstrument->getCode() ?></p>
    <p class="d-flex m-0"><?php echo $objZbInstrument->getExchange_place() ?></p>
    <input type="hidden" class="form-control form-control-sm border-0" name="id" value=<?php echo $objZbInstrument->getId() ?>>
</form>
