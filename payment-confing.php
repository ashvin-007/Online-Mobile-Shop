<?php

require("stripe-php-master/init.php");
$finalamount = 0;
$publishable_key =   // publish key
// $publishableKey = "pk_test_51Oea8YDkXACyP9iVSPf3UmFad6aANnsf4XPl7dU3ZzPUjwCQpyJnPfItM4DrU9vzAGYgghdJJHLkdKhlzaANBlvY00cptkB7oD";
$secreatKey = "sk_test_51Oea8YDkXACyP9iVSq0lezPWncL6C9dqU0VQDJXfeX57bGpPFmHq2N3pR9nTvjFPmIG4dOeonEjsDrKIk9yOGqGe00u8iM4YKe";

\Stripe\Stripe::setApiKey($secreatKey);

?>