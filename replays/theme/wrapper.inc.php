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
	<link rel="stylesheet" href="//crunchy-league.herokuapp.com/style/font-awesome.css?0.3121222675970301" />
	<link rel="stylesheet" href="//crunchy-leagueserver.herokuapp.com/theme/panels.css?0.3438299396416129" />
	<link rel="stylesheet" href="//crunchy-leagueserver.herokuapp.com/theme/main.css?0.7152606998449416" />
	<link rel="stylesheet" href="//crunchy-league.herokuapp.com/style/battle.css?0.8238128712318917" />
	<link rel="stylesheet" href="//crunchy-league.herokuapp.com/style/replay.css?0.5450546659825772" />
	<link rel="stylesheet" href="//crunchy-league.herokuapp.com/style/utilichart.css?0.3216805510243228" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//crunchy-leagueserver.herokuapp.com/?0.5741526238468682"><img src="//crunchy-leagueserver.herokuapp.com/images/pokemonshowdownbeta.png?0.9044097844253309" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.2634403957274727">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.6774910732782355">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//crunchy-leagueserver.herokuapp.com/ladder/?0.072001813179843">Ladder</a></li>
				<li><a class="button nav-last" href="//crunchy-leagueserver.herokuapp.com/forums/?0.6741998286574375">Forum</a></li>
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
	<script src="//crunchy-league.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.7311018732721699"></script>
	<script src="//crunchy-league.herokuapp.com/js/lib/lodash.core.js?0.14997484620455537"></script>
	<script src="//crunchy-league.herokuapp.com/js/lib/backbone.js?0.5342707734235497"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.36028670640883464"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//crunchy-league.herokuapp.com/js/lib/jquery-cookie.js?0.15510439280983412"></script>
	<script src="//crunchy-league.herokuapp.com/js/lib/html-sanitizer-minified.js?0.827950556056696"></script>
	<script src="//crunchy-league.herokuapp.com/js/battle-sound.js?0.5515559285172764"></script>
	<script src="//crunchy-league.herokuapp.com/config/config.js?0.289377579849065"></script>
	<script src="//crunchy-league.herokuapp.com/js/battledata.js?0.11606381580414582"></script>
	<script src="//crunchy-league.herokuapp.com/data/pokedex-mini.js?0.5462537838423027"></script>
	<script src="//crunchy-league.herokuapp.com/data/pokedex-mini-bw.js?0.9950362932212029"></script>
	<script src="//crunchy-league.herokuapp.com/data/graphics.js?0.7033631510027645"></script>
	<script src="//crunchy-league.herokuapp.com/data/pokedex.js?0.6573681696250722"></script>
	<script src="//crunchy-league.herokuapp.com/data/items.js?0.3056102183084797"></script>
	<script src="//crunchy-league.herokuapp.com/data/moves.js?0.7867651205092163"></script>
	<script src="//crunchy-league.herokuapp.com/data/abilities.js?0.04542416937625027"></script>
	<script src="//crunchy-league.herokuapp.com/data/teambuilder-tables.js?0.42805024206843334"></script>
	<script src="//crunchy-league.herokuapp.com/js/battle-tooltips.js?0.6978496110863184"></script>
	<script src="//crunchy-league.herokuapp.com/js/battle.js?0.6398643837251237"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
