<?php
namespace Controllers;
use Views\TrabajoIndexView;

use Controllers\Controller;

class TrabajoController extends Controller {
    //Metodo index que muestra en una tabla todos los datos de user
    public function index()
    {          
        require_once __DIR__ . '/../Views/TrabajoIndexView.php';
        $view = new TrabajoIndexView();
                
        $view->render();
    }
    
    
}