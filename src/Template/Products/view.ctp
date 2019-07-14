<?php



$this->start('tb_actions');
?>
<li><?= $this->Html->link(__('Edit Product'), ['action' => 'edit', $product->id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Product'), ['action' => 'delete', $product->id], ['confirm' => __('Are you sure you want to delete # {0}?', $product->id)]) ?> </li>
<li><?= $this->Html->link(__('List Products'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Product'), ['action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Product Types'), ['controller' => 'ProductTypes', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Product Type'), ['controller' => 'ProductTypes', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Sale Details'), ['controller' => 'SaleDetails', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Sale Detail'), ['controller' => 'SaleDetails', 'action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
<li><?= $this->Html->link(__('Edit Product'), ['action' => 'edit', $product->id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Product'), ['action' => 'delete', $product->id], ['confirm' => __('Are you sure you want to delete # {0}?', $product->id)]) ?> </li>
<li><?= $this->Html->link(__('List Products'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Product'), ['action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Product Types'), ['controller' => 'ProductTypes', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Product Type'), ['controller' => 'ProductTypes', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Sale Details'), ['controller' => 'SaleDetails', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Sale Detail'), ['controller' => 'SaleDetails', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<div class="panel panel-default">
    <!-- Panel header -->
    <div class="panel-heading">
        <h3 class="panel-title"><?= h($product->name) ?></h3>
    </div>
    <table class="table table-striped" cellpadding="0" cellspacing="0">
        <tr>
            <td><?= __('Name') ?></td>
            <td><?= h($product->name) ?></td>
        </tr>
        <tr>
            <td><?= __('Product Type') ?></td>
            <td><?= $product->has('product_type') ? $this->Html->link($product->product_type->name, ['controller' => 'ProductTypes', 'action' => 'view', $product->product_type->id]) : '' ?></td>
        </tr>
        <tr>
            <td><?= __('Id') ?></td>
            <td><?= $this->Number->format($product->id) ?></td>
        </tr>
        <tr>
            <td><?= __('Price') ?></td>
            <td><?= $this->Number->format($product->price) ?></td>
        </tr>
    </table>
</div>

<div class="panel panel-default">
    <!-- Panel header -->
    <div class="panel-heading">
        <h3 class="panel-title"><?= __('Related SaleDetails') ?></h3>
    </div>
    <?php if (!empty($product->sale_details)): ?>
        <table class="table table-striped">
            <thead>
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Sale Id') ?></th>
                <th><?= __('Product Id') ?></th>
                <th><?= __('Quantity') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($product->sale_details as $saleDetails): ?>
                <tr>
                    <td><?= h($saleDetails->id) ?></td>
                    <td><?= h($saleDetails->sale_id) ?></td>
                    <td><?= h($saleDetails->product_id) ?></td>
                    <td><?= h($saleDetails->quantity) ?></td>
                    <td class="actions">
                        <?= $this->Html->link('', ['controller' => 'SaleDetails', 'action' => 'view', $saleDetails->id], ['title' => __('View'), 'class' => 'btn btn-default glyphicon glyphicon-eye-open']) ?>
                        <?= $this->Html->link('', ['controller' => 'SaleDetails', 'action' => 'edit', $saleDetails->id], ['title' => __('Edit'), 'class' => 'btn btn-default glyphicon glyphicon-pencil']) ?>
                        <?= $this->Form->postLink('', ['controller' => 'SaleDetails', 'action' => 'delete', $saleDetails->id], ['confirm' => __('Are you sure you want to delete # {0}?', $saleDetails->id), 'title' => __('Delete'), 'class' => 'btn btn-default glyphicon glyphicon-trash']) ?>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p class="panel-body">no related SaleDetails</p>
    <?php endif; ?>
</div>
