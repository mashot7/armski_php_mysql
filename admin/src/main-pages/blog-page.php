<div class="container">

    <style>
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
    <div class="d-flex">
        <div class="p-4 bg-white col-md-12 col-lg-8  ">
            <h1><?=$header ?></h1>
            <div class="tour-media-wrapper mb-4">
                <img class="mt-3 img-fluid" src="<?= $img?>">
            </div>
            <span><?=$description?></span>

            <div class="mt-3" style="max-width: 630px; text-align: justify;">
                <?php
                foreach ($blogDetails as $blogDetail) {
                ?>
                <h3> <?= $blogDetail['title'] ?></h3>
                <span><?= $blogDetail['description'] ?></span>
                <div > <img class="img-fluid" src="<?= $blogDetail['img'] ?>" alt=""> </div><br>
                <?php
            }
            ?>
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
    </style>
</div>