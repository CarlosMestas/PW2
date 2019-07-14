<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<?php

$this->start('tb_actions');
?>
    <li><?=
    $this->Form->postLink(
        __('Delete'),
        ['action' => 'delete', $user->id],
        ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]
    )
    ?>
    </li>
    <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List Access Levels'), ['controller' => 'AccessLevels', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Access Level'), ['controller' => 'AccessLevels', 'action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<div class="panel panel-default">
<ul class="nav nav-sidebar">
    <li><?=
    $this->Form->postLink(
        __('Delete'),
        ['action' => 'delete', $user->id],
        ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]
    )
    ?>
    </li>
    <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List Access Levels'), ['controller' => 'AccessLevels', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Access Level'), ['controller' => 'AccessLevels', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<?= $this->Form->create($user); ?>
<fieldset>
    <legend><?= __('Edit {0}', ['User']) ?></legend>
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
<?= $this->Form->button(__("Save")); ?>
<?= $this->Form->end() ?>
</div>