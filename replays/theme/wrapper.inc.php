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
	<link rel="stylesheet" href="//crunchy-league.herokuapp.com/style/font-awesome.css?0.6549748780063367" />
	<link rel="stylesheet" href="//crunchy-leagueserver.herokuapp.com/theme/panels.css?0.31796812987548617" />
	<link rel="stylesheet" href="//crunchy-leagueserver.herokuapp.com/theme/main.css?0.6450435313961205" />
	<link rel="stylesheet" href="//crunchy-league.herokuapp.com/style/battle.css?0.7517879252311503" />
	<link rel="stylesheet" href="//crunchy-league.herokuapp.com/style/replay.css?0.24025718534166796" />
	<link rel="stylesheet" href="//crunchy-league.herokuapp.com/style/utilichart.css?0.47043067477722733" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//crunchy-leagueserver.herokuapp.com/?0.22750586263040629"><img src="//crunchy-leagueserver.herokuapp.com/images/pokemonshowdownbeta.png?0.24781387911102226" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.6851435500011289">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.27213130413842723">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//crunchy-leagueserver.herokuapp.com/ladder/?0.6655742231170267">Ladder</a></li>
				<li><a class="button nav-last" href="//crunchy-leagueserver.herokuapp.com/forums/?0.6420640105339888">Forum</a></li>
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
	<script src="//crunchy-league.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.9530110348821157"></script>
	<script src="//crunchy-league.herokuapp.com/js/lib/lodash.core.js?0.34534073612055205"></script>
	<script src="//crunchy-league.herokuapp.com/js/lib/backbone.js?0.8615290481206501"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.8371349958093934"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//crunchy-league.herokuapp.com/js/lib/jquery-cookie.js?0.6532053565517959"></script>
	<script src="//crunchy-league.herokuapp.com/js/lib/html-sanitizer-minified.js?0.0880213268076604"></script>
	<script src="//crunchy-league.herokuapp.com/js/battle-sound.js?0.8317904943842755"></script>
	<script src="//crunchy-league.herokuapp.com/config/config.js?0.35993094666018655"></script>
	<script src="//crunchy-league.herokuapp.com/js/battledata.js?0.0015466849750864764"></script>
	<script src="//crunchy-league.herokuapp.com/data/pokedex-mini.js?0.46488358604892954"></script>
	<script src="//crunchy-league.herokuapp.com/data/pokedex-mini-bw.js?0.6138094562436949"></script>
	<script src="//crunchy-league.herokuapp.com/data/graphics.js?0.44332392297992484"></script>
	<script src="//crunchy-league.herokuapp.com/data/pokedex.js?0.19224129496796682"></script>
	<script src="//crunchy-league.herokuapp.com/data/items.js?0.29154849560626905"></script>
	<script src="//crunchy-league.herokuapp.com/data/moves.js?0.6216974131310147"></script>
	<script src="//crunchy-league.herokuapp.com/data/abilities.js?0.0527998022757894"></script>
	<script src="//crunchy-league.herokuapp.com/data/teambuilder-tables.js?0.49894975735632086"></script>
	<script src="//crunchy-league.herokuapp.com/js/battle-tooltips.js?0.03403097136671529"></script>
	<script src="//crunchy-league.herokuapp.com/js/battle.js?0.9299362418771409"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
