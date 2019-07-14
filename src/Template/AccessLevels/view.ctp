<?php



$this->start('tb_actions');
?>
<li><?= $this->Html->link(__('Edit Access Level'), ['action' => 'edit', $accessLevel->id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Access Level'), ['action' => 'delete', $accessLevel->id], ['confirm' => __('Are you sure you want to delete # {0}?', $accessLevel->id)]) ?> </li>
<li><?= $this->Html->link(__('List Access Levels'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Access Level'), ['action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
<li><?= $this->Html->link(__('Edit Access Level'), ['action' => 'edit', $accessLevel->id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Access Level'), ['action' => 'delete', $accessLevel->id], ['confirm' => __('Are you sure you want to delete # {0}?', $accessLevel->id)]) ?> </li>
<li><?= $this->Html->link(__('List Access Levels'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Access Level'), ['action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<div class="panel panel-default">
    <!-- Panel header -->
    <div class="panel-heading">
        <h3 class="panel-title"><?= h($accessLevel->access_level) ?></h3>
    </div>
    <table class="table table-striped" cellpadding="0" cellspacing="0">
        <tr>
            <td><?= __('Id') ?></td>
            <td><?= $this->Number->format($accessLevel->id) ?></td>
        </tr>
        <tr>
            <td><?= __('Access Level') ?></td>
            <td><?= $this->Number->format($accessLevel->access_level) ?></td>
        </tr>
    </table>
</div>

<div class="panel panel-default">
    <!-- Panel header -->
    <div class="panel-heading">
        <h3 class="panel-title"><?= __('Related Users') ?></h3>
    </div>
    <?php if (!empty($accessLevel->users)): ?>
        <table class="table table-striped">
            <thead>
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Full Name') ?></th>
                <th><?= __('Street') ?></th>
                <th><?= __('Phone') ?></th>
                <th><?= __('Identifier') ?></th>
                <th><?= __('Email') ?></th>
                <th><?= __('Password') ?></th>
                <th><?= __('Access Level Id') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($accessLevel->users as $users): ?>
                <tr>
                    <td><?= h($users->id) ?></td>
                    <td><?= h($users->full_name) ?></td>
                    <td><?= h($users->street) ?></td>
                    <td><?= h($users->phone) ?></td>
                    <td><?= h($users->identifier) ?></td>
                    <td><?= h($users->email) ?></td>
                    <td><?= h($users->password) ?></td>
                    <td><?= h($users->access_level_id) ?></td>
                    <td class="actions">
                        <?= $this->Html->link('', ['controller' => 'Users', 'action' => 'view', $users->id], ['title' => __('View'), 'class' => 'btn btn-default glyphicon glyphicon-eye-open']) ?>
                        <?= $this->Html->link('', ['controller' => 'Users', 'action' => 'edit', $users->id], ['title' => __('Edit'), 'class' => 'btn btn-default glyphicon glyphicon-pencil']) ?>
                        <?= $this->Form->postLink('', ['controller' => 'Users', 'action' => 'delete', $users->id], ['confirm' => __('Are you sure you want to delete # {0}?', $users->id), 'title' => __('Delete'), 'class' => 'btn btn-default glyphicon glyphicon-trash']) ?>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p class="panel-body">no related Users</p>
    <?php endif; ?>
</div>
