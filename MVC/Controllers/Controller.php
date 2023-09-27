<?php
namespace Controllers;
require_once __DIR__ . '/../Models/Model.php';
require_once 'UserController.php';
require_once 'ComidaController.php';
require_once 'MainController.php';
require_once 'ProductosController.php';
require_once 'NosotrosController.php';
require_once 'TipoController.php';
require_once 'EmpleadoController.php';
require_once 'ReporteController.php';

require_once 'AdministradorController.php';
require_once 'InicioController.php';
require_once 'ProducController.php';

require_once 'MarcaController.php';
require_once 'NombreController.php';
require_once 'NakedController.php';
require_once 'CrossController.php';
require_once 'NinjaController.php';
require_once 'DobleController.php';
require_once 'TrabajoController.php';

class Controller
{
    public function redirect($route,$data = null)
    {
        $separator = "/";
        $url = $route;
        if($data!=null)
        {                                    
            $url = $url.$separator.$data;
        }
        header("Location: ".$url);
        exit();
    }
}