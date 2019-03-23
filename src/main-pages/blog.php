<?php
$sqlBlog = mysqli_query($conn, "SELECT * FROM `blog`");
if (mysqli_num_rows($sqlBlog) > 0) {}
else {
  echo "0 results";
}
?>
<!-- --------------------------------- Container --------------------------------- -->
<div class="container">
    <!-- --------------------------------- best offers --------------------------------- -->

    <div class="best-offers">
        <h3 class="text-center">Our Blog</h3>
        <p class="text-center">Check out our Blog</p>
        <div class="row text-center">
            <?php
               while ($rowBlog = mysqli_fetch_assoc($sqlBlog)) {
                $name = $rowBlog['name'];
                $blogId = $rowBlog['id'];
                $header = $rowBlog['header'];
                $paragraph = "";
                $imgTemp = $rowBlog['img_temp']
        ?>
            <div class="col-sm-12 col-md-5 col-lg-4">
                <div class="card">
                    <div class="box-offer-img-wrap">
                        <a href="?pages=blog-page&&blog-id=<?= $blogId?>">
                            <img class="img-fluid" src="<?= $imgTemp?>" alt="Denim Jeans">
                        </a>
                    </div>
                    <div class="box-offer-caption p-3">
                        <div class="cardHeader">
                            <a href="?pages=blog-page&&blog-id=<?= $blogId?>">
                                <?= $header ?>
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