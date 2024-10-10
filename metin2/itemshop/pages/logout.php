<div id="container">
	<?php include("pages/etc.php") ?>
	<div id="mainContent">
		<h1>Kilépés</h1>
		<div class="dynContent">
			<div class="item" id="confirmBox">
				<div class="itemDesc confirmDesc">
					<div class="thumbnailBgSmall"><img src="img/error.png" width="63px" height="63px" /></div>
					<p>
						<span class="confirmTitle">Kilépés</span><br  />
						<?php
							// unset($_SESSION['id']);
							session_destroy();
							echo'<meta http-equiv="refresh" content="3; URL=?s=home"> ';
						?>
						<span>Sikeresen kiléptél, kérlek várj 3 másodpercet.</span>
					</p>
					<br class="clearfloat" />
				</div>
			</div>
		</div>
		<div class="endContent"></div>
	</div>
</div>
