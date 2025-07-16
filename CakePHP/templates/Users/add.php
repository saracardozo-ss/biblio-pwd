<h1><?= isset($user->id) ? 'Edit' : 'Add' ?> User</h1>
<?= $this->Form->create($user) ?>
<?= $this->Form->control('email') ?>
<?= $this->Form->control('password') ?>
<?= $this->Form->button('Save') ?>
<?= $this->Form->end() ?>
