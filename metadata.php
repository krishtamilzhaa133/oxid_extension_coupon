<?php

$sMetadataVersion = '2.0';

/**
 * Module information
 */
$aModule = [
        'id'          => 'nncoupon',
        'title'       => [
            'de' => 'Novalnet Coupon',
            'en' => 'Novalnet Coupon',
        ],
        'description' => [ 'de' => 'This module only for display the Avaliable Coupons',
                            'en' => 'This module only for display the Avaliable Coupons',
        ],
        'version'     => '1.2.0',
        'author'      => 'Krish',
        'url'         => 'https://www.novalcet.de',
        'email'       => 'krishnraj_p@novalnetsolutions.com',
        'extend'      => [
            \OxidEsales\Eshop\Application\Controller\AccountController::class => \oe\nncoupon\Controller\AvaliableCouponsController::class,
            
        ],
        'controllers'  => [
            'avaliablecoupons'         => \oe\nncoupon\Controller\AvaliableCouponsController::class,
            
        ],
        'templates'   => [
            'displaycouponlist.tpl'     => 'oe/nncoupon/views/tpl/displaycouponlist.tpl',
           
        ],
        'blocks'      => [
            [
                'template'=>'page/account/inc/account_menu.tpl',
                'block'=>'account_menu',
                'file'=>'views/blocks/avaliablecoupons.tpl',
                'position'=>'3',
            ],
             
        ],
        'settings'      => [
            [
                'group' => 'couponsetting', 
                'name'   => 'testcheckcoupon',
                'type'  => 'str',   
                'value'  => 'this is Coupon', 
              
            ],
        ],
      
];
