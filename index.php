<?php
require_once 'src/include/connection.php';
mb_internal_encoding('utf-8');
if (isset($_GET['pages']) && file_exists('src/main-pages/' . $_GET['pages'] . ".php")) {
  $pages = $_GET['pages'];
} else {
  $pages = 'home';
}

if ($pages == 'tour-page') {
  // get id
  $tourId = $_GET['tour-id'];
  // get data
  $sql = "SELECT * FROM `tours` WHERE `id`='$tourId'";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
      $title = $header = $row['name'];
      $subtitle = '';
      $meta_d = mb_substr($row['descr'], 0, 140);
      $price = $row['price'];
      $duration = nl2br($row['duration']);
      $location = nl2br($row['location']);
      $descr = nl2br($row['descr']);
      $begin = nl2br($row['begin']);
      $end = nl2br($row['end']);
      $season = nl2br($row['season']);
      $accom = nl2br($row['accom']);
      $food = nl2br($row['food']);
      $travelMod = nl2br($row['travelMod']);
      $peopleNum = nl2br($row['peopleNum']);
      $include = nl2br($row['include']);
      $exclude = nl2br($row['exclude']);
      $img = $row['img'];
    }
    $sql = "SELECT * FROM `tour_details` WHERE `tourId`='$tourId' ORDER BY `weight` ASC";
    $result = $conn->query($sql);
    $tourDetails = [];
    while ($row = $result->fetch_assoc()) {
      $tourDetails[] = array(
        'title' => $row['title'],
        'description' => $row['description'],
      );
    }
  } else {
    header('location: index.php');
    exit;
  }

  // GALLERY
  $sql = "SELECT * FROM `gallery` WHERE `img_id`='$tourId'";
  $result = $conn->query($sql);
  $tourImages = [];
  while ($row = $result->fetch_assoc()) {
    $tourImages[] = array(
      'image' => $row['url'],
    );
  }
} elseif ($pages == 'armenia-page') {

  // get id
  $armeniaId = $_GET['armenia-id'];
  // get data
  $sql = "SELECT title, img, description_a FROM `armenia` WHERE `id`='$armeniaId'";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
      $title = $header = $row['title'];
      $subtitle = '';
      $description = nl2br($row['description_a']);
      $img = $row['img'];
    }
    $sql = "SELECT * FROM `armenia_details` WHERE `armeniaId`='$armeniaId' ORDER BY `weight` ASC";
    $result = $conn->query($sql);
    $armeniaDetails = [];
    while ($row = $result->fetch_assoc()) {
      $armeniaDetails[] = array(
        'title' => $row['title'],
        'description' => $row['description_a_p'],
      );
    }
  } else {
    header('location: index.php');
    exit;
  }
} elseif ($pages == 'blog-page') {

  // get id
  $blogId = $_GET['blog-id'];
  // get data
  $sql = "SELECT * FROM `blog` WHERE `id`='$blogId'";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
      $title = $header = $row['name'];
      $subtitle = '';
      $description = nl2br($row['describ']);
      $img = $row['img'];
    }
    $sql = "SELECT * FROM `blog_details` WHERE `blogId`='$blogId' ORDER BY `weight` ASC";
    $result = $conn->query($sql);
    $blogDetails = [];
    while ($row = $result->fetch_assoc()) {
      $blogDetails[] = array(
        'title' => $row['title'],
        'img' => $row['img'],
        'description' => $row['description_t_p'],
      );
    }
  } else {
    header('location: index.php');
    exit;
  }

  // OTHER PAGES
} else {
  $sql = "SELECT title, subtitle, header FROM `pages` WHERE `name`='$pages'";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
      $title = $header = $row['header'];
      $subtitle = $row['subtitle'];
    }
  } else {
    echo "0 results";
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Hello there">
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>ASMA | <?= $title ?></title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="css/style.css" />
    <!-- Gallery-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <!-- Bootstrap style -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
</head>

<body>
    <?php
    $bg = $pages == 'home' ? '100vh' : '45vh';
    $headerPos = $pages == 'home' ? '50%' : '20%';
    ?>

    <!-- Header Section -->
    <section style="height: <?= $bg ?> ;
        background: linear-gradient(rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.2)),
        url(src/img/main/header.png);
        background-position: center;
        background-size: cover;
        background-attachment:
        fixed;" class="<?php echo $pages ?>" id="header">
        <div class="<?php echo $pages ?> container text-center">
            <div style="top: <?= $headerPos ?>" class="<?php echo $pages ?> main-text-box">
                <h1 class="<?php echo $pages ?> text-white"><?php echo $header ?></h1>
                <p class="<?php echo $pages ?> h6 text-white"><?php echo $subtitle ?></p>
            </div>
        </div>

        <div class="scroll-btn">
            <div class="scroll-bar">
                <a href="#content"><span></span></a>
            </div>
        </div>
    </section>

    <!-- --------------------------------- navbar --------------------------------- -->
    <section class="user-info">
        <div class="nav-bar">
            <nav class="navbar navbar-expand-lg">
                <a class="navbar-brand" href="index.php"><img src="src/img/main/logo.png" alt="" /></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto" id="menu">
                        <li class="nav-item">
                            <a class="home nav-link" href="index.php?pages=home">HOME </a>
                        </li>
                        <li class="nav-item">
                            <a class="armenia nav-link" href="index.php?pages=armenia">ARMENIA</a>
                        </li>
                        <li class="nav-item">
                            <a class="tours nav-link" href="index.php?pages=tours">TOURS</a>
                        </li>
                        <li class="nav-item">
                            <a class="gallery nav-link " href="index.php?pages=gallery">GALLERY</a>
                        </li>
                        <li class="nav-item">
                            <a class="videos nav-link " href="index.php?pages=videos">VIDEOS</a>
                        </li>
                        <li class="nav-item">
                            <a class="blog nav-link " href="index.php?pages=blog">BLOG</a>
                        </li>
                        <li class="nav-item">
                            <a class="about nav-link " href="index.php?pages=about">ABOUT US</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>

        <style>
            .nav-link.<?php echo $pages ?> {
                border-bottom: 2px solid #2AC506 !important;
                color: #2AC506 !important;
            }
        </style>
        <div id="content"></div>
        <?php
        include_once 'src/main-pages/' . $pages . '.php';
        ?>
        <div class="container">
            <hr>

        </div>
        <!-- --------------------------------- footer --------------------------------- -->
        <footer>
            <div class="row justify-content-sm-center">
                <div class="row col-md-8 col-lg-10">
                    <div class="col-md-12 col-lg-4 pt-5 text-left">
                        <img class="mb-3" style="width:100px; height:auto;" src="src/img/main/logo.png" alt="">
                        <p class=" text-secondary">Armenian ski mountaineer’s association has been established in 2016
                        </p>
                    </div>
                    <div class="col-md-12 col-lg-4 pt-5 text-center">
                        <p class="text-big mb-3" style="height:51.38px">Our Contacts</p>
                        <i class="fa fa-mobile mb-3" style="color:#fff; font-size:40px" aria-hidden="true"></i>
                        <p>(+374) 95 777 760</p>
                        <i class="fa fa-home mb-3" style="color:#fff; font-size:40px" aria-hidden="true"></i>
                        <p>Armenia, Yerevan Street V. Hambardzumyan 7/29</p>
                        <i class="fa fa-envelope mb-3" style="color:#fff; font-size:40px" aria-hidden="true"></i>
                        <p><a href="mailto:info@armski.am" style="color:#fff; text-decoration:none;">info@armski.am</a>
                        </p>
                    </div>
                    <div class="col-md-12 col-lg-4 pt-5">There is 3</div>
                </div>
            </div>
        </footer>
        <!-- SMOOTH SCROLL -->
        <script src="script/smooth-scroll.js"></script>
        <script>
            var scroll = new SmoothScroll('a[href*="#"]');
        </script>
        <!-- Bootstrap script -->
        <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
       -->
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <!-- Gallery -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
        <script>
            baguetteBox.run('.tz-gallery');
        </script>
        
        <!-- PAGINATION -->
        <script src="script/ajax_pagination.js"></script>
</body>

</html> 