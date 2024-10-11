<?php
interface obtenerDetallesEspecificos {
    public function obtenerDetallesEspecificos(): string;
   
}
 
 
 
abstract class Entrada {
    public $id;
    public $fecha_creacion;
    public $tipo;
    public $titulo;
    public $descripcion;
 
    public function __construct($datos = []) {
        foreach ($datos as $key => $value) {
            if (property_exists($this, $key)) {
                $this->$key = $value;
            }
        }
    }
}
//creacion de la clase EntradaUnaColumna
class EntradaUnaColumna extends Entrada{
    public $titulo;
    public $descripcion;
    obtenerDetallesEspecificos(){
        return $titulo;
    }
}
 //creacion de la clase EntradaDosColumnas
class EntradaDosColumnas extends Entrada{
    public $titulo1;
    public $descripcion1 ;
    public $titulo2;
    public $descripcion2 ;
    obtenerDetallesEspecificos(){
        return $titulo1, $titulo2;
    }
}
 //creacion de la clase EntradaTresColumnas
class EntradaTresColumnas extends Entrada{
    public $titulo1;
    public $descripcion1;
    public $titulo2;
    public $descripcion2;
    public $titulo3;
    public $descripcion3;
    obtenerDetallesEspecificos(){
        return $titulo1 ,  $titulo2, $titulo3;
    }
   
}
 
 
 
 
class GestorBlog {
    private $entradas = [];
 
    public function cargarEntradas() {
        if (file_exists('blog.json')) {
            $json = file_get_contents('blog.json');
            $data = json_decode($json, true);
            foreach ($data as $entradaData) {
                $this->entradas[] = new Entrada($entradaData);
            }
        }
    }
   
    foreach($entradas as $entrada ){
        switch ($tipo){
            case "1":
 
                break;
            case "2":
 
                break;
            case "3":
               
                break;
            default:
 
        }
 
    }
 
    public function guardarEntradas() {
        $data = array_map(function($entrada) {
            return get_object_vars($entrada);
        }, $this->entradas);
        file_put_contents('blog.json', json_encode($data, JSON_PRETTY_PRINT));
    }
 
    public function obtenerEntradas() {
        return $this->entradas;
    }
 
//Recibe entrada Nueva de informacion
AgregarEntrada($entrada){
    foreach($entradas  as $entrada){
        $newId = end($this -> $id) + 1;
        return $newId;
    }
}
//Edita la informacion de la entrada solicitada
editarEntrada($entrada){
    foreach($entradas as $entrada){
        $this->entrada[] = new Datos();
    }
}
//Elimina entrada de dato por Id
eliminarEntrada($id){
    $eliminar = array_filter($id,function[$entrada])
    return !$id;
}
//Filtra la informacion por el Id
obtenerEntrada($id){
    $filter = array_filter($id, function[$entrada]);
    return !$id;
 
}
//Mueve la informacion de cada elemento dependiendo de la direccion señalada
moverEntrada($id, $direccion){
    foreach($entradas as $entrada){
        if(=="move_up"){
            $info1 = $this-> id;
            $direccion= array_filter($id) ;
            $info2 = $direccion;
            return $info1,$info2;
        }
        else if(=="move_down"){
            $info2 = $this-> id;
            $direccion= array_filter($id) ;
            $info1 = $direccion;
            return $info1,$info2;
        }  
    }
}
//Guarda informacion dentro del Json.
guardarInfo($entrada){
    $guarda = json_encode($entrada);
}
 
 
}  
 