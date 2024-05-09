<?php
require('../../stripe-php-master/init.php');

$publishableKey = "pk_test_51PEMZCP0cbv53xn1sCqZOT3kV19CNKqt1mMATQEaCu7INMKQz1nb7HQmozGQqNlsH9zP7u2BmzBdPhLFllsqKG5100Xlja0HbW";
$secretKey = "sk_test_51PEMZCP0cbv53xn1hStTs9UHmon07qoQj1gTAeATVwgDLg0J1nULBi8FUERn01DpubRNOMsZr6aeyb33uOq9pPHC00UkvX0lJO";

\Stripe\Stripe::setApiKey($secretKey);
