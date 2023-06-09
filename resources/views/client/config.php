<?php
require('stripe-php-master/init.php');

$publishableKey="pk_test_51L1aarCdPRv8cor18wVdhVy7uETJDc9ESRHJDJyI4jYS3GguE1deeH6YHGMWmGa9EdLC1NkFkMcPVU4YspxY7UlW00pvdPCfT2";

$secretKey="sk_test_51L1aarCdPRv8cor1zMl2tDiJKwnl6KsTlasJh3gRft5LQmcWDmp9h5LPdR5NXXgB1u4BV7LZdjOYmUIDdReA4wN400mTIRt5HP";

\Stripe\Stripe::setApiKey($secretKey);
?>