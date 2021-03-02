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
	<link rel="stylesheet" href="//crunchy-league.herokuapp.com/style/font-awesome.css?0.08245784827228553" />
	<link rel="stylesheet" href="//crunchy-leagueserver.herokuapp.com/theme/panels.css?0.11110963037173227" />
	<link rel="stylesheet" href="//crunchy-leagueserver.herokuapp.com/theme/main.css?0.7790939575514548" />
	<link rel="stylesheet" href="//crunchy-league.herokuapp.com/style/battle.css?0.818891411009975" />
	<link rel="stylesheet" href="//crunchy-league.herokuapp.com/style/replay.css?0.13820710298373284" />
	<link rel="stylesheet" href="//crunchy-league.herokuapp.com/style/utilichart.css?0.3280350720619247" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//crunchy-leagueserver.herokuapp.com/?0.05657082743850261"><img src="//crunchy-leagueserver.herokuapp.com/images/pokemonshowdownbeta.png?0.3139472072352971" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.3055379465552601">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.5839880164300413">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//crunchy-leagueserver.herokuapp.com/ladder/?0.6545892339868558">Ladder</a></li>
				<li><a class="button nav-last" href="//crunchy-leagueserver.herokuapp.com/forums/?0.22055101878689842">Forum</a></li>
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
	<script src="//crunchy-league.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.9004084437115543"></script>
	<script src="//crunchy-league.herokuapp.com/js/lib/lodash.core.js?0.748836562627825"></script>
	<script src="//crunchy-league.herokuapp.com/js/lib/backbone.js?0.5529646672035906"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.5997145975601015"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//crunchy-league.herokuapp.com/js/lib/jquery-cookie.js?0.665651886901867"></script>
	<script src="//crunchy-league.herokuapp.com/js/lib/html-sanitizer-minified.js?0.7774672456557858"></script>
	<script src="//crunchy-league.herokuapp.com/js/battle-sound.js?0.3728082413150875"></script>
	<script src="//crunchy-league.herokuapp.com/config/config.js?0.4875404707699176"></script>
	<script src="//crunchy-league.herokuapp.com/js/battledata.js?0.6029002340084524"></script>
	<script src="//crunchy-league.herokuapp.com/data/pokedex-mini.js?0.05794595568499972"></script>
	<script src="//crunchy-league.herokuapp.com/data/pokedex-mini-bw.js?0.9352163653388463"></script>
	<script src="//crunchy-league.herokuapp.com/data/graphics.js?0.05016016094468578"></script>
	<script src="//crunchy-league.herokuapp.com/data/pokedex.js?0.19465468191185176"></script>
	<script src="//crunchy-league.herokuapp.com/data/items.js?0.6793517549127288"></script>
	<script src="//crunchy-league.herokuapp.com/data/moves.js?0.4366993848067673"></script>
	<script src="//crunchy-league.herokuapp.com/data/abilities.js?0.5018314432129449"></script>
	<script src="//crunchy-league.herokuapp.com/data/teambuilder-tables.js?0.5726448880362538"></script>
	<script src="//crunchy-league.herokuapp.com/js/battle-tooltips.js?0.9756884477799515"></script>
	<script src="//crunchy-league.herokuapp.com/js/battle.js?0.6804303850203097"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
