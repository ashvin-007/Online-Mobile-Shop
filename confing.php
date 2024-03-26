<?php
    require('stripe-php-master/init.php');

    $publishable_key="";

    $secretKey="";

    \Stripe\Stripe::setApiKey($secretKey);

?>