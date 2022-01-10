<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Users'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New User'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="users view content">
            <h3><?= h($user->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($user->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Username') ?></th>
                    <td><?= h($user->username) ?></td>
                </tr>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= h($user->email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Rol') ?></th>
                    <td><?= h($user->rol) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($user->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Updated At') ?></th>
                    <td><?= h($user->updated_at) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created At') ?></th>
                    <td><?= h($user->created_at) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Peticiones') ?></h4>
                <?php if (!empty($user->peticiones)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Titulo') ?></th>
                            <th><?= __('Descripcion') ?></th>
                            <th><?= __('Destinatario') ?></th>
                            <th><?= __('Firmantes') ?></th>
                            <th><?= __('Estado') ?></th>
                            <th><?= __('Photo') ?></th>
                            <th><?= __('Categorias Id') ?></th>
                            <th><?= __('Users Id') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Updated') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($user->peticiones as $peticiones) : ?>
                        <tr>
                            <td><?= h($peticiones->id) ?></td>
                            <td><?= h($peticiones->titulo) ?></td>
                            <td><?= h($peticiones->descripcion) ?></td>
                            <td><?= h($peticiones->destinatario) ?></td>
                            <td><?= h($peticiones->firmantes) ?></td>
                            <td><?= h($peticiones->estado) ?></td>
                            <td><?= h($peticiones->photo) ?></td>
                            <td><?= h($peticiones->categorias_id) ?></td>
                            <td><?= h($peticiones->users_id) ?></td>
                            <td><?= h($peticiones->created) ?></td>
                            <td><?= h($peticiones->updated) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Peticiones', 'action' => 'view', $peticiones->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Peticiones', 'action' => 'edit', $peticiones->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Peticiones', 'action' => 'delete', $peticiones->id], ['confirm' => __('Are you sure you want to delete # {0}?', $peticiones->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
