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
	<link rel="stylesheet" href="//crunchy-league.herokuapp.com/style/font-awesome.css?0.15881664064333667" />
	<link rel="stylesheet" href="//crunchy-leagueserver.herokuapp.com/theme/panels.css?0.7418829015341739" />
	<link rel="stylesheet" href="//crunchy-leagueserver.herokuapp.com/theme/main.css?0.41909301190363935" />
	<link rel="stylesheet" href="//crunchy-league.herokuapp.com/style/battle.css?0.4674857412627087" />
	<link rel="stylesheet" href="//crunchy-league.herokuapp.com/style/replay.css?0.8637871452476795" />
	<link rel="stylesheet" href="//crunchy-league.herokuapp.com/style/utilichart.css?0.5630696093012642" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//crunchy-leagueserver.herokuapp.com/?0.9637761990277065"><img src="//crunchy-leagueserver.herokuapp.com/images/pokemonshowdownbeta.png?0.24226645780847456" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.4645633391680726">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.9561205786536024">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//crunchy-leagueserver.herokuapp.com/ladder/?0.7227338828026386">Ladder</a></li>
				<li><a class="button nav-last" href="//crunchy-leagueserver.herokuapp.com/forums/?0.09098700925015235">Forum</a></li>
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
	<script src="//crunchy-league.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.6706140068762487"></script>
	<script src="//crunchy-league.herokuapp.com/js/lib/lodash.core.js?0.7258834863104007"></script>
	<script src="//crunchy-league.herokuapp.com/js/lib/backbone.js?0.060546769297013414"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.6901325015362787"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//crunchy-league.herokuapp.com/js/lib/jquery-cookie.js?0.4384157433799232"></script>
	<script src="//crunchy-league.herokuapp.com/js/lib/html-sanitizer-minified.js?0.4218799679378449"></script>
	<script src="//crunchy-league.herokuapp.com/js/battle-sound.js?0.29393712757729706"></script>
	<script src="//crunchy-league.herokuapp.com/config/config.js?0.2781959027214407"></script>
	<script src="//crunchy-league.herokuapp.com/js/battledata.js?0.6557051743527833"></script>
	<script src="//crunchy-league.herokuapp.com/data/pokedex-mini.js?0.049580922515290116"></script>
	<script src="//crunchy-league.herokuapp.com/data/pokedex-mini-bw.js?0.6507412260319905"></script>
	<script src="//crunchy-league.herokuapp.com/data/graphics.js?0.8026216511487276"></script>
	<script src="//crunchy-league.herokuapp.com/data/pokedex.js?0.5125973116805707"></script>
	<script src="//crunchy-league.herokuapp.com/data/items.js?0.9296948463912951"></script>
	<script src="//crunchy-league.herokuapp.com/data/moves.js?0.7733239721297975"></script>
	<script src="//crunchy-league.herokuapp.com/data/abilities.js?0.6766665609373264"></script>
	<script src="//crunchy-league.herokuapp.com/data/teambuilder-tables.js?0.1676072190365443"></script>
	<script src="//crunchy-league.herokuapp.com/js/battle-tooltips.js?0.21297546538613"></script>
	<script src="//crunchy-league.herokuapp.com/js/battle.js?0.4934767942062386"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
