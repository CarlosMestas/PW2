<?= $this->Html->link(
        __(''),
        ['controller' => 'Sales', 'action' => 'add'],
        ['class'=>' btn btn-default glyphicon glyphicon-plus']) ?>
<div class="table-responsive ">
    
<table class="table table-dark table-bordered table-hover">
    

    <thead>
        <tr>
            <th class="table-active" ><?= $this->Paginator->sort('id'); ?></th>
            <th><?= $this->Paginator->sort('customer_id'); ?></th>
            <th><?= $this->Paginator->sort('administrator_id'); ?></th>
            <th><?= $this->Paginator->sort('total'); ?></th>
            <th><?= $this->Paginator->sort('created'); ?></th>
            <th class="actions"><?= __('Actions'); ?></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($sales as $sale): ?>
        <tr>
            <td class="table-active"><?= $this->Number->format($sale->id) ?></td>
            <td>
                <?= $sale->has('customer') ? $this->Html->link($sale->customer->full_name, ['controller' => 'Customers', 'action' => 'view', $sale->customer->id]) : '' ?>
            </td>
            <td>
                <?= $sale->has('user') ? $this->Html->link($sale->user->full_name, ['controller' => 'Users', 'action' => 'view', $sale->user->id]) : '' ?>
            </td>
            <td><?= $this->Number->format($sale->total) ?></td>
            <td><?= h($sale->created) ?></td>
            <td class="actions">
                <?= $this->Html->link('', ['action' => 'view', $sale->id], ['title' => __('View'), 'class' => 'btn btn-default glyphicon glyphicon-eye-open']) ?>
                <?= $this->Html->link('', ['action' => 'edit', $sale->id], ['title' => __('Edit'), 'class' => 'btn btn-default glyphicon glyphicon-pencil']) ?>
                <?= $this->Form->postLink('', ['action' => 'delete', $sale->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sale->id), 'title' => __('Delete'), 'class' => 'btn btn-default glyphicon glyphicon-trash']) ?>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<div class="paginator">
    <ul class="pagination">
        <?= $this->Paginator->prev('< ' . __('previous')) ?>
        <?= $this->Paginator->numbers(['before' => '', 'after' => '']) ?>
        <?= $this->Paginator->next(__('next') . ' >') ?>
    </ul>
    <p><?= $this->Paginator->counter() ?></p>
</div>

</div>