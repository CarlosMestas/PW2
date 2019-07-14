<?php



$this->start('tb_actions');
?>
<li><?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?> </li>
<li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Access Levels'), ['controller' => 'AccessLevels', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Access Level'), ['controller' => 'AccessLevels', 'action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
<li><?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?> </li>
<li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Access Levels'), ['controller' => 'AccessLevels', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Access Level'), ['controller' => 'AccessLevels', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<div class="panel panel-default">
    <!-- Panel header -->
    <div class="panel-heading">
        <h3 class="panel-title"><?= h($user->full_name) ?></h3>
    </div>
    <table class="table table-striped" cellpadding="0" cellspacing="0">
        <tr>
            <td><?= __('Full Name') ?></td>
            <td><?= h($user->full_name) ?></td>
        </tr>
        <tr>
            <td><?= __('Street') ?></td>
            <td><?= h($user->street) ?></td>
        </tr>
        <tr>
            <td><?= __('Phone') ?></td>
            <td><?= h($user->phone) ?></td>
        </tr>
        <tr>
            <td><?= __('Email') ?></td>
            <td><?= h($user->email) ?></td>
        </tr>
        <tr>
            <td><?= __('Password') ?></td>
            <td><?= h($user->password) ?></td>
        </tr>
        <tr>
            <td><?= __('Access Level') ?></td>
            <td><?= $user->has('access_level') ? $this->Html->link($user->access_level->access_level, ['controller' => 'AccessLevels', 'action' => 'view', $user->access_level->id]) : '' ?></td>
        </tr>
        <tr>
            <td><?= __('Id') ?></td>
            <td><?= $this->Number->format($user->id) ?></td>
        </tr>
        <tr>
            <td><?= __('Identifier') ?></td>
            <td><?= $this->Number->format($user->identifier) ?></td>
        </tr>
    </table>
</div>

<?= $this->Html->link(__('Export to PDF'), ['action' => 'view', $user->id, '_ext' => 'pdf']); ?>