<?php
namespace Models;
use DataBases\Connector;
class Reporte extends Model {
         
    public $tipo;    
    public $descripcion;    
    public $empleado; 
    public $id;        
    private $data = [];

    public function __construct($data)
    {
        if($data!=null)
        {
            $this->data["id"] = null;
            foreach ($data as $key=>$value) {
                
                eval('$this->set'.$key.'("'.$value.'");');
                            
                $this->data[$key] = $value;
            }
        }
        
    }
    
    public function getData()
    {
        return $this->data;
    }
    public function setId($id)
    {
        $this->id = $id;
        $this->data["id"] = $id;
    }
    public function getId()
    {
        return $this->id;
    }

    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
        $this->data["Tipo"] = $tipo;
    }
    public function getTipo()
    {
        return $this->tipo;
    }

    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;
        $this->data["Descripcion"] = $descripcion;
    }
    public function getDescripcion()
    {
        return $this->descripcion;
    }    
    
    public function setEmpleado($empleado)
    {
        $this->empleado = $empleado;
        $this->data["Empleado"] = $empleado;
    }
    public function getEmpleado()
    {
        return $this->empleado;
    } 

    

    
}
?>