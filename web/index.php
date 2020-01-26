<?php

require_once dirname(__DIR__) . '/vendor/autoload.php';
require_once dirname(__DIR__) . '/vendor/yiisoft/yii2/Yii.php';

$config = require_once dirname(__DIR__) . '/config/web.php';
(new yii\web\Application($config))->run();
