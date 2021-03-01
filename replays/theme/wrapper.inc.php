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
	<link rel="stylesheet" href="//crunchy-league.herokuapp.com/style/font-awesome.css?0.9278333143890352" />
	<link rel="stylesheet" href="//crunchy-leagueserver.herokuapp.com/theme/panels.css?0.6116697023805828" />
	<link rel="stylesheet" href="//crunchy-leagueserver.herokuapp.com/theme/main.css?0.12418883240564438" />
	<link rel="stylesheet" href="//crunchy-league.herokuapp.com/style/battle.css?0.9682573622617607" />
	<link rel="stylesheet" href="//crunchy-league.herokuapp.com/style/replay.css?0.9993757120137314" />
	<link rel="stylesheet" href="//crunchy-league.herokuapp.com/style/utilichart.css?0.20183518325913874" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//crunchy-leagueserver.herokuapp.com/?0.40869350957685757"><img src="//crunchy-leagueserver.herokuapp.com/images/pokemonshowdownbeta.png?0.7745922344053866" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.32101547567760336">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.9864901792887522">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//crunchy-leagueserver.herokuapp.com/ladder/?0.7479320847717359">Ladder</a></li>
				<li><a class="button nav-last" href="//crunchy-leagueserver.herokuapp.com/forums/?0.7569051395226731">Forum</a></li>
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
	<script src="//crunchy-league.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.8175450190727607"></script>
	<script src="//crunchy-league.herokuapp.com/js/lib/lodash.core.js?0.5703524959039836"></script>
	<script src="//crunchy-league.herokuapp.com/js/lib/backbone.js?0.048887766803028754"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.4130094010538641"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//crunchy-league.herokuapp.com/js/lib/jquery-cookie.js?0.9795031100394935"></script>
	<script src="//crunchy-league.herokuapp.com/js/lib/html-sanitizer-minified.js?0.9396907556612715"></script>
	<script src="//crunchy-league.herokuapp.com/js/battle-sound.js?0.5470988183543277"></script>
	<script src="//crunchy-league.herokuapp.com/config/config.js?0.21995762214307835"></script>
	<script src="//crunchy-league.herokuapp.com/js/battledata.js?0.1984397799481501"></script>
	<script src="//crunchy-league.herokuapp.com/data/pokedex-mini.js?0.6521336643234688"></script>
	<script src="//crunchy-league.herokuapp.com/data/pokedex-mini-bw.js?0.9193012115607686"></script>
	<script src="//crunchy-league.herokuapp.com/data/graphics.js?0.5443925591971546"></script>
	<script src="//crunchy-league.herokuapp.com/data/pokedex.js?0.5072899916411626"></script>
	<script src="//crunchy-league.herokuapp.com/data/items.js?0.39973192514366884"></script>
	<script src="//crunchy-league.herokuapp.com/data/moves.js?0.616722044724328"></script>
	<script src="//crunchy-league.herokuapp.com/data/abilities.js?0.015381571032521357"></script>
	<script src="//crunchy-league.herokuapp.com/data/teambuilder-tables.js?0.6625631114230144"></script>
	<script src="//crunchy-league.herokuapp.com/js/battle-tooltips.js?0.42256066494346833"></script>
	<script src="//crunchy-league.herokuapp.com/js/battle.js?0.10242365279076604"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
