<?php
	if(!isset($_SESSION['id'])) {
		header("Location: ?s=login");
		exit;
	} else {
?>
<div id="container">
	<?php include("pages/etc.php") ?>
	<div id="mainContent">
		<h1>Sé feltöltés</h1>
		<div class="dynContent" style="position:relative">
				<font color="#996600;" size="3">
				<br /><p>SÉ rendeléséhez egy
				emelt díjas SMS-t kell küldened.<br />
				Az SMS szövege a felhasználóneved legyen:
				<?php echo'<b>'.$_SESSION['id'].'</b>'; ?>
				</p><br />
				<table style="text-align: center; width: 385px; border-collapse: collapse; border: 1px solid #996600;" >
					<tbody>
						<tr style="border: 1px solid #996600;">
							<th style="border: 1px solid #996600;">SÉ</th>
							<th style="border: 1px solid #996600;">SMS szám</th>
							<th style="border: 1px solid #996600;">Összeg (HUF)</th>
						</tr>
						<tr style="border: 1px solid #996600;">
							<td style="border: 1px solid #996600;">1000</td>
							<td style="border: 1px solid #996600;">06-90-000-001</td>
							<td style="border: 1px solid #996600;">400Ft+áfa (508Ft)</td>
						</td>
						</tr>
						<tr style="border: 1px solid #996600;">
							<td style="border: 1px solid #996600;">3000</td>
							<td style="border: 1px solid #996600;">06-90-000-002</td>
							<td style="border: 1px solid #996600;">800Ft+áfa (1016Ft)</td>
						</tr>
						<tr style="border: 1px solid #996600;">
							<td style="border: 1px solid #996600;">9000<br /></td>
							<td style="border: 1px solid #996600;">06-90-000-003</td>
							<td style="border: 1px solid #996600;">1600Ft+áfa (2032Ft)</td>
						</tr>
						<tr style="border: 1px solid #996600;">
							<td style="border: 1px solid #996600;">25000<br /></td>
							<td style="border: 1px solid #996600;">06-90-000-004</td>
							<td style="border: 1px solid #996600;">4000Ft+áfa (5080Ft)</td>
						</tr>
					</tbody>
				</table>
				</br><p>Rossz számra, vagy hibás felhasználónévvel küldött </br>SMS-ekért nem tudunk felelősséget válllalni!</p>
			</font>
		</div>
		<div class="endContent"></div>
	</div>
</div>
<?php
	}
?>
