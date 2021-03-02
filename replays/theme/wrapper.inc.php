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
	<link rel="stylesheet" href="//crunchy-league.herokuapp.com/style/font-awesome.css?0.7502877233476162" />
	<link rel="stylesheet" href="//crunchy-leagueserver.herokuapp.com/theme/panels.css?0.24498779991039044" />
	<link rel="stylesheet" href="//crunchy-leagueserver.herokuapp.com/theme/main.css?0.14046095186517182" />
	<link rel="stylesheet" href="//crunchy-league.herokuapp.com/style/battle.css?0.46276622042464743" />
	<link rel="stylesheet" href="//crunchy-league.herokuapp.com/style/replay.css?0.05692533918844589" />
	<link rel="stylesheet" href="//crunchy-league.herokuapp.com/style/utilichart.css?0.17894105108707037" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//crunchy-leagueserver.herokuapp.com/?0.3192537365961339"><img src="//crunchy-leagueserver.herokuapp.com/images/pokemonshowdownbeta.png?0.3314182947549553" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.11922301161425342">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.5412048999550108">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//crunchy-leagueserver.herokuapp.com/ladder/?0.36643979408782457">Ladder</a></li>
				<li><a class="button nav-last" href="//crunchy-leagueserver.herokuapp.com/forums/?0.11878976652941864">Forum</a></li>
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
	<script src="//crunchy-league.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.1219070388807737"></script>
	<script src="//crunchy-league.herokuapp.com/js/lib/lodash.core.js?0.9603751844395589"></script>
	<script src="//crunchy-league.herokuapp.com/js/lib/backbone.js?0.44041092429115136"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.15247483664499262"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//crunchy-league.herokuapp.com/js/lib/jquery-cookie.js?0.6821355787507621"></script>
	<script src="//crunchy-league.herokuapp.com/js/lib/html-sanitizer-minified.js?0.7561645844193439"></script>
	<script src="//crunchy-league.herokuapp.com/js/battle-sound.js?0.2708091933301986"></script>
	<script src="//crunchy-league.herokuapp.com/config/config.js?0.23516770869254167"></script>
	<script src="//crunchy-league.herokuapp.com/js/battledata.js?0.419811137996829"></script>
	<script src="//crunchy-league.herokuapp.com/data/pokedex-mini.js?0.6645820128786473"></script>
	<script src="//crunchy-league.herokuapp.com/data/pokedex-mini-bw.js?0.646364139456264"></script>
	<script src="//crunchy-league.herokuapp.com/data/graphics.js?0.12569203202890056"></script>
	<script src="//crunchy-league.herokuapp.com/data/pokedex.js?0.009618941293220606"></script>
	<script src="//crunchy-league.herokuapp.com/data/items.js?0.4432005077519452"></script>
	<script src="//crunchy-league.herokuapp.com/data/moves.js?0.27886822278404355"></script>
	<script src="//crunchy-league.herokuapp.com/data/abilities.js?0.5900187050521208"></script>
	<script src="//crunchy-league.herokuapp.com/data/teambuilder-tables.js?0.2035161128466636"></script>
	<script src="//crunchy-league.herokuapp.com/js/battle-tooltips.js?0.8497422312397303"></script>
	<script src="//crunchy-league.herokuapp.com/js/battle.js?0.6558246959271181"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
