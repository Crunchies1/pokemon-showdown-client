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
	<link rel="stylesheet" href="//crunchy-league.herokuapp.com/style/font-awesome.css?0.8920307755064218" />
	<link rel="stylesheet" href="//crunchy-leagueserver.herokuapp.com/theme/panels.css?0.1890228417732418" />
	<link rel="stylesheet" href="//crunchy-leagueserver.herokuapp.com/theme/main.css?0.964776174521984" />
	<link rel="stylesheet" href="//crunchy-league.herokuapp.com/style/battle.css?0.5388057601941272" />
	<link rel="stylesheet" href="//crunchy-league.herokuapp.com/style/replay.css?0.8958853009612273" />
	<link rel="stylesheet" href="//crunchy-league.herokuapp.com/style/utilichart.css?0.21377841851342416" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//crunchy-leagueserver.herokuapp.com/?0.06649908558199491"><img src="//crunchy-leagueserver.herokuapp.com/images/pokemonshowdownbeta.png?0.22064913797725305" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.45807711605264734">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.560434908723348">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//crunchy-leagueserver.herokuapp.com/ladder/?0.35492356162304795">Ladder</a></li>
				<li><a class="button nav-last" href="//crunchy-leagueserver.herokuapp.com/forums/?0.8388084187620279">Forum</a></li>
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
	<script src="//crunchy-league.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.6527449095054796"></script>
	<script src="//crunchy-league.herokuapp.com/js/lib/lodash.core.js?0.3023753449345805"></script>
	<script src="//crunchy-league.herokuapp.com/js/lib/backbone.js?0.6827208123660109"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.8999438312830179"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//crunchy-league.herokuapp.com/js/lib/jquery-cookie.js?0.8167846918742885"></script>
	<script src="//crunchy-league.herokuapp.com/js/lib/html-sanitizer-minified.js?0.8762776661493852"></script>
	<script src="//crunchy-league.herokuapp.com/js/battle-sound.js?0.9696135266930921"></script>
	<script src="//crunchy-league.herokuapp.com/config/config.js?0.8487903779049737"></script>
	<script src="//crunchy-league.herokuapp.com/js/battledata.js?0.7134239188456468"></script>
	<script src="//crunchy-league.herokuapp.com/data/pokedex-mini.js?0.3966827440992189"></script>
	<script src="//crunchy-league.herokuapp.com/data/pokedex-mini-bw.js?0.34505314169471735"></script>
	<script src="//crunchy-league.herokuapp.com/data/graphics.js?0.8268967785260779"></script>
	<script src="//crunchy-league.herokuapp.com/data/pokedex.js?0.6251996960340116"></script>
	<script src="//crunchy-league.herokuapp.com/data/items.js?0.8640306808878446"></script>
	<script src="//crunchy-league.herokuapp.com/data/moves.js?0.21649507168340554"></script>
	<script src="//crunchy-league.herokuapp.com/data/abilities.js?0.2687236883616868"></script>
	<script src="//crunchy-league.herokuapp.com/data/teambuilder-tables.js?0.3963468181062675"></script>
	<script src="//crunchy-league.herokuapp.com/js/battle-tooltips.js?0.0857029204732942"></script>
	<script src="//crunchy-league.herokuapp.com/js/battle.js?0.8976517418830465"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
