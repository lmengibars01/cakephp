<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\PeticionesUser $peticionesUser
 * @var string[]|\Cake\Collection\CollectionInterface $peticiones
 * @var string[]|\Cake\Collection\CollectionInterface $users
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $peticionesUser->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $peticionesUser->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Peticiones Users'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="peticionesUsers form content">
            <?= $this->Form->create($peticionesUser) ?>
            <fieldset>
                <legend><?= __('Edit Peticiones User') ?></legend>
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
