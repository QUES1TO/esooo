<?php
namespace Controllers;
use Views\MarcaIndexView;
use Views\MarcaRegisterView;
use Controllers\Controller;
use Models\Marca;
class MarcaController extends Controller {
    //select id, nombre from User
    public function index()
    {          
        require_once __DIR__ . '/../Views/MarcaIndexView.php';
        $view = new MarcaIndexView();
        $Marca=Marca::select("nombre")->where('nombre','=','test2')->orWhere('nombre','=','test3')->get();        
        $view->render($Marca);
    }
    public function registerForm()
    {
        require_once __DIR__ . '/../Views/MarcaRegisterView.php';
        $view = new MarcaRegisterView();        
        $view->render();
    }
    public function create()
    {
        
        $nombre = $_POST['Nombre'];
       
        

        $data = [            
            'Nombre'=> $nombre
                   
        ];
        $user = Tipo::insert($data);
                    
        $this->redirect("/esooo/MVC/Marca");
    }
    
    
}