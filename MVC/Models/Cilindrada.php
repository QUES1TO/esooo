<?php
namespace Models;
use DataBases\Connector;
class Cilindrada extends Model {
         
    public $Cc;     
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
    public function setCc($Cc)
    {
        $this->Cc = $Cc;
        $this->data["Cc"] = $Cc;
    }
    public function getCc()
    {
        return $this->Cc;
    }
   
}
?>