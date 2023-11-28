<?php


use models\Cliente;
use core\database\Where;

error_reporting(0); // error_reporting(E_ALL);

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}


$Id         = $_REQUEST['Id']??$_REQUEST[1];
$nome       = $_REQUEST['nome']??$_REQUEST[2];
$sobrenome  = $_REQUEST['sobrenome']??$_REQUEST[3];
$email      = $_REQUEST['email']??$_REQUEST[4];
$cpf        = $_REQUEST['cpf']??$_REQUEST[5];
$endereco   = $_REQUEST['endereco']??$_REQUEST[6];
$telefone   = $_REQUEST['telefone']??$_REQUEST[7];
$nacionalidade   = $_REQUEST['nacionalidade']??$_REQUEST[8];
$nascimento  = $_REQUEST['nascimento']??$_REQUEST[9];
$profissao   = $_REQUEST['profissao']??$_REQUEST[10];
$ativo       = $_REQUEST['ativo']??$_REQUEST[11];
$senha       = $_REQUEST['senha']??$_REQUEST[12];
$admin       = $_REQUEST['admin']??$_REQUEST[13];


$action = $_REQUEST['acao']??$_REQUEST[14];

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
    case 'login':
        if (  isset($email) && isset($senha) && !empty($email) && !empty($senha)){
            $cliente =  new Cliente();
            $cliente->setEmail($email);
            $cliente->setSenha($senha);
            
            $where = new Where();
            $where->addCondition('AND', 'ativo', '=', 'S');
            $where->addCondition('AND', 'email', '=', $email );
            $where->addCondition('AND', 'senha', '=', $senha );
            
            $resultSet = $cliente->list($where);
            if ( $resultSet->rowCount() > 0){
                foreach ( $resultSet as $line ) {
                    $_SESSION['idUsuario'] = $line['Id'];
                }
                echo json_encode(array("login" => true, "redirect" => "contato", "message" => "Cliente Autenticado com Sucesso!"), JSON_UNESCAPED_UNICODE);
                // print_r($_SESSION);
            }else{
                unset( $_SESSION['idUsuario'] ) ;
                echo json_encode(array("login" => false, "message" => "Email ou Senha não Cadastrado!"), JSON_UNESCAPED_UNICODE );
                // print_r($_SESSION);
            }         
        }else{
            unset( $_SESSION['idUsuario'] ) ;
            echo json_encode(array("login" => false, "message" => "Email ou Senha não Inseridos!"), JSON_UNESCAPED_UNICODE );
            //print_r($_SESSION);
        }
   break;
}





?>