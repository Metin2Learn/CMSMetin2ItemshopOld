<?php
	if (!isset($_GET['id'])) {
		die("Választani kell egy tárgyat.");
	}
	$id = intval($_GET['id']);
	if(!isset($_SESSION['id'])) {
		header("Location: ?s=login");
		exit;
	} else {
		$coninfo = mysqli_query($sqlServ, "SELECT * FROM account.account where login='".$_SESSION['id']."'");
		$info = mysqli_fetch_array($coninfo);
		$get_item = mysqli_query($sqlServ, "SELECT * FROM itemshop.ishop_items where id=" . $id);
		$item = mysqli_fetch_assoc($get_item);
?>
<div id="fancybox-content" style="border-width: 0px; width: 540px; height: 500px;">
	<div style="width:540px;height:500px;overflow: hidden;position:relative;">
		<h1 class="mainHeadline">
			<?php echo $item['name_item']; ?>
		</h1>
		<div class="dynContent detail">
			<div class="box boxLeft visual">
				<img alt="Sabie Celesta+9" onerror="this.src='img/error.png';" src="img/item/<?= $item['vnum_icon'] ?>.png"></img>
			</div>
			<div class="box desc descOnlyItem">
				<div class="detailBadge">
					<div class="detailBadgeInner"> … </div>
				</div>
				<h2>
					<?php echo $item['name_item']; ?>
				</h2>
				<div class="scrollpane scrollpaneOnlyItem" style="overflow: hidden; padding: 0px; width: 351px;">
					<div class="jspContainer" style="width: 351px; height: 140px;">
						<div class="jspPane" style="padding: 0px; top: 0px; width: 351px;">
							<p>
							<?php
								if (empty($item['desc']))
								{
							?>
								<span>A tárgy nem rendelkezik leírással.</span>
							<?php
								} else {
									echo $item['desc'];
								}
							?>
							</p>
						</div>
					</div>
				</div>
			</div>
			<div class="box boxRight buy onlyItem">
				<div class="priceSelect">
					<div class="sprice">Ár: <span id="priceAmount"><?php echo $item['price']; ?></span>SÉ</div>
				</div>
				<?php
					if($info['coins'] >= $item['price']) {
				?>
				<a id="buyItemLink" class="tip assignMarks" href="?s=buy&id=<?php echo $id; ?>">Megveszem!</a>
				<?php 
					} else {
				?>
				<a id="buyItemLink" class="blank" style="cursor: default">Nincs elég SÉ-d</a>
				<?php
					}
				?>
				<div class="buyInfo">Neked <b><span id="mileageAmount"><?php echo $info['coins']; ?></span></b>SÉ-d van.</div>
				<div class="buyInfo">Kapsz <b><span id="mileageAmount"><?php echo $item['price']; ?></span></b>SJ-t ha megvásárolod ezt a tárgyat!</div>
			</div>
			<div class="box suggestions">
				<h2>További ajánlatok:</h2>
				<ol id="suggestions">
					<?php
						$get_recomandare = mysqli_query($sqlServ, "SELECT * FROM itemshop.ishop_items ORDER BY rand() LIMIT 7");
						while($items = mysqli_fetch_object($get_recomandare)) {
					?>
					<li class="thumbnailBgSmall">
						<a id="suggestion11979" class="suggestion" title="<?= $items->name_item;?>" href="?s=detail&id=<?= $items->id;?>">
							<img width="63" height="63" alt="<?php echo $items->name_item;?>" onerror="this.src='img/error.png';" src="img/item/<?= $items->vnum_icon;?>.png"></img>
						</a>
					</li>
					<?php
						}
					?>
				</ol>
			</div>
		</div>
	</div>
</div>
<a id="fancybox-close" style="display: inline;"></a>
<div id="fancybox-title" style="display: block;"></div>
<?php
	}
?>
