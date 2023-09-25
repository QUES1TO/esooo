<?php
namespace Controllers;
use Views\CrossIndexView;

use Controllers\Controller;

class CrossController extends Controller {
    //Metodo index que muestra en una tabla todos los datos de user
    public function index()
    {          
        require_once __DIR__ . '/../Views/CrossIndexView.php';
        $view = new CrossIndexView();
                
        $view->render();
    }
    
    
}