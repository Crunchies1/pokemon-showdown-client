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
	<link rel="stylesheet" href="//crunchy-league.herokuapp.com/style/font-awesome.css?0.6121731447875118" />
	<link rel="stylesheet" href="//crunchy-leagueserver.herokuapp.com/theme/panels.css?0.9059725647604628" />
	<link rel="stylesheet" href="//crunchy-leagueserver.herokuapp.com/theme/main.css?0.782334530314291" />
	<link rel="stylesheet" href="//crunchy-league.herokuapp.com/style/battle.css?0.6979678408330359" />
	<link rel="stylesheet" href="//crunchy-league.herokuapp.com/style/replay.css?0.015970527659305622" />
	<link rel="stylesheet" href="//crunchy-league.herokuapp.com/style/utilichart.css?0.4410757749913974" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//crunchy-leagueserver.herokuapp.com/?0.5735458015391035"><img src="//crunchy-leagueserver.herokuapp.com/images/pokemonshowdownbeta.png?0.95256615517908" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.9232522907313288">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.5944328939911954">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//crunchy-leagueserver.herokuapp.com/ladder/?0.7105022378195935">Ladder</a></li>
				<li><a class="button nav-last" href="//crunchy-leagueserver.herokuapp.com/forums/?0.4315641241652397">Forum</a></li>
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
	<script src="//crunchy-league.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.7270403362467168"></script>
	<script src="//crunchy-league.herokuapp.com/js/lib/lodash.core.js?0.6131716112669692"></script>
	<script src="//crunchy-league.herokuapp.com/js/lib/backbone.js?0.09385529108378043"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.7840718386116381"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//crunchy-league.herokuapp.com/js/lib/jquery-cookie.js?0.7970647945513796"></script>
	<script src="//crunchy-league.herokuapp.com/js/lib/html-sanitizer-minified.js?0.1630960914557602"></script>
	<script src="//crunchy-league.herokuapp.com/js/battle-sound.js?0.886947158146203"></script>
	<script src="//crunchy-league.herokuapp.com/config/config.js?0.8159568431669528"></script>
	<script src="//crunchy-league.herokuapp.com/js/battledata.js?0.6574960480170715"></script>
	<script src="//crunchy-league.herokuapp.com/data/pokedex-mini.js?0.7382631023899007"></script>
	<script src="//crunchy-league.herokuapp.com/data/pokedex-mini-bw.js?0.47229521548293074"></script>
	<script src="//crunchy-league.herokuapp.com/data/graphics.js?0.8226592645791542"></script>
	<script src="//crunchy-league.herokuapp.com/data/pokedex.js?0.08470949524469873"></script>
	<script src="//crunchy-league.herokuapp.com/data/items.js?0.6024907068549399"></script>
	<script src="//crunchy-league.herokuapp.com/data/moves.js?0.9868118106617543"></script>
	<script src="//crunchy-league.herokuapp.com/data/abilities.js?0.8614037903746539"></script>
	<script src="//crunchy-league.herokuapp.com/data/teambuilder-tables.js?0.9904885131617225"></script>
	<script src="//crunchy-league.herokuapp.com/js/battle-tooltips.js?0.05712272950741326"></script>
	<script src="//crunchy-league.herokuapp.com/js/battle.js?0.36347242352304376"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
