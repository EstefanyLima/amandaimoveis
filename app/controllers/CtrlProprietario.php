<?php

use models\Proprietario;
use core\database\Where;


error_reporting(0); // error_reporting(E_ALL);



$idproprietario  = $_REQUEST['idProprietario']??[1];
$nome       = $_REQUEST['nome']??$_REQUEST[2];
$sobrenome  = $_REQUEST['sobrenome']??$_REQUEST[3];
$email      = $_REQUEST['email']??$_REQUEST[4];
$cpf        = $_REQUEST['cpf']??$_REQUEST[5];
$endereco   = $_REQUEST['endereco']??$_REQUEST[6];
$telefone   = $_REQUEST['telefone']??$_REQUEST[7];
$nacionalidade   = $_REQUEST['nacionalidade']??$_REQUEST[8];
$nascimento  = $_REQUEST['nascimento']??$_REQUEST[9];
$ativo       = $_REQUEST['ativo']??$_REQUEST[10];
$senha       = $_REQUEST['senha']??$_REQUEST[11];
$admin       = $_REQUEST['admin']??$_REQUEST[12];

$action = $_REQUEST['acao']??$_REQUEST[13];


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
        && isset($endereco) && isset($telefone) && isset($nacionalidade) && isset($nascimento)  && isset($ativo) && isset($senha) && isset($admin)){
            $proprietario=  new Proprietario();
            $proprietario->populate($idproprietario, $nome, $sobrenome,$email, $cpf, $endereco, $telefone, $nacionalidade, $nascimento, $ativo, $senha, $admin);
            $proprietario->save();
            echo json_encode(array("saved" => true, "message" => "Cliente atualizado com Sucesso!"));
            
        }else{
            echo json_encode(array("saved" => false, "message" => "Cliente não atualizado!"));
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
    case 'login':
        if (  isset($email) && isset($senha) && !empty($email) && !empty($senha)){
            $proprietario =  new Proprietario();
            $proprietario->setEmail($email);
            $proprietario->setSenha($senha);
            
            $where = new Where();
            $where->addCondition("AND", 'email', '=', $email);
            $where->addCondition("AND", 'senha', '=', $senha);
            $resultSet = $proprietario->list($where);
            if ( $resultSet->rowCount() > 0){
                foreach ( $resultSet as $line ) {
                    $_SESSION['idUsuarioProp'] = $line['idproprietario'];
                }
                echo json_encode(array("login" => true, "redirect" => "AreaProprietario", "message" => "Proprietario Autenticado com Sucesso!"), JSON_UNESCAPED_UNICODE);
                // print_r($_SESSION);
            }else{
                unset( $_SESSION['idUsuarioProp'] ) ;
                echo json_encode(array("login" => false, "message" => "Email ou Senha não Cadastrado!"), JSON_UNESCAPED_UNICODE );
                // print_r($_SESSION);
            }
        }else{
            unset( $_SESSION['idUsuarioProp'] ) ;
            echo json_encode(array("login" => false, "message" => "Email ou Senha não Inseridos!"), JSON_UNESCAPED_UNICODE );
            //print_r($_SESSION);
        }
    break;
}


