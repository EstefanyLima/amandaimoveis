<?php

namespace models;

use core\database\DBQuery;

class Funcionario {
    
    private $id;
    private $nome;
    private $sobrenome;
    private $email;
    private $telefone;
    private $rg;
    private $cpf;
    
    private $dbquery;
    
    function __construct(){
        $tableName  = "funcionarios";
        $fieldsName = "id,nome,sobrenome, email,telefone, rg, cpf";
        $primaryKeys  = "id";
        $this->dbquery = new DBQuery($tableName, $fieldsName, $primaryKeys);
    }
    
    public function toArray(){
        return array(
            $this->getId(),
            $this->getNome(),
            $this->getSobrenome(),
            $this->getEmail(),
            $this->getTelefone(),
            $this->getRg(),
            $this->getCpf()
        );
    }
    
    public function toString(){
        return("\n\t\t\t\t". implode(", ",$this->toArray()));
    }
    
  
    
    function listAll(){
        return( $this->dbquery->select());
        
    }
    public function save() {
        if($this->getId() == 0){
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

                $funcionario[] = new Funcionario($id, $nome, $sobrenome,$email, $telefone, $rg, $cpf  );                }
        } else {
            $funcionario[] = array();
            echo  "{'msg':'Nenhum funcionario encontrado.\n'}";
        }
        return( $funcionario );
    }
    
    
    public function delete() {
        if($this->getId() != 0){
            return( $this->dbquery->delete($this->toArray()));
        }
    }
    
    function populate( $id, $nome, $sobrenome,$email, $telefone, $rg, $cpf  ) {
        
        
        $this->setId( $id );
        $this->setNome( $nome );
        $this->setSobrenome( $sobrenome );
        $this->setEmail( $email);
        $this->setTelefone( $telefone );
        $this->setRg( $rg);
        $this->setCpf( $cpf);
    }
    
    
    // GET E SET //
    public function setId($id) {
        $this->id = $id;
    }
    
    public function getId() {
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
}
    
    ?>