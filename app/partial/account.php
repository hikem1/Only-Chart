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

    <div class="dropdown">
  <button class="btn dropdown-toggle border" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
    <i class="fa-regular fa-user p-1"></i>
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
    <li><a class="dropdown-item" href="./logout.php">Logout</a></li>
    <li><a class="dropdown-item" href="#">Favorites</a></li>
  </ul>
</div>
    <?php } ?>
</div>