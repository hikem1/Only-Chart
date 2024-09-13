<?php
    $status = false;
    if(isset($_SESSION['log']['status'])){
        $status = $_SESSION['log']['status'];
    }
?>
<div class="d-flex align-items-center">
    <?php if(!$status){ ?>
    <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#signUpModal">
        Sign up
    </button>
    <?php }else{ ?>
        
    <a type="button" class="btn btn-warning btn-sm d-flex text-dark" href="./logout.php">
        <div id="connected" class="bg-success rounded-circle m-auto me-2"></div>
        <?php echo $_SESSION['log']['email'] ?>
    </a>
    <?php } ?>
</div>