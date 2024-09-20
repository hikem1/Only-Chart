<?php
$status = false;
if (isset($_SESSION['log']['status'])) {
  $status = $_SESSION['log']['status'];
}
?>
<div class="d-flex align-items-center">


  <div class="dropdown">
    <button class="btn dropdown-toggle border" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
      <i class="fa-regular fa-user p-1"></i>
    </button>
    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
      <?php if (!$status) { ?>
      <li><a class="dropdown-item" role="button" data-bs-toggle="modal" data-bs-target="#signUpModal">
          Sign up
        </a>
      </li>
      <?php } else { ?>
        <li><a class="dropdown-item" href="./logout.php">Logout</a></li>
      <?php } ?>

      <li><a class="dropdown-item" role="button" data-bs-toggle="modal" data-bs-target="#favoriteModal">Favorites</a></li>
    </ul>
  </div>
</div>