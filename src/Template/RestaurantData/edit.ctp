<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\RestaurantData $restaurantData
 */
?>
<?php


$this->start('tb_actions');
?>
    <li><?=
    $this->Form->postLink(
        __('Delete'),
        ['action' => 'delete', $restaurantData->id],
        ['confirm' => __('Are you sure you want to delete # {0}?', $restaurantData->id)]
    )
    ?>
    </li>
    <li><?= $this->Html->link(__('List Restaurant Data'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
    <li><?=
    $this->Form->postLink(
        __('Delete'),
        ['action' => 'delete', $restaurantData->id],
        ['confirm' => __('Are you sure you want to delete # {0}?', $restaurantData->id)]
    )
    ?>
    </li>
    <li><?= $this->Html->link(__('List Restaurant Data'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<?= $this->Form->create($restaurantData); ?>
<fieldset>
    <legend><?= __('Edit {0}', ['Restaurant Data']) ?></legend>
    <?php
    echo $this->Form->control('name');
    echo $this->Form->control('address');
    echo $this->Form->control('phone');
    echo $this->Form->control('email');
    echo $this->Form->control('user_id', ['options' => $users]);
    ?>
</fieldset>
<?= $this->Form->button(__("Save")); ?>
<?= $this->Form->end() ?>
