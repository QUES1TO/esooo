<?php
namespace Controllers;
use Views\CilindradaIndexView;
use Views\CilindradaRegisterView;
use Controllers\Controller;
use Models\Cilindrada;

class CilindradaController extends Controller {
    //select id, nombre from User
    public function index()
    {          
        require_once __DIR__ . '/../Views/CilindradaIndexView.php';
        $view = new CilindradaIndexView();
        $Cilindrada=Cilindrada::select("Cc")->get();        
        $view->render($Cilindrada);
    }
    public function registerForm()
    {
        require_once __DIR__ . '/../Views/CilindradaRegisterView.php';
        $view = new CilindradaRegisterView();        
        $view->render();
    }
    public function create()
    {
        $Cc = $_POST['Cc'];
        
        

        $data = [            
            'Cc'=> $Cc
                      
        ];
        $user = Cilindrada::insert($data);
                    
        $this->redirect("/esooo/MVC/Cilindrada");
    }
    
    
}