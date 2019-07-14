<?php
/* @var $this \Cake\View\View */

$this->start('tb_actions');
?>
    <li><?= $this->Html->link(__('New Product Type'), ['action' => 'add']); ?></li>
    <li><?= $this->Html->link(__('List Products'), ['controller' => 'Products', 'action' => 'index']); ?></li>
    <li><?= $this->Html->link(__('New Product'), ['controller' => 'Products', 'action' => 'add']); ?></li>
<?php $this->end(); ?>
<?php $this->assign('tb_sidebar', '<ul class="nav nav-sidebar">' . $this->fetch('tb_actions') . '</ul>'); ?>
<?= $this->Html->link(
        __(''),
        ['controller' => 'ProductTypes', 'action' => 'add'],
        ['class'=>' btn btn-default glyphicon glyphicon-plus']) ?>
<div class="panel panel-default">
<table class="table table-striped" cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id'); ?></th>
            <th><?= $this->Paginator->sort('name'); ?></th>
            <th class="actions"><?= __('Actions'); ?></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($productTypes as $productType): ?>
        <tr>
            <td><?= $this->Number->format($productType->id) ?></td>
            <td><?= h($productType->name) ?></td>
            <td class="actions">
                <?= $this->Html->link('', ['action' => 'view', $productType->id], ['title' => __('View'), 'class' => 'btn btn-default glyphicon glyphicon-eye-open']) ?>
                <?= $this->Html->link('', ['action' => 'edit', $productType->id], ['title' => __('Edit'), 'class' => 'btn btn-default glyphicon glyphicon-pencil']) ?>
                <?= $this->Form->postLink('', ['action' => 'delete', $productType->id], ['confirm' => __('Are you sure you want to delete # {0}?', $productType->id), 'title' => __('Delete'), 'class' => 'btn btn-default glyphicon glyphicon-trash']) ?>
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
</div>