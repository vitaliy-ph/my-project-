<?php

use yii\db\Connection;

return [
    'class' => Connection::class,
    'dsn' => 'mysql:host=new_db;dbname=new_db',
    'username' => 'new_user',
    'password' => 'new_pwd',
    'charset' => 'utf8',

    // Schema cache options (for production environment)
    //'enableSchemaCache' => true,
    //'schemaCacheDuration' => 60,
    //'schemaCache' => 'cache',
];
