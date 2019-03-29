<?php
$sqlTour = "SELECT * FROM `tours`";
$resultTour = $conn->query($sqlTour);
?>

<div class="container">
    <div class="best-offers">
        <h3 class="text-center">Culture</h3>
        <p class="text-center">Check out our culture tours</p>
        <div class="row text-center">
            <?php
            if ($resultTour->num_rows > 0) {
              while ($rowTour = $resultTour->fetch_assoc()) {
                $name = $rowTour['name'];
                $imgTemp = $rowTour['img-temp'];
                $price = $rowTour['price'];
                $tourId = $rowTour['id'];
                $header = $rowTour['name'];
                $paragraph = "";
                ?>
            <div class="col-sm-12 col-md-5 col-lg-4">
                <div class="card">
                    <div class="box-offer-img-wrap">
                        <a href="?pages=tour-page&&tour-id=<?php echo $tourId ?>">
                            <img class="img-fluid" src="<?php echo $imgTemp ?>" alt="Denim Jeans">
                        </a>
                    </div>
                    <div class="box-offer-caption p-3">
                        <div class="cardHeader">
                            <a href="?pages=tour-page">
                                <?php echo $name ?>
                            </a>
                        </div>
                        <div class="pull-left">
                            <a href="?pages=tour-page">
                                Book Now!
                            </a>
                        </div>
                        <div class="pull-right">
                            <p>$<?php echo $price ?></p>
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
    <div class="best-offers">
        <h3 class="text-center">Skiing</h3>
        <p class="text-center">Check out our skiing tours</p>
        <div class="row text-center">
            <?php
            for ($i = 0; $i < 8; $i++) {
              ?>
            <div class="col-sm-12 col-md-5 col-lg-4">
                <div class="card">
                    <div class="box-offer-img-wrap">
                        <a href="#">
                            <img class="img-fluid" src="http://natoura.am/wp-content/uploads/2016/01/12788793_10208836140524540_1134342321_o-400x260.jpg" alt="Denim Jeans">
                        </a>
                    </div>
                    <div class="box-offer-caption p-3">
                        <div class="cardHeader">
                            <a href="#">
                                Trekking tour in Armenia (including Mount Aragats & Mount Azhdahak)
                            </a>
                        </div>
                        <div class="pull-left">
                            <a href="#">
                                Book Now!
                            </a>
                        </div>
                        <div class="pull-right">
                            <p>$2000</p>
                        </div>
                    </div>
                </div>
            </div>
            <?php

          }
          ?>
        </div>
    </div>
    <div class="best-offers">
        <h3 class="text-center">Adventure</h3>
        <p class="text-center">Check out our adventure tours</p>
        <div class="row text-center">
            <?php
            for ($i = 0; $i < 7; $i++) {
              ?>
            <div class="col-sm-12 col-md-5 col-lg-4">
                <div class="card">
                    <div class="box-offer-img-wrap">
                        <a href="#">
                            <img class="img-fluid" src="http://natoura.am/wp-content/uploads/2015/04/DSC08920-400x260.jpg" alt="Denim Jeans">
                        </a>
                    </div>
                    <div class="box-offer-caption p-3">
                        <div class="cardHeader">
                            <a href="#">
                                Hiking Tour in Central and Northern Armenia
                            </a>
                        </div>
                        <div class="pull-left">
                            <a href="#">
                                Book Now!
                            </a>
                        </div>
                        <div class="pull-right">
                            <p>$2000</p>
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