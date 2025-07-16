<h1>Edit Article</h1>

<?= $this->Form->create($article) ?>
<?= $this->Form->control('title') ?>
<?= $this->Form->control('body', ['rows' => 4]) ?>
<?= $this->Form->control('tags._ids', [
    'type' => 'select',
    'multiple' => true,
    'options' => $tags
]) ?>
<?= $this->Form->button('Update Article') ?>
<?= $this->Form->end() ?>
