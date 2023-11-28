<?php

use models\Funcionario;
use core\database\Where;

 // error_reporting(E_ALL);
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

$id  = $_REQUEST['idFuncionarios']??[1];
$nome       = $_REQUEST['nome']??[2];
$sobrenome     = $_REQUEST['sobrenome']??[3];
$email   = $_REQUEST['email']??[4];
$telefone   = $_REQUEST['telefone']??[5];
$rg   = $_REQUEST['rg']??[6];
$cpf   = $_REQUEST['cpf']??[7];
$ativo       = $_REQUEST['ativo']??$_REQUEST[8];
$senha       = $_REQUEST['senha']??$_REQUEST[9];
$admin       = $_REQUEST['admin']??$_REQUEST[10];



$action = $_REQUEST['acao']??$_REQUEST[11];

switch ($action) {
    case 'insert':
        if ( isset($nome) && isset($sobrenome) && isset($email) && isset($telefone) && isset($rg) && isset($cpf) && isset($ativo) && isset($senha) && isset($admin)){
            $funcionario=  new Funcionario();
            $funcionario->populate($id, $nome, $sobrenome, $email, $telefone, $rg, $cpf, $ativo, $senha, $admin);
            $funcionario->save();
            echo json_encode(array("saved" => true));
            
            //echo json_encode(array("saved" => true, "message" => "Funcionário cadastrado com Sucesso!"));
            
        }else{
            echo json_encode(array("saved" => false));
           // echo json_encode(array("saved" => false, "message" => "Funcionário não cadastrado!"));
            
        }
    break;
    case 'update':
        if ( isset($nome) && isset($sobrenome)  && isset($email) && isset($telefone) && isset($rg) && isset($cpf) && isset($ativo) && isset($senha) && isset($admin)){
            $funcionario=  new Funcionario();
            $funcionario->populate($id, $nome, $sobrenome, $email, $telefone, $rg, $cpf, $ativo, $senha, $admin);
            $funcionario->save();
            echo json_encode(array("saved" => true, "message" => "Funcionário atualizado com Sucesso!"));
            
        }else{
            echo json_encode(array("saved" => false, "message" => "Funcionário não atualizado!"));
            
        }
    break;
    case 'delete':
        if ( isset($id) && isset($nome) && isset($sobrenome) && isset($email) && isset($telefone) && isset($rg) && isset($cpf)  && isset($ativo) && isset($senha) && isset($admin)){
            $funcionario=  new Funcionario();
            $funcionario->populate($id, $nome, $sobrenome, $email, $telefone, $rg, $cpf,  $ativo, $senha, $admin);
            $funcionario->delete();
            echo json_encode(array("saved" => true, "message" => "Funcionário excluído com Sucesso!"));
        }else{
            echo json_encode(array("saved" => false, "message" => "Funcionário não excluido!"));
            
        }
    break;
  
    case 'login':
        if (  isset($email) && isset($senha) && !empty($email) && !empty($senha)){
            $funcionario =  new Funcionario();
            $funcionario->setEmail($email);
            $funcionario->setSenha($senha);
            
            $where = new Where();
            $where->addCondition('AND', 'ativo', '=', 'S');
            $where->addCondition('AND', 'email', '=', $email );
            $where->addCondition('AND', 'senha', '=', $senha );
            $where->addCondition('AND', 'admin', '=', 'S');
            $resultSet = $funcionario->list($where);
            if ( $resultSet->rowCount() > 0){
                foreach ( $resultSet as $line ) {
                    $_SESSION['idAdmin'] = $line['idFuncionarios'];
                }
                echo json_encode(array("login" => true, "redirect" => "gerenciamento", "message" => "Funcionário Autenticado com Sucesso!"), JSON_UNESCAPED_UNICODE);
                // print_r($_SESSION);
            }else{
                unset( $_SESSION['idAdmin'] ) ;
                echo json_encode(array("login" => false, "message" => "Email ou Senha não Cadastrado!"), JSON_UNESCAPED_UNICODE );
                // print_r($_SESSION);
            }
        }else{
            unset( $_SESSION['idAdmin'] ) ;
            echo json_encode(array("login" => false, "message" => "Email ou Senha não Inseridos!"), JSON_UNESCAPED_UNICODE );
            //print_r($_SESSION);
        }
        break;
    case 'logout':
        // Chama a função de logout
        logout();
        break;
        
    
    
}





?>