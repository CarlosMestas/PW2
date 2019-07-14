<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\AccessLevel $accessLevel
 */
?>
<?php


$this->start('tb_actions');
?>
    <li><?= $this->Html->link(__('List Access Levels'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<div class="panel panel-default">
<ul class="nav nav-sidebar">
    <li><?= $this->Html->link(__('List Access Levels'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<div class="panel panel-default">
<?= $this->Form->create($accessLevel); ?>
<fieldset>
    <legend><?= __('Add {0}', ['Access Level']) ?></legend>
    <?php
    echo $this->Form->control('access_level');
    ?>
</fieldset>
<?= $this->Form->button(__("Add")); ?>
<?= $this->Form->end() ?>
</div>
</div>