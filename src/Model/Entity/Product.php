<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Product Entity
 *
 * @property int $id
 * @property string $name
 * @property int $price
 * @property int $product_type_id
 *
 * @property \App\Model\Entity\ProductType $product_type
 * @property \App\Model\Entity\SaleDetail[] $sale_details
 */
class Product extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'name' => true,
        'price' => true,
        'product_type_id' => true,
        'product_type' => true,
        'sale_details' => true
    ];
}
