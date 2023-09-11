<?php

// autoload_psr4.php @generated by Composer

$vendorDir = dirname(__DIR__);
$baseDir = dirname($vendorDir);

return array(
    'Stripe\\' => array($vendorDir . '/stripe/stripe-php/lib'),
    'Psr\\Http\\Message\\' => array($vendorDir . '/psr/http-factory/src', $vendorDir . '/psr/http-message/src'),
    'PHPMailer\\PHPMailer\\' => array($vendorDir . '/phpmailer/phpmailer/src'),
    'Nyholm\\Psr7\\' => array($vendorDir . '/nyholm/psr7/src'),
    'Nyholm\\Psr7Server\\' => array($vendorDir . '/nyholm/psr7-server/src'),
    'Http\\Message\\' => array($vendorDir . '/php-http/message-factory/src'),
    'App\\' => array($baseDir . '/src'),
);
