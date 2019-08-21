<?php
//Incluindo as classes controladoras
require_once("../../controller/Paciente.controller.class.php");
require_once("../../model/Paciente.class.php");

//Criando as novas instancias das classes
$controller = new PacienteController;
$paciente = new Paciente;

if(isset($_POST['submit'])){

    $paciente->setId_paciente($_POST['p0']);
    $paciente->setNome($_POST['p1']);
    $paciente->setTelefone($_POST['p2']);
    $paciente->setCelular($_POST['p3']);
    $paciente->setEmail($_POST['p4']);
    $paciente->setConvenio($_POST['p5']);

    if($paciente->getId_paciente() > 0){
        $controller->update($paciente, 'id_paciente');
        echo "Atualização realizada com sucesso!";
    }else{
        $controller->save($paciente);
        echo "Cadastro realizado com sucesso!";
    }    
}

if(isset($_GET['paciente'])){
    $paciente = $controller->loadObject($_GET['paciente'], 'id_paciente');
}
?>

<form method="post">

    <input type="hidden" name="p0" value="<?php echo ($paciente->getId_paciente() > 0 ) ? $paciente->getId_paciente() : ''; ?>">
    <label for="p1">Nome</label>
    <input type="text" name="p1"placeholder="Informe o nome" value="<?php echo ($paciente->getId_paciente() > 0 ) ? $medico->getNome() : ''; ?>"><br>
    
    <label for="p2">Telefone</label>
    <input type="text" name="p2"placeholder="Informe o telefone" value="<?php echo ($paciente->getId_paciente() > 0 ) ? $medico->getTelefone() : ''; ?>"><br>

    <label for="p3">E-mail</label>
    <input type="text" name="p3"placeholder="Informe o e-mail" value="<?php echo ($paciente->getId_paciente() > 0 ) ? $medico->getEmail() : ''; ?>"><br>
    
    <label for="p4">Celular</label>
    <input type="text" name="p4"placeholder="Informe o celular" value="<?php echo ($paciente->getId_paciente() > 0 ) ? $medico->getCelular() : ''; ?>"><br>
    
    <label for="p5">Convênio</label>
    <input type="text" name="p5"placeholder="Informe o convênio" value="<?php echo ($paciente->getId_paciente() > 0 ) ? $medico->getConvenio() : ''; ?>"><br>
    
    <input type="submit" name="submit" value="<?php echo ($paciente->getId_paciente() > 0 ) ? 'Salvar': 'Cadastrar'; ?>"> 


</form>