<?php
class consulta {

    // ATRIBUTOS
    private $id_consulta;
    private $datadaconsulta;
    private $id_medio;
    private $id_receita;
    private $id_paciente;

    // MÉTODO CONSTRUTOR
    function __construct($p1,$p2,$p3,$p4,$p5) {

        $this->setId_consulta($p1);
        $this->setDatadaconsulta($p2);
        $this->setId_medio($p3);
        $this->setId_receita($p4);
        $this->setId_paciente($p5);

        return $this;
    }

    // MÉTODOS GETTERS E SETTERS
    
    public function getId_consulta(){
        return $this->id_tipo;
    }

    public function setId_consulta($id_consulta){
        $this->id_consulta = $id_consulta;
    }

    public function getDatadaconsulta(){
        return $this->datadaconsulta;
    }

    public function setDatadaconsulta($datadaconsulta){
        $this->datadaconsulta = $datadaconsulta;
    }

    public function getId_medio(){
        return $this->id_medio;
    }

    public function setId_medio($id_medio){
        $this->id_medio = $id_medio;
    }

    public function getId_receita(){
        return $this->id_receita;
    }

    public function setId_receita($Id_receita){
        $this->id_receita = $id_receita;
    }
    public function getId_paciente(){
        return $this->id_paciente;
    }

    public function setId_paciente($id_paciente){
        $this->id_paciente = $id_paciente;
    }
}
?>
