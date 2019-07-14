<?php
   use Cake\ORM\TableRegistry;
   $productos = TableRegistry::get('Products');
   $query = $productos->find();
   
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sale $sale
 * @var \App\Model\Entity\SaleDetail $saleDetail
 */
?>

<div class="panel panel-default">
    <!-- Panel header -->
    <div class="panel-heading">
        <h3 class="panel-title"><?=__('Sale #'). h($sale->id) ?></h3>
    </div>
    <table class="table table-striped" cellpadding="0" cellspacing="0">
        <tr>
            <td><?= __('Customer') ?></td>
            <td><?= $sale->has('customer') ? $this->Html->link($sale->customer->full_name, ['controller' => 'Customers', 'action' => 'view', $sale->customer->id]) : '' ?></td>
        </tr>
        <tr>
            <td><?= __('User') ?></td>
            <td><?= $sale->has('user') ? $this->Html->link($sale->user->full_name, ['controller' => 'Users', 'action' => 'view', $sale->user->id]) : '' ?></td>
        </tr>
        <tr>
            <td><?= __('Id') ?></td>
            <td><?= $this->Number->format($sale->id) ?></td>
        </tr>
        <tr>
            <td><?= __('Total') ?></td>
            <td><?= $this->Number->format($sale->total) ?></td>
        </tr>
        <tr>
            <td><?= __('Created') ?></td>
            <td><?= h($sale->created) ?></td>
        </tr>
    </table>
</div>

<div class="panel panel-default">
    <!-- Panel header -->
    <div class="panel-heading">
        
        <h3 class="panel-title"><?= __('Sale Products') ?></h3>
    </div>
    <?php if (!empty($sale->sale_details)): ?>
        <table class="table table-striped">

            <thead>
            <tr>
                <th><?= __('Product') ?></th>
                <th><?= __('Quantity') ?></th>
                <th><?= __('Price U.') ?></th>
                <th><?= __('Sub Total') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($sale->sale_details as $saleDetails): ?>
                <tr>
                    <td><?= 
                    $test = '';
                    foreach ($query as $key) {
                        if($key->id == $saleDetails->product_id){
                               $test = ''.$key->name;      
                        }   
                    }
                    echo($test)  ?></td>
                    <td><?= h($saleDetails->quantity) ?></td>
                    <td><?= 
                    $test2 = '';
                    foreach ($query as $key) {
                        if($key->id == $saleDetails->product_id){
                               $test2 = ''.$key->price;      
                        }   
                    }
                    echo($test2) ?></td>
                    <td><?= 
                    $test3 = '';
                    foreach ($query as $key) {
                        if($key->id == $saleDetails->product_id){
                               $test3 = ''.$key->price;      
                        }   
                    }
                    echo($test3*$saleDetails->quantity) ?></td>
                    <td class="actions">
                        <?= $this->Html->link('', ['controller' => 'SaleDetails', 'action' => 'view', $saleDetails->id], ['title' => __('View'), 'class' => 'btn btn-default glyphicon glyphicon-eye-open']) ?>
                        <?= $this->Html->link('', ['controller' => 'SaleDetails', 'action' => 'edit', $saleDetails->id], ['title' => __('Edit'), 'class' => 'btn btn-default glyphicon glyphicon-pencil']) ?>
                        <?= $this->Form->postLink('', ['controller' => 'SaleDetails', 'action' => 'delete', $saleDetails->id], ['confirm' => __('Are you sure you want to delete # {0}?', $saleDetails->id), 'title' => __('Delete'), 'class' => 'btn btn-default glyphicon glyphicon-trash']) ?>
                    </td>
                </tr>
            <?php endforeach; ?>

            </tbody>

        </table>

    <?php else: ?>
        <p class="panel-body">no related SaleDetails</p>
    <?php endif; ?>
    
    <?= $this->Html->link(
        __('Add Product'),
        ['controller' => 'SaleDetails', 'action' => 'add2',$sale->id],
        ['class'=>' btn btn-default']) ?>
    
</div>
<?= $this->Html->link(__('Export to PDF'), ['action' => 'view', $sale->id, '_ext' => 'pdf']); ?>