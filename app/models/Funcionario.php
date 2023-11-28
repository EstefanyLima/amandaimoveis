<?php

namespace models;


use core\database\DBQuery;
use core\database\Where;


class Funcionario {
    
    private $id;
    private $nome;
    private $sobrenome;
    private $email;
    private $telefone;
    private $rg;
    private $cpf;
    private $ativo;
    private $senha;
    private $admin;
    
    private $dbquery;
    
    function __construct(){
        $tableName  = "funcionarios";
        $fieldsName = "id,nome,sobrenome, email,telefone, rg, cpf, ativo, senha, admin";
        $primaryKeys  = "id";
        $this->dbquery = new DBQuery($tableName, $fieldsName, $primaryKeys);
    }
    
    public function toArray(){
        return array(
            $this->getIdFuncionarios(),
            $this->getNome(),
            $this->getSobrenome(),
            $this->getEmail(),
            $this->getTelefone(),
            $this->getRg(),
            $this->getCpf(), 
            $this->getAtivo(),
            $this->getSenha(),
            $this->getAdmin()
        );
    }
    
    public function toString(){
        return("\n\t\t\t\t". implode(", ",$this->toArray()));
    }
    
  
    
    function listAll(){
        return( $this->dbquery->select());
        
    }
    

    function login( $email, $senha ){
        
        $where = new Where();
        $where->addCondition('AND', 'ativo', '=', 'S');
        $where->addCondition('AND', 'email', '=', $email );
        $where->addCondition('AND', 'senha', '=', $senha );
        $where->addCondition('AND', 'admin', '=', 'S');
        
        //$where->addCondition('ANDz', 'admin', '=', 'S');
        $resultSet = $this->dbquery->selectFiltered($where);
        
        if ( $resultSet->rowCount() > 0){
            \session_start();
            foreach ( $resultSet as $row ){
                $_SESSION["idAdmin"] == $row['id'];
            }
            
            return( true );
        }else{
            return( false );
        }
        return( false );
    }
    
    

    public function save() {
        if($this->getIdFuncionarios() == 0){
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
    
    
    public function listFuncionarios($where = null) : array {
        $funcionario = array();
        $rSet = null;
        if ( $where == null){
            $rSet = $this->dbquery->select();
        }else{
            $rSet = $this->dbquery->selectFiltered($where);
        }
        
        if ($rSet) {
            foreach ($rSet as $linha) {
                $id      = $linha['id'];
                $nome           = $linha['nome'];
                $sobrenome           = $linha['sobrenome'];
                $email           = $linha['email'];
                $telefone        = $linha['telefone'];
                $rg           = $linha['rg'];
                $cpf        = $linha['cpf'];
                $ativo     = $linha['ativo'];
                $senha     = $linha['senha'];
               
                $admin     = $linha['admin'];

                $funcionario[] = new Funcionario($id, $nome, $sobrenome,$email, $telefone, $rg, $cpf, $ativo, $senha, $admin  );                }
        } else {
            $funcionario[] = array();
            echo  "{'msg':'Nenhum funcionario encontrado.\n'}";
        }
        return( $funcionario );
    }
    
    
    public function delete() {
        if($this->getIdFuncionarios() != 0){
            return( $this->dbquery->delete($this->toArray()));
        }
    }
    
    function populate( $id, $nome, $sobrenome,$email, $telefone, $rg, $cpf, $ativo, $senha, $admin  ) {
        
        
        $this->setIdFuncionarios( $id );
        $this->setNome( $nome );
        $this->setSobrenome( $sobrenome );
        $this->setEmail( $email);
        $this->setTelefone( $telefone );
        $this->setRg( $rg);
        $this->setCpf( $cpf);
        $this->setAtivo( $ativo );
        $this->setSenha( $senha );
        $this->setAdmin( $admin );
    }
    
    
    // GET E SET //
    public function setIdFuncionarios($id) {
        $this->id = $id;
    }
    
    public function getIdFuncionarios() {
        return $this->id;
    }
    
    public function setNome($nome) {
        $this->nome = $nome;
    }
    

    public function getNome() {
        return $this->nome;
    }
    
    public function setSobrenome($sobrenome) {
        $this->sobrenome = $sobrenome;
    }
    
    
    public function getSobrenome() {
        return $this->sobrenome;
    }
    
    public function setEmail($email) {
        $this->email = $email;
    }
    
    public function getEmail() {
        return $this->email;
    }
    
    public function setTelefone( $telefone ){
        $this->telefone = $telefone;
    }
    
    public function getTelefone(){
        return( $this->telefone );
    }
    
 

    public function getRg() {
        return $this->rg;
    }
    

    public function setRg($rg) {
        $this->rg = $rg;
    }
    
    public function getCpf() {
        return $this->cpf;
    }
    
    
    public function setCpf($cpf) {
        $this->cpf = $cpf;
        
    }
    public function getAtivo() {
        return $this->ativo;
    }
    
    
    public function setAtivo($ativo) {
        $this->ativo = $ativo;
    }
    
    
    public function getSenha() {
        return $this->senha;
    }
    
    
    public function setSenha($senha) {
        $this->senha = $senha;
    }
    
    public function getAdmin() {
        return $this->admin;
    }
    
    
    public function setAdmin($admin) {
        $this->admin = $admin;
    }
    
}
    
    ?>