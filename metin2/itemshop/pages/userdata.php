<?php
	if(!isset($_SESSION['id'])) {
		header("Location: ?s=login");
		exit;
	} else {
?>
<div id="container">
	<?php include("pages/etc.php") ?>
	<div id="mainContent">
		<h1>Az utolsó 50 vásárlásod</h1>
		<div class="dynContent" style="position:relative">
			<?php
			$get_item = mysqli_query($sqlServ, "SELECT * FROM itemshop.ishop_log where buyer_name='".$_SESSION['id']."' ORDER BY date_of_buy DESC LIMIT 50 ");
			while($item = mysqli_fetch_object($get_item)) {
			?>
			<div class="item">
				<div class="itemDesc">
					<div class="thumbnailBgSmall">
						<img src="img/item/<?php echo $item->vnum_icon; ?>.png" onerror="this.src='img/error.png';" width="63px" height="63px"/>
					</div>
					<p>
						<span class="itemTitle"><?php echo $item->item_name; ?></span>
						<span class="line"></span>
						Vásárlás ideje: <b><?php echo $item->date_of_buy; ?><b>.
					</p>
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
