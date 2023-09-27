<?php
namespace Models;
use DataBases\Connector;
class Tipo extends Model {
         
    public $nombre;    
    public $descripcion;    
    public $precio; 
    public $modelo; 
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

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
        $this->data["Nombre"] = $nombre;
    }
    public function getNombre()
    {
        return $this->nombre;
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
    
    public function setPrecio($precio)
    {
        $this->precio = $precio;
        $this->data["Precio"] = $precio;
    }
    public function getPrecio()
    {
        return $this->precio;
    } 

    public function setModelo($modelo)
    {
        $this->modelo = $modelo;
        $this->data["Modelo"] = $modelo;
    }
    public function getModelo()
    {
        return $this->modelo;
    } 

    public function setStock($stock)
    {
        $this->stock = $stock;
        $this->data["Stock"] = $stock;
    }
    public function getStock()
    {
        return $this->stock;
    } 

    public function setCilindrada($cilindrada)
    {
        $this->cilindrada = $cilindrada;
        $this->data["Cilindrada"] = $cilindrada;
    }
    public function getCilindrada()
    {
        return $this->cilindrada;
    } 
}
?>