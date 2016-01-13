<?php

try {

    // Регистрация автозагрузчика
    $loader = new Phalcon\Loader();
    $loader->registerDirs(array(
        '../app/controllers/',
        '../app/models/'
    ))->register();

    // Создание DI
    $di = new Phalcon\DI\FactoryDefault();

    // Настраиваем компонент View
    $di->set('view', function () {
        $view = new Phalcon\Mvc\View();
        $view->setViewsDir('../app/views/');
        return $view;
    });

    // Обработка запроса
    $application = new Phalcon\Mvc\Application($di);

    echo $application->handle()->getContent();

} catch (Phalcon\Exception $e) {
     echo "PhalconException: ", $e->getMessage();
}