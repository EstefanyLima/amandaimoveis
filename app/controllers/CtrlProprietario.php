<?php

use models\Proprietario;


error_reporting(0); // error_reporting(E_ALL);



$idproprietario  = $_REQUEST[1];
$nome       = $_REQUEST[2];
$sobrenome      = $_REQUEST[3];
$email      = $_REQUEST[4];
$cpf  = $_REQUEST[5];
$endereco       = $_REQUEST[6];
$telefone      = $_REQUEST[7];
$nacionalidade   = $_REQUEST[8];
$nascimento  = $_REQUEST[9];
$ativo       = $_REQUEST[10];
$senha      = $_REQUEST[11];
$admin       = $_REQUEST[12];



$action = $_REQUEST[13];

switch ($action) {
    case 'insert':
        if ( isset($nome) && isset($sobrenome) && isset($email)  && isset($cpf)
        && isset($endereco) && isset($telefone) && isset($nacionalidade) && isset($nascimento) && isset($ativo) && isset($senha) && isset($admin)){
            $proprietario=  new Proprietario();
            $proprietario->populate($idproprietario, $nome, $sobrenome,$email, $cpf, $endereco, $telefone, $nacionalidade, $nascimento, $ativo, $senha, $admin);
            $proprietario->save();
            echo json_encode(array("saved" => true));
            
            //echo json_encode(array("saved" => true, "message" => "Proprietátio cadastrado com Sucesso!"));
            
           
        }else{
            echo json_encode(array("saved" => false));
            // echo json_encode(array("saved" => false, "message" => "Funcionário não cadastrado!"));
            
        }
    break;
    case 'update':
        if ( isset($nome) && isset($sobrenome) && isset($email)  && isset($cpf)
        && isset($endereco) && isset($telefone) && isset($nacionalidade) && isset($nascimento) && isset($ativo) && isset($senha) && isset($admin)){
            $proprietario=  new Proprietario();
            $proprietario->populate($idproprietario, $nome, $sobrenome,$email,  $cpf, $endereco, $telefone, $nacionalidade, $nascimento, $ativo, $senha, $admin);
            $proprietario->save();
            echo json_encode(array("saved" => true, "message" => "Proprietário atualizado com Sucesso!"));
            
        }else{
            echo json_encode(array("saved" => false, "message" => "Proprietário não atualizado!"));
        }
    break;
    case 'delete':
        if (  isset($idproprietario) && isset($nome) && isset($sobrenome) && isset($email)  && isset($cpf)
        && isset($endereco) && isset($telefone) && isset($nacionalidade) && isset($nascimento) && isset($ativo) && isset($senha) && isset($admin)){
            $proprietario =  new Proprietario();
            $proprietario->populate($idproprietario, $nome, $sobrenome,$email, $cpf, $endereco, $telefone, $nacionalidade, $nascimento, $ativo, $senha, $admin);
            $proprietario->delete();
            echo json_encode(array("saved" => true, "message" => "Proprietário excluído com Sucesso!"));
        }else{
            echo json_encode(array("saved" => false, "message" => "Proprietário não excluido!"));
            
        }
    break;
}


