<?php
namespace Controllers;
use Views\MotoIndexView;
use Views\MotoRegisterView;
use Controllers\Controller;
use Models\Moto;

class MotoController extends Controller {
    //select id, nombre from User
    public function index()
    {          
        require_once __DIR__ . '/../Views/MotoIndexView.php';
        $view = new MotoIndexView();
        $Moto=Moto::select("Modelo,Precio,Original,Stock,Img")->get();        
        $view->render($Moto);
    }
    public function registerForm()
    {
        require_once __DIR__ . '/../Views/MotoRegisterView.php';
        $view = new MotoRegisterView();        
        $view->render();
    }
    public function create()
    {
        $Modelo = $_POST['Modelo'];
        $Precio = $_POST['Precio'];
        $Original = $_POST['Original'];
        $Stock = $_POST['Stock'];
        $Img = $_POST['Img'];
        $data = [            
            'Modelo'=> $Modelo,
            'Precio'=> $Precio,     
            'Original'=> $Original,
            'Stock'=> $Stock,    
            'Img'=> $Img        
        ];
        $user = Moto::insert($data);
                    
        $this->redirect("/esooo/MVC/Moto");
    }
    
    
}