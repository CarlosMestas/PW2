<?php



$this->start('tb_actions');
?>
<li><?= $this->Html->link(__('Edit Product Type'), ['action' => 'edit', $productType->id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Product Type'), ['action' => 'delete', $productType->id], ['confirm' => __('Are you sure you want to delete # {0}?', $productType->id)]) ?> </li>
<li><?= $this->Html->link(__('List Product Types'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Product Type'), ['action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Products'), ['controller' => 'Products', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Product'), ['controller' => 'Products', 'action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
<li><?= $this->Html->link(__('Edit Product Type'), ['action' => 'edit', $productType->id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Product Type'), ['action' => 'delete', $productType->id], ['confirm' => __('Are you sure you want to delete # {0}?', $productType->id)]) ?> </li>
<li><?= $this->Html->link(__('List Product Types'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Product Type'), ['action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Products'), ['controller' => 'Products', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Product'), ['controller' => 'Products', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<div class="panel panel-default">
    <!-- Panel header -->
    <div class="panel-heading">
        <h3 class="panel-title"><?= h($productType->name) ?></h3>
    </div>
    <table class="table table-striped" cellpadding="0" cellspacing="0">
        <tr>
            <td><?= __('Name') ?></td>
            <td><?= h($productType->name) ?></td>
        </tr>
        <tr>
            <td><?= __('Id') ?></td>
            <td><?= $this->Number->format($productType->id) ?></td>
        </tr>
    </table>
</div>

<div class="panel panel-default">
    <!-- Panel header -->
    <div class="panel-heading">
        <h3 class="panel-title"><?= __('Related Products') ?></h3>
    </div>
    <?php if (!empty($productType->products)): ?>
        <table class="table table-striped">
            <thead>
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Name') ?></th>
                <th><?= __('Price') ?></th>
                <th><?= __('Product Type Id') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($productType->products as $products): ?>
                <tr>
                    <td><?= h($products->id) ?></td>
                    <td><?= h($products->name) ?></td>
                    <td><?= h($products->price) ?></td>
                    <td><?= h($products->product_type_id) ?></td>
                    <td class="actions">
                        <?= $this->Html->link('', ['controller' => 'Products', 'action' => 'view', $products->id], ['title' => __('View'), 'class' => 'btn btn-default glyphicon glyphicon-eye-open']) ?>
                        <?= $this->Html->link('', ['controller' => 'Products', 'action' => 'edit', $products->id], ['title' => __('Edit'), 'class' => 'btn btn-default glyphicon glyphicon-pencil']) ?>
                        <?= $this->Form->postLink('', ['controller' => 'Products', 'action' => 'delete', $products->id], ['confirm' => __('Are you sure you want to delete # {0}?', $products->id), 'title' => __('Delete'), 'class' => 'btn btn-default glyphicon glyphicon-trash']) ?>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p class="panel-body">no related Products</p>
    <?php endif; ?>
</div>
