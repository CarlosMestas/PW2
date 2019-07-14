<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\SaleDetail $saleDetail
 */

?>

<div class="table-responsive">
<div class="panel panel-default ">

    <?= $this->Form->create($saleDetail) ?>
    <fieldset>
        <legend><?= __('Add Sale Detail') . $this->get('name') ?>  </legend>
        <?php
            echo $this->Form->control('product_id', ['options' => $products]);
            echo $this->Form->control('quantity');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Add')) ?>
    <?= $this->Form->end() ?>
</div>
</div>