<?php
	if(!isset($_SESSION['id'])) {
		header("Location: ?s=login");
		exit;
	} else {
?>
<div id="container">
	<?php include("pages/etc.php") ?>
	<div id="mainContent">
		<h1>Tárgyak listája (Legújabb elől)</h1>
		<div class="dynContent" style="position:relative">
			<?php
			$get_item = mysqli_query($sqlServ, "SELECT * FROM itemshop.ishop_items ORDER BY date_added DESC, vnum");
			while($item = mysqli_fetch_object($get_item)) {
			?>
			<div class="item">
				<div class="itemDesc">
					<div class="thumbnailBgSmall">
						<a href="?s=detail&id=<?php echo $item->id; ?>" title="További információ" class="openinformation">
							<img src="img/item/<?php echo $item->vnum_icon; ?>.png" onerror="this.src='img/error.png';" width="63px" height="63px" alt="További információ"/>
						</a>
					</div>
					<p>
						<a href="?s=detail&id=<?php echo $item->id; ?>" title="További információ" class="openinformation">
							<span class="itemTitle"><?php echo $item->name_item; ?></span>
						</a>
						<span class="line"></span>
						<?php
							if (empty($item->desc))
								{
						?>
						<span>A tárgy nem rendelkezik leírással.</span>
						<?php
							} else { 
								echo $item->desc;
							}
						?>
					</p>
				</div>
				<div class="purchaseOptionsWrapper">
					<div class="itemPrice">
						<div class="priceValue"><?php echo $item->count; ?> darab ára:<span class="price">&nbsp;<?php echo $item->price; ?> SÉ</span></div>
					</div>
					<a href="?s=detail&id=<?php echo $item->id; ?>" title="További információ" class="purchaseInfo openinformation">Részletek</a>
					<br class="clearfloat" />
				</div>
			</div>
			<?php
				}
			?>
		</div>
	<div class="endContent"></div>
	</div>
</div>
<?php
	}
?>