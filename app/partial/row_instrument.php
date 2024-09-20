<li>

    <form method="GET" action="./app/api/index.php" class="d-flex border-bottom align-items-center" >
        <button type="submit" link="<?php echo $objZbInstrument->getLink() ?>" class="me-4 w-25 text-nowrap overflow-hidden instrument-name btn btn-link text-primary text-start text-decoration-none"><?php echo ucfirst(strtolower($objZbInstrument->getName())) ?></button>
        <p class="d-flex w-25 m-0"><?php echo $objZbInstrument->getCode() ?></p>
        <p class="d-flex m-0"><?php echo $objZbInstrument->getExchange_place() ?></p>
        <input type="hidden" class="form-control form-control-sm border-0" name="id" value=<?php echo $objZbInstrument->getId() ?>>
    </form>

</li>
