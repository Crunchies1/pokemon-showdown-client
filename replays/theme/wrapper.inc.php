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
	<link rel="stylesheet" href="//crunchy-league.herokuapp.com/style/font-awesome.css?0.5946976643145789" />
	<link rel="stylesheet" href="//crunchy-leagueserver.herokuapp.com/theme/panels.css?0.9329266388123387" />
	<link rel="stylesheet" href="//crunchy-leagueserver.herokuapp.com/theme/main.css?0.7490048153933933" />
	<link rel="stylesheet" href="//crunchy-league.herokuapp.com/style/battle.css?0.3430775435286273" />
	<link rel="stylesheet" href="//crunchy-league.herokuapp.com/style/replay.css?0.24998341108531053" />
	<link rel="stylesheet" href="//crunchy-league.herokuapp.com/style/utilichart.css?0.12487333633635922" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//crunchy-leagueserver.herokuapp.com/?0.4600196284201552"><img src="//crunchy-leagueserver.herokuapp.com/images/pokemonshowdownbeta.png?0.4401878241996644" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.36488131811188773">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.8945723515250699">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//crunchy-leagueserver.herokuapp.com/ladder/?0.24480921344707074">Ladder</a></li>
				<li><a class="button nav-last" href="//crunchy-leagueserver.herokuapp.com/forums/?0.4234406611932837">Forum</a></li>
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
	<script src="//crunchy-league.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.5980339999471378"></script>
	<script src="//crunchy-league.herokuapp.com/js/lib/lodash.core.js?0.6277668875617677"></script>
	<script src="//crunchy-league.herokuapp.com/js/lib/backbone.js?0.9122355953546473"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.4537381218198946"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//crunchy-league.herokuapp.com/js/lib/jquery-cookie.js?0.770812195237963"></script>
	<script src="//crunchy-league.herokuapp.com/js/lib/html-sanitizer-minified.js?0.41955803058888774"></script>
	<script src="//crunchy-league.herokuapp.com/js/battle-sound.js?0.6468726450747231"></script>
	<script src="//crunchy-league.herokuapp.com/config/config.js?0.21110462815659758"></script>
	<script src="//crunchy-league.herokuapp.com/js/battledata.js?0.4219541547770962"></script>
	<script src="//crunchy-league.herokuapp.com/data/pokedex-mini.js?0.03058950503196667"></script>
	<script src="//crunchy-league.herokuapp.com/data/pokedex-mini-bw.js?0.8575392590539492"></script>
	<script src="//crunchy-league.herokuapp.com/data/graphics.js?0.5772965325065609"></script>
	<script src="//crunchy-league.herokuapp.com/data/pokedex.js?0.23372893948460027"></script>
	<script src="//crunchy-league.herokuapp.com/data/items.js?0.12649864353897589"></script>
	<script src="//crunchy-league.herokuapp.com/data/moves.js?0.7589518846893495"></script>
	<script src="//crunchy-league.herokuapp.com/data/abilities.js?0.09907722261768326"></script>
	<script src="//crunchy-league.herokuapp.com/data/teambuilder-tables.js?0.14889931540820234"></script>
	<script src="//crunchy-league.herokuapp.com/js/battle-tooltips.js?0.40831438813626897"></script>
	<script src="//crunchy-league.herokuapp.com/js/battle.js?0.11227540027035321"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
