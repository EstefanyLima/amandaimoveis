<?php

namespace models;

use core\database\DBQuery;

class Contato {
    
    private $IdContato;
    private $nome;
    private $email;
    private $telefone;
    private $mensagem;
 
    private $dbquery;
    
    function __construct(){
        $tableName  = "contato";
        $fieldsName = "IdContato,nome, email,telefone, mensagem";
        $primaryKeys  = "IdContato";
        $this->dbquery = new DBQuery($tableName, $fieldsName, $primaryKeys);
    }
    
    public function toArray(){
        return array(
            $this->getIdContato(),
            $this->getNome(),
            $this->getEmail(),
            $this->getTelefone(),
            $this->getMensagem()
        );
    }
    
    public function toString(){
        return("\n\t\t\t\t". implode(", ",$this->toArray()));
    }
    
  
    
    function listAll(){
        return( $this->dbquery->select());
        
    }
    public function save() {
        if($this->getIdContato() == 0){
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
    
    
    public function listContatos($where = null) : array {
        $contato = array();
        $rSet = null;
        if ( $where == null){
            $rSet = $this->dbquery->select();
        }else{
            $rSet = $this->dbquery->selectFiltered($where);
        }
        
        if ($rSet) {
            foreach ($rSet as $linha) {
                $IdContato      = $linha['IdContato'];
                $nome           = $linha['nome'];
                $email           = $linha['email'];
                $telefone           = $linha['telefone'];
                $mensagem        = $linha['mensagem'];

                $contato[] = new Contato($IdContato, $nome, $email,$telefone, $mensagem  );                }
        } else {
            $contato[] = array();
            echo  "{'msg':'Nenhum contato encontrado.\n'}";
        }
        return( $contato );
    }
    
    
    public function delete() {
        if($this->getIdContato() != 0){
            return( $this->dbquery->delete($this->toArray()));
        }
    }
    
    function populate( $IdContato, $nome, $email,$telefone, $mensagem) {
        
        
        $this->setIdContato( $IdContato );
        $this->setNome( $nome );
        $this->setEmail( $email );
        $this->setTelefone( $telefone );
        $this->setMensagem( $mensagem );
    }
    
    
    // GET E SET //
    public function setIdContato($idcontato) {
        $this->idcontato = $idcontato;
    }
    
    public function getIdContato() {
        return $this->idcontato;
    }
    
    public function setNome($nome) {
        $this->nome = $nome;
    }
    

    public function getNome() {
        return $this->nome;
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
    
 

    public function getMensagem() {
        return $this->mensagem;
    }
    

    public function setMensagem($mensagem) {
        $this->mensagem = $mensagem;
    }
}
    
    ?>