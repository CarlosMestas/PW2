<?php
   use Cake\ORM\TableRegistry;
   $productos = TableRegistry::get('Products');
   $query = $productos->find();
?>

<div class="sales view">
<h1>Restaurant MANOLO</h1>
<h2>Av. Independecia N◦123</h2>
<h3>AREQUIPA - AREQUIPA - AREQUIPA</h3>
<br>
<h2>Venta #<?= $this->Number->format($sale->id) ?></h2>
          	<p>Cliente: <?= $sale->customer->full_name ?></p>
            <p>Usuario: <?= $sale->user->full_name ?></p>
            <p>Fecha y hora de consumo: <?= $sale->created ?></p>
     
    		<br><br><br>
    		<h4>Detalle de consumo:</h4>
    		<table width="960" >
    		<tr>
    		<td ><strong>Producto</strong></td>
			<td width="80"><strong>Cantidad</strong></td>
			<td width="80"><strong>Precio U.</strong></td>
			<td width="85"><strong>Sub Total</strong></td>
				
    		</tr>
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
                    <td align="right"><?= h($saleDetails->quantity) ?></td>
                    <td align="right"><?= 
                    $test2 = '';
                    foreach ($query as $key) {
                        if($key->id == $saleDetails->product_id){
                               $test2 = ''.$key->price;      
                        }   
                    }
                    echo($test2.'0')?></td>
                    <td align="right"><?= 
                    $test3 = '';
                    foreach ($query as $key) {
                        if($key->id == $saleDetails->product_id){
                               $test3 = ''.$key->price;      
                        }   
                    }
                    echo($test3*$saleDetails->quantity.'0') ?></td>
                    <br>
                </tr>
            <?php endforeach; ?>

            </table>

            <br>
            <table width="960" >
    		<tr>
    		<td ><strong>Total</strong></td>
			<td width="85" align="right"><strong><?= $sale->total ?>0</strong></td>
			</tr>
            </table>
    
</div>