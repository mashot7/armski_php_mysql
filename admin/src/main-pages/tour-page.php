<div class="container">
    <div class="d-flex ">
        <div class="p-4 bg-white col-md-12 col-lg-8">
            <form style="max-width:630px;" action="conf.php?pages=tour-page&section=title&page-id=<?= $tourId ?>&cmd=edit_page" method="post" onsubmit="return submitData(this)">
                <textarea class="form-control" rows="1" id="comment" name="title"><?= $title ?></textarea>
                <div class="d-flex flex-row-reverse"><button style="margin-top:15px; margin-bottom:15px;" class="button" id="sub" type="submit">SAVE</button></div>
            </form>
            <div class="tour-media-wrapper mb-4">
                <img class="mt-3 img-fluid" src="<?= $img ?>">
            </div>
            <div style="background: #f5f5f5;" class=" tour-details ">
                <i class="fa fa-hourglass-half"></i> <span>Duration: </span> <?= $duration ?><br>
                <i class="fa fa-location-arrow"></i> <span>Location: </span> <?= $location ?><br>
                <i class="fa fa-money"></i> <span>Price: </span>&euro; <?= $price ?><br>
            </div>

            <div class="mt-3" style="max-width: 630px; text-align: justify;">
                <form action="conf.php?pages=tour-page&section=description&page-id=<?= $tourId ?>&cmd=edit_page" method="post" onsubmit="return submitData(this)">
                    <p><textarea class="form-control" rows="5" name="description"><?= $descr ?></textarea></p>
                    <div class="d-flex flex-row-reverse"><button style="margin-top:0px; margin-bottom:15px;" class="button" id="sub" type="submit">SAVE</button></div>
                </form>
            </div>

            <div style="max-width: 630px;">
                <div class="tab">
                    <button class="tablinks active" onclick="openCity(event, 'overview')">Overview</button>
                    <button class="tablinks" onclick="openCity(event, 'packageDetails')">Package Details</button>
                </div>
                <!-- OVERVIEW CONTENT -->
                <div style="display: block;" id="overview" class="tabcontent p-4">
                    <form action="conf.php?pages=tour-page&section=overview&page-id=<?= $tourId ?>&cmd=edit_page" method="post" onsubmit="return submitData(this)">
                        <strong>Duration: </strong> <textarea class="form-control" rows="1" name="duration"> <?= $duration ?> </textarea> <br>
                        <strong>Beginning: </strong> <textarea class="form-control" rows="1" name="begin"> <?= $begin ?></textarea><br>
                        <strong>Ending: </strong><textarea class="form-control" rows="1" name="end"><?= $end ?></textarea><br>
                        <strong>Best season: </strong><textarea class="form-control" rows="1" name="season"><?= $season ?></textarea><br>
                        <strong>Location: </strong><textarea class="form-control" rows="1" name="location"><?= $location ?></textarea><br>
                        <strong>Price: </strong><textarea class="form-control" rows="1" name="price"><?= $price ?></textarea><br>
                        <strong>Accommodation: </strong><textarea class="form-control" rows="1" name="accom"><?= $accom ?></textarea><br>
                        <strong>Food: </strong><textarea class="form-control" rows="1" name="food"><?= $food ?></textarea><br>
                        <strong>Mode of travel: </strong><textarea class="form-control" rows="1" name="travelMod"><?= $travelMod ?></textarea><br>
                        <strong>Number of people: </strong><textarea class="form-control" rows="1" name="peopleNum"><?= $peopleNum ?></textarea><br>
                        <strong>Included: </strong><textarea class="form-control" rows="5" name="include"><?= $include ?></textarea><br>
                        <strong>Excluded: </strong><textarea class="form-control" rows="1" name="exclude"><?= $exclude ?></textarea><br>
                        <div clas></div>
                        <div class="d-flex flex-row-reverse"><button style="margin-top:0px; margin-bottom:15px;" class="button" id="sub" type="submit">SAVE</button></div>
                    </form>


                </div>
                <!-- PACKAGE DETAILS CONTENT -->
                <div id="packageDetails" class="tabcontent p-4">
                    <?php
                    foreach ($tourDetails as $tourDetail) {
                      ?>
                    <form id="details" action="conf.php?pages=tour-page&section=details&page-id=<?= $tourId ?>&content-id=<?= $tourDetail['content-id'] ?>&cmd=edit_page" method="post" onsubmit="return submitData(this)">
                        <textarea class="form-control" rows="2" name="title"> <?= $tourDetail['title'] ?></textarea><br>
                        <textarea class="form-control" rows="5" name="description"><?= $tourDetail['description'] ?></textarea> <br>
                        <div class="d-flex flex-row-reverse"><button style="margin-top:0px; margin-bottom:15px;" class="button" id="sub" type="submit">SAVE</button></div>
                        <hr>
                    </form>
                    <span id="result"></span>
                    <?php

                  }
                  ?>

                    <div class="d-flex flex-row-reverse"><button style="margin-top:0px; margin-bottom:15px;" class="button" id="sub" type="submit">SAVE</button></div>
                </div>

            </div>

            <script>
                function openCity(evt, cityName) {
                    // Declare all variables
                    var i, tabcontent, tablinks;

                    // Get all elements with class="tabcontent" and hide them
                    tabcontent = document.getElementsByClassName("tabcontent");
                    for (i = 0; i < tabcontent.length; i++) {
                        tabcontent[i].style.display = "none";
                    }

                    // Get all elements with class="tablinks" and remove the class "active"
                    tablinks = document.getElementsByClassName("tablinks");
                    for (i = 0; i < tablinks.length; i++) {
                        tablinks[i].className = tablinks[i].className.replace(" active", "");
                    }

                    // Show the current tab, and add an "active" class to the button that opened the tab
                    document.getElementById(cityName).style.display = "block";
                    evt.currentTarget.className += " active";
                }
            </script>

            <!-- Gallery -->
            <div style="max-width: 630px;">
                <div class="container gallery-container">
                    <div class="tz-gallery">

                        <div class="row mb-3">
                            <div class="col-md-4">
                                <div class="card">
                                    <a class="lightbox" href="http://natoura.am/wp-content/uploads/2015/04/DSC08787.jpg">
                                        <img src="http://natoura.am/wp-content/uploads/2015/04/DSC08787.jpg" alt="Park" class="card-img-top">
                                    </a>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="card">
                                    <a class="lightbox" href="http://natoura.am/wp-content/uploads/2015/04/DSC08296.jpg">
                                        <img src="http://natoura.am/wp-content/uploads/2015/04/DSC08296.jpg" alt="Park" class="card-img-top">
                                    </a>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="card">
                                    <a class="lightbox" href="http://natoura.am/wp-content/uploads/2015/04/DSC08283.jpg">
                                        <img src="http://natoura.am/wp-content/uploads/2015/04/DSC08283.jpg" alt="Park" class="card-img-top">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card">
                                    <a class="lightbox" href="http://natoura.am/wp-content/uploads/2015/04/DSC08280.jpg">
                                        <img src="http://natoura.am/wp-content/uploads/2015/04/DSC08280.jpg" alt="Park" class="card-img-top">
                                    </a>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="card">
                                    <a class="lightbox" href="http://natoura.am/wp-content/uploads/2015/04/DSC08274.jpg">
                                        <img src="http://natoura.am/wp-content/uploads/2015/04/DSC08274.jpg" alt="Park" class="card-img-top">
                                    </a>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="card">
                                    <a class="lightbox" href="http://natoura.am/wp-content/uploads/2015/04/DSC08278.jpg">
                                        <img src="http://natoura.am/wp-content/uploads/2015/04/DSC08278.jpg" alt="Park" class="card-img-top">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Sidebar -->
        </div>
        <div class="p-4 bg-white col-md-12 col-lg-4">
            There is a sidebar
        </div>
    </div>

    <style>
        .tour-media-wrapper {}

        .tour-details {
            max-width: 620px;
            width: 100%;
            padding: 12px 20px;
            background: #fff;
        }

        @media only screen and (min-width: 992px) {
            .container .d-flex {
                display: flex;
                justify-content: space-between;
            }
        }

        @media only screen and (max-width: 992px) {
            .container .d-flex {
                display: flex;
                flex-direction: column;
            }
        }
    </style>
</div> 