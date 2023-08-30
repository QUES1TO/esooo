<?php
namespace Controllers;
use Views\InicioIndexView;

use Controllers\Controller;

class InicioController extends Controller {
    //Metodo index que muestra en una tabla todos los datos de user
    public function index()
    {          
        require_once __DIR__ . '/../Views/InicioIndexView.php';
        $view = new InicioIndexView();
                
        $view->render();
    }
    
    
}