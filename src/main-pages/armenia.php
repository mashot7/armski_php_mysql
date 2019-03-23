<?php
$sqlArmenia = mysqli_query($conn, "SELECT * FROM `armenia`");
if (mysqli_num_rows($sqlArmenia) > 0) {
} else {
  echo "0 results";
}
?>
<!-- --------------------------------- Container --------------------------------- -->
<div class="container">
  <!-- --------------------------------- best offers --------------------------------- -->

  <div class="best-offers">
    <h3 class="text-center">Best Offers</h3>
    <p class="text-center">Check out our top-rated tours</p>
    <div class="row text-center">
      <?php
      while ($rowArmenia = mysqli_fetch_assoc($sqlArmenia)) {
        $name = $rowArmenia['name'];
        $armeniaId = $rowArmenia['id'];
        $header = $rowArmenia['header'];
        $paragraph = "";
        ?>
        <div class="col-sm-12 col-md-5 col-lg-4">
          <div class="card">
            <div class="box-offer-img-wrap">
              <a href="?pages=armenia-page&&armenia-id=<?= $armeniaId ?>">
                <img class="img-fluid" src="http://armski.am/assets/armenia-page/07.jpg" alt="Denim Jeans">
              </a>
            </div>
            <div class="box-offer-caption p-3">
              <div class="cardHeader">
                <a href="?pages=armenia-page&&armenia-id=<?= $armeniaId ?>">
                  <?= $name ?>
                </a>
              </div>
            </div>
          </div>
        </div>
        <?php
      }
      ?>
    </div>
  </div>
</div>