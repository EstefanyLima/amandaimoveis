<?php

use models\Transacao;

error_reporting(0); // error_reporting(E_ALL);

$idtransacao = $_REQUEST['Id']??$_REQUEST[1];
$idimovel      = $_REQUEST['idimovel']??[2];
$cliente_id   = $_REQUEST['cliente_id']??[3];
$tipo_transacao  = $_REQUEST['tipo_transacao']??[4];
$data_transacao   = $_REQUEST['data_transacao']??[5];
$valor_transacao   = $_REQUEST['valor_transacao']??[6];




$action = $_REQUEST['acao']??$_REQUEST[7];

switch ($action) {
    case 'insert':
        if (  isset($idimovel) && isset($cliente_id) && isset($tipo_transacao) && isset ($data_transacao) && isset ($valor_transacao)){
            $transacao =  new Transacao();
            $transacao->populate($idtransacao,$idimovel, $cliente_id, $tipo_transacao, $data_transacao, $valor_transacao);
            $transacao->save();
            echo json_encode(array("saved" => true));
            
            //echo json_encode(array("saved" => true, "message" => "Transação cadastrada com Sucesso!"));
            
        }else{
            echo json_encode(array("saved" => false));
            // echo json_encode(array("saved" => false, "message" => "Transação não cadastrada!"));
        }
    break;
    case 'update':
        if (  isset($idimovel) && isset($cliente_id) && isset($tipo_transacao) && isset ($data_transacao) && isset ($valor_transacao)){
            $transacao=  new Transacao();
            $transacao->populate($idtransacao,$idimovel, $cliente_id, $tipo_transacao, $data_transacao, $valor_transacao);
            $transacao->save();
            echo json_encode(array("saved" => true, "message" => "Transação atualizada com Sucesso!"));
        }else{
            echo json_encode(array("saved" => false, "message" => "Transação não atualizada!"));
        }
    break;
    case 'delete':
        if ( isset($idtransacao) && isset($idimovel) && isset($cliente_id) && isset($tipo_transacao) && isset ($data_transacao) && isset ($valor_transacao)){
            $transacao =  new Transacao();
            $transacao->populate($idtransacao,$idimovel, $cliente_id, $tipo_transacao, $data_transacao, $valor_transacao);
            $transacao->delete();
            echo json_encode(array("saved" => true, "message" => "Transação excluída com Sucesso!"));
            
        }else{
            echo json_encode(array("saved" => false, "message" => "Transação não excluida!"));
        }
    break;
}





?>