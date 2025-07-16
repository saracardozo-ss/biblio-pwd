<h1><?= h($user->email) ?></h1>
<p>ID: <?= $user->id ?></p>
<p>Created: <?= $user->created->format(DATE_RFC850) ?></p>
<p>Modified: <?= $user->modified->format(DATE_RFC850) ?></p>
