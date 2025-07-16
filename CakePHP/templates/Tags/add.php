<h1><?= isset($tag->id) ? 'Edit' : 'Add' ?> Tag</h1>
<?= $this->Form->create($tag) ?>
<?= $this->Form->control('title') ?>
<?= $this->Form->button('Save') ?>
<?= $this->Form->end() ?>
