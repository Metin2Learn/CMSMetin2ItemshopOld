<div id="pwLost">
	<div class="content content-last">
		<div class="content-bg">
			<div class="content-bg-bottom">
				<h2>Elfelejtetted a jelszavadat?</h2>
				<div class="inner-form-border">
					<div class="inner-form-box">
						<h3><a id="toLogin" href="?s=login" title="Bejelentkezés">Bejelentkezés</a>A jelszó küldése Emailben:</h3>
						<div class="trenner"></div>
						<form name="pwlostForm" id="pwlostForm" method="post" action="?s=passwordlost">
							<div>
								<label for="username">Felhasználónév: *</label>
								<input type="text" class="validate[required,custom[noSpecialCharacters],length[5,16]]" id="username" name="username" title="" value="" maxlength="16" required />
							</div>
							<div>
								<label for="email">Email: *</label>
								<input type="text" class="validate[required,custom[email]]" id="email" name="email" title="" value="" maxlength="64" required />
							</div>
							<input id="submitBtn" type="submit" name="SubmitPasswordLostForm" value="Új jelszó kérése" class="btn-big" />
						</form>
						<p id="regLegend">* szükséges</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="shadow">&nbsp;</div>
</div>
<?php
	//To do...
	if(isset($_POST['SubmitPasswordLostForm']) && $_POST['SubmitPasswordLostForm'] == 'Új jelszó kérése') {
		echo "<script>alert('Jelenleg nem elérhető!')</script>";
	}
?>