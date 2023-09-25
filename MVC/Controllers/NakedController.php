<?php
namespace Controllers;
use Views\NakedIndexView;

use Controllers\Controller;

class NakedController extends Controller {
    //Metodo index que muestra en una tabla todos los datos de user
    public function index()
    {          
        require_once __DIR__ . '/../Views/NakedIndexView.php';
        $view = new NakedIndexView();
                
        $view->render();
    }
    
    
}