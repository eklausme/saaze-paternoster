<?php
$title = "{$collection['title']} (Page {$pagination['currentPage']})";
require SAAZE_PATH . "/templates/top-layout.php";
?>

	<main>
<h1>Posts</h1>
<?php foreach ($pagination['entries'] as $entry) { ?>
	<my-listing-item data-flow="no">
	<my-listing-item-title><a href="<?= $rbase . $entry['url'] ?>"><?= $entry['title'] ?? 'Unknown title' ?></a></my-listing-item-title>
	<my-listing-item-meta><time datetime="<?=$entry['date']?>"><?= date('d/m/Y', strtotime($entry['date'])) ?></time></my-listing-item-meta>
	<my-listing-item-note><?= strlen($entry['twitter-note']??'') ? $entry['twitter-note'] :  $entry['excerpt'] ?></my-listing-item-note>
	</my-listing-item>
<?php } ?>
	</main>

	<aside>
	<?php if ($pagination['nextUrl']) { ?>
	<a href="<?= $rbase . $pagination['nextUrl'] ?>">&larr; Older</a> &nbsp; &nbsp; &nbsp;
	<?php } ?>
	<?php if ($pagination['prevUrl']) { ?>
	<a href="<?= $rbase . $pagination['prevUrl'] ?>">Newer &rarr;</a>
	<?php } ?>
	</aside>

<?php require SAAZE_PATH . "/templates/bottom-layout.php"; ?>
