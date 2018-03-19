<?php

use ishop\Router;

// место для более конкретных правил.


// routes для админки
// Пустая строка - главная страница сайта
Router::add('^admin$', ['controller' => 'Main', 'action' => 'index', 'prefix' => 'admin']);
// Динамические пути
Router::add('^admin/?(?P<controller>[a-z-]+)/?(?P<action>[a-z-]+)?$', ['prefix' => 'admin']);


// default routes для пользовательской части
// Пустая строка - главная страница сайта
Router::add('^$', ['controller' => 'Main', 'action' => 'index']);
// Динамические пути
Router::add('^(?P<controller>[a-z-]+)/?(?P<action>[a-z-]+)?$');
