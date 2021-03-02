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
	<link rel="stylesheet" href="//crunchy-league.herokuapp.com/style/font-awesome.css?0.2526524294007795" />
	<link rel="stylesheet" href="//crunchy-leagueserver.herokuapp.com/theme/panels.css?0.14407578739006843" />
	<link rel="stylesheet" href="//crunchy-leagueserver.herokuapp.com/theme/main.css?0.16273299506996097" />
	<link rel="stylesheet" href="//crunchy-league.herokuapp.com/style/battle.css?0.4227790094187214" />
	<link rel="stylesheet" href="//crunchy-league.herokuapp.com/style/replay.css?0.5206466619181003" />
	<link rel="stylesheet" href="//crunchy-league.herokuapp.com/style/utilichart.css?0.289396123683322" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//crunchy-leagueserver.herokuapp.com/?0.09719584497623268"><img src="//crunchy-leagueserver.herokuapp.com/images/pokemonshowdownbeta.png?0.20946924733994865" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.0893420258673645">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.7387972615562726">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//crunchy-leagueserver.herokuapp.com/ladder/?0.2785723119415682">Ladder</a></li>
				<li><a class="button nav-last" href="//crunchy-leagueserver.herokuapp.com/forums/?0.04340063847009046">Forum</a></li>
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
	<script src="//crunchy-league.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.8014200336278143"></script>
	<script src="//crunchy-league.herokuapp.com/js/lib/lodash.core.js?0.3723629235298558"></script>
	<script src="//crunchy-league.herokuapp.com/js/lib/backbone.js?0.43229973168042246"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.6755218045272717"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//crunchy-league.herokuapp.com/js/lib/jquery-cookie.js?0.3843107969289472"></script>
	<script src="//crunchy-league.herokuapp.com/js/lib/html-sanitizer-minified.js?0.07578299842528646"></script>
	<script src="//crunchy-league.herokuapp.com/js/battle-sound.js?0.8688879829932938"></script>
	<script src="//crunchy-league.herokuapp.com/config/config.js?0.9055518111484417"></script>
	<script src="//crunchy-league.herokuapp.com/js/battledata.js?0.23964297999269402"></script>
	<script src="//crunchy-league.herokuapp.com/data/pokedex-mini.js?0.5692296378299879"></script>
	<script src="//crunchy-league.herokuapp.com/data/pokedex-mini-bw.js?0.04978533106415406"></script>
	<script src="//crunchy-league.herokuapp.com/data/graphics.js?0.2768097947609709"></script>
	<script src="//crunchy-league.herokuapp.com/data/pokedex.js?0.8819149339809833"></script>
	<script src="//crunchy-league.herokuapp.com/data/items.js?0.4930420932951085"></script>
	<script src="//crunchy-league.herokuapp.com/data/moves.js?0.7027386632322343"></script>
	<script src="//crunchy-league.herokuapp.com/data/abilities.js?0.36172706692909196"></script>
	<script src="//crunchy-league.herokuapp.com/data/teambuilder-tables.js?0.014654985040700064"></script>
	<script src="//crunchy-league.herokuapp.com/js/battle-tooltips.js?0.43461623047441256"></script>
	<script src="//crunchy-league.herokuapp.com/js/battle.js?0.7643998484944399"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
