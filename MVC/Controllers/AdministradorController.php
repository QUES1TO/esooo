<?php
namespace Controllers;
use Views\AdministradorIndexView;

use Controllers\Controller;

class AdministradorController extends Controller {
    //Metodo index que muestra en una tabla todos los datos de user
    public function index()
    {          
        require_once __DIR__ . '/../Views/AdministradorIndexView.php';
        $view = new AdministradorIndexView();
                
        $view->render();
    }
    public function adminLogin()
    {          
        require_once __DIR__ . '/../Views/AdministradorIndexView.php';
        $view = new AdministradorIndexView();
                
        
        $this->redirect("/esooo/MVC/inicio/register");
    }
    
    
}