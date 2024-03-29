<?php



$this->start('tb_actions');
?>
<li><?= $this->Html->link(__('Edit Sale Detail'), ['action' => 'edit', $saleDetail->id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Sale Detail'), ['action' => 'delete', $saleDetail->id], ['confirm' => __('Are you sure you want to delete # {0}?', $saleDetail->id)]) ?> </li>
<li><?= $this->Html->link(__('List Sale Details'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Sale Detail'), ['action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Sales'), ['controller' => 'Sales', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Sale'), ['controller' => 'Sales', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Products'), ['controller' => 'Products', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Product'), ['controller' => 'Products', 'action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
<li><?= $this->Html->link(__('Edit Sale Detail'), ['action' => 'edit', $saleDetail->id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Sale Detail'), ['action' => 'delete', $saleDetail->id], ['confirm' => __('Are you sure you want to delete # {0}?', $saleDetail->id)]) ?> </li>
<li><?= $this->Html->link(__('List Sale Details'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Sale Detail'), ['action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Sales'), ['controller' => 'Sales', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Sale'), ['controller' => 'Sales', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Products'), ['controller' => 'Products', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Product'), ['controller' => 'Products', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<div class="panel panel-default">
    <!-- Panel header -->
    <div class="panel-heading">
        <h3 class="panel-title"><?= h($saleDetail->id) ?></h3>
    </div>
    <table class="table table-striped" cellpadding="0" cellspacing="0">
        <tr>
            <td><?= __('Sale') ?></td>
            <td><?= $saleDetail->has('sale') ? $this->Html->link($saleDetail->sale->id, ['controller' => 'Sales', 'action' => 'view', $saleDetail->sale->id]) : '' ?></td>
        </tr>
        <tr>
            <td><?= __('Product') ?></td>
            <td><?= $saleDetail->has('product') ? $this->Html->link($saleDetail->product->name, ['controller' => 'Products', 'action' => 'view', $saleDetail->product->id]) : '' ?></td>
        </tr>
        <tr>
            <td><?= __('Id') ?></td>
            <td><?= $this->Number->format($saleDetail->id) ?></td>
        </tr>
        <tr>
            <td><?= __('Quantity') ?></td>
            <td><?= $this->Number->format($saleDetail->quantity) ?></td>
        </tr>
    </table>
</div>

