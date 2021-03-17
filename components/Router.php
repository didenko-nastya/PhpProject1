<?php

class Router {
   
    private $routes; //массив в котором хранятся маршруты
    
    public function __construct() {
        $routesPath = ROOT.'/config/routes.php'; //указываем путь к роутам
        $this->routes = include($routesPath);//присваиваем свойству routes массив в routes
    }
    
    private function getURI(){
      if (!empty($_SERVER['REQUEST_URI'])) {
            return trim($_SERVER['REQUEST_URI'], '/');
        }
    }
    public function run() { //метод ран который принимает отправления от фронт контроллера
        //получаем строку запроса
        $uri = $this->getURI();
        echo $uri;
        //проверяем наличие такого запроса в roures.php
        
        //проверяем есть ли такой контроллер при совпадении и какой action обрабатывает запрос
        
        //подключаем файл класса-контроллера
        
        //создаем обьек, вызываем метот(т.е. action)
    }
}
