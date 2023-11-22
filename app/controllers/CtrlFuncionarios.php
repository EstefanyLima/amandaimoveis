<?php

use models\Funcionario;

error_reporting(0); // error_reporting(E_ALL);



$id  = $_REQUEST[1];
$nome       = $_REQUEST[2];
$sobrenome     = $_REQUEST[3];
$email   = $_REQUEST[4];
$telefone   = $_REQUEST[5];
$rg   = $_REQUEST[6];
$cpf   = $_REQUEST[7];

$action = $_REQUEST[8];

switch ($action) {
    case 'insert':
        if ( isset($nome) && isset($sobrenome) && isset($email) && isset($telefone) && isset($rg) && isset($cpf)){
            $funcionario=  new Funcionario();
            $funcionario->populate($id, $nome, $sobrenome, $email, $telefone, $rg, $cpf);
            $funcionario->save();
            echo json_encode(array("saved" => true));
            
            //echo json_encode(array("saved" => true, "message" => "Funcionário cadastrado com Sucesso!"));
            
        }else{
            echo json_encode(array("saved" => false));
           // echo json_encode(array("saved" => false, "message" => "Funcionário não cadastrado!"));
            
        }
    break;
    case 'update':
        if ( isset($nome) && isset($sobrenome)  && isset($email) && isset($telefone) && isset($rg) && isset($cpf)){
            $funcionario=  new Funcionario();
            $funcionario->populate($id, $nome, $sobrenome, $email, $telefone, $rg, $cpf);
            $funcionario->save();
            echo json_encode(array("saved" => true, "message" => "Funcionário atualizado com Sucesso!"));
            
        }else{
            echo json_encode(array("saved" => false, "message" => "Funcionário não atualizado!"));
            
        }
    break;
    case 'delete':
        if ( isset($id) && isset($nome) && isset($sobrenome) && isset($email) && isset($telefone) && isset($rg) && isset($cpf)){
            $funcionario=  new Funcionario();
            $funcionario->populate($id, $nome, $sobrenome, $email, $telefone, $rg, $cpf);
            $funcionario->delete();
            echo json_encode(array("saved" => true, "message" => "Funcionário excluído com Sucesso!"));
        }else{
            echo json_encode(array("saved" => false, "message" => "Funcionário não excluido!"));
            
        }
    break;
    
    
}





?>