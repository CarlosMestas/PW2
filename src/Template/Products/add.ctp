<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Product $product
 */
?>
<?php


$this->start('tb_actions');
?>
    <li><?= $this->Html->link(__('List Products'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List Product Types'), ['controller' => 'ProductTypes', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Product Type'), ['controller' => 'ProductTypes', 'action' => 'add']) ?> </li>
    <li><?= $this->Html->link(__('List Sale Details'), ['controller' => 'SaleDetails', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Sale Detail'), ['controller' => 'SaleDetails', 'action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>

<ul class="nav nav-sidebar">
    <li><?= $this->Html->link(__('List Products'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List Product Types'), ['controller' => 'ProductTypes', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Product Type'), ['controller' => 'ProductTypes', 'action' => 'add']) ?> </li>
    <li><?= $this->Html->link(__('List Sale Details'), ['controller' => 'SaleDetails', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Sale Detail'), ['controller' => 'SaleDetails', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<div class="table-responsive">

<div class="panel panel-default">
<?= $this->Form->create($product); ?>
<fieldset>
    <legend><?= __('Add {0}', ['Product']) ?></legend>
    <?php
    echo $this->Form->control('name');
    echo $this->Form->control('price');
    echo $this->Form->control('product_type_id', ['options' => $productTypes]);
    ?>
</fieldset>
<?= $this->Form->button(__("Add")); ?>
<?= $this->Form->end() ?>
</div>
</div>

