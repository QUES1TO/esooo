<?php
namespace Controllers;
use Views\InicioIndexView;
use Views\inicioRegisterView;
use Controllers\Controller;
use Models\Inicio;

class InicioController extends Controller {
    //select id, nombre from User
    public function index()
    {          
        require_once __DIR__ . '/../Views/InicioIndexView.php';
        $view = new InicioIndexView();
        $Inicio=Inicio::select("nombre,descripcion")->where('nombre','=','test2')->orWhere('nombre','=','test3')->get();        
        $view->render($Inicio);
    }
    public function registerForm()
    {
        require_once __DIR__ . '/../Views/InicioRegisterView.php';
        $view = new InicioRegisterView();        
        $view->render();
    }
    public function create()
    {
      
        
        $user ;
      
                    
        $this->redirect("/esooo/MVC/Inicio");
    }
    
    
}