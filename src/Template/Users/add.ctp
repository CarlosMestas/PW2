<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<?php


$this->start('tb_actions');
?>
    <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List Access Levels'), ['controller' => 'AccessLevels', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Access Level'), ['controller' => 'AccessLevels', 'action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>

<ul class="nav nav-sidebar">
    <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List Access Levels'), ['controller' => 'AccessLevels', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Access Level'), ['controller' => 'AccessLevels', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<div class="panel panel-default">
<?= $this->Form->create($user,['novalidate']); ?>
<fieldset>
    <legend><?= __('Add {0}', ['User']) ?></legend>
    <?php
    echo $this->Form->control('full_name');
    echo $this->Form->control('street');
    echo $this->Form->control('phone');
    echo $this->Form->control('identifier');
    echo $this->Form->control('email');
    echo $this->Form->control('password');
    echo $this->Form->control('access_level_id', ['options' => $accessLevels]);
    ?>
</fieldset>
<?= $this->Form->button(__("Add")); ?>
<?= $this->Form->end() ?>
</div>