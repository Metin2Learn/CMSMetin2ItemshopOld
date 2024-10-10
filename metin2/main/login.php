<div id="login">
	<div class="content content-last">
		<div class="content-bg">
			<div class="content-bg-bottom">
				<h2>Metin2 - Belépés</h2>
				<div class="inner-form-border">
					<div class="inner-form-box">
						<h3><a id="topwLost" href="?s=passwordlost" title="Elfelejtett jelszó?">Elfelejtett jelszó?</a>Belépés</h3>
						<div class="trenner"></div>
						<form name="loginForm" id="loginForm" action="?s=login" method="post">
							<div>
								<label for="username">Felhasználónév: *</label>
								<input type="text" class="validate[required,custom[noSpecialCharacters],length[3,16]]" id="username" name="user" maxlength="16" value="" />
							</div>
							<div>
								<label for="password">Jelszó: *</label>
								<input type="password" class="validate[required,length[5,16]]" id="password" name="pw" maxlength="16" value="" />
							</div>
							<div id="checkerror">
								<p>A belépéssel elfogadod a felhasználási feltételeket!</p>
							</div>
							<input id="submitBtn" class="btn-big" type="submit" name="login" value="Login" />
							<?php 
								if (isset($_GET['fail'])) {
									echo "<div class='center'><font color='darkred' style='font-size:16px'><strong>Hibás felhasználónév vagy jelszó!</strong></font></div>";
								}
							?>
						</form>
						<p id="regLegend">* szükséges</p>
						<div class="trenner"></div>
						<div id="subscribe">
							<h3>Még nincs accountod?</h3>
							<p style="margin-top: 0px;">A regisztráció egyszerű, gyors és ingyenes.</p>
							<a class="btn-big" href="?s=register" title="Crează un cont">Regisztráció</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="shadow">&nbsp;</div>
</div>
<?php
	if(isset($_POST['login']) && $_POST['login'] == 'Login') {
		// include('config.php');
		mysqli_select_db($sqlServ, 'account');
			
		$user = mysqli_real_escape_string($sqlServ, $_POST['user']);
		$pw = mysqli_real_escape_string($sqlServ, $_POST['pw']);
		$check = "SELECT * from account where login = '" . $user . "' and password = PASSWORD('$pw')";
		$query = mysqli_query($sqlServ, $check);
		$num = mysqli_num_rows($query);
		
		if($num > 0) {
			$array = mysqli_fetch_array($query);
			
			$_SESSION['id'] = $array['login'];
			$_SESSION['acc_id'] = $array['id'];
			$_SESSION['coins'] = $array['coins'];
			$_SESSION['status'] = $array['status'];
			$_SESSION['email'] = $array['email'];
			$_SESSION['real_name'] = $array['real_name'];
			$_SESSION['social_id'] = $array['social_id'];

			echo "<meta http-equiv='refresh' content='0; URL=?s=profil'>";
		} else {
			echo "<meta http-equiv='refresh' content='0; URL=?s=login&fail=true'>";
		}
	}
?>