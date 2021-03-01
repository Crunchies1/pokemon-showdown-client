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
	<link rel="stylesheet" href="//crunchy-league.herokuapp.com/style/font-awesome.css?0.8254617270041056" />
	<link rel="stylesheet" href="//crunchy-leagueserver.herokuapp.com/theme/panels.css?0.6553714942057558" />
	<link rel="stylesheet" href="//crunchy-leagueserver.herokuapp.com/theme/main.css?0.9147415900290805" />
	<link rel="stylesheet" href="//crunchy-league.herokuapp.com/style/battle.css?0.45515575699366617" />
	<link rel="stylesheet" href="//crunchy-league.herokuapp.com/style/replay.css?0.5054285674306997" />
	<link rel="stylesheet" href="//crunchy-league.herokuapp.com/style/utilichart.css?0.38348717605299276" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//crunchy-leagueserver.herokuapp.com/?0.919573549251586"><img src="//crunchy-leagueserver.herokuapp.com/images/pokemonshowdownbeta.png?0.9111654013531547" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.8092217207925527">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.4748373478176324">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//crunchy-leagueserver.herokuapp.com/ladder/?0.7779049209844582">Ladder</a></li>
				<li><a class="button nav-last" href="//crunchy-leagueserver.herokuapp.com/forums/?0.49576684844392616">Forum</a></li>
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
	<script src="//crunchy-league.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.19759065441624935"></script>
	<script src="//crunchy-league.herokuapp.com/js/lib/lodash.core.js?0.4724620825377228"></script>
	<script src="//crunchy-league.herokuapp.com/js/lib/backbone.js?0.4600892363492204"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.3954616077386408"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//crunchy-league.herokuapp.com/js/lib/jquery-cookie.js?0.2672216094146789"></script>
	<script src="//crunchy-league.herokuapp.com/js/lib/html-sanitizer-minified.js?0.22732569063065666"></script>
	<script src="//crunchy-league.herokuapp.com/js/battle-sound.js?0.17744080126859596"></script>
	<script src="//crunchy-league.herokuapp.com/config/config.js?0.763806203769495"></script>
	<script src="//crunchy-league.herokuapp.com/js/battledata.js?0.4475312961532256"></script>
	<script src="//crunchy-league.herokuapp.com/data/pokedex-mini.js?0.960765870719545"></script>
	<script src="//crunchy-league.herokuapp.com/data/pokedex-mini-bw.js?0.7234430603393367"></script>
	<script src="//crunchy-league.herokuapp.com/data/graphics.js?0.3828571060541526"></script>
	<script src="//crunchy-league.herokuapp.com/data/pokedex.js?0.7188151344695752"></script>
	<script src="//crunchy-league.herokuapp.com/data/items.js?0.36054128701410604"></script>
	<script src="//crunchy-league.herokuapp.com/data/moves.js?0.24528632802557326"></script>
	<script src="//crunchy-league.herokuapp.com/data/abilities.js?0.03472821898453393"></script>
	<script src="//crunchy-league.herokuapp.com/data/teambuilder-tables.js?0.4033342978947787"></script>
	<script src="//crunchy-league.herokuapp.com/js/battle-tooltips.js?0.1698676668445187"></script>
	<script src="//crunchy-league.herokuapp.com/js/battle.js?0.4682343284994934"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
