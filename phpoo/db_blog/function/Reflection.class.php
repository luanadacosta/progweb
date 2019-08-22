<?php
class Reflections{
//Metodos de conversao de campos e valores
public function convert($object){
    $fields = array();
    $values = array();
    $reflection = new ReflectionCLass($object);
    $atributos = $reflection->getProperties();
    
    foreach($atributos as $atributo){
        $atributo->setAccessible(true);
        if($atributo->getValue($object)){
            array_push($fields, $atributo->getName());
            array_push($values, $atributo->getValue($object));
        }
    }

    $keyValue = array('fields' => $fields, 'values'=> $values);
    return $keyValue;
}
//Métodos de retorno de valor por tipo
public function get_value_by_type($value){

    $return = "";

    switch (gettype($value)){
        case 'string':
            $return .=" '" . addslashes($value) . "' ";
            break;
        case 'integer':
            $return .= $value;
            break;
        case 'boolean':
            $return .= $value;
            break;
        case 'double':
            $return .= $value;
            break;
        default :
            $return .=" '" . $value . "' ";
            break; 
    }
    return $return;
}
}
?>