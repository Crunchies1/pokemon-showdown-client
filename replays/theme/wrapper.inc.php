<?php

if ((substr($_SERVER['REMOTE_ADDR'],0,11) === '69.164.163.') ||
		(substr(@$_SERVER['HTTP_X_FORWARDED_FOR'],0,11) === '69.164.163.')) {
	die('website disabled');
}

/********************************************************************
 * Header
 ********************************************************************/

function ThemeHeaderTemplate() {
	global $panels;
?>
<!DOCTYPE html>
<html><head>

	<meta charset="utf-8" />

	<title><?php if ($panels->pagetitle) echo htmlspecialchars($panels->pagetitle).' - '; ?>Pok&eacute;mon Showdown</title>

<?php if ($panels->pagedescription) { ?>
	<meta name="description" content="<?php echo htmlspecialchars($panels->pagedescription); ?>" />
<?php } ?>

	<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=IE8" />
	<link rel="stylesheet" href="//crunchy-league.herokuapp.com/style/font-awesome.css?0.3116689619745743" />
	<link rel="stylesheet" href="//crunchy-leagueserver.herokuapp.com/theme/panels.css?0.11572951276837107" />
	<link rel="stylesheet" href="//crunchy-leagueserver.herokuapp.com/theme/main.css?0.6542768427598038" />
	<link rel="stylesheet" href="//crunchy-league.herokuapp.com/style/battle.css?0.45255801501541404" />
	<link rel="stylesheet" href="//crunchy-league.herokuapp.com/style/replay.css?0.12966823092936752" />
	<link rel="stylesheet" href="//crunchy-league.herokuapp.com/style/utilichart.css?0.2782100540713881" />

	<!-- Workarounds for IE bugs to display trees correctly. -->
	<!--[if lte IE 6]><style> li.tree { height: 1px; } </style><![endif]-->
	<!--[if IE 7]><style> li.tree { zoom: 1; } </style><![endif]-->

	<script type="text/javascript">
		var _gaq = _gaq || [];
		_gaq.push(['_setAccount', 'UA-26211653-1']);
		_gaq.push(['_setDomainName', 'pokemonshowdown.com']);
		_gaq.push(['_setAllowLinker', true]);
		_gaq.push(['_trackPageview']);

		(function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		})();
	</script>
</head><body>

	<div class="pfx-topbar">
		<div class="header">
			<ul class="nav">
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//crunchy-leagueserver.herokuapp.com/?0.6832903366976613"><img src="//crunchy-leagueserver.herokuapp.com/images/pokemonshowdownbeta.png?0.7833463108941972" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.4204005068060239">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.30338167340237066">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//crunchy-leagueserver.herokuapp.com/ladder/?0.4846389713428214">Ladder</a></li>
				<li><a class="button nav-last" href="//crunchy-leagueserver.herokuapp.com/forums/?0.42645363350890664">Forum</a></li>
			</ul>
			<ul class="nav nav-play">
				<li><a class="button greenbutton nav-first nav-last" href="http://play.pokemonshowdown.com/">Play</a></li>
			</ul>
			<div style="clear:both"></div>
		</div>
	</div>
<?php
}

/********************************************************************
 * Footer
 ********************************************************************/

function ThemeScriptsTemplate() {
?>
	<script src="//crunchy-league.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.9796324874994677"></script>
	<script src="//crunchy-league.herokuapp.com/js/lib/lodash.core.js?0.6454953192046897"></script>
	<script src="//crunchy-league.herokuapp.com/js/lib/backbone.js?0.2688396103414754"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.7109767608042155"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//crunchy-league.herokuapp.com/js/lib/jquery-cookie.js?0.5877627603037543"></script>
	<script src="//crunchy-league.herokuapp.com/js/lib/html-sanitizer-minified.js?0.2783093933436809"></script>
	<script src="//crunchy-league.herokuapp.com/js/battle-sound.js?0.6123155716487088"></script>
	<script src="//crunchy-league.herokuapp.com/config/config.js?0.5800282133334993"></script>
	<script src="//crunchy-league.herokuapp.com/js/battledata.js?0.8864880699200743"></script>
	<script src="//crunchy-league.herokuapp.com/data/pokedex-mini.js?0.5617629258264412"></script>
	<script src="//crunchy-league.herokuapp.com/data/pokedex-mini-bw.js?0.2612618430819733"></script>
	<script src="//crunchy-league.herokuapp.com/data/graphics.js?0.31821317801167526"></script>
	<script src="//crunchy-league.herokuapp.com/data/pokedex.js?0.7324117016600689"></script>
	<script src="//crunchy-league.herokuapp.com/data/items.js?0.5010220307371012"></script>
	<script src="//crunchy-league.herokuapp.com/data/moves.js?0.7703998079620771"></script>
	<script src="//crunchy-league.herokuapp.com/data/abilities.js?0.6000928715322693"></script>
	<script src="//crunchy-league.herokuapp.com/data/teambuilder-tables.js?0.31294000741715533"></script>
	<script src="//crunchy-league.herokuapp.com/js/battle-tooltips.js?0.67977874331501"></script>
	<script src="//crunchy-league.herokuapp.com/js/battle.js?0.2877280375429947"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
