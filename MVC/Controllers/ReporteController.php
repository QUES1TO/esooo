<?php
namespace Controllers;
use Views\ReporteIndexView;
use Views\ReporteRegisterView;
use Controllers\Controller;
use Models\Reporte;

class ReporteController extends Controller {
public function ajaxResponse()
    {
        $respuesta = [
            'dato1' => 'prueba1',
            'dato2' => 'prueba2'
        ];
        $Reporte=Reporte::select('*')->get();   
        echo json_encode($Reporte);
    }

    //select id, nombre from User
    public function index()
    {          
        require_once __DIR__ . '/../Views/ReporteIndexView.php';
        $view = new ReporteIndexView();
        $Reporte=Reporte::select("*")->get();        
        $view->render($Reporte);
    }

public function show($id)
    {          
        require_once __DIR__ . '/../Views/ReporteIndexView.php';
        $view = new ReporteIndexView();
        $Reporte=Reporte::select('*')->where('id','=',$id)->get();           
        $view->render($Reporte);
    }
    //Metodo editForm que muestra el formulario de edicion de un user
    public function editForm($id)
    {
        require_once __DIR__ . '/../Views/ReporteEditView.php';
        $view = new ReporteEditView();
        $Reporte=Reporte::select('*')->where('id','=',$id)->get();           
        $view->render($Reporte);
    }
    //Metodo edit que mediante POST recibe los datos de editForm y realizar los cambios en base de datos
    public function edit()
    {
        $id = $_POST['Id'];
        $nombre = $_POST['Nombre'];
    
        $Reporte=Reporte::select('*')->where('id','=',$id)->get()[0];           
        $Reporte->setNombre($nombre);
    
        $Reporte->save();
        $this->redirect("/ESOOO/MVC/Reporte",$id);
    }
    //Metodo registerForm que muestra el formulario para crear un nuevo user
    

    public function registerForm()
    {
        require_once __DIR__ . '/../Views/ReporteRegisterView.php';
        $view = new ReporteRegisterView();        
        $view->render();
    }

public function delete($id)
    {
        $Reporte=Reporte::select('*')->where('id','=',$id)->get()[0]; 
        $Reporte->delete();
        echo "test";
    }
    //Metodo create que recibe datos de registerForm y crea el nuevo user en base de datos
  

    public function create()
    {
        $tipo = $_POST['Tipo'];
        $descripcion = $_POST['Descripcion'];
        $empleado = $_POST['Empleado'];
       

        $data = [            
            'Tipo'=> $tipo,
            'Descripcion'=> $descripcion,    
            'Empleado'=> $empleado
               
        ];
        $user = Reporte::insert($data);
                    
        $this->redirect("/esooo/MVC/Reporte");
    }
    
    
}