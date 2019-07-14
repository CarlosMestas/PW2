<?php



$this->start('tb_actions');
?>
<li><?= $this->Html->link(__('Edit Restaurant Data'), ['action' => 'edit', $restaurantData->id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Restaurant Data'), ['action' => 'delete', $restaurantData->id], ['confirm' => __('Are you sure you want to delete # {0}?', $restaurantData->id)]) ?> </li>
<li><?= $this->Html->link(__('List Restaurant Data'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Restaurant Data'), ['action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
<li><?= $this->Html->link(__('Edit Restaurant Data'), ['action' => 'edit', $restaurantData->id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Restaurant Data'), ['action' => 'delete', $restaurantData->id], ['confirm' => __('Are you sure you want to delete # {0}?', $restaurantData->id)]) ?> </li>
<li><?= $this->Html->link(__('List Restaurant Data'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Restaurant Data'), ['action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<div class="panel panel-default">
    <!-- Panel header -->
    <div class="panel-heading">
        <h3 class="panel-title"><?= h($restaurantData->name) ?></h3>
    </div>
    <table class="table table-striped" cellpadding="0" cellspacing="0">
        <tr>
            <td><?= __('Name') ?></td>
            <td><?= h($restaurantData->name) ?></td>
        </tr>
        <tr>
            <td><?= __('Address') ?></td>
            <td><?= h($restaurantData->address) ?></td>
        </tr>
        <tr>
            <td><?= __('Email') ?></td>
            <td><?= h($restaurantData->email) ?></td>
        </tr>
        <tr>
            <td><?= __('User') ?></td>
            <td><?= $restaurantData->has('user') ? $this->Html->link($restaurantData->user->full_name, ['controller' => 'Users', 'action' => 'view', $restaurantData->user->id]) : '' ?></td>
        </tr>
        <tr>
            <td><?= __('Id') ?></td>
            <td><?= $this->Number->format($restaurantData->id) ?></td>
        </tr>
        <tr>
            <td><?= __('Phone') ?></td>
            <td><?= $this->Number->format($restaurantData->phone) ?></td>
        </tr>
    </table>
</div>

