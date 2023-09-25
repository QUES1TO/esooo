<?php
namespace Controllers;
use Views\NinjaIndexView;

use Controllers\Controller;

class NinjaController extends Controller {
    //Metodo index que muestra en una tabla todos los datos de user
    public function index()
    {          
        require_once __DIR__ . '/../Views/NinjaIndexView.php';
        $view = new NinjaIndexView();
                
        $view->render();
    }
    
    
}