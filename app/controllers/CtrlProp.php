<?php


use models\ImovelProp;

// error_reporting(E_ALL);

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}


$idip         = $_REQUEST['idip']??$_REQUEST[1];
$nome       = $_REQUEST['nome']??$_REQUEST[2];
$sobrenome  = $_REQUEST['sobrenome']??$_REQUEST[3];
$email      = $_REQUEST['email']??$_REQUEST[4];
$cpf        = $_REQUEST['cpf']??$_REQUEST[5];
$pretende   = $_REQUEST['pretende']??$_REQUEST[6];
$valorvenda       = $_REQUEST['valorvenda']??$_REQUEST[7];
$valorlocacao       = $_REQUEST['valorlocacao']??$_REQUEST[8];
$tipo       = $_REQUEST['tipo']??$_REQUEST[9];
$finalidade   = $_REQUEST['finalidade']??$_REQUEST[10];
$cep       = $_REQUEST['cep']??$_REQUEST[11];
$cidade       = $_REQUEST['cidade']??$_REQUEST[12];
$estado   = $_REQUEST['estado']??$_REQUEST[13];
$logradouro      = $_REQUEST['logradouro']??$_REQUEST[14];
$bairro       = $_REQUEST['bairro']??$_REQUEST[15];
$maisinformacoes       = $_REQUEST['maisinformacoes']??$_REQUEST[16];
$imagem      = $_REQUEST['imagem']??$_REQUEST[17];
$status_aluguel       = $_REQUEST['status_aluguel']??$_REQUEST[18];
$status_compra    = $_REQUEST['status_compra']??$_REQUEST[19];




$action = $_REQUEST['acao']??$_REQUEST[20];

switch ($action) {
    case 'insert':
        if ( isset($nome) && isset($sobrenome) && isset($email)  && isset($cpf)
        && isset($pretende) && isset($valorvenda) && isset($valorlocacao) 
        && isset($tipo) && isset($finalidade) && isset($cep)     && isset($cidade) && isset($estado) && isset($logradouro)
        && isset($bairro) && isset($maisinformacoes)  && isset($imagem) && isset($status_aluguel) && isset($status_compra)){
            $imovelprop=  new ImovelProp();
            $imovelprop->populate($idip, $nome, $sobrenome,$email, $cpf, $pretende, $valorvenda, $valorlocacao, $tipo,
                $finalidade, $cep, $cidade, $estado, $logradouro, $bairro, $maisinformacoes, $imagem, $status_aluguel, $status_compra);
            $imovelprop->save();
            echo json_encode(array("saved" => true, "message" => "Cliente Cadastrado com Sucesso!"));
           
        }else{
            echo json_encode(array("saved" => false, "message" => "Cliente não cadastrado!"));
            
        }
    break;
    case 'update':
        if (  isset($nome) && isset($sobrenome) && isset($email)  && isset($cpf)
        && isset($pretende) && isset($valorvenda) && isset($valorlocacao)
        && isset($tipo) && isset($finalidade) && isset($cep)     && isset($cidade) && isset($estado) && isset($logradouro)
        && isset($bairro) && isset($maisinformacoes)  && isset($imagem) && isset($status_aluguel) && isset($status_compra)){
            $imovelprop=  new ImovelProp();
            $imovelprop->populate($idip, $nome, $sobrenome,$email, $cpf, $pretende, $valorvenda, $valorlocacao, $tipo,
                $finalidade, $cep, $cidade, $estado, $logradouro, $bairro, $maisinformacoes, $imagem, $status_aluguel, $status_compra);
            $imovelprop->save();
            echo json_encode(array("saved" => true, "message" => "Cliente atualizado com Sucesso!"));
            
        }else{
            echo json_encode(array("saved" => false, "message" => "Cliente não atualizado!"));
        }
    break;
    case 'delete':
        if (  isset($idip)  && isset($nome) && isset($sobrenome) && isset($email)  && isset($cpf)
        && isset($pretende) && isset($valorvenda) && isset($valorlocacao)
        && isset($tipo) && isset($finalidade) && isset($cep)     && isset($cidade) && isset($estado) && isset($logradouro)
        && isset($bairro) && isset($maisinformacoes)  && isset($imagem) && isset($status_aluguel) && isset($status_compra)){
            $imovelprop=  new ImovelProp();
            $imovelprop->populate($idip, $nome, $sobrenome,$email, $cpf, $pretende, $valorvenda, $valorlocacao, $tipo,
                $finalidade, $cep, $cidade, $estado, $logradouro, $bairro, $maisinformacoes, $imagem, $status_aluguel, $status_compra);
            $imovelprop->delete();
            echo json_encode(array("saved" => true, "message" => "Cliente excluído com Sucesso!"));
        }else{
            echo json_encode(array("saved" => false, "message" => "Cliente não excluido!"));
        }
    break;

}





?>