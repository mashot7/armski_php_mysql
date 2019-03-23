<div class="container">

  <div class="d-flex ">
    <div class="p-4 bg-white col-md-12 col-lg-8">
      <h1><?= $header ?></h1>
      <div class="tour-media-wrapper mb-4">
        <img class="mt-3 img-fluid" src="<?= $img ?>">
      </div>
      <div style="background: #f5f5f5;" class=" tour-details ">
        <i class="fa fa-hourglass-half"></i> <span>Duration: <?= $duration ?> </span><br>
        <i class="fa fa-location-arrow"></i> <span>Location: </span><?= $location ?> <br>
        <i class="fa fa-money"></i> <span>Price: </span>&euro; <?= $price ?><br>
      </div>

      <div class="mt-3" style="max-width: 630px; text-align: justify;">
        <p><span><?= $descr ?></span></p>
      </div>

      <div style="max-width: 630px;">
        <div class="tab">
          <button class="tablinks active" onclick="openCity(event, 'overview')">Overview</button>
          <button class="tablinks" onclick="openCity(event, 'packageDetails')">Package Details</button>
        </div>
        <div style="display: block;" id="overview" class="tabcontent p-4">
          <strong>Duration: </strong> <span> <?= $duration ?> </span> <br>
          <strong>Beginning: </strong> <span> <?= $begin ?></span><br>
          <strong>Ending: </strong><span><?= $end ?></span><br>
          <strong>Best season: </strong><span><?= $season ?></span><br>
          <strong>Location: </strong><span><?= $location ?></span><br>
          <strong>Price: </strong><span>&euro;<?= $price ?></span><br>
          <strong>Accommodation: </strong><span><?= $accom ?></span><br>
          <strong>Food: </strong><span><?= $food ?></span><br>
          <strong>Mode of travel: </strong><span><?= $travelMod ?></span><br>
          <strong>Number of people: </strong><span><?= $peopleNum ?></span><br>
          <strong>Included: </strong><span><?= $include ?></span><br>
          <strong>Excluded: </strong><span><?= $exclude ?></span><br>

        </div>

        <div id="packageDetails" class="tabcontent p-4">
          <?php
          foreach ($tourDetails as $tourDetail) {
            ?>
            <strong> <?= $tourDetail['title'] ?></strong><br><br>
            <span><?= $tourDetail['description'] ?></span> <br>
            <hr>
            <?php
          }
          ?>
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

          <h1 class="text-center">Bootstrap 3 Gallery</h1>

          <p class="page-description text-center">Grid Layout With Zoom Effect</p>

          <div class="tz-gallery">

            <div class="row mb-3">
              <div class="col-md-4">
                <div class="card">
                  <a class="lightbox" href="assets\gallery\thum">
                    <img src="images/park.jpg" alt="Park" class="card-img-top">
                  </a>
                </div>
              </div>

              <div class="col-md-4">
                <div class="card">
                  <a class="lightbox" href="images/benches.jpg">
                    <img src="images/benches.jpg" alt="Park" class="card-img-top">
                  </a>
                </div>
              </div>

              <div class="col-md-4">
                <div class="card">
                  <a class="lightbox" href="images/bridge.jpg">
                    <img src="images/bridge.jpg" alt="Park" class="card-img-top">
                  </a>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4">
                <div class="card">
                  <a class="lightbox" href="images/coast.jpg">
                    <img src="images/coast.jpg" alt="Park" class="card-img-top">
                  </a>
                </div>
              </div>

              <div class="col-md-4">
                <div class="card">
                  <a class="lightbox" href="images/rails.jpg">
                    <img src="images/rails.jpg" alt="Park" class="card-img-top">
                  </a>
                </div>
              </div>

              <div class="col-md-4">
                <div class="card">
                  <a class="lightbox" href="images/rocks.jpg">
                    <img src="images/rocks.jpg" alt="Park" class="card-img-top">
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
    .tour-media-wrapper {
    }

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