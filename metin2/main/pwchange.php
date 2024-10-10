<?php
if (!isset($_SESSION['id'])) {
	header("location: ?s=home");
	exit;
}
?>
<div id="register">
	<div class="content content-last">
		<div class="content-bg">
			<div class="content-bg-bottom">
				<h2>Metin2 - Adatok módosítása</h2>
				<div class="inner-form-border">
					<div class="inner-form-box">
						<div class="trenner"></div>
						<div class="center">
							<form action="?s=pwchange" method="post">
								<div class="form-item">
									<label for="password">Régi jelszó:</label>
									<input type="password" name="oldpw" size="16" required><br />
								</div>
								<div class="form-item">
									<label for="newpw">Új jelszó:</label>
									<input type="password" name="newpw" size="16" required><br />
								</div>
								<div class="form-item">
									<label for="newpw2">Új jelszó ismét:</label>
									<input type="password" name="newpw2" size="16" required><br />
								</div>
								<div class="form-item">
									<label for="lcold">Régi karakter törlő kód:</label>
									<input type="text" name="lcold" size="7" required><br />
								</div>
								<div class="form-item">
									<label for="lcnew">Új karakter törlő kód:</label>
									<input type="text" name="lcnew" size="7" required><br /><br />
								</div>
								<input id="submitBtn" class="btn-big" type="submit" name="change" value="Változtat" />
							</form>
						</div>
						<?php
							if(isset($_POST['change']) && $_POST['change'] == 'Változtat') {
								mysqli_select_db($sqlServ, 'account');
								$oldpw = mysqli_real_escape_string($sqlServ, $_POST['oldpw']);
								$newpw = mysqli_real_escape_string($sqlServ, $_POST['newpw']);
								$newpw2 = mysqli_real_escape_string($sqlServ, $_POST['newpw2']);
								$lcold = mysqli_real_escape_string($sqlServ, $_POST['lcold']);
								$lcnew = mysqli_real_escape_string($sqlServ, $_POST['lcnew']);
								if($newpw == $newpw2 && strlen($newpw) >= 3 && strlen($newpw) <= 16 && strlen($lcnew) == 7 && ctype_alnum($newpw) && ctype_alnum($lcnew)) {
									$change = "UPDATE account set password = PASSWORD('" . $newpw . "'), social_id = '" . $lcnew . "' where login = '" . $_SESSION['id'] . "' and password = PASSWORD('" . $oldpw . "') and social_id = '" . $lcold . "'";
									$query = mysqli_query($sqlServ, $change);
									if($query && mysqli_affected_rows($sqlServ) > 0) {
										$_SESSION['social_id'] = $lcnew;
										echo "<font color='green' style='font-size:16px'><strong>Az adatok sikeresen módosítva!</strong></font>";
									} else {
										echo "<font color='darkred' style='font-size:16px'><strong>A művelet nem sikerült, próbáld újra!</strong></font>";
									}
								} else {
									echo "<font color='darkred' style='font-size:16px'><strong>Kérlek ellenőrizd a megadottakat!</strong></font>";
								}
							}
						?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="shadow">&nbsp;</div>
</div>
