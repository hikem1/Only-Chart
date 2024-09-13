<?php
    $status = false;
    if(isset($_SESSION['log']['status'])){
        $status = $_SESSION['log']['status'];
    }
?>
<div class="modal fade" id="signUpModal" tabindex="-1" aria-labelledby="signUpModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title me-2" id="signUpModalLabel">Sign up... </h5>
        <span class="modal-title" id="signUpModalLabel">(to zonebourse site)</span>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form method="POST" action="./app/api/index.php">
        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input name="email" type="email" class="form-control form-control-sm" id="email" aria-describedby="emailHelp" required="required"/>
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div> 
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input name="password" type="password" class="form-control form-control-sm" id="password" required="required"/>
        </div>
        <?php if(!$status && isset($_SESSION['log']['error'])){ ?>
        <div>
            <p id="error-message" class="text-danger"><?php echo $_SESSION['log']['error'] ?></p>
        </div>
        <?php } ?>
        <button type="submit" class="btn btn-sm btn-primary">Sign up</button>
        </form>
      </div>

    </div>
  </div>
</div>
<?php unset($_SESSION['log']['error']) ?>