<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Customer $customer
 */
?>
<?php

$this->start('tb_actions');
?>
    <li><?=
    $this->Form->postLink(
        __('Delete'),
        ['action' => 'delete', $customer->id],
        ['confirm' => __('Are you sure you want to delete # {0}?', $customer->id)]
    )
    ?>
    </li>
    <li><?= $this->Html->link(__('List Customers'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List Sales'), ['controller' => 'Sales', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Sale'), ['controller' => 'Sales', 'action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<div class="panel panel-default">
<ul class="nav nav-sidebar">
    <li><?=
    $this->Form->postLink(
        __('Delete'),
        ['action' => 'delete', $customer->id],
        ['confirm' => __('Are you sure you want to delete # {0}?', $customer->id)]
    )
    ?>
    </li>
    <li><?= $this->Html->link(__('List Customers'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List Sales'), ['controller' => 'Sales', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Sale'), ['controller' => 'Sales', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<?= $this->Form->create($customer); ?>
<fieldset>
    <legend><?= __('Edit {0}', ['Customer']) ?></legend>
    <?php
    echo $this->Form->control('full_name');
    echo $this->Form->control('phone');
    echo $this->Form->control('adress');
    ?>
</fieldset>
<?= $this->Form->button(__("Save")); ?>
<?= $this->Form->end() ?>
</div>