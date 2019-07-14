<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sale $sale
 */
?>
<?php


$this->start('tb_actions');
?>
    <li><?=
    $this->Form->postLink(
        __('Delete'),
        ['action' => 'delete', $sale->id],
        ['confirm' => __('Are you sure you want to delete # {0}?', $sale->id)]
    )
    ?>
    </li>
    <li><?= $this->Html->link(__('List Sales'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List Customers'), ['controller' => 'Customers', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Customer'), ['controller' => 'Customers', 'action' => 'add']) ?> </li>
    <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    <li><?= $this->Html->link(__('List Sale Details'), ['controller' => 'SaleDetails', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Sale Detail'), ['controller' => 'SaleDetails', 'action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>

<ul class="nav nav-sidebar">
    <li><?=
    $this->Form->postLink(
        __('Delete'),
        ['action' => 'delete', $sale->id],
        ['confirm' => __('Are you sure you want to delete # {0}?', $sale->id)]
    )
    ?>
    </li>
    <li><?= $this->Html->link(__('List Sales'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List Customers'), ['controller' => 'Customers', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Customer'), ['controller' => 'Customers', 'action' => 'add']) ?> </li>
    <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    <li><?= $this->Html->link(__('List Sale Details'), ['controller' => 'SaleDetails', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Sale Detail'), ['controller' => 'SaleDetails', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<div class="table-responsive">
<div class="panel panel-default">
<?= $this->Form->create($sale); ?>
<fieldset>
    <legend><?= __('Edit {0}', ['Sale']) ?></legend>
    <?php
    echo $this->Form->control('customer_id', ['options' => $customers]);
    echo $this->Form->control('administrator_id', ['options' => $users]);
    echo $this->Form->control('total');
    ?>
</fieldset>
<?= $this->Form->button(__("Save")); ?>
<?= $this->Form->end() ?>
</div>
</div>