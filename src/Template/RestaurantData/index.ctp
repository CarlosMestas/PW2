<?php
/* @var $this \Cake\View\View */

$this->start('tb_actions');
?>
    <li><?= $this->Html->link(__('New Restaurant Data'), ['action' => 'add']); ?></li>
    <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']); ?></li>
    <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']); ?></li>
<?php $this->end(); ?>
<?php $this->assign('tb_sidebar', '<ul class="nav nav-sidebar">' . $this->fetch('tb_actions') . '</ul>'); ?>

<table class="table table-striped" cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id'); ?></th>
            <th><?= $this->Paginator->sort('name'); ?></th>
            <th><?= $this->Paginator->sort('address'); ?></th>
            <th><?= $this->Paginator->sort('phone'); ?></th>
            <th><?= $this->Paginator->sort('email'); ?></th>
            <th><?= $this->Paginator->sort('user_id'); ?></th>
            <th class="actions"><?= __('Actions'); ?></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($restaurantData as $restaurantData): ?>
        <tr>
            <td><?= $this->Number->format($restaurantData->id) ?></td>
            <td><?= h($restaurantData->name) ?></td>
            <td><?= h($restaurantData->address) ?></td>
            <td><?= $this->Number->format($restaurantData->phone) ?></td>
            <td><?= h($restaurantData->email) ?></td>
            <td>
                <?= $restaurantData->has('user') ? $this->Html->link($restaurantData->user->full_name, ['controller' => 'Users', 'action' => 'view', $restaurantData->user->id]) : '' ?>
            </td>
            <td class="actions">
                <?= $this->Html->link('', ['action' => 'view', $restaurantData->id], ['title' => __('View'), 'class' => 'btn btn-default glyphicon glyphicon-eye-open']) ?>
                <?= $this->Html->link('', ['action' => 'edit', $restaurantData->id], ['title' => __('Edit'), 'class' => 'btn btn-default glyphicon glyphicon-pencil']) ?>
                <?= $this->Form->postLink('', ['action' => 'delete', $restaurantData->id], ['confirm' => __('Are you sure you want to delete # {0}?', $restaurantData->id), 'title' => __('Delete'), 'class' => 'btn btn-default glyphicon glyphicon-trash']) ?>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<div class="paginator">
    <ul class="pagination">
        <?= $this->Paginator->prev('< ' . __('previous')) ?>
        <?= $this->Paginator->numbers(['before' => '', 'after' => '']) ?>
        <?= $this->Paginator->next(__('next') . ' >') ?>
    </ul>
    <p><?= $this->Paginator->counter() ?></p>
</div>
