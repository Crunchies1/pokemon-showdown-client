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
	<link rel="stylesheet" href="//crunchy-league.herokuapp.com/style/font-awesome.css?0.042981111747226075" />
	<link rel="stylesheet" href="//crunchy-leagueserver.herokuapp.com/theme/panels.css?0.6749015453128033" />
	<link rel="stylesheet" href="//crunchy-leagueserver.herokuapp.com/theme/main.css?0.5181536839290708" />
	<link rel="stylesheet" href="//crunchy-league.herokuapp.com/style/battle.css?0.8214321109311031" />
	<link rel="stylesheet" href="//crunchy-league.herokuapp.com/style/replay.css?0.47520139035259956" />
	<link rel="stylesheet" href="//crunchy-league.herokuapp.com/style/utilichart.css?0.12530357203675146" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//crunchy-leagueserver.herokuapp.com/?0.2707822457395652"><img src="//crunchy-leagueserver.herokuapp.com/images/pokemonshowdownbeta.png?0.8620325000593063" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.2135471922022052">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.34720131145050637">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//crunchy-leagueserver.herokuapp.com/ladder/?0.41829598199624485">Ladder</a></li>
				<li><a class="button nav-last" href="//crunchy-leagueserver.herokuapp.com/forums/?0.2035074270940278">Forum</a></li>
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
	<script src="//crunchy-league.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.5668824678641049"></script>
	<script src="//crunchy-league.herokuapp.com/js/lib/lodash.core.js?0.7483091478193771"></script>
	<script src="//crunchy-league.herokuapp.com/js/lib/backbone.js?0.970237474392728"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.24633401306316682"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//crunchy-league.herokuapp.com/js/lib/jquery-cookie.js?0.1781287095353803"></script>
	<script src="//crunchy-league.herokuapp.com/js/lib/html-sanitizer-minified.js?0.10236192151572565"></script>
	<script src="//crunchy-league.herokuapp.com/js/battle-sound.js?0.25221377203113327"></script>
	<script src="//crunchy-league.herokuapp.com/config/config.js?0.23292021501030624"></script>
	<script src="//crunchy-league.herokuapp.com/js/battledata.js?0.6403190907339111"></script>
	<script src="//crunchy-league.herokuapp.com/data/pokedex-mini.js?0.49938498791862207"></script>
	<script src="//crunchy-league.herokuapp.com/data/pokedex-mini-bw.js?0.3114481659272126"></script>
	<script src="//crunchy-league.herokuapp.com/data/graphics.js?0.0025588501212798764"></script>
	<script src="//crunchy-league.herokuapp.com/data/pokedex.js?0.9110292969957321"></script>
	<script src="//crunchy-league.herokuapp.com/data/items.js?0.9687552534135901"></script>
	<script src="//crunchy-league.herokuapp.com/data/moves.js?0.9488490688938926"></script>
	<script src="//crunchy-league.herokuapp.com/data/abilities.js?0.5196495726128894"></script>
	<script src="//crunchy-league.herokuapp.com/data/teambuilder-tables.js?0.1010054863204588"></script>
	<script src="//crunchy-league.herokuapp.com/js/battle-tooltips.js?0.8884418605232249"></script>
	<script src="//crunchy-league.herokuapp.com/js/battle.js?0.07084642748136072"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
