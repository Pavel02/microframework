<?php

require_once __DIR__ . '/../config/init.php';

//echo 'Работаем' . PHP_EOL;

new \ishop\App();
//var_dump(\ishop\App::$app->getProperties());
throw new Exception('Страница не найдена', 404);
