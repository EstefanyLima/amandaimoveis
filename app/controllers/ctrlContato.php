<?php

use models\Contato;

error_reporting(0); // error_reporting(E_ALL);



$idContato  = $_REQUEST[1];
$nome       = $_REQUEST[2];
$email      = $_REQUEST[3];
$telefone   = $_REQUEST[4];
$mensagem   = $_REQUEST[5];

$action = $_REQUEST[6];

switch ($action) {
    case 'insert':
        if ( isset($nome) && isset($email) && isset($telefone) && isset($mensagem)){
            $contato=  new Contato();
            $contato->populate($idContato, $nome, $email, $telefone, $mensagem);
            $contato->save();
            echo json_encode(array("saved" => true, "message" => "Contato enviado com Sucesso!"));
            
        }else{
            echo json_encode(array("saved" => false, "message" => "Contato não cadastrado!"));
            
        }
    break;
    case 'update':
        if ( isset($nome) && isset($email) && isset($telefone) && isset($mensagem)){
            $contato=  new Contato();
            $contato->populate($idContato, $nome, $email, $telefone, $mensagem);
            $contato->save();
            echo json_encode(array("saved" => true, "message" => "Contato atualizado com Sucesso!"));
            
        }else{
            echo json_encode(array("saved" => false, "message" => "Contato não atualizado!"));
            
        }
    break;
    case 'delete':
        if ( isset($idContato) &&isset($nome) && isset($email) && isset($telefone) && isset($mensagem)){
            $contato=  new Contato();
            $contato->populate($idContato, $nome, $email, $telefone, $mensagem);
            $contato->delete();
            echo json_encode(array("saved" => true, "message" => "Contato excluído com Sucesso!"));
        }else{
            echo json_encode(array("saved" => false, "message" => "Contato não excluido!"));
            
        }
    break;
}





?>