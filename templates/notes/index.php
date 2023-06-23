<?php
$title = "{$collection['title']} (Page {$pagination['currentPage']})";
require SAAZE_PATH . "/templates/top-layout.php";
$prevYear = "";
?>

<main>
<h1>Notes</h1>
<?php foreach ($pagination['entries'] as $entry) {
	$ixYear = substr($entry['date'],0,4);
	if ($prevYear !== $ixYear) echo "\t<h2>" . ($prevYear = $ixYear) . "</h2>\n";
?>
	<my-listing-item data-flow="no">
	<my-listing-item-note-title><a href="<?= $rbase . $entry['url'] ?>"><time datetime="<?=$entry['date']?>"><?= date('d/m/Y H:i', strtotime($entry['date'])) ?></time></a></my-listing-item-note-title>
	<my-listing-item-note><?= $entry['excerpt'] ?? '---' ?></my-listing-item-note>
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
