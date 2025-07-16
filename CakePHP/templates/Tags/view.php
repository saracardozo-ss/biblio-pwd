<h1><?= h($tag->title) ?></h1>
<p>ID: <?= $tag->id ?></p>
<p>Created: <?= $tag->created->format(DATE_RFC850) ?></p>
<p>Modified: <?= $tag->modified->format(DATE_RFC850) ?></p>
