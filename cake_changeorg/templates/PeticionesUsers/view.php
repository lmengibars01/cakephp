<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\PeticionesUser $peticionesUser
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Peticiones User'), ['action' => 'edit', $peticionesUser->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Peticiones User'), ['action' => 'delete', $peticionesUser->id], ['confirm' => __('Are you sure you want to delete # {0}?', $peticionesUser->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Peticiones Users'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Peticiones User'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="peticionesUsers view content">
            <h3><?= h($peticionesUser->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Peticione') ?></th>
                    <td><?= $peticionesUser->has('peticione') ? $this->Html->link($peticionesUser->peticione->id, ['controller' => 'Peticiones', 'action' => 'view', $peticionesUser->peticione->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('User') ?></th>
                    <td><?= $peticionesUser->has('user') ? $this->Html->link($peticionesUser->user->name, ['controller' => 'Users', 'action' => 'view', $peticionesUser->user->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($peticionesUser->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($peticionesUser->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Updated') ?></th>
                    <td><?= h($peticionesUser->updated) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
