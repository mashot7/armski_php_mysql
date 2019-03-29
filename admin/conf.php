<?php
 // DB connection
require_once '../src/include/connection.php';

// edit page content
if ($_GET['cmd'] == 'edit_page') {
    if ($_GET['pages'] == 'tour-page') {
        $tourId = $_GET['page-id'];
        if ($_GET['section'] == 'overview') {
            $duration = trim($_POST['duration']);
            $begin = trim($_POST['begin']);
            $end = trim($_POST['end']);
            $season = trim($_POST['season']);
            $location = trim($_POST['location']);
            $price = trim($_POST['price']);
            $accom = trim($_POST['accom']);
            $food = trim($_POST['food']);
            $travelMod = trim($_POST['travelMod']);
            $peopleNum = trim($_POST['peopleNum']);
            $include = trim($_POST['include']);
            $exclude = trim($_POST['exclude']);
            // UPDATE
            $updateSql = "UPDATE `tours` SET `duration`='$duration',
            `location`='$location',
            `begin`='$begin',
            `end`='$end',
            `season`='$season',
            `price` = '$price',
            `accom`='$accom',
            `food`='$food',
            `travelMod`='$travelMod',
            `peopleNum`='$peopleNum',
            `include` = '$include',
            `exclude`='$exclude'
            WHERE `id`='$tourId'";
            if ($conn->query($updateSql) === true) {
                header('location: index.php?pages=tour-page&tour-id=' . $tourId . '&result=1');
            } else {
                header('location: index.php?pages=tour-page&tour-id=' . $tourId . '&result=0');
            }
        } elseif ($_GET['section'] == 'details') {
            $contentId = $_GET['content-id'];
            $title = trim($_POST['title']);
            $description = trim($_POST['description']);
            // UPDATE
            $updateSql = $conn->query("UPDATE `tour_details` SET `title`='$title',
            `description`='$description'
            WHERE `id`='$contentId'");
            if ($conn->query($updateSql) === true) {
                header('location: index.php?pages=tour-page&tour-id=' . $tourId);
            } else {
                header('location: index.php?pages=tour-page&tour-id=' . $tourId);
            }
        } elseif ($_GET['section'] == 'description') {
            $description = trim($_POST['description']);
            // UPDATE
            $updateSql = $conn->query("UPDATE `tours` SET `descr`='$description' WHERE `id`='$tourId");
            if ($conn->query($updateSql) === true) {
                header('location: index.php?pages=tour-page&tour-id=' . $tourId);
            } else {
                header('location: index.php?pages=tour-page&tour-id=' . $tourId);
            }
        } elseif ($_GET['section'] == 'title') {
            $title = trim($_POST['title']);
            echo $title;
            // UPDATE
            $updateSql = $conn->query("UPDATE `tours` SET `title` = '$title' WHERE `tours`.`id` = '$tourId'");
            if ($conn->query($updateSql) === true) {
                header('location: index.php?pages=tour-page&tour-id=' . $tourId);
            } else {
                header('location: index.php?pages=tour-page&tour-id=' . $tourId);
            }
        }
    }
}
echo 'Hello';
 