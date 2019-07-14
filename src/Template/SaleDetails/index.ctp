<?php
/* @var $this \Cake\View\View */

$this->start('tb_actions');
?>
    <li><?= $this->Html->link(__('New Sale Detail'), ['action' => 'add']); ?></li>
    <li><?= $this->Html->link(__('List Sales'), ['controller' => 'Sales', 'action' => 'index']); ?></li>
    <li><?= $this->Html->link(__('New Sale'), ['controller' => 'Sales', 'action' => 'add']); ?></li>
    <li><?= $this->Html->link(__('List Products'), ['controller' => 'Products', 'action' => 'index']); ?></li>
    <li><?= $this->Html->link(__('New Product'), ['controller' => 'Products', 'action' => 'add']); ?></li>
<?php $this->end(); ?>
<?php $this->assign('tb_sidebar', '<ul class="nav nav-sidebar">' . $this->fetch('tb_actions') . '</ul>'); ?>
<div class="panel panel-default">
<table class="table table-striped" cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id'); ?></th>
            <th><?= $this->Paginator->sort('sale_id'); ?></th>
            <th><?= $this->Paginator->sort('product_id'); ?></th>
            <th><?= $this->Paginator->sort('quantity'); ?></th>
            <th class="actions"><?= __('Actions'); ?></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($saleDetails as $saleDetail): ?>
        <tr>
            <td><?= $this->Number->format($saleDetail->id) ?></td>
            <td>
                <?= $saleDetail->has('sale') ? $this->Html->link($saleDetail->sale->id, ['controller' => 'Sales', 'action' => 'view', $saleDetail->sale->id]) : '' ?>
            </td>
            <td>
                <?= $saleDetail->has('product') ? $this->Html->link($saleDetail->product->name, ['controller' => 'Products', 'action' => 'view', $saleDetail->product->id]) : '' ?>
            </td>
            <td><?= $this->Number->format($saleDetail->quantity) ?></td>
            <td class="actions">
                <?= $this->Html->link('', ['action' => 'view', $saleDetail->id], ['title' => __('View'), 'class' => 'btn btn-default glyphicon glyphicon-eye-open']) ?>
                <?= $this->Html->link('', ['action' => 'edit', $saleDetail->id], ['title' => __('Edit'), 'class' => 'btn btn-default glyphicon glyphicon-pencil']) ?>
                <?= $this->Form->postLink('', ['action' => 'delete', $saleDetail->id], ['confirm' => __('Are you sure you want to delete # {0}?', $saleDetail->id), 'title' => __('Delete'), 'class' => 'btn btn-default glyphicon glyphicon-trash']) ?>
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
