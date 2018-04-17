<?php

// Page Title Controller
$title = ['Jahresbericht 2017'];

if (isset($report)) {
	$title[] = $report['title'][$lang];
} elseif ($path === '/report') {
	$title[] = 'Themen';
} elseif ($path === '/report/monuments') {
	$title[] = 'Wikipedia Loves Monuments';
} elseif ($path === '/finance') {
	$title[] = 'Finanzreport';
} elseif ($path === '/finance/assn') {
	$title[] = 'Finanzen WMDE e.V.';
} elseif ($path === '/finance/fund') {
	$title[] = 'Finanzen Fördergesellschaft';
}

// Constructs a script path for the current page path. And will check if a script under
// that name is present in the filesystem. If not simply returns `null` otherwise
// it returns the script path, good for constructing the full script URL.
//
// Does not support pages with underscores.
$pageSpecificScript = function() use ($path) {
	$fragment = 'pages/' . (ltrim($path, '/') ?: 'home') . '.js';

	if (file_exists(PROJECT_APP_PATH . '/assets/js/views/' . $fragment)) {
		return $fragment;
	}
	return null;
};

?>
<!DOCTYPE html>
<html lang="de">
<head>
	<meta charset="UTF-8">
	<title><?php echo implode(' – ', array_reverse($title)) ?> – Wikimedia Deutschland e. V.</title>

	<?php
	// mark up the canonical page and any other variants; use complete url
	// in this case, pages in default language are duplicated; prefer the prefixed '/de' paths
	// see https://support.google.com/webmasters/answer/139066?visit_id=0-636295122699147333-3497274728&rd=1#2
	?>
	<link rel="canonical" href="<?= trim(trim(PROJECT_DOMAIN, '/') . '/de/' . trim($path, '/'), '/') ?>">

<?php if ($isCanonical): ?>
	<?php
	// each language page should identify different language versions, including itself
	// no need to list hreflang on non-canonical - in this case, unprefixed - urls
	// see https://support.google.com/webmasters/answer/189077
	?>
	<link rel="alternate" hreflang="de" href="<?= trim(trim(PROJECT_DOMAIN, '/') . '/de/' . trim($path, '/'), '/') ?>">
	<link rel="alternate" hreflang="en" href="<?= trim(trim(PROJECT_DOMAIN, '/') . '/en/' . trim($path, '/'), '/') ?>">
<?php endif ?>

	<link rel="icon" href="/assets/ico/app.png?v=__PROJECT_VERSION__">
	<link rel="stylesheet" href="/assets/css/normalize.css?v=__PROJECT_VERSION__">
	<link rel="stylesheet" href="/assets/css/base.css?v=__PROJECT_VERSION__">

	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1, maximum-scale=1">

	<script src="/assets/js/compat/core.js?v=__PROJECT_VERSION__"></script>
	<script src="/assets/js/require.js?v=__PROJECT_VERSION__"></script>
	<script src="/assets/js/base.js?v=__PROJECT_VERSION__"></script>
	<script src="/assets/js/views/layouts/default.js?v=__PROJECT_VERSION__"></script>
	<?php if ($scriptPath = $pageSpecificScript()): ?>
		<script src="/assets/js/views/<?= $scriptPath ?>?v=__PROJECT_VERSION__"></script>
	<?php endif ?>
</head>
<body>

<!-- Piwik -->
<script type="text/javascript">
// 	var _paq = _paq || [];
// 	_paq.push(["setDomains", ["*.2016.wikimedia.de"]]);
// 	_paq.push(['trackPageView']);
// 	_paq.push(['enableLinkTracking']);
// 	(function() {
// 		var u="//piwik2.wikimedia.de/";
// 		_paq.push(['setTrackerUrl', u+'piwik.php']);
// 		_paq.push(['setSiteId', '5']);
// 		var d=document, g=d.createElement('script'),
// 		s=d.getElementsByTagName('script')[0];
// 		g.type='text/javascript'; g.async=true; g.defer=true;
// 		g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
// 	})();
</script>
<noscript>
	<p>
		<img src="//piwik2.wikimedia.de/piwik.php?idsite=5" style="border:0;" alt="" />
	</p>
</noscript>
<!-- End Piwik Code -->

<?php if ($hasBlackHeader): ?>
<div class="cp real-logo-black real-logo">
<?php else: ?>
<div class="cp real-logo-white real-logo">
<?php endif ?>
	<a class="logo main-header__logo image-replace logo--s" href="<?= $url('/', $lang) ?>">Wikimedia Deutschland</a>
</div>
<div class="mn-container cp">
	<div class="mn-close"></div>
	<ul class="mn__list">
		<li><a class="mn__link" href="<?= $url('report', $lang) ?>">Themen</a></li>
		<li><a class="mn__link" href="<?= $url('finance', $lang) ?>">Finanzen</a></li>
	</ul>
	<div class="mn__mini-nav">
		<a class="pdf-download t--epsilon" href="/assets/doc/jahresbericht2017_de.pdf">PDF Download</a>
		<a class="lang-switch t--epsilon" href="<?= $switchLanguageFromUrl($lang) ?>">English</a>
	</div>
</div>

<header
	<?php if ($hasBlackHeader): ?>
		class="main-header main-header--black"
	<?php else: ?>
		class="main-header main-header--white"
	<?php endif ?>
>
	<div class="cp">
		<div class="limit--l clearfix">
			<a class="logo main-header__logo image-replace logo--l" href="<?= $url('/', $lang) ?>">Wikimedia Deutschland</a>
			<nav class="nav main-header__nav">
				<ul class="nav__list">
					<?php if (preg_match('#^/report/.*$#', $path)): ?>
						<li><a class="nav__link nav__active--rep-sub" href="<?= $url('report', $lang) ?>">Themen</a></li>
					<?php elseif ($path === '/report'): ?>
						<li><a class="nav__link nav__active--rep" href="<?= $url('report', $lang) ?>">Themen</a></li>
					<?php else: ?>
						<li><a class="nav__link" href="<?= $url('report', $lang) ?>">Themen</a></li>
					<?php endif; if ($path === '/finance' || $path === '/finance/assn'): ?>
						<li><a class="nav__link nav__active--fin-lo" href="<?= $url('finance', $lang) ?>">Finanzen</a></li>
					<?php elseif ($path === '/finance/fund'): ?>
						<li><a class="nav__link nav__active--fin-hi" href="<?= $url('finance', $lang) ?>">Finanzen</a></li>
					<?php else: ?>
						<li><a class="nav__link" href="<?= $url('finance', $lang) ?>">Finanzen</a></li>
					<?php endif ?>
				</ul>
			<a class="pdf-download t--epsilon" href="/assets/doc/jahresbericht2017_de.pdf">PDF Download</a>
			<a class="lang-switch t--epsilon" href="<?= $switchLanguageFromUrl($lang) ?>">English</a>
			</nav>
			<nav class="nav mobile__nav">
				<div class="nav__link mn-trigger">Menü</div>
			</nav>
		</div>
	</div>
</header>