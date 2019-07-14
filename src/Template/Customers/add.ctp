<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Customer $customer
 */
?>
<?php


$this->start('tb_actions');
?>
    <li><?= $this->Html->link(__('List Customers'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List Sales'), ['controller' => 'Sales', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Sale'), ['controller' => 'Sales', 'action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
    <li><?= $this->Html->link(__('List Customers'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List Sales'), ['controller' => 'Sales', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Sale'), ['controller' => 'Sales', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<div class="panel panel-default">
<?= $this->Form->create($customer,['novalidate']); ?>
<fieldset>
    <legend><?= __('Add {0}', ['Customer']) ?></legend>
    <?php
    echo $this->Form->control('full_name');
    echo $this->Form->control('phone');
    echo $this->Form->control('adress');
    ?>
</fieldset>
<?= $this->Form->button(__("Add")); ?>
<?= $this->Form->end() ?>
</div>