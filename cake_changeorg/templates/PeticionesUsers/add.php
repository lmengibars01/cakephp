<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\PeticionesUser $peticionesUser
 * @var \Cake\Collection\CollectionInterface|string[] $peticiones
 * @var \Cake\Collection\CollectionInterface|string[] $users
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Peticiones Users'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="peticionesUsers form content">
            <?= $this->Form->create($peticionesUser) ?>
            <fieldset>
                <legend><?= __('Add Peticiones User') ?></legend>
                <?php
                    echo $this->Form->control('peticiones_id', ['options' => $peticiones]);
                    echo $this->Form->control('users_id', ['options' => $users]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
