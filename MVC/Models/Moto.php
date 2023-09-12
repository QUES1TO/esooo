<?php
namespace Models;
use DataBases\Connector;
class Moto extends Model {
         
    public $Modelo;    
    public $Precio;   
    public $Precio_original;    
    public $Stock; 
    public $Img;
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

    public function setModelo($Modelo)
    {
        $this->Modelo = $Modelo;
        $this->data["Modelo"] = $Modelo;
    }
    public function getModelo()
    {
        return $this->Modelo;
    }

    public function setPrecio($Precio)
    {
        $this->Precio = $Precio;
        $this->data["Precio"] = $Precio;
    }
    public function getPrecio()
    {
        return $this->Precio;
    }    

    public function setPrecio_original($Precio_original)
    {
        $this->Precio_original = $Precio_original;
        $this->data["Precio_original"] = $Precio_original;
    }
    public function getPrecio_original()
    {
        return $this->Precio_original;
    }

    public function setStock($Stock)
    {
        $this->Stock = $Stock;
        $this->data["Stock"] = $Stock;
    }
    public function getStock()
    {
        return $this->Stock;
    }    
}
?>