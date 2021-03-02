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
	<link rel="stylesheet" href="//crunchy-league.herokuapp.com/style/font-awesome.css?0.972331165855721" />
	<link rel="stylesheet" href="//crunchy-leagueserver.herokuapp.com/theme/panels.css?0.7484695160600165" />
	<link rel="stylesheet" href="//crunchy-leagueserver.herokuapp.com/theme/main.css?0.8187887179319941" />
	<link rel="stylesheet" href="//crunchy-league.herokuapp.com/style/battle.css?0.2804206804394265" />
	<link rel="stylesheet" href="//crunchy-league.herokuapp.com/style/replay.css?0.9887528919119188" />
	<link rel="stylesheet" href="//crunchy-league.herokuapp.com/style/utilichart.css?0.8282449761478505" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//crunchy-leagueserver.herokuapp.com/?0.1506327463266548"><img src="//crunchy-leagueserver.herokuapp.com/images/pokemonshowdownbeta.png?0.8996402121968687" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.6277615281098197">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.22644835664424967">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//crunchy-leagueserver.herokuapp.com/ladder/?0.7278002664046199">Ladder</a></li>
				<li><a class="button nav-last" href="//crunchy-leagueserver.herokuapp.com/forums/?0.27834007372542247">Forum</a></li>
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
	<script src="//crunchy-league.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.15173600417620658"></script>
	<script src="//crunchy-league.herokuapp.com/js/lib/lodash.core.js?0.8503682278841007"></script>
	<script src="//crunchy-league.herokuapp.com/js/lib/backbone.js?0.9564610774165012"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.40437356146510317"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//crunchy-league.herokuapp.com/js/lib/jquery-cookie.js?0.8820422229226339"></script>
	<script src="//crunchy-league.herokuapp.com/js/lib/html-sanitizer-minified.js?0.7144171226187483"></script>
	<script src="//crunchy-league.herokuapp.com/js/battle-sound.js?0.6384550278752159"></script>
	<script src="//crunchy-league.herokuapp.com/config/config.js?0.6593826698818082"></script>
	<script src="//crunchy-league.herokuapp.com/js/battledata.js?0.7618995647487234"></script>
	<script src="//crunchy-league.herokuapp.com/data/pokedex-mini.js?0.07987648234923306"></script>
	<script src="//crunchy-league.herokuapp.com/data/pokedex-mini-bw.js?0.37389606647569273"></script>
	<script src="//crunchy-league.herokuapp.com/data/graphics.js?0.2509200628719983"></script>
	<script src="//crunchy-league.herokuapp.com/data/pokedex.js?0.12644591919734194"></script>
	<script src="//crunchy-league.herokuapp.com/data/items.js?0.11402624720799293"></script>
	<script src="//crunchy-league.herokuapp.com/data/moves.js?0.6370784782222716"></script>
	<script src="//crunchy-league.herokuapp.com/data/abilities.js?0.5069715082354129"></script>
	<script src="//crunchy-league.herokuapp.com/data/teambuilder-tables.js?0.35620683149181054"></script>
	<script src="//crunchy-league.herokuapp.com/js/battle-tooltips.js?0.17484485648026316"></script>
	<script src="//crunchy-league.herokuapp.com/js/battle.js?0.8523162220437945"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
