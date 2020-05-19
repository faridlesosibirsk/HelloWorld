<?php
$start = microtime(true);
$mem_start = memory_get_usage();

require_once dirname(__DIR__) . '/vendor/autoload.php';
//$config = require_once dirname(__DIR__) . '/config/web.php';
//(new yii\web\Application($config))->run();
echo 'test';

echo '<br/>memory_get_usage: ' . (memory_get_usage() - $mem_start);
echo '<br/>microtime: ' . (microtime(true) - $start);