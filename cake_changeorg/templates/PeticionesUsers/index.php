<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\PeticionesUser[]|\Cake\Collection\CollectionInterface $peticionesUsers
 */
?>
<div class="peticionesUsers index content">
    <?= $this->Html->link(__('New Peticiones User'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Peticiones Users') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('peticiones_id') ?></th>
                    <th><?= $this->Paginator->sort('users_id') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('updated') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($peticionesUsers as $peticionesUser): ?>
                <tr>
                    <td><?= $this->Number->format($peticionesUser->id) ?></td>
                    <td><?= $peticionesUser->has('peticione') ? $this->Html->link($peticionesUser->peticione->id, ['controller' => 'Peticiones', 'action' => 'view', $peticionesUser->peticione->id]) : '' ?></td>
                    <td><?= $peticionesUser->has('user') ? $this->Html->link($peticionesUser->user->name, ['controller' => 'Users', 'action' => 'view', $peticionesUser->user->id]) : '' ?></td>
                    <td><?= h($peticionesUser->created) ?></td>
                    <td><?= h($peticionesUser->updated) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $peticionesUser->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $peticionesUser->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $peticionesUser->id], ['confirm' => __('Are you sure you want to delete # {0}?', $peticionesUser->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
