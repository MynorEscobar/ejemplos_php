<?php  
include ('conexion.php');
//require_once "conexion.php"; 
//extends es para heredar
class procesos_productos extends conexion 
{     
    //atributos
    public $codigo;
    public $nombre;
    public $tipo;
    public $precio_prod;
    public $precio_dist;

    //metodo constructor
    public function __construct() 
    { 
        //llamada al metodo construtor de la clase padre (conexion)
        parent::__construct(); 
    } 

    public function buscar() 
    { 
        $result = $this->conexion_db->query('select * from productos'); 
         
        $productos = $result->fetch_all(MYSQLI_ASSOC); 
        return $productos;
        
    } 

    public function insertar($cod, $nom, $tipo, $pu, $pd)
    {
       
       $this->codigo=$cod;
       $this->nombre=$nom;
       $this->tipo=$tipo;
       $this->precioProd=$pu;
       $this->precioDist=$pd;
       

       $Almacenar = $this->conexion_db ->query('insert into productos values('.$this->codigo.',"'. $this->nombre .'","'.$this->tipo.'",'.$this->precioProd.','.$this->precioDist.')');
          
        
    } 

    public function eliminar($cod)
    {
       $this->codigo=$cod;
       $Borrar = $this->conexion_db ->query('delete from productos where id_prod=('.$this->codigo.')');
        
    }   
} 
  ?> 