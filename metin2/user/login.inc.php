<?php
	// session_start ();
	if (!isset($_SESSION['id'])) {
		include('loginmenu.inc.php');
	} else {
		$coins = $_SESSION['coins'];
		echo "
		<div class='modul-box'>
			<div class='modul-box-bg'>
				<div class='modul-box-bg-bottom'>
					<h3>Felhasználó</h3>
					<center>
						</br><b>Üdvözöllek,</b> <span class='offset'>" . $_SESSION['id'] . "</span><br />
						<br /><b>Sárkány érméid:</b> <span class='offset'>" . $_SESSION['coins']  . "</span><br />
						<br /><b>Státusz:</b> <span class='offset'>" . $_SESSION['status']  . "</span><br />
						<br /><a href='?s=logout' class='btn'>Kilépés</a>
						<br />
					</center>
				</div>
			</div>
		</div>
		<div class='boxes-middle'>
			&nbsp;
		</div>
		<div class='modul-box modul-box-2'>
			<div class='modul-box-bg'>
				<div class='modul-box-bg-bottom'>
					<ul class='main-nav' style='padding-bottom: 0px;'>
						<li><a id='various2' href='?s=itemshop'>ItemShop</a></li>
					</ul>
					<a id='various3' href='?s=itemshop' class='btn itemshop-btn'></a>
				</div>
			</div>
		</div>";
	}
?>

