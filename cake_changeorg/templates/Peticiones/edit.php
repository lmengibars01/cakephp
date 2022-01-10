<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Peticione $peticione
 * @var string[]|\Cake\Collection\CollectionInterface $categorias
 * @var string[]|\Cake\Collection\CollectionInterface $users
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $peticione->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $peticione->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Peticiones'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="peticiones form content">
            <?= $this->Form->create($peticione) ?>
            <fieldset>
                <legend><?= __('Edit Peticione') ?></legend>
                <?php
                    echo $this->Form->control('titulo');
                    echo $this->Form->control('descripcion');
                    echo $this->Form->control('destinatario');
                    echo $this->Form->control('firmantes');
                    echo $this->Form->control('estado');
                    echo $this->Form->control('photo');
                    echo $this->Form->control('categorias_id', ['options' => $categorias, 'empty' => true]);
                    echo $this->Form->control('users_id');
                    echo $this->Form->control('users._ids', ['options' => $users]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
