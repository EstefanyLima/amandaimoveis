<?php

use models\Cliente;

error_reporting(0); // error_reporting(E_ALL);



$Id  = $_REQUEST[1];
$nome       = $_REQUEST[2];
$sobrenome      = $_REQUEST[3];
$email      = $_REQUEST[4];
$cpf  = $_REQUEST[5];
$endereco       = $_REQUEST[6];
$telefone      = $_REQUEST[7];
$nacionalidade   = $_REQUEST[8];
$nascimento  = $_REQUEST[9];
$profissao       = $_REQUEST[10];
$ativo       = $_REQUEST[11];
$senha      = $_REQUEST[12];
$admin       = $_REQUEST[13];


$action = $_REQUEST[14];

switch ($action) {
    case 'insert':
        if ( isset($nome) && isset($sobrenome) && isset($email)  && isset($cpf)
        && isset($endereco) && isset($telefone) && isset($nacionalidade) && isset($nascimento) && isset($profissao) && isset($ativo) && isset($senha) && isset($admin)){
            $cliente=  new Cliente();
            $cliente->populate($Id, $nome, $sobrenome,$email, $cpf, $endereco, $telefone, $nacionalidade, $nascimento, $profissao, $ativo, $senha, $admin);
            $cliente->save();
            echo json_encode(array("saved" => true, "message" => "Cliente Cadastrado com Sucesso!"));
           
        }else{
            echo json_encode(array("saved" => false, "message" => "Cliente não cadastrado!"));
            
        }
    break;
    case 'update':
        if ( isset($nome) && isset($sobrenome) && isset($email)  && isset($cpf)
        && isset($endereco) && isset($telefone) && isset($nacionalidade) && isset($nascimento) && isset($profissao) && isset($ativo) && isset($senha) && isset($admin)){
            $cliente=  new Cliente();
            $cliente->populate($Id, $nome, $sobrenome,$email, $cpf, $endereco, $telefone, $nacionalidade, $nascimento, $profissao, $ativo, $senha, $admin);
            $cliente->save();
            echo json_encode(array("saved" => true, "message" => "Cliente atualizado com Sucesso!"));
            
        }else{
            echo json_encode(array("saved" => false, "message" => "Cliente não atualizado!"));
        }
    break;
    case 'delete':
        if (  isset($Id) && isset($nome) && isset($sobrenome) && isset($email) && isset($cpf)
        && isset($endereco) && isset($telefone) && isset($nacionalidade) && isset($nascimento) && isset($profissao) && isset($ativo) && isset($senha) && isset($admin)){
            $cliente =  new Cliente();
            $cliente->populate($Id, $nome, $sobrenome,$email, $cpf, $endereco, $telefone, $nacionalidade, $nascimento, $profissao, $ativo, $senha, $admin);
            $cliente->delete();
            echo json_encode(array("saved" => true, "message" => "Cliente excluído com Sucesso!"));
        }else{
            echo json_encode(array("saved" => false, "message" => "Cliente não excluido!"));
        }
    break;
}





?>