<div class="content content-last">
	<div class="content-bg">
		<div class="content-bg-bottom">
			<h2>Metin2 - Birodalmak</h2>
			<div class="empires-content">
				<ul class="tabs-nav tabs3">
					<li id="tab1"><a href="?s=thegame">A Játék</a></li>
					<li id="tab2"><a href="?s=characterclasses">Karakter osztályok</a></li>
					<li id="tab3" class="selected"><a href="?s=empires">Birodalmak</a></li>
				</ul>
				<div class="empires-map">
					<div id="empire-img" class="empire-1"></div>
					<img src="img/1pixel-bg.png" width="481" height="341" border="1" alt="map" usemap="#empiresMap" />
					<map name="empiresMap" id="empiresMap">
						<area shape="poly" coords="70,207,102,207,120,217,138,219,149,214,169,216,180,219,193,210,204,211,219,216,226,206,240,200,252,201,259,209,257,215,260,222,258,232,260,250,268,245,290,255,298,256,315,262,332,264,339,270,339,281,334,287,334,293,329,297,318,304,310,306,305,311,293,317,285,314,282,317,274,314,267,318,244,317,229,308,214,308,192,315,185,316,178,313,169,314,160,315,144,313,125,300,123,294,115,290,113,283,115,280,106,276,87,272,73,266,64,263,64,254,50,241,48,232,47,224,60,219,67,215" href="javascript:void(0)" alt="Shinsoo-Birodalom" title="Shinsoo-Birodalom" onmouseover="showEmpire(1)"/>
						<area shape="poly" coords="65,26,79,21,93,19,117,18,133,25,147,26,159,38,180,42,193,42,197,50,189,59,193,64,190,71,197,83,194,89,192,96,180,104,175,116,174,127,169,131,164,132,159,142,158,149,139,149,135,152,125,153,107,153,96,159,79,155,60,158,51,140,37,133,28,119,18,113,20,97,17,89,22,84,17,71,26,60,27,51,37,38,48,31" href="javascript:void(0)" alt="Chunjo-Birodalom" title="Chunjo-Birodalom" onmouseover="showEmpire(2)" />
						<area shape="poly" coords="302,49,311,39,323,40,327,47,373,55,380,60,393,53,413,56,436,62,434,68,453,70,456,77,451,85,456,91,457,97,463,102,460,111,463,121,455,128,452,134,444,135,445,147,431,163,441,167,444,179,445,186,455,198,452,205,451,211,441,217,417,219,385,211,374,205,353,211,347,192,352,183,343,170,329,167,320,164,312,153,315,148,302,138,304,122,311,115,322,114,335,106,329,96,314,83,315,76,309,74,303,67" href="javascript:void(0)" alt="Jinno-Birodalom" title="Jinno-Birodalom" onmouseover="showEmpire(3)"/>
					</map>
				</div>
				<br class="clearfloat" />
				<div class="empirebox empirebox-1">
					<div class="empire-crest"></div>
					<h4>Shinsoo-Birodalom</h4>
					<p>A Shinsoo birodalom a kontinens <strong>déli</strong> részén fekszik. Az itt élők <strong>kereskedelemmel</strong> foglalkoznak.<br /><br />Yoon-Yoing irányítása alatt a kelet-Shinsooi kereskedelemi kapcsolatok a császárság összeomlása után hamar a mai virágzásához vezetett. A lakosok folyamatos harcban állnak azonban a nyugatiakkal, aminek hatására megszűnt a kereskedelmi útvonal. Amikor észrevették a  Metin kövek fenyegetését, a kereskedők felfegyverkeztek.<br /><br />Céljuk a <strong>nyugati támadások</strong> megfékezése, a kereskedelemi útvonal újboli megnyitása, és az egész birodalom saját irányításuk alatti egyesítése.</p>
				</div>
				<div class="empirebox empirebox-2">
					<div class="empire-crest"></div>
					<h4>Chunjo-Birodalom</h4>
					<p>A Chunjo birodalom a kontinens <strong>nyugati</strong> részén fekszik. <strong>Teokratikus</strong> államát spirituális vezetők irányítják.<br /><br />Alapítása Yoon-Young nevéhez fűződik, aki az egykori császár unokaöccse. Yoon felesége, aki hatalmas mágikus erővel rendelkezik, már korán támogatta férjét a Metin kő fenyegetésének megismerésében. Yoon-Young többször is ellenintézkedéseket javasolt, de figyelmen kívül hagyták. Ezért vezette követőit egy felkelésben az akkor még egységes császárság ellen. A birodalom pusztulása után Chinjo még mindig <strong>nyílt vitában</strong> áll a Kelettel, és állandó harcban Déllel.<br /><br />A lakosok arra törekednek, hogy megszerezzék a hatalmat az egész kontinensen, azért, hogy a Metin kő növekvő hatalmának véget vessenek.</p>
				</div>
				<div class="empirebox empirebox-3">
					<div class="empire-crest"></div>
					<h4>Jinno-Birodalom</h4>
					<p>A Jinno birodalom a kontinens <strong>keleti részén</strong> terül el. Katonai hatalomra épül a birodalom, amely az <strong>agresszív, harcos természetétű</strong> lakosokat irányítja.<br /><br />Jinno-t Ee-Ryoong vezeti, aki a vér szerinti fia az utolsó császárnak.<br /><br />Elhivatottnak érzi magát arra, hogy a rendelkezésére álló katonai hatalom segítségével az egykori császárságot visszaállítsa.<br /><br />A Jinno birodalomban hivatalosan nem vesznek tudomást a Metin kövek jelentőségéből és hatásából eredő félelmekről. Titokban Ee-Ryoong megpróbálja azonban a Metin kövek pusztító hatását saját katonai céljaira érvényesíteni.</p>
				</div>
				<div class="box-foot"></div>
			</div>
		</div>
	</div>
</div>
<div class="shadow">&nbsp;</div>
<script type="text/javascript">
function showEmpire(target) {
	$('#empire-img').removeClass();
	$('#empire-img').addClass('empire-'+target);
	$('.empirebox').css({display: 'none'});
	$('.empirebox-'+target).css({display: 'block'});
}
</script> 
