<?php
$sqlArmenia = "SELECT id, title FROM `armenia`";
$resultArmenia = $conn->query($sqlArmenia);

?>
<!-- --------------------------------- Container --------------------------------- -->
<div class="container">
    <!-- --------------------------------- best offers --------------------------------- -->

    <div class="best-offers">
        <h3 class="text-center">Best Offers</h3>
        <p class="text-center">Check out our top-rated tours</p>
        <div class="row text-center">
            <?php
            if ($resultArmenia->num_rows > 0) {
              while ($rowArmenia = $resultArmenia->fetch_assoc()) {
                $armeniaId = $rowArmenia['id'];
                $title = $rowArmenia['title'];
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
                                <?= $title ?>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <?php

          }
        }
        ?>
        </div>
    </div>
</div> 