<?php
if (!isset($_SESSION['id'])) {
	header("location: ?s=home");
	exit;
}
?>
<div class="content content-last">
	<div class="content-bg">
		<div class="content-bg-bottom">
			<h2>Metin2 - Azonosítód</h2>
			<div class="administration-inner-content">
				<div class="input-data-box">
					<h4>Részletek</h4>
					<?php
						// session_start ();
						if(isset($_SESSION['id'])) {
							$coins = $_SESSION['coins'];
							echo "
							<ul>
							<li>Felhasználónév: <span class='offset'>" . $_SESSION['id'] . "</span></li>
							<li>Státusz: <span class='offset'>" . $_SESSION['status'] . "</span></li>
							<li>Sárkány Érme: <span class='offset'>" . $_SESSION['coins'] . "</span><br /></li>
							<li>Valódi név: <span class='offset'>" . $_SESSION['real_name'] . "</span></li>
							<li>Email címed: <span class='offset'>" . $_SESSION['email'] . "</span></li>
							<li>Karakter törlő kód: <strong> " . $_SESSION['social_id'] . " </strong></li>
							</ul>
							";
						}
					?>
					<div class="administration-box">
						<a href="?s=pwchange" class="btn">Adat változtatás</a>
						<p>Változtasd meg a fiókodt jelszavát, vagy a karaktertörlő kódot.</p>
					</div>
				</div>
				<div class="box-foot"></div>
			</div>
		</div>
	</div>
</div>
<div class="shadow">&nbsp;</div>
