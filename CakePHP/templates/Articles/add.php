<h1>Agregar Artículo</h1>

<?php
    echo $this->Form->create($article);
    echo $this->Form->control('user_id', ['type' => 'hidden', 'value' => 1]); // Temporal
    echo $this->Form->control('title', ['label' => 'Título']);
    echo $this->Form->control('body', ['label' => 'Contenido', 'rows' => '5']);
    echo $this->Form->button(__('Guardar'));
    echo $this->Form->end();
?>

<p><?= $this->Html->link('Volver a la lista', ['action' => 'index']) ?></p>
