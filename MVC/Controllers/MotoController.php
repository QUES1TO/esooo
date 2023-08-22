<?php
namespace Controllers;
use Views\MotoView;

use Controllers\Controller;

class MotoController extends Controller {
    //Metodo index que muestra en una tabla todos los datos de user
    public function index()
    {          
        require_once __DIR__ . '/../Views/MotoView.php';
        $view = new MotoView();
               
        $view->render($user);
    }
    
    
}