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
        $Moto=Moto::select("Modelo,Precio,Precio_original,Stock,Img")->where('Modelo','=','test2')->orWhere('Modelo','=','test3')->get();        
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
        $Precio_original = $_POST['Precio_original'];
        $Stock = $_POST['Stock'];
        $Img = $_POST['Img'];
        $data = [            
            'Modelo'=> $Modelo,
            'Precio'=> $Precio,     
            'Precio_original'=> $Precio_original,
            'Stock'=> $Stock,    
            'Img'=> $Img        
        ];
        $user = Moto::insert($data);
                    
        $this->redirect("/esooo/MVC/Moto");
    }
    
    
}