<?php

require_once __DIR__ . '/../vendor/autoload.php';

$string1 = 'Bonjour le monde ! Bonjour la vie ! Bonjour les autres !';

/* ************************************************* */
/* ************ WString::strReplaceLast ********** */
/* ************************************************* */

error_log('Before str_replace_last ' . $string1);
$test = \Webike\WString\WString::strReplaceLast('Bonjour', 'Hello', $string1);
error_log('After str_replace_last ' . $test);
error_log("\n");

error_log('Before str_replace_last ' . $string1);
$test = \Webike\WString\WString::strReplaceLast('Au revoir', 'Hello', $string1);
error_log('After str_replace_last ' . $test);
error_log("\n");

/* ************************************************* */
/* *************** WString::startsWith ************ */
/* ************************************************* */

error_log('Before starts_with ' . $string1 . ' ? Bonjour');
$test = \Webike\WString\WString::startsWith($string1, 'Bonjour');
error_log('After starts_with ' . $test);
error_log("\n");

error_log('Before starts_with ' . $string1 . ' ? Au revoir');
$test = \Webike\WString\WString::startsWith($string1, 'Au revoir');
error_log('After starts_with ' . $test);
error_log("\n");

/* ************************************************* */
/* *************** WString::endsWith ************** */
/* ************************************************* */

error_log('Before ends_with ' . $string1 . ' ? les autres !');
$test = \Webike\WString\WString::endsWith($string1, 'les autres !');
error_log('After ends_with ' . $test);
error_log("\n");

error_log('Before ends_with ' . $string1 . ' ? les autres');
$test = \Webike\WString\WString::endsWith($string1, 'les autres');
error_log('After ends_with ' . $test);
error_log("\n");
