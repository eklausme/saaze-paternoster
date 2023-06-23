<?php
$title = "{$collection['title']} (Page {$pagination['currentPage']})";
require SAAZE_PATH . "/templates/top-layout.php";
$prevYear = "";
?>

<main>
<h1>Links</h1>
<?php foreach ($pagination['entries'] as $entry) {
	$ixYear = substr($entry['date'],0,4);
	if ($prevYear !== $ixYear) echo "\t<h2>" . ($prevYear = $ixYear) . "</h2>\n";
?>
	<my-listing-item data-flow="no">
	<my-listing-item-title><a href="<?= $entry['link-url'] ?>"><?= $entry['title'] ?? 'Unknown title' ?></a></my-listing-item-title>
	<my-listing-item-meta><time datetime="<?=$entry['date']?>"><?= date('d/m/Y', strtotime($entry['date'])) ?></time> – <?=$entry['link-author']?></my-listing-item-meta>
	<my-listing-item-note><?=strlen($entry['twitter-note']??'') > 2 ? $entry['twitter-note'] : ($entry['excerpt']??'')?></my-listing-item-note>
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
