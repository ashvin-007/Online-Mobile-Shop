<?php
    require('stripe-php-master/init.php');

    $publishable_key="pk_test_51OwI8TAS5RsRZOERFTulo9i0ggy5PoXiMJwRITNjqXxqAe9Mi2QHZJsdSdWRh1n6sdLBBO4qoJRlHWZnEJNFHLPD00bQRJPpDr";

    $secretKey="sk_test_51OwI8TAS5RsRZOER95mRpFqu3mfew4BQLDaDKc1n6m5mLW62NaA5KGNols4RbBAxmoOgHzJpv11x0bGllmYiLpnL00vez3klWm";

    \Stripe\Stripe::setApiKey($secretKey);

?>