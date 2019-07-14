<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\SaleDetail $saleDetail
 */
?>
<?php


$this->start('tb_actions');
?>
    <li><?=
    $this->Form->postLink(
        __('Delete'),
        ['action' => 'delete', $saleDetail->id],
        ['confirm' => __('Are you sure you want to delete # {0}?', $saleDetail->id)]
    )
    ?>
    </li>
    <li><?= $this->Html->link(__('List Sale Details'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List Sales'), ['controller' => 'Sales', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Sale'), ['controller' => 'Sales', 'action' => 'add']) ?> </li>
    <li><?= $this->Html->link(__('List Products'), ['controller' => 'Products', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Product'), ['controller' => 'Products', 'action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<div class="panel panel-default">
<ul class="nav nav-sidebar">
    <li><?=
    $this->Form->postLink(
        __('Delete'),
        ['action' => 'delete', $saleDetail->id],
        ['confirm' => __('Are you sure you want to delete # {0}?', $saleDetail->id)]
    )
    ?>
    </li>
    <li><?= $this->Html->link(__('List Sale Details'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List Sales'), ['controller' => 'Sales', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Sale'), ['controller' => 'Sales', 'action' => 'add']) ?> </li>
    <li><?= $this->Html->link(__('List Products'), ['controller' => 'Products', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Product'), ['controller' => 'Products', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<?= $this->Form->create($saleDetail); ?>
<fieldset>
    <legend><?= __('Edit {0}', ['Sale Detail']) ?></legend>
    <?php
    echo $this->Form->control('sale_id', ['options' => $sales]);
    echo $this->Form->control('product_id', ['options' => $products]);
    echo $this->Form->control('quantity');
    ?>
</fieldset>
<?= $this->Form->button(__("Save")); ?>
<?= $this->Form->end() ?>
</div>  