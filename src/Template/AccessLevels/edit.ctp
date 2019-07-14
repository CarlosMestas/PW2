<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\AccessLevel $accessLevel
 */
?>
<?php


$this->start('tb_actions');
?>
    <li><?=
    $this->Form->postLink(
        __('Delete'),
        ['action' => 'delete', $accessLevel->id],
        ['confirm' => __('Are you sure you want to delete # {0}?', $accessLevel->id)]
    )
    ?>
    </li>
    <li><?= $this->Html->link(__('List Access Levels'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<div class="panel panel-default">

    <li><?=
    $this->Form->postLink(
        __('Delete'),
        ['action' => 'delete', $accessLevel->id],
        ['confirm' => __('Are you sure you want to delete # {0}?', $accessLevel->id)]
    )
    ?>
    </li>
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
    <legend><?= __('Edit {0}', ['Access Level']) ?></legend>
    <?php
    echo $this->Form->control('access_level');
    ?>
</fieldset>
<?= $this->Form->button(__("Save")); ?>
<?= $this->Form->end() ?>
</div>