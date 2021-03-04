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
	<link rel="stylesheet" href="//crunchy-league.herokuapp.com/style/font-awesome.css?0.09594603461238838" />
	<link rel="stylesheet" href="//crunchy-leagueserver.herokuapp.com/theme/panels.css?0.8856553272491121" />
	<link rel="stylesheet" href="//crunchy-leagueserver.herokuapp.com/theme/main.css?0.026212571421675213" />
	<link rel="stylesheet" href="//crunchy-league.herokuapp.com/style/battle.css?0.745511693338329" />
	<link rel="stylesheet" href="//crunchy-league.herokuapp.com/style/replay.css?0.48405906722303493" />
	<link rel="stylesheet" href="//crunchy-league.herokuapp.com/style/utilichart.css?0.5725915840151792" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//crunchy-leagueserver.herokuapp.com/?0.39437264834845576"><img src="//crunchy-leagueserver.herokuapp.com/images/pokemonshowdownbeta.png?0.4664763813093742" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.9379079209281118">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.44306695000854757">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//crunchy-leagueserver.herokuapp.com/ladder/?0.2769520019946654">Ladder</a></li>
				<li><a class="button nav-last" href="//crunchy-leagueserver.herokuapp.com/forums/?0.9939435468868973">Forum</a></li>
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
	<script src="//crunchy-league.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.49477526835936114"></script>
	<script src="//crunchy-league.herokuapp.com/js/lib/lodash.core.js?0.5245045454342714"></script>
	<script src="//crunchy-league.herokuapp.com/js/lib/backbone.js?0.9186694714042711"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.7193320790794433"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//crunchy-league.herokuapp.com/js/lib/jquery-cookie.js?0.7258237501454654"></script>
	<script src="//crunchy-league.herokuapp.com/js/lib/html-sanitizer-minified.js?0.7785386772156866"></script>
	<script src="//crunchy-league.herokuapp.com/js/battle-sound.js?0.264334468714035"></script>
	<script src="//crunchy-league.herokuapp.com/config/config.js?0.11081118543278468"></script>
	<script src="//crunchy-league.herokuapp.com/js/battledata.js?0.8717616204496159"></script>
	<script src="//crunchy-league.herokuapp.com/data/pokedex-mini.js?0.49836036417617"></script>
	<script src="//crunchy-league.herokuapp.com/data/pokedex-mini-bw.js?0.6878800469711883"></script>
	<script src="//crunchy-league.herokuapp.com/data/graphics.js?0.16900561974028583"></script>
	<script src="//crunchy-league.herokuapp.com/data/pokedex.js?0.7667576517295411"></script>
	<script src="//crunchy-league.herokuapp.com/data/items.js?0.6817523546322679"></script>
	<script src="//crunchy-league.herokuapp.com/data/moves.js?0.6429927117832712"></script>
	<script src="//crunchy-league.herokuapp.com/data/abilities.js?0.9229553818489786"></script>
	<script src="//crunchy-league.herokuapp.com/data/teambuilder-tables.js?0.6543863934205081"></script>
	<script src="//crunchy-league.herokuapp.com/js/battle-tooltips.js?0.13838713275324488"></script>
	<script src="//crunchy-league.herokuapp.com/js/battle.js?0.3204881953484662"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
