<div class="content content-last">
	<div class="content-bg">
		<div class="content-bg-bottom">
			<div class="administration-inner-content">
				<div class="input-data-box2">
					<h2>Metin2 - Regisztráció</h2>
					<?php
					// session_start();
					$UserID=mysqli_real_escape_string($sqlServ, $_POST["UserID"]);
					$Password=mysqli_real_escape_string($sqlServ, $_POST["Password"]);
					$Password2=mysqli_real_escape_string($sqlServ, $_POST["Password2"]);
					$Email=mysqli_real_escape_string($sqlServ, $_POST["Email"]);
					$UserName=mysqli_real_escape_string($sqlServ, $_POST["UserName"]);
					$DeleteCode=mysqli_real_escape_string($sqlServ, $_POST["DeleteCode"]);
					$error = "";
					//setlocale(LC_ALL, 'hu_HU');
					if (strlen($UserID) < 4 || strlen($UserID) > 16 || !ctype_alnum($UserID)) { $error=$error."A felhasználónév hibás!<br />Maximum 16 karakter lehet, de legalább 5.<br />"; }
					if (strlen($Password) < 4 || strlen($Password) > 16 || !ctype_alnum($Password)) { $error=$error."<br />A jelszó hibás!<br />Maximum 16 karakter lehet, de legalább 5.</br>"; }
					if (strlen($Email) < 4 || strlen($Email) > 25 || !filter_var($Email, FILTER_VALIDATE_EMAIL)) { $error=$error."<br />Az Email cím hibás!<br />Maximum 25 karakter lehet, de legalább 5.</br>"; }
					if (strlen($UserName) < 4 || strlen($UserName) > 25 /* || !ctype_alnum(trim(str_replace(' ','',$UserName)))*/ ) { $error=$error."<br />A név hibás!<br />Maximum 16 karakter lehet, de legalább 5.</br>"; }
					if (strlen($DeleteCode) != 7 || !ctype_alnum($DeleteCode)) { $error=$error."<br />A karakter törlő kódnak 7 karakternek kell lennie!</br>"; }
					if ($Password != $Password2) { $error=$error."A jelszavak nem egyeznek meg!<br />"; }
					if (strlen($error) > 0) {
						echo "<strong>$error</strong><a class='btn' href=\"javascript:history.back();\">Vissza</a><br />";
						exit;
					} else {
						require_once("user/config.php");
						mysqli_select_db($sqlServ, "account");
						$exec="select * from account where Login='$UserID'";
						$result=mysqli_query($sqlServ, $exec);
						$rs=mysqli_fetch_object($result);
						if($rs){
							echo"<strong>A felhasználónév már foglalt!</strong><a class='btn' href=\"javascript:history.back();\">Vissza</a><br />";
							exit;
						}else{
							$exec="insert into account (Login,Password,Real_name,Email,social_id)  values('$UserID',password('$Password'),'$UserName','$Email','$DeleteCode')";
							mysqli_query($sqlServ, "set names big5 ");
							mysqli_query($sqlServ, "set CHARACTER big5 ");
							mysqli_query($sqlServ, $exec);
					?>
					<br /><h4 style="font-size: 16px">A regisztráció sikerült!</h4>
					<ul>
						<li>Felhasználónév:		<?php echo $UserID?></li>
						<li>Jelszó:		<?php echo $Password?></li>
						<li>Email:		<?php echo $Email?></li>
						<li>Valódi Név:		<?php echo $UserName?></li>
						<li>karaktertörlő:		<?php echo $DeleteCode?></li>
					</ul>
					<div class="administration-box"><a href="?s=download" class="btn">Letöltés</a></div>
					<?php
						}
					}
					?>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="shadow">&nbsp;</div>
