<?php
namespace Controllers;
use Views\ProductosIndexView;

use Controllers\Controller;

class ProductosController extends Controller {
    //Metodo index que muestra en una tabla todos los datos de user
    public function index()
    {          
        require_once __DIR__ . '/../Views/ProductosIndexView.php';
        $view = new ProductosIndexView();
                
        $view->render();
    }
    
    
}