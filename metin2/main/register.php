<div id="register">
	<div class="content content-last">
		<div class="content-bg">
			<div class="content-bg-bottom">
				<h2>Metin2 - Regisztráció</h2>
				<div class="inner-form-border">
					<div class="inner-form-box">
						<h3><a id="toLogin" href="?s=login" title="bejelentkezés">Bejelentkezés</a>Regisztráció</h3>
						<div class="trenner"></div>
						<form  id="form2" name="form2" method="post" action="?s=registerlog" onSubmit="return CheckValid(this)">
							<div class="center">
								<div class="form-item">
									<label for="UserID">Felhasználónév:</label>
									<input name="UserID" type="text" id="UserID" minlength="4" maxlength="16" size="16" value="" onFocus="change(1)" class="validate[required,custom[noSpecialCharacters],length[5,16]]" required />
								</div>
								<div class="form-item">
									<label for="UserName">Valódi név:</label>
									<input name="UserName" type="text" id="UserName" minlength="4" maxlength="25" size="25" value="" class="inputbox2" onFocus="change(5)" required />
								</div>
								<div class="form-item">
									<label for="Email">Email:</label>
									<input type="text" name="Email" id="Email" minlength="4" maxlength="25" size="25" required />
								</div>
								<div class="form-item">
									<label for="Password">Jelszó:</label>
									<input name="Password" type="password" id="Password" minlength="4" maxlength="16" size="16" class="inputbox2" onFocus="change(2)" required />
								</div>
								<div class="form-item">
									<label for="Password2">Jelszó újra:</label>
									<input name="Password2" type="password" id="Password2" minlength="4" maxlength="16" size="16" class="inputbox2" onFocus="change(2)" required />
								</div>
								<div class="form-item">
									<label for="DeleteCode">Karakter törlő kód:</label>
									<input type="text" name="DeleteCode" id="DeleteCode" minlength="7" maxlength="7" size="7" required />
								</div>
								<br />
								<input id="submitBtn" type="submit" name="SubmitRegisterForm" value="Regisztráció" class="btn-big" />
							</div>
						</form>
						<p id="regLegend" align="left">Minden mező kitöltése kötelező!<br />Valós Email címet adj meg!<br />A regisztrációval elfogadod<br /> a <a href="imprint.html" target="_blank"><strong>felhasználási feltételeket</strong></a>!</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="shadow">&nbsp;</div>
