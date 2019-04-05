<?php
/*
$sqlCult = "SELECT * FROM `tours` WHERE `category`='Culture'";
$sqlAdv = "SELECT * FROM `tours` WHERE `category`='Adventure'";
$sqlSki = "SELECT * FROM `tours` WHERE `category`='Skiing'";
$resultCult = $conn->query($sqlCult);
$resultAdv = $conn->query($sqlAdv);
$resultSki = $conn->query($sqlSki);*/
?>

<div class="container">
    <div id="Cul" class="best-offers">
        <h3 class="text-center">Culture</h3>
        <p class="text-center">Check out our culture tours</p>
        <?php
        $per_pageCul = 6;
        $sqlCul = "SELECT `id`, `title`, `img-temp`, `price`, `category` FROM `tours` WHERE `category`='Culture' ";
        $resultCul = $conn-> query($sqlCul);
        $countCul = $resultCul->num_rows;
        $pagesCul = ceil($countCul/$per_pageCul);
        ?>
        <div id="content_container0" class="row text-center"></div>
        <hr>	
        <div class="pagination">
            <ul class="pagination"id="paginate0">
            <?php		
            for($i=1; $i<=$pagesCul; $i++)	{
                echo '<li class="page-item" id="'.$i.'"><a href="#Cul" class="page-link">'.$i.'</a></li>';
            }
            ?>
            </ul>
        </div>
    </div>
    <div id="Ski" class="best-offers">
        <h3 class="text-center">Skiing</h3>
        <p class="text-center">Check out our skiing tours</p>
        <?php
        $per_pageSki = 6;
        $sqlSki = "SELECT `id`, `title`, `img-temp`, `price`, `category` FROM `tours` WHERE `category`='Skiing' ";
        $resultSki = $conn-> query($sqlSki);
        $countSki = $resultSki->num_rows;
        $pagesSki = ceil($countSki/$per_pageSki);
        ?>
        <div id="content_container1" class="row text-center"></div>
        <hr>	
        <div class="pagination">
            <ul class="pagination"id="paginate1">
            <?php		
            for($i=1; $i<=$pagesSki; $i++)	{
                echo '<li class="page-item" id="'.$i.'"><a href="#Ski" class="page-link">'.$i.'</a></li>';
            }
            ?>
            </ul>
        </div>
    </div>
    <div class="best-offers" id="Adv">
        <h3 class="text-center">Adventure</h3>
        <p class="text-center">Check out our adventure tours</p>
        <?php
        $per_pageAdv = 6;
        $sqlAdv = "SELECT `id`, `title`, `img-temp`, `price`, `category` FROM `tours` WHERE `category`='Adventure' ";
        $resultAdv = $conn-> query($sqlAdv);
        $countAdv = $resultAdv->num_rows;
        $pagesAdv = ceil($countAdv/$per_pageAdv);
        ?>
        <div id="content_container2" class="row text-center"></div>
        <hr>	
        <div class="pagination">
            <ul class="pagination"id="paginate2">
            <?php		
            for($i=1; $i<=$pagesAdv; $i++)	{
                echo '<li class="page-item" id="'.$i.'"><a href="#Adv" class="page-link">'.$i.'</a></li>';
            }
            ?>
            </ul>
        </div>
    </div>
</div>
