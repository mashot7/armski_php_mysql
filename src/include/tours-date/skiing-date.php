<?php
include '../connection.php';
$per_page = 6;
if(isset($_GET['page'])) {
	$page=$_GET['page'];
}
$start = ($page-1)*$per_page;
$sql_query = "select `id`, `title`, `img-temp`, `price`, `category` FROM `tours` WHERE `category`='Skiing' order by id limit $start,$per_page"  ;
$resultset = $conn-> query($sql_query);
?>

<?php
while($rows = $resultset -> fetch_array()){	
?>	
	<div class="col-sm-12 col-md-5 col-lg-4">
		<div class="card">
			<div class="box-offer-img-wrap">
				<a href="?pages=tour-page&tour-id=<?= $rows['id'] ?>">
					<img class="img-fluid" src="<?= $rows['img-temp']; ?>" alt="Denim Jeans">
				</a>
			</div>
			<div class="box-offer-caption p-3">
				<div class="cardHeader">
					<a href="?pages=tour-page&tour-id=<?php echo $rows['id'] ?>">
						<?= $rows['title']; ?>
					</a>
				</div>
				<div class="pull-left">
					<a href="?pages=tour-page&tour-id=<?php echo $rows['id'] ?>">
					Book Now!
					</a>
				</div>
				<div class="pull-right">
					<p>$<?= $rows['price']; ?></p>
				</div>
				<div>Category: <?= $rows['category']; ?></div>
			</div>
		</div>
	</div>
<?php 
}	
?>