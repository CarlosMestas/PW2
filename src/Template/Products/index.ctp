<?php
/* @var $this \Cake\View\View */

$this->start('tb_actions');
?>
    <li><?= $this->Html->link(__('New Product'), ['action' => 'add']); ?></li>
    <li><?= $this->Html->link(__('List ProductTypes'), ['controller' => 'ProductTypes', 'action' => 'index']); ?></li>
    <li><?= $this->Html->link(__('New Product Type'), ['controller' => 'ProductTypes', 'action' => 'add']); ?></li>
    <li><?= $this->Html->link(__('List SaleDetails'), ['controller' => 'SaleDetails', 'action' => 'index']); ?></li>
    <li><?= $this->Html->link(__('New Sale Detail'), ['controller' => 'SaleDetails', 'action' => 'add']); ?></li>
<?php $this->end(); ?>
<?php $this->assign('tb_sidebar', '<ul class="nav nav-sidebar">' . $this->fetch('tb_actions') . '</ul>'); ?>
<?= $this->Html->link(
        __(''),
        ['controller' => 'Products', 'action' => 'add'],
        ['class'=>' btn btn-default glyphicon glyphicon-plus']) ?>
<div class="panel panel-default">
<table class="table table-striped" cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id'); ?></th>
            <th><?= $this->Paginator->sort('name'); ?></th>
            <th><?= $this->Paginator->sort('price'); ?></th>
            <th><?= $this->Paginator->sort('product_type_id'); ?></th>
            <th class="actions"><?= __('Actions'); ?></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($products as $product): ?>
        <tr>
            <td><?= $this->Number->format($product->id) ?></td>
            <td><?= h($product->name) ?></td>
            <td><?= $this->Number->format($product->price) ?></td>
            <td>
                <?= $product->has('product_type') ? $this->Html->link($product->product_type->name, ['controller' => 'ProductTypes', 'action' => 'view', $product->product_type->id]) : '' ?>
            </td>
            <td class="actions">
                <?= $this->Html->link('', ['action' => 'view', $product->id], ['title' => __('View'), 'class' => 'btn btn-default glyphicon glyphicon-eye-open']) ?>
                <?= $this->Html->link('', ['action' => 'edit', $product->id], ['title' => __('Edit'), 'class' => 'btn btn-default glyphicon glyphicon-pencil']) ?>
                <?= $this->Form->postLink('', ['action' => 'delete', $product->id], ['confirm' => __('Are you sure you want to delete # {0}?', $product->id), 'title' => __('Delete'), 'class' => 'btn btn-default glyphicon glyphicon-trash']) ?>
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
