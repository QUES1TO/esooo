<?php
namespace Controllers;
use Views\ProducIndexView;

use Controllers\Controller;

class ProducController extends Controller {
    //Metodo index que muestra en una tabla todos los datos de user
    public function index()
    {          
        require_once __DIR__ . '/../Views/ProducIndexView.php';
        $view = new ProducIndexView();
                
        $view->render();
    }
    
    
}