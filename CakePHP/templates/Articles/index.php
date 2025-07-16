<h1>Articles</h1>
 <p>
    <?= $this->Html->link('Add New Article', ['action' => 'add']) ?> |
    <?= $this->Html->link('Login', ['controller' => 'Users', 'action' => 'index']) ?>
</p>


<table>
    <tr>
        <th>Title</th>
        <th>Created</th>
        <th>Actions</th>
    </tr>

    <?php foreach ($articles as $article): ?>
    <tr>
        <td><?= $this->Html->link($article->title, ['action' => 'view', $article->slug]) ?></td>
        <td><?= $article->created->format('Y-m-d H:i') ?></td>
        <td>
            <?= $this->Html->link('Edit', ['action' => 'edit', $article->slug]) ?> |
            <?= $this->Form->postLink('Delete', ['action' => 'delete', $article->slug], [
                'confirm' => 'Are you sure you want to delete this article?'
            ]) ?>
        </td>
    </tr>
    <?php endforeach; ?>
</table>
