
<?php
/**
 * @author Nurbek Nurjanov nurbek.nurjanov@mail.ru
 * @link http://sakuracommerce.com/
 * @copyright Copyright (c) 2018 Sakuracommerce
 * @license http://sakuracommerce.com/license/
 */

use product\models\Product;

$date = date('Y-m-d h:i:s');

return [
    [
        'id' => '1',
        'category_id' => '4',
        'user_id' => 1,
		'sku' => '1001',
		'title' => 'Asus',
		'title_url' => 'electronics/computers/noutbooks/asus',
		'description' => '<p>Asus knows what it&#39;s doing. It knows that the MacBook Air laptops are old news,
		 deliberately left to tread water to make way for the all-singing,
		 (mostly) all-dancing 12in. Asus thinks there&#39;s life left for a 13in &#39;ultrabook&#39; still. The Asus ZenBook UX305 is pretty much everything the 13in should be at this point,
		 but isn&#39;t. What do I mean? Well,
		 it&#39;s pretty affordable at &pound;650 and has a really rather good screen,
		 while still looking and feeling fantastic. Of course,
		 as it runs Windows 8.1 rather than it&#39;s not going to convert many obsessives. But if you&#39;re on the cusp of being swayed,
		 let the Asus ZenBook UX305 sway you.</p>
',
		'created_at' => $date,
		'updated_at' => $date,
		'status' => Product::STATUS_EXISTS,
		'price' => '700',
		'discount' => '30',
		'group_id' => NULL,
		'type' => implode(',',[Product::TYPE_PROMOTE, Product::TYPE_POPULAR, Product::TYPE_NOVELTY]),
		'rating' => '5',
		'rating_count' => '3',
        'enabled'=>1,
        'shop_id'=>1,
	],
    [
		'id' => '2',
		'category_id' => '4',
		'user_id' => 1,
		'sku' => '1002',
		'title' => 'MacBook',
		'title_url' => 'electronics/computers/noutbooks/macbook',
		'description' => 'MacBook Air is nice computer',
		'created_at' => $date,
		'updated_at' => $date,
		'status' => Product::STATUS_EXISTS,
		'price' => '1200',
		'discount' => 20,
		'group_id' => NULL,
		'type' => implode(',',[Product::TYPE_PROMOTE, Product::TYPE_POPULAR, Product::TYPE_NOVELTY]),
		'rating' => 4,
		'rating_count' => '0',
        'enabled'=>1,
        'shop_id'=>1,
    ],
    [
		'id' => '3',
		'category_id' => '7',
		'user_id' => 1,
		'sku' => '1003',
		'title' => 'Samsung J5',
		'title_url' => 'electronics/phones/smartphones/samsung-j5',
		'description' => '',
		'created_at' => $date,
		'updated_at' => $date,
		'status' => Product::STATUS_EXISTS,
		'price' => '250',
		'discount' => NULL,
		'group_id' => NULL,
		'type' => implode(',',[Product::TYPE_PROMOTE, Product::TYPE_POPULAR, Product::TYPE_NOVELTY]),
		'rating' => NULL,
		'rating_count' => '0',
        'enabled'=>1,
        'shop_id'=>1,
	],
    [
		'id' => '4',
		'category_id' => '1',
		'user_id' => 1,
		'sku' => '1004',
		'title' => 'TV',
		'title_url' => 'electronics/tv',
		'description' => '',
		'created_at' => $date,
		'updated_at' => $date,
		'status' => Product::STATUS_EXISTS,
		'price' => '200',
		'discount' => NULL,
		'group_id' => NULL,
		'type' => null,
		'rating' => NULL,
		'rating_count' => '0',
        'enabled'=>1,
        'shop_id'=>1,
	],
    [
		'id' => '5',
		'category_id' => '17',
		'user_id' => 1,
		'sku' => '1005',
		'title' => 'Porshe design',
		'title_url' => 'glasses/glasses-for-sight/porshe-design',
		'description' => '',
		'created_at' => $date,
		'updated_at' => $date,
		'status' => Product::STATUS_EXISTS,
		'price' => '100',
		'discount' => NULL,
		'group_id' => NULL,
		'type' => implode(',',[Product::TYPE_PROMOTE, Product::TYPE_POPULAR]),
		'rating' => NULL,
		'rating_count' => '0',
        'enabled'=>1,
        'shop_id'=>3,
	],
    [
		'id' => '6',
		'category_id' => '18',
		'user_id' => 1,
		'sku' => '1006',
		'title' => 'EMPORIO ARMANI',
		'title_url' => 'glasses/sunglasses/emporio-armani',
		'description' => '',
		'created_at' => $date,
		'updated_at' => $date,
		'status' => Product::STATUS_EXISTS,
		'price' => '100',
		'discount' => NULL,
		'group_id' => NULL,
		'type' => implode(',',[Product::TYPE_PROMOTE, Product::TYPE_POPULAR]),
		'rating' => NULL,
		'rating_count' => '0',
        'enabled'=>1,
        'shop_id'=>3,
	],
    [
		'id' => '7',
		'category_id' => '17',
		'user_id' => 1,
		'sku' => '1007',
		'title' => 'PRADA',
		'title_url' => 'glasses/glasses-for-sight/prada',
		'description' => '',
		'created_at' => $date,
		'updated_at' => $date,
		'status' => Product::STATUS_EXISTS,
		'price' => '90',
		'discount' => NULL,
		'group_id' => NULL,
		'type' => implode(',',[Product::TYPE_POPULAR]),
		'rating' => NULL,
		'rating_count' => '0',
        'enabled'=>1,
        'shop_id'=>3,
	],
    [
		'id' => '8',
		'category_id' => '13',
		'user_id' => 1,
		'sku' => '1008',
		'title' => 'Fanta',
		'title_url' => 'foodstuffs/soda-drinks/fanta',
		'description' => '',
		'created_at' => $date,
		'updated_at' => $date,
		'status' => Product::STATUS_EXISTS,
		'price' => '0.75',
		'discount' => NULL,
		'group_id' => '8',
		'type' => implode(',',[Product::TYPE_POPULAR]),
		'rating' => NULL,
		'rating_count' => '0',
        'enabled'=>1,
        'shop_id'=>4,
	],
    [
		'id' => '9',
		'category_id' => '13',
		'user_id' => 1,
		'sku' => '1009',
		'title' => 'Fanta 1.5 L',
		'title_url' => 'foodstuffs/soda-drinks/fanta-15-l',
		'description' => '',
		'created_at' => $date,
		'updated_at' => $date,
		'status' => Product::STATUS_EXISTS,
		'price' => '0.95',
		'discount' => NULL,
		'group_id' => '8',
        'type' => null,
		'rating' => NULL,
		'rating_count' => '0',
        'enabled'=>1,
        'shop_id'=>4,
	],
    [
		'id' => '10',
		'category_id' => '15',
		'user_id' => 1,
		'sku' => '1010',
		'title' => 'Milavitsa',
		'title_url' => 'womens-underwear/milavitsa',
		'description' => '',
		'created_at' => $date,
		'updated_at' => $date,
		'status' => Product::STATUS_EXISTS,
		'price' => '100',
		'discount' => NULL,
		'group_id' => NULL,
		'type' => implode(',',[Product::TYPE_PROMOTE, Product::TYPE_POPULAR]),
		'rating' => NULL,
		'rating_count' => '0',
        'enabled'=>1,
        'shop_id'=>2,
	],
    [
		'id' => '11',
		'category_id' => '15',
		'user_id' => 1,
		'sku' => '1011',
		'title' => 'Victoria\'s secret',
		'title_url' => 'womens-underwear/victorias-secret',
		'description' => '',
		'created_at' => $date,
		'updated_at' => $date,
		'status' => Product::STATUS_EXISTS,
		'price' => '90',
		'discount' => NULL,
		'group_id' => NULL,
		'type' => implode(',',[Product::TYPE_PROMOTE, Product::TYPE_POPULAR]),
		'rating' => NULL,
		'rating_count' => '0',
        'enabled'=>1,
        'shop_id'=>2,
	],
    [
		'id' => '12',
		'category_id' => '15',
		'user_id' => 1,
		'sku' => '1012',
		'title' => 'Clovia',
		'title_url' => 'womens-underwear/clovia',
		'description' => '',
		'created_at' => $date,
		'updated_at' => $date,
		'status' => Product::STATUS_EXISTS,
		'price' => '90',
		'discount' => NULL,
		'group_id' => NULL,
		'type' => implode(',',[Product::TYPE_PROMOTE, Product::TYPE_POPULAR]),
		'rating' => NULL,
		'rating_count' => '0',
        'enabled'=>1,
        'shop_id'=>2,
	],
    [
		'id' => '13',
		'category_id' => '15',
		'user_id' => 1,
		'sku' => '1013',
		'title' => 'Amante',
		'title_url' => 'womens-underwear/amante',
		'description' => '',
		'created_at' => $date,
		'updated_at' => $date,
		'status' => Product::STATUS_EXISTS,
		'price' => '90',
		'discount' => NULL,
		'group_id' => NULL,
		'type' => implode(',',[Product::TYPE_PROMOTE, Product::TYPE_POPULAR]),
		'rating' => NULL,
		'rating_count' => '0',
        'enabled'=>1,
        'shop_id'=>2,
	],
    [
		'id' => '15',
		'category_id' => 19,
		'user_id' => 1,
		'sku' => '1015',
		'title' => 'Mouse',
		'title_url' => 'electronics/phones/accessories-for-smartphones/mouse',
		'description' => '',
		'created_at' => $date,
		'updated_at' => $date,
		'status' => Product::STATUS_EXISTS,
		'price' => '10',
		'discount' => NULL,
		'group_id' => NULL,
		'type' => Product::TYPE_NOVELTY,
		'rating' => NULL,
		'rating_count' => '0',
        'enabled'=>1,
        'shop_id'=>1,
	],
    [
		'id' => '16',
		'category_id' => 19,
		'user_id' => 1,
		'sku' => '1016',
		'title' => 'Bag',
		'title_url' => 'electronics/phones/accessories-for-smartphones/bag',
		'description' => '',
		'created_at' => $date,
		'updated_at' => $date,
		'status' => Product::STATUS_EXISTS,
		'price' => '15',
		'discount' => NULL,
		'group_id' => NULL,
		'type' => NULL,
		'rating' => NULL,
		'rating_count' => '0',
        'enabled'=>1,
        'shop_id'=>1,
    ]
];