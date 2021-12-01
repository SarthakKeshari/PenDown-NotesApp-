<?php

require __DIR__.'/vendor/autoload.php';

use Kreait\Firebase\Factory;

$factory = (new Factory)
                    ->withServiceAccount('pendown-6d5ca-firebase-adminsdk-4cilu-df44d01a18.json')
                    ->withDatabaseUri('https://pendown-6d5ca-default-rtdb.firebaseio.com/');

$database = $factory->createDatabase();

?>