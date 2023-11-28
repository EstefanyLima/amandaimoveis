<?php

namespace models;

use core\database\DBQuery;

class ImovelProp {
    
    private $idip;
    private $nome;
    private $sobrenome;
    private $email;
    private $cpf;
    private $pretende;
    private $valorvenda;
    private $valorlocacao;
    private $tipo;
    private $finalidade;
    private $cep;
    private $cidade;
    private $estado;
    private $logradouro;
    private $bairro;
    private $maisinformacoes;
    private $imagem;
    private $status_aluguel;
    private $status_compra;
    
    
 
    private $dbquery;
    
    function __construct(){
        $tableName  = "imovel_proprietario";
        $fieldsName = "idip, nome, sobrenome, email,cpf, pretende, valorvenda, valorlocacao, tipo, finalidade,cep, cidade, estado, logradouro
bairro, maisinformacoes, imagem, status_aluguel, status_compra
";
        $primaryKeys  = "idip";
        $this->dbquery = new DBQuery($tableName, $fieldsName, $primaryKeys);
    }
    
    public function toArray(){
        return array(
            $this->getIdip(),
            $this->getNome(),
            $this->getSobrenome(),
            $this->getEmail(),
            $this->getCpf(),
            $this->getPretende(),
            $this->getValorvenda(),
            $this->getValorlocacao(),
            $this->getTipo(),
            $this->getFinalidade(),
            $this->getCep(),
            $this->getCidade(),
            $this->getEstado(),
            $this->getLogradouro(),
            $this->getBairro(),
            $this->getMaisinformacoes(),
            $this->getImagem(),
            $this->getStatus_aluguel(),
            $this->getStatus_compra()

        );
    }
    
    public function toString(){
        return("\n\t\t\t\t". implode(", ",$this->toArray()));
    }
    
  
    
    function listAll(){
        return( $this->dbquery->select());
        
    }
    public function save() {
        if($this->getIdip() == 0){
            return( $this->dbquery->insert($this->toArray()));
        }else{
            return( $this->dbquery->update($this->toArray()));
        }
    }
    
    public function list($where) {
        if ( $where == ""){
            $rSet = $this->dbquery->select();
        }else{
            $rSet = $this->dbquery->selectFiltered($where);
        }
        return( $rSet );
    }
    
    
    public function listImovelprop($where = null) : array {
        $imovelprop = array();
        $rSet = null;
        if ( $where == null){
            $rSet = $this->dbquery->select();
        }else{
            $rSet = $this->dbquery->selectFiltered($where);
        }
        
        if ($rSet) {
            foreach ($rSet as $linha) {
                $idip     = $linha['idip'];
                $nome           = $linha['nome'];
                $sobrenome          = $linha['sobrenome'];
                $email        = $linha['email'];
                $cpf      = $linha['cpf'];
                $pretende        = $linha['pretende'];
                $valorvenda    = $linha['valorvenda'];
                $valorlocacao          = $linha['valorlocacao'];
                $tipo          = $linha['tipo'];
                $finalidade         = $linha['finalidade'];
                $cep       = $linha['cep'];
                $cidade         = $linha['cidade'];
                $estado     = $linha['estado'];
                $logradouro           = $linha['logradouro'];
                $bairro         = $linha['bairro'];
                $maisinformacoes        = $linha['maisinformacoes'];
                $imagem       = $linha['imagem'];
                $status_aluguel         = $linha['status_aluguel'];
                $status_compra      = $linha['status_compra'];

                $imovelprop[] = new ImovelProp($idip, $nome, $sobrenome,$email, $cpf, $pretende, $valorvenda, $valorlocacao, $tipo,
                    $finalidade, $cep, $cidade, $estado, $logradouro, $bairro, $maisinformacoes, $imagem, $status_aluguel, $status_compra);                }
        } else {
            $imovelprop[] = array();
            echo  "{'msg':'Nenhum Imóvel encontrada.\n'}";
        }
        return( $imovelprop );
    }
    
    
    public function delete() {
        if($this->getIdip() != 0){
            return( $this->dbquery->delete($this->toArray()));
        }
    }
    
    function populate($idip, $nome, $sobrenome,$email, $cpf, $pretende, $valorvenda, $valorlocacao, $tipo,
        $finalidade, $cep, $cidade, $estado, $logradouro, $bairro, $maisinformacoes, $imagem, $status_aluguel, $status_compra){
        
        $this->setIdip($idip);
        $this->setNome($nome);
        $this->setSobrenome($sobrenome);
        $this->setEmail($email);
        $this->setCpf( $cpf);
        $this->setPretende($pretende);
        $this->setValorvenda($valorvenda);
        $this->setValorlocacao($valorlocacao);
        $this->setTipo($tipo);
        $this->setFinalidade($finalidade);
        $this->setCep( $cep);
        $this->setCidade($cidade);
        $this->setEstado($estado);
        $this->setLogradouro($logradouro);
        $this->setBairro($bairro);
        $this->setMaisinformacoes($maisinformacoes);
        $this->setImagem( $imagem);
        $this->setStatus_aluguel($status_aluguel);
        $this->setStatus_compra( $status_compra);

    }
    
    
    public function getIdip() {
        return $this->idip;
    }
    
    public function getNome() {
        return $this->nome;
    }
    
    public function getSobrenome() {
        return $this->sobrenome;
    }
    
    public function getEmail() {
        return $this->email;
    }
    
    public function getCpf() {
        return $this->cpf;
    }
    
    public function getPretende() {
        return $this->pretende;
    }
    
    public function getValorvenda() {
        return $this->valorvenda;
    }
    
    public function getValorlocacao() {
        return $this->valorlocacao;
    }
    
    public function getTipo() {
        return $this->tipo;
    }
    
    public function getFinalidade() {
        return $this->finalidade;
    }
    
    public function getCep() {
        return $this->cep;
    }
    
    public function getCidade() {
        return $this->cidade;
    }
    
    public function getEstado() {
        return $this->estado;
    }
    
    public function getLogradouro() {
        return $this->logradouro;
    }
    
    public function getBairro() {
        return $this->bairro;
    }
    
    public function getMaisinformacoes() {
        return $this->maisinformacoes;
    }
    
    public function getImagem() {
        return $this->imagem;
    }
    
    public function getStatusAluguel() {
        return $this->status_aluguel;
    }
    
    public function getStatusCompra() {
        return $this->status_compra;
    }
    
    public function setIdip($idip) {
        $this->idip = $idip;
    }
    
    public function setNome($nome) {
        $this->nome = $nome;
    }
    
    public function setSobrenome($sobrenome) {
        $this->sobrenome = $sobrenome;
    }
    
    public function setEmail($email) {
        $this->email = $email;
    }
    
    public function setCpf($cpf) {
        $this->cpf = $cpf;
    }
    
    public function setPretende($pretende) {
        $this->pretende = $pretende;
    }
    
    public function setValorvenda($valorvenda) {
        $this->valorvenda = $valorvenda;
    }
    
    public function setValorlocacao($valorlocacao) {
        $this->valorlocacao = $valorlocacao;
    }
    
    public function setTipo($tipo) {
        $this->tipo = $tipo;
    }
    
    public function setFinalidade($finalidade) {
        $this->finalidade = $finalidade;
    }
    
    public function setCep($cep) {
        $this->cep = $cep;
    }
    
    public function setCidade($cidade) {
        $this->cidade = $cidade;
    }
    
    public function setEstado($estado) {
        $this->esrado = $estado;
    }
    
    public function setLogradouro($logradouro) {
        $this->logradouro = $logradouro;
    }
    
    public function setBairro($bairro) {
        $this->bairro = $bairro;
    }
    
    public function setMaisinformacoes($maisinformacoes) {
        $this->maisinformacoes = $maisinformacoes;
    }
    
    public function setImagem($imagem) {
        $this->imagem = $imagem;
    }
    
    public function setStatusAluguel($status_aluguel) {
        $this->status_aluguel = $status_aluguel;
    }
    
    public function setStatusCompra($status_compra) {
        $this->status_compra = $status_compra;
    }
}

    ?>