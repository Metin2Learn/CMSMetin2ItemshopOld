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
		$item = mysqli_fetch_array($get_item);
?>
<div id="fancybox-content" style="border-width: 0px; width: 540px; height: 500px;">
	<div style="width:540px;height:500px;overflow: hidden;position:relative;">
		<h1>Vásárlás <?echo $items; ?></h1>
		<?php
			if($info['coins'] >= $item['price']){
			$data = date('Y-m-d H:i:s');
			mysqli_query($sqlServ, "INSERT INTO itemshop.ishop_log (buyer_name, item_name, date_of_buy, vnum_icon) VALUES ('".$_SESSION['id']."', '".$item['name_item']."', '$data', '".$item['vnum_icon']."')");
			mysqli_query($sqlServ, "UPDATE account.account SET `coins` = `coins` - ".$item['price']." WHERE `id` = '".$_SESSION['acc_id']."'");
			mysqli_query($sqlServ, "UPDATE account.account SET `cash` = `cash` + ".$item['price']." WHERE `id` = '".$_SESSION['acc_id']."'");
			mysqli_query($sqlServ, "INSERT INTO player.item_award (pid, login, vnum, count, given_time, why, socket0, socket1, socket2, mall) VALUES ('".$_SESSION['acc_id']."','".$_SESSION['id']."','".$item['vnum']."','".$item['count']."','$data', 'ItemShop Buy', '".$item['socket0']."', '".$item['socket1']."', '".$item['socket2']."','1')");
		?>
		<div class="dynContent">
			<div id="confirmBox" class="item">
				<div class="itemDesc confirmDesc">
					<div class="thumbnailBgSmall">
						<img width="63px" height="63px" src="img/7227be80292ec244a17496ca9b2528.png"></img>
					</div>
					<p>
						<span class="confirmTitle">Sikeres vásárlás</span>
						<br />A tárgy hozzáadva a tárgypiac raktáradhoz!</br>
						</br><b>Az oldal 5 másodperc múlva újratölt és átirányít.
						<!--</b><meta http-equiv="refresh" content="10;">-->
						<script>
							setTimeout(function(){
							   window.location.reload(1);
							}, 5000);
						</script>
					</p>
					<br class="clearfloat"></br>
				</div>
			</div>
		</div>
		<?php
			} else {
		?>
		<div class="dynContent">
			<div id="confirmBox" class="item">
				<div class="itemDesc confirmDesc">
					<div class="thumbnailBgSmall">
						<img width="63px" height="63px" src="img/error.png"></img>
					</div>
					<p>
						<span class="confirmTitle"><font color="red">Sikertelen vásárlás</font></span>
						<br />Nincs elég Sárkány érméd!
						<br />Neked <?php echo $info['coins']; ?> SÉ-d van, a tárgy <?php echo $item['price'];?> SÉ-be kerül.</br>
					</p>
					<br class="clearfloat"></br>
				</div>
			</div>
		</div>
		<?php
			}
		?>
		<?php
			if($info['coins'] >= $item['price']){
		?>
		<div class="hint">
			<div class="itemDesc messageDesc">
				<p>
					<span class="hintTitle">Megjegyzés</span><br />
					</br>A tárgyadat megtalálod a tárgypiac raktáradban, amit a leltáradból is meg tudsz nyitni az ábrán látható gombbal.
				</p>
				<br class="clearfloat"></br>
			</div>
		</div>
		<?php
			}
		?>
	</div>
</div>
<a id="fancybox-close" style="display: inline;"></a>
<div id="fancybox-title" style="display: block;"></div>
<?php
	}
?>
