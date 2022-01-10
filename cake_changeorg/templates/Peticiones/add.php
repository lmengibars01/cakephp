<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Peticione $peticione
 * @var \Cake\Collection\CollectionInterface|string[] $categorias
 * @var \Cake\Collection\CollectionInterface|string[] $users
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Peticiones'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="peticiones form content">
            <?= $this->Form->create($peticione,['type'=>'file']) ?>
            <fieldset>
                <legend><?= __('Add Peticione') ?></legend>
                <?php
                    echo $this->Form->control('titulo');
                    echo $this->Form->control('descripcion');
                    echo $this->Form->control('destinatario');
                    echo $this->Form->control('firmantes');
                    echo $this->Form->control('estado');
                    echo $this->Form->control('photo', ['type' => 'file']); 
                    echo $this->Form->control('categorias_id', ['options' => $categorias, 'empty' => true]);
                    echo $this->Form->control('users_id');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
