<!-- --------------------------------- best offers --------------------------------- -->
<div class="container">
    <div class="best-offers">
        <h3 class="text-center">Best Offers</h3>
        <p class="text-center">Check out our top-rated tours</p>
        <div class="row text-center">
            <?php
            $sqlTour = "SELECT * FROM `tours`";
            $resultTour = mysqli_query($conn, $sqlTour);
            if (mysqli_num_rows($resultTour) > 0) {} else {
                echo "0 results";
            }
            while ($rowTour = mysqli_fetch_assoc($resultTour)) {
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
            ?>
        </div>
        <a class="button button-primary" href="index.php?mainPage=tours">VIEW ALL TOURS</a>
    </div>
</div>

<!-- --------------------------------- Find your travel --------------------------------- -->
<div class="findYourTravel">
    <div class="col-md-10 col-lg-7">
        <h2 style="color: white">Find Travel Perfection With the Professionalism of Experts</h2>
        <a class="button button-primary" href="index.php?mainPage=tours">FIND YOUR PERFECT TOUR</a>
    </div>
</div>