# Mario-Kart-XL
Un fangame Mario Kart avec beaucoup de contenu qui attirera des fans.
<!DOCTYPE html>
<html lang="fr">
   <head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="author" content="Maxime Petit" />
	<meta name="description" content="Jeu de Mario Kart gratuit en ligne" />
	<meta name="keywords" content="Mario, Kart, XL, jeu, course, éditeur, circuit, multijoueur" />
	<meta name="viewport" content="width=device-width, user-scalable=no" />
	<meta name="thumbnail" content="https://mkxl.net/images/screenshots/ssfr1.png" />
	<meta property="og:image" content="https://mkxl.net/images/mkthumbnail.jpg" />
    <title>Mario Kart XL</title>

<link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico" />

<link rel="stylesheet" media="screen" type="text/css" href="styles/mariokart.css?reload=1" />

<link rel="stylesheet" type="text/css" href="styles/online.css" />
<script src="scripts/online.js?reload=1"></script><script type="text/javascript">
var page = "MK";
var selectedPlayers = 2;
var selectedTeams = 0;
var selectedDifficulty = 2;
var language = false;
var lCircuits = ["Circuit Mario 1","Plaine Donut 1","Plage Koopa 1","\u00cele Choco 1","Lac Vanille 1","Vall\u00e9e Fant\u00f4me 1","Circuit Mario 2","Ch\u00e2teau de Bowser 1","Plaine Donut 2","Ch\u00e2teau de Bowser 2","\u00cele Choco 2","Circuit Mario 3","Plage Koopa 2","Lac Vanille 2","Vall\u00e9e Fant\u00f4me 2","Plaine Donut 3","Vall\u00e9e Fant\u00f4me 3","Circuit Mario 4","Ch\u00e2teau de Bowser 3","Route Arc-en-Ciel","Circuit Peach","Plage Maskass","Bord du Fleuve","Ch\u00e2teau de Bowser I","Circuit Mario","Lac Boo","Pays Fromage","Ch\u00e2teau de Bowser II","Circuit Luigi","Jardin volant","\u00cele Cheep-Cheep","Pays Cr\u00e9puscule","Royaume Sorbet","Route Ruban","D\u00e9sert Yoshi","Ch\u00e2teau de Bowser III","Bord du Lac","Jet\u00e9e cass\u00e9e","Ch\u00e2teau de Bowser IV","Route Arc-en-Ciel","Circuit en 8","Cascade Yoshi","Plage Cheep-Cheep","Manoir de Luigi","D\u00e9sert du Soleil","Quartier Delfino","Flipper Waluigi","Corniche Champignon","Alpes DK","Horloge Tic-Tac","Circuit Mario","Bateau Volant","Stade Wario","Jardin Peach","Ch\u00e2teau de Bowser","Route Arc-en-Ciel","Ar\u00e8ne Bataille 1","Ar\u00e8ne Bataille 2","Ar\u00e8ne Bataille 3","Ar\u00e8ne Bataille 4","Ar\u00e8ne Bataille I","Ar\u00e8ne Bataille II","Ar\u00e8ne Bataille III","Ar\u00e8ne Bataille IV","Nintendo DS","Maison de l'Aube","Feuille de Palmier","Tarte Sucr\u00e9e"];
var recorder = "";
var cp = {
	"mario":[0.5,0.5,0.5,0.5],
	"luigi":[0.625,0.5,0.375,0.5],
	"peach":[0.75,0.375,0.75,0.25],
	"toad":[0.625,0.375,0.625,0],
	"yoshi":[0.5,0.5,0.5,0.5],
	"bowser":[0,1,0.125,1],
	"donkey-kong":[0.25,0.875,0,0.875],
	"daisy":[1,0.375,1,0.25],
	"wario":[0.5,0.75,0,0.75],
	"koopa":[0.375,0.5,0.625,0.375],
	"waluigi":[0.875,0.25,0.625,0.625],
	"maskass":[0.625,0.5,0.375,0.5],
	"birdo":[0.875,0.125,0.875,0.5],
	"roi_boo":[0.375,0.75,0.125,0.75],
	"frere_marto":[0.125,0.625,0.375,0.625],
	"bowser_skelet":[0.25,0.875,0.125,0.875],
	"flora_piranha":[0.25,1,0,1],
	"link":[0.75,0.5,0.25,0.625],
	"bowser_jr":[0.75,0.375,0.5,0.375],
	"harmonie":[0,0.625,0.5,0.625],
	"diddy-kong":[0.5,0.375,0.75,0],
	"skelerex":[0.25,0.5,0.75,0.25],
	"funky-kong":[0.25,0.75,0.25,0.875],
	"toadette":[0.75,0.25,0.75,0]
};
var pUnlocked = [1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1];
var ptsGP = "33333333333333";
var isCup = false, isBattle = false, isSingle = false, complete = false, simplified = false;
var baseOptions = {
	quality: localStorage.getItem("iQuality") ? +localStorage.getItem("iQuality") : 5,
	music: localStorage.getItem("bMusic") ? +localStorage.getItem("bMusic"):0,
	sfx: localStorage.getItem("iSfx") ? +localStorage.getItem("iSfx"):0,
	screenscale: localStorage.getItem("iScreenScale") ? +localStorage.getItem("iScreenScale"):(screen.width<800)?((screen.width<480)?4:6):((screen.width<1500)?8:10)}
	;
var PERSOS_DIR = "images/sprites/uploads/";
var NBCIRCUITS = 56;
</script>
<script type="text/javascript" src="mk/maps.php"></script>
<script type="text/javascript" src="scripts/mk.vcc.js"></script><script type="text/javascript">
document.addEventListener("DOMContentLoaded", MarioKart);
</script>
</head>
<body>
<div id="mariokartcontainer"></div>

<div id="virtualkeyboard"></div>

<form name="modes" method="get" action="#null" onsubmit="return false">
	<div id="options-ctn">
	<table cellpadding="3" cellspacing="0" border="0" id="options">
	<tr>
	<td id="pSize">&nbsp;</td>
	<td id="vSize">
	</td>
	<td rowspan="4" id="commandes">&nbsp;</td>
	</tr>
	<tr><td id="pMusic">
	&nbsp;
	</td>
	<td id="vMusic">
	&nbsp;
	</td></tr>
	<tr><td id="pSfx">
	&nbsp;
	</td>
	<td id="vSfx">
	&nbsp;
	</td></tr>
	<tr><td id="pFps">
	&nbsp;
	</td>
	<td id="vFps">
	&nbsp;
	</td></tr>
	</table>
</div>
<div id="vPub"><script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- Mario Kart PC -->
<ins class="adsbygoogle"
     style="display:inline-block;width:468px;height:60px"
     data-ad-client="ca-pub-1340724283777764"
     data-ad-slot="6691323567"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script></div>
</form>
<div id="dMaps"></div>
<div id="scroller">
	<div style="position: absolute">
		<img class="aObjet" alt="." src="images/items/fauxobjet.png" /><br />&nbsp;<br />
		<img class="aObjet" alt="." src="images/items/banane.png" /><br />&nbsp;<br />
		<img class="aObjet" alt="." src="images/items/carapace.png" /><br />&nbsp;<br />
		<img class="aObjet" alt="." src="images/items/bobomb.png" /><br />&nbsp;<br />
		<img class="aObjet" alt="." src="images/items/carapacerouge.png" /><br />&nbsp;<br />
		<img class="aObjet" alt="." src="images/items/carapacebleue.png" /><br />&nbsp;<br />
		<img class="aObjet" alt="." src="images/items/champi.png" /><br />&nbsp;<br />
		<img class="aObjet" alt="." src="images/items/megachampi.png" /><br />&nbsp;<br />
		<img class="aObjet" alt="." src="images/items/etoile.png" /><br />&nbsp;<br />
		<img class="aObjet" alt="." src="images/items/eclair.png" /><br />&nbsp;<br />
		<img class="aObjet" alt="." src="images/items/billball.png" /><br />&nbsp;<br />
		<img class="aObjet" alt="." src="images/items/champior.png" /><br />
	</div>
</div><div id="maps-list">
<img src="images/selectors/select_map1.png" alt="" /><img src="images/selectors/select_map5.png" alt="" /><img src="images/selectors/select_map9.png" alt="" /><img src="images/selectors/select_map13.png" alt="" /><img src="images/selectors/select_map17.png" alt="" /><img src="images/selectors/select_map21.png" alt="" /><img src="images/selectors/select_map25.png" alt="" /><img src="images/selectors/select_map29.png" alt="" /><img src="images/selectors/select_map33.png" alt="" /><img src="images/selectors/select_map37.png" alt="" /><img src="images/selectors/select_map41.png" alt="" /><img src="images/selectors/select_map45.png" alt="" /></div>
<p id="presentation">
<strong><a href="index.php">Mario Kart PC</a></strong><br />
Affrontez jusqu'&agrave; 8 joueurs dans 6 modes de jeu in&eacute;dits !<br />
Dans les tournois du <strong>Grand Prix</strong>, gagnez 5 coupes de 4 courses afin de d&eacute;bloquer les 9 persos secrets !<br />
Avec le mode <strong>contre-la-montre</strong>, battez les <a href="classement.php" target="_blank">records</a> des autres joueurs et devenez champion du monde !<br />
En <strong>course VS</strong>, battez-vous contre les ordis et/ou contre un ami sur pas moins de 20 courses !<br />
En <strong>mode bataille</strong>, d&eacute;truisez les ballons de vos adversaires dans des combats acharn&eacute;s !<br />
Avec l'<strong>&eacute;diteur de circuit</strong>, cr&eacute;ez autant de circuits et ar&egrave;nes que vous voulez, avec votre imagenation pour seule limite !<br />
En <strong><a href="online.php">mode en ligne</a></strong>, affrontez les joueurs du monde entier et grimpez dans le <a href="bestscores.php" target="_blank">classement</a> !
	</p></body>
</html>
