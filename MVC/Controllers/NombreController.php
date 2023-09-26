<?php
namespace Controllers;
use Views\NombreIndexView;
use Views\NombreRegisterView;
use Controllers\Controller;
use Models\Nombre;
class NombreController extends Controller {
    //select id, nombre from User
    public function index()
    {          
        require_once __DIR__ . '/../Views/NombreIndexView.php';
        $view = new MarcaIndexView();
        $Nombre=Nombre::select("nombre")->where('nombre','=','test2')->orWhere('nombre','=','test3')->get();        
        $view->render($Nombre);
    }
    public function registerForm()
    {
        require_once __DIR__ . '/../Views/NombreRegisterView.php';
        $view = new NombreRegisterView();        
        $view->render();
    }
    public function create()
    {
        $nombre = $_POST['Nombre'];

        $data = [
            'Nombre'=> $nombre          
        ];
        $user = Nombre::insert($data);
                    
        $this->redirect("/esooo/MVC/Nombre");
    }
    
}