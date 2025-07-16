<h1>Users</h1>
<p><?= $this->Html->link('Add User', ['action' => 'add']) ?>  |
   <?= $this->Html->link('Volver al inicio', ['controller' => 'Articles', 'action' => 'index']) ?>

</p>
<table>
    <tr>
        <th>ID</th>
        <th>Email</th>
        <th>Actions</th>
    </tr>
    <?php foreach ($users as $user): ?>
    <tr>
        <td><?= h($user->id) ?></td>
        <td><?= h($user->email) ?></td>
        <td>
            <?= $this->Html->link('View', ['action' => 'view', $user->id]) ?>
            <?= $this->Html->link('Edit', ['action' => 'edit', $user->id]) ?>
            <?= $this->Form->postLink('Delete', ['action' => 'delete', $user->id], ['confirm' => 'Are you sure?']) ?>
        </td>
    </tr>
    
    <?php endforeach; ?>
</table>
