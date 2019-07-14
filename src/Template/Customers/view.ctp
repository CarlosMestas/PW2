<?php



$this->start('tb_actions');
?>
<li><?= $this->Html->link(__('Edit Customer'), ['action' => 'edit', $customer->id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Customer'), ['action' => 'delete', $customer->id], ['confirm' => __('Are you sure you want to delete # {0}?', $customer->id)]) ?> </li>
<li><?= $this->Html->link(__('List Customers'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Customer'), ['action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Sales'), ['controller' => 'Sales', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Sale'), ['controller' => 'Sales', 'action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
<li><?= $this->Html->link(__('Edit Customer'), ['action' => 'edit', $customer->id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Customer'), ['action' => 'delete', $customer->id], ['confirm' => __('Are you sure you want to delete # {0}?', $customer->id)]) ?> </li>
<li><?= $this->Html->link(__('List Customers'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Customer'), ['action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Sales'), ['controller' => 'Sales', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Sale'), ['controller' => 'Sales', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<div class="panel panel-default">
    <!-- Panel header -->
    <div class="panel-heading">
        <h3 class="panel-title"><?= h($customer->full_name) ?></h3>
    </div>
    <table class="table table-striped" cellpadding="0" cellspacing="0">
        <tr>
            <td><?= __('Full Name') ?></td>
            <td><?= h($customer->full_name) ?></td>
        </tr>
        <tr>
            <td><?= __('Phone') ?></td>
            <td><?= h($customer->phone) ?></td>
        </tr>
        <tr>
            <td><?= __('Adress') ?></td>
            <td><?= h($customer->adress) ?></td>
        </tr>
        <tr>
            <td><?= __('Id') ?></td>
            <td><?= $this->Number->format($customer->id) ?></td>
        </tr>
    </table>
</div>

<div class="panel panel-default">
    <!-- Panel header -->
    <div class="panel-heading">
        <h3 class="panel-title"><?= __('Related Sales') ?></h3>
    </div>
    <?php if (!empty($customer->sales)): ?>
        <table class="table table-striped">
            <thead>
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Customer Id') ?></th>
                <th><?= __('Administrator Id') ?></th>
                <th><?= __('Total') ?></th>
                <th><?= __('Created') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($customer->sales as $sales): ?>
                <tr>
                    <td><?= h($sales->id) ?></td>
                    <td><?= h($sales->customer_id) ?></td>
                    <td><?= h($sales->administrator_id) ?></td>
                    <td><?= h($sales->total) ?></td>
                    <td><?= h($sales->created) ?></td>
                    <td class="actions">
                        <?= $this->Html->link('', ['controller' => 'Sales', 'action' => 'view', $sales->id], ['title' => __('View'), 'class' => 'btn btn-default glyphicon glyphicon-eye-open']) ?>
                        <?= $this->Html->link('', ['controller' => 'Sales', 'action' => 'edit', $sales->id], ['title' => __('Edit'), 'class' => 'btn btn-default glyphicon glyphicon-pencil']) ?>
                        <?= $this->Form->postLink('', ['controller' => 'Sales', 'action' => 'delete', $sales->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sales->id), 'title' => __('Delete'), 'class' => 'btn btn-default glyphicon glyphicon-trash']) ?>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p class="panel-body">no related Sales</p>
    <?php endif; ?>
</div>
