<?php

$dispatcher = FastRoute\simpleDispatcher(function(FastRoute\RouteCollector $router) {
    $router->addRoute('GET', '/ini', 'MainController@index');
    $router->addRoute('GET', '/pro', 'ProductosController@index');
    $router->addRoute('GET', '/admi', 'AdministradorController@index');
    $router->addRoute('GET', '/inicio/register', 'inicioController@registerForm');
    $router->addRoute('POST', '/inicio/create', 'inicioController@create');
    $router->addRoute('POST', '/adminLogin', 'AdministradorController@adminLogin');
    $router->addRoute('GET', '/ala', 'ProducController@index');
    $router->addRoute('GET', '/naked', 'NakedController@index');
    $router->addRoute('GET', '/cross', 'CrossController@index');
    $router->addRoute('GET', '/ninja', 'NinjaController@index');
    $router->addRoute('GET', '/doble', 'dobleController@index');
    $router->addRoute('GET', '/traba', 'TrabajoController@index');
    $router->addRoute('GET', '/noso', 'NosotrosController@index');


    $router->addRoute('GET', '/ajax', 'UserController@ajaxResponse');
    $router->addRoute('POST', '/user', 'UserController@create');
    $router->addRoute('GET', '/user/{id}', 'UserController@show');
    $router->addRoute('GET', '/userRegister', 'UserController@registerForm');    
    $router->addRoute('GET', '/userEdit/{id}', 'UserController@editForm'); 
    $router->addRoute('POST', '/userEdit', 'UserController@edit');
    $router->addRoute('DELETE', '/user/{id:\d+}', 'UserController@delete');
    $router->addRoute('GET', '/comida', 'ComidaController@index');
    $router->addRoute('GET', '/comida/register', 'ComidaController@index');
    $router->addRoute('POST', '/comida/create', 'ComidaController@create');

    $router->addRoute('GET', '/Tipo', 'TipoController@index');
    $router->addRoute('GET', '/tipo/register', 'TipoController@registerForm');
    $router->addRoute('POST', '/tipo/create', 'TipoController@create');

    $router->addRoute('GET', '/Empleado', 'EmpleadoController@index');
    $router->addRoute('GET', '/empleado/register', 'EmpleadoController@registerForm');
    $router->addRoute('POST', '/empleado/create', 'EmpleadoController@create');

    $router->addRoute('GET', '/Reporte', 'ReporteController@index');
    $router->addRoute('GET', '/reporte/register', 'ReporteController@registerForm');
    $router->addRoute('POST', '/reporte/create', 'ReporteController@create');
    
    $router->addRoute('GET', '/Marca/register', 'MarcaController@registerForm');
    $router->addRoute('POST', '/Marca/create', 'MarcaController@create');
    $router->addRoute('GET', '/Nombre/register', 'NombreController@registerForm');
    $router->addRoute('POST', '/Nombre/create', 'NombreController@create');
    // Agrega más rutas según tus necesidades
});

// Obtiene el método HTTP y la URI solicitada
$httpMethod = $_SERVER['REQUEST_METHOD'];
$uri =$_SERVER['REQUEST_URI'];
$scriptName = $_SERVER['SCRIPT_NAME'];
$dirName = dirname($scriptName);
$uri = str_replace($dirName, '', $uri);

// Elimina los parámetros de la URI, si los hay
if (($pos = strpos($uri, '?')) !== false) {
    $uri = substr($uri, 0, $pos);
}

// Procesa la ruta utilizando el enrutador de FastRoute
$routeInfo = $dispatcher->dispatch($httpMethod, $uri);

// Maneja el resultado del enrutamiento
switch ($routeInfo[0]) {
    case FastRoute\Dispatcher::NOT_FOUND:
        // Ruta no encontrada
        header("HTTP/1.0 404 Not Found");
        echo 'Error 404 - Not Found';
        break;
    case FastRoute\Dispatcher::METHOD_NOT_ALLOWED:
        // Método no permitido para la ruta
        header("HTTP/1.0 405 Method Not Allowed");
        echo 'Error 405 - Method Not Allowed';
        break;
    case FastRoute\Dispatcher::FOUND:
        // Ruta encontrada
        $handler = $routeInfo[1];
        $vars = $routeInfo[2];
        // Maneja la ruta llamando al controlador correspondiente
        list($controller, $method) = explode('@', $handler);
        $controllerFile = 'Controllers/' . $controller . '.php';
        require_once 'Controllers/Controller.php';
        $controller="\\Controllers\\".$controller;
        $controllerInstance = new $controller();
        if (!empty($vars)) {
            $value = reset($vars);
            $controllerInstance->$method($value);
        }
        else{
            $controllerInstance->$method();
        }
        break;
}
