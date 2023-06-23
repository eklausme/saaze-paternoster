<?php require SAAZE_PATH . "/templates/top-layout.php"; ?>

	<main>
	<article>
<blockquote style="border-width:3px; border-style:solid; border-color:#FF0000">
<p style="background:yellow">Original post is here <a href="https://thisdaysportion.com<?=$url?>">thisdaysportion.com<?=$url?></a></p>
</blockquote>
<h1><?= $entry['title'] ?? 'No title' ?></h1>
<p><my-article-header-meta><time datetime="<?=$entry['date']?>"><?= date('D j M Y', strtotime($entry['date'])) ?></time></my-article-header-meta></p>
<p>Link: <a href="<?= $entry['link-url'] ?>"><?= $entry['title'] ?? 'Unknown title' ?></a> by <?=$entry['link-author']?>. Published <?=date('D j M Y',strtotime($entry['link-published']))?>.</p>
<p><?=strlen($entry['twitter-note']??'') > 2 ? $entry['twitter-note'] : ''?></p>
<?= $entry['content'] ?>
	</article>
	</main>

	<br><br>
	<aside>

	<p>
	</aside>

<?php require SAAZE_PATH . "/templates/bottom-layout.php"; ?>
