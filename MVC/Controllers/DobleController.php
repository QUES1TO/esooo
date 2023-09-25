<?php
namespace Controllers;
use Views\DobleIndexView;

use Controllers\Controller;

class DobleController extends Controller {
    //Metodo index que muestra en una tabla todos los datos de user
    public function index()
    {          
        require_once __DIR__ . '/../Views/DobleIndexView.php';
        $view = new DobleIndexView();
                
        $view->render();
    }
    
    
}