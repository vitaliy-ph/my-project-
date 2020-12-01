<?php

declare(strict_types=1);

error_reporting(E_ALL);

use app\components\App;

require_once __DIR__ . '/vendor/autoload.php';

$config = require __DIR__ . '/configs/web.php';
(new App($config))->run();




// регистронезависимые параметры
// 'components.db.host' должен вернуть значение из $this->config['components']['db']['host']

