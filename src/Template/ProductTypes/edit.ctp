<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ProductType $productType
 */
?>
<?php

$this->start('tb_actions');
?>
    <li><?=
    $this->Form->postLink(
        __('Delete'),
        ['action' => 'delete', $productType->id],
        ['confirm' => __('Are you sure you want to delete # {0}?', $productType->id)]
    )
    ?>
    </li>
    <li><?= $this->Html->link(__('List Product Types'), ['action' => 'index']) ?></li>
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
        ['action' => 'delete', $productType->id],
        ['confirm' => __('Are you sure you want to delete # {0}?', $productType->id)]
    )
    ?>
    </li>
    <li><?= $this->Html->link(__('List Product Types'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List Products'), ['controller' => 'Products', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Product'), ['controller' => 'Products', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<?= $this->Form->create($productType); ?>
<fieldset>
    <legend><?= __('Edit {0}', ['Product Type']) ?></legend>
    <?php
    echo $this->Form->control('name');
    ?>
</fieldset>
<?= $this->Form->button(__("Save")); ?>
<?= $this->Form->end() ?>
</div>