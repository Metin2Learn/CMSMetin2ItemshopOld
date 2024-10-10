<div id="page">
	<div class="header-wrapper">
		<div id="header">
			<a class="logo" style="margin-top:30;" href="?s=home"><strong>Metin2</strong></a>
			<?php
				// session_start ();
				
				if(!isset($_SESSION['id'])) {
					include('user/downloadmenu.php');
				} else {
					$coins = $_SESSION['coins'];
					include('user/upmenu.php'); 
				}
			?>
		</div>
	</div>
	<div class="container-wrapper">
		<div class="container">
			<!-- COL1 -->
			<div class="col-1">
				<div class="boxes-top">&nbsp;</div>
				<div class="modul-box">
					<div class="modul-box-bg">
						<div class="modul-box-bg-bottom">
							<ul class="main-nav">
								<li class="active">
									<a href="?s=home">Kezdőlap</a>
								</li>
								<li>
									<a href="?s=thegame">A játékról</a>
								</li>
								<li>
									<a href="?s=register">Regisztráció</a>
								</li>
								<li>
									<a href="?s=login">Bejelentkezés</a>
								</li>
								<!--<li>
									<a href="?s=download">Letöltés</a>
								</li>-->
								<li>
									<a href="?s=howto">Első lépések</a>
								</li>
								<li>
									<a href="?s=media">Galéria</a>
								</li>
								<li>
									<a href="/forum" target="_blank">Fórum</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="boxes-middle">&nbsp;</div>
				<div class="modul-box modul-box-2">
					<div class="modul-box-bg">
						<div class="modul-box-bg-bottom">
							<ul class="main-nav" style="padding-bottom: 0px;">
								<li><a href="?s=download">Letöltés</a>
								</li>
							</ul>
							<a href="?s=download" class="btn download-btn"></a> 
						</div>
					</div>
				</div>
				<div class="boxes-bottom">&nbsp;</div>
			</div>
			<!-- COL2 -->
			<div class="col-2">
				<?php
					if(isset($_GET['s']) && !empty($_GET['s'])) {
						if(file_exists("./main/".$_GET['s'].".php")) {
							include("./main/".$_GET['s'].".php");
						} else {
							include("main/404.php");
						}
					} else {
						include("main/home.php");
					}
				?>
			</div>
			<!-- COL3 -->
			<div class="col-3">
				<?php include("user/ranksmall.php"); ?>
			</div>
		</div>
	</div>
</div>