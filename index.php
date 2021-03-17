<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        //фронт контроллер, куда попадают все запросы
        
        
        // общие настройки
        ini_set('display_errors', 1);
        error_reporting(E_ALL);
        //подключение файлов системы
        define('ROOT', dirname(__FILE__));//подключению к файлу. файл-константа
        require_once (ROOT.'/components/Router.php');
        //
        
        //вызов роутера
        $router = new Router(); //экземпляр класса роутер
        $router->run(); //запускаем метод ран
        ?>
    </body>
</html>
