<div class="modal fade" id="resultModal" tabindex="-1" aria-labelledby="resultModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable modal-lg">
    <div class="modal-content">
      <div class="modal-header px-3 py-2">
        <h5 class="modal-title" id="resultModalLabel">Search results : </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body pb-2">
        <div class="d-flex border-bottom fw-bold" >
          <p class="d-flex m-0 w-25">Name :</p>
          <p class="d-flex m-0 w-25">Code :</p>
          <p class="d-flex m-0">Place :</p>
        </div>
        <?php 
          if(isset($_SESSION['search_results'])){
            if(count($_SESSION['search_results'])){
              $zbInstruments = $_SESSION['search_results'];
              foreach($zbInstruments as $zbInstrument){ 

                $objZbInstrument = unserialize($zbInstrument);
                include "row_instrument.php";

              } 
            }
          }
        ?>
      </div>
    </div>
  </div>
</div>