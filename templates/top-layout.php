<?php require SAAZE_PATH . "/templates/head.php"; ?>
	<title><?= $title ?? "Saaze" ?></title>
	<link href=<?=$rbase?>/paternoster.css rel=stylesheet>
</head>

<body>
<?php $rbase ??= ''; ?>

	<header data-flow="no">
		<nav aria-label="Main">
			<ul data-inline="true">
			<li><a href="<?=$rbase?>/posts/">Posts</a></li>
			<li><a href="<?=$rbase?>/links/">Links</a></li>
			<li><a href="<?=$rbase?>/notes/">Notes</a></li>
			<li><a href="<?=$rbase?>/about/">About</a></li>
			<li><a href="<?=$rbase?>/aux/search.php">Search</a></li>
			<li><a href="<?=$rbase?>/privacy/">Privacy</a></li>
			<li><a href="<?=$rbase?>/about/what-is-rss/">What’s RSS?</a></li>
			</ul>
		</nav>
	</header>

