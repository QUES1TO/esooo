<?php
namespace Controllers;
use Views\TipoIndexView;
use Views\TipoRegisterView;
use Controllers\Controller;
use Models\Tipo;

class TipoController extends Controller {
public function ajaxResponse()
    {
        $respuesta = [
            'dato1' => 'prueba1',
            'dato2' => 'prueba2'
        ];
        $Tipo=Tipo::select('*')->get();   
        echo json_encode($Tipo);
    }

    //select id, nombre from User
    public function index()
    {          
        require_once __DIR__ . '/../Views/TipoIndexView.php';
        $view = new TipoIndexView();
        $Tipo=Tipo::select("nombre,descripcion")->get();        
        $view->render($Tipo);
    }

public function show($id)
    {          
        require_once __DIR__ . '/../Views/TipoIndexView.php';
        $view = new TipoIndexView();
        $Tipo=Tipo::select('*')->where('id','=',$id)->get();           
        $view->render($Tipo);
    }
    //Metodo editForm que muestra el formulario de edicion de un user
    public function editForm($id)
    {
        require_once __DIR__ . '/../Views/TipoEditView.php';
        $view = new TipoEditView();
        $Tipo=Tipo::select('*')->where('id','=',$id)->get();           
        $view->render($Tipo);
    }
    //Metodo edit que mediante POST recibe los datos de editForm y realizar los cambios en base de datos
    public function edit()
    {
        $id = $_POST['Id'];
        $nombre = $_POST['Nombre'];
    
        $Tipo=Tipo::select('*')->where('id','=',$id)->get()[0];           
        $Tipo->setNombre($nombre);
    
        $Tipo->save();
        $this->redirect("/ESOOO/MVC/Tipo",$id);
    }
    //Metodo registerForm que muestra el formulario para crear un nuevo user
    

    public function registerForm()
    {
        require_once __DIR__ . '/../Views/TipoRegisterView.php';
        $view = new TipoRegisterView();        
        $view->render();
    }

public function delete($id)
    {
        $Tipo=Tipo::select('*')->where('id','=',$id)->get()[0]; 
        $Tipo->delete();
        echo "test";
    }
    //Metodo create que recibe datos de registerForm y crea el nuevo user en base de datos
  

    public function create()
    {
        $nombre = $_POST['Nombre'];
        $apellido = $_POST['Descripcion'];
        

        $data = [            
            'Nombre'=> $nombre,
            'Descripcion'=> $apellido            
        ];
        $user = Tipo::insert($data);
                    
        $this->redirect("/esooo/MVC/Tipo");
    }
    
    
}