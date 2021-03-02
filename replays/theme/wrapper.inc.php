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
	<link rel="stylesheet" href="//crunchy-league.herokuapp.com/style/font-awesome.css?0.19825281886403312" />
	<link rel="stylesheet" href="//crunchy-leagueserver.herokuapp.com/theme/panels.css?0.13956663617581988" />
	<link rel="stylesheet" href="//crunchy-leagueserver.herokuapp.com/theme/main.css?0.18954540881547066" />
	<link rel="stylesheet" href="//crunchy-league.herokuapp.com/style/battle.css?0.01995957928139358" />
	<link rel="stylesheet" href="//crunchy-league.herokuapp.com/style/replay.css?0.5718392915988197" />
	<link rel="stylesheet" href="//crunchy-league.herokuapp.com/style/utilichart.css?0.7343076674801567" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//crunchy-leagueserver.herokuapp.com/?0.9086194937204115"><img src="//crunchy-leagueserver.herokuapp.com/images/pokemonshowdownbeta.png?0.6346216132341858" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.006252323954212047">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.5128305110406668">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//crunchy-leagueserver.herokuapp.com/ladder/?0.778057130984259">Ladder</a></li>
				<li><a class="button nav-last" href="//crunchy-leagueserver.herokuapp.com/forums/?0.8096548966781671">Forum</a></li>
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
	<script src="//crunchy-league.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.4070463629313916"></script>
	<script src="//crunchy-league.herokuapp.com/js/lib/lodash.core.js?0.3272663302310661"></script>
	<script src="//crunchy-league.herokuapp.com/js/lib/backbone.js?0.22323203218940613"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.24753348051383894"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//crunchy-league.herokuapp.com/js/lib/jquery-cookie.js?0.5013625054319744"></script>
	<script src="//crunchy-league.herokuapp.com/js/lib/html-sanitizer-minified.js?0.7819921333428745"></script>
	<script src="//crunchy-league.herokuapp.com/js/battle-sound.js?0.1945669025425265"></script>
	<script src="//crunchy-league.herokuapp.com/config/config.js?0.5424290239522807"></script>
	<script src="//crunchy-league.herokuapp.com/js/battledata.js?0.18600601914983317"></script>
	<script src="//crunchy-league.herokuapp.com/data/pokedex-mini.js?0.5777002827504634"></script>
	<script src="//crunchy-league.herokuapp.com/data/pokedex-mini-bw.js?0.7825083081408315"></script>
	<script src="//crunchy-league.herokuapp.com/data/graphics.js?0.3583678007336133"></script>
	<script src="//crunchy-league.herokuapp.com/data/pokedex.js?0.697862998249372"></script>
	<script src="//crunchy-league.herokuapp.com/data/items.js?0.501431991010493"></script>
	<script src="//crunchy-league.herokuapp.com/data/moves.js?0.2931898208127792"></script>
	<script src="//crunchy-league.herokuapp.com/data/abilities.js?0.025085902423185757"></script>
	<script src="//crunchy-league.herokuapp.com/data/teambuilder-tables.js?0.38833942172717784"></script>
	<script src="//crunchy-league.herokuapp.com/js/battle-tooltips.js?0.8519057925159084"></script>
	<script src="//crunchy-league.herokuapp.com/js/battle.js?0.12302632909759037"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
