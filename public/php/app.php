<?php

namespace A;

include __DIR__ . '/outoload.php';

// use B\person;
// use function B\hello;

$person = new \A\B\person;
$person2 = new \B\person;

$person->name = 'Mohammed';
$person2->name = 'Ahmmed';

$person->setAge(10);

\B\person::$country = 'yemen2';
$person2::$country = 'yemen2';

echo '<pre>';
var_dump($person);
echo '</pre>';

echo B\person::$country;
echo \B\person::MALE;
