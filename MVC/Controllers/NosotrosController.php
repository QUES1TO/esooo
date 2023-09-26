<?php
namespace Controllers;
use Views\NosotrosIndexView;

use Controllers\Controller;

class NosotrosController extends Controller {
    //Metodo index que muestra en una tabla todos los datos de user
    public function index()
    {          
        require_once __DIR__ . '/../Views/NosotrosIndexView.php';
        $view = new NosotrosIndexView();
                
        $view->render();
    }
    
    
}