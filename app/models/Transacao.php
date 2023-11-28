<?php

namespace models;

use core\database\DBQuery;

class Transacao {
    
    private $id;
    private $idimovel;
    private $cliente_id;
    private $tipo_transacao;
    private $data_transacao;
    private $valor_transacao;
 
    private $dbquery;
    
    function __construct(){
        $tableName  = "imoveltransacao";
        $fieldsName = "id, idimovel, cliente_id, tipo_transacao, data_transacao, valor_transacao";
        $primaryKeys  = "id";
        $this->dbquery = new DBQuery($tableName, $fieldsName, $primaryKeys);
    }
    
    public function toArray(){
        return array(
            $this->getId(),
            $this->getIdImovel(),
            $this->getCliente_Id(),
            $this->getTipo_Transacao(),
            $this->getData_Transacao(),
            $this->getValor_Transacao()
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
    
    
    public function listTransacoes($where = null) : array {
        $transacao = array();
        $rSet = null;
        if ( $where == null){
            $rSet = $this->dbquery->select();
        }else{
            $rSet = $this->dbquery->selectFiltered($where);
        }
        
        if ($rSet) {
            foreach ($rSet as $linha) {
                $id      = $linha['id'];
                $idimovel           = $linha['idimovel'];
                $cliente_id           = $linha['cliente_id'];
                $tipo_transacao         = $linha['tipo_transacao'];
                $data_transacao       = $linha['data_transacao'];
                $valor_transacao         = $linha['valor_transacao'];

                $transacao[] = new Transacao($id, $idimovel, $cliente_id, $tipo_transacao, $data_transacao, $valor_transacao );                }
        } else {
            $transacao[] = array();
            echo  "{'msg':'Nenhuma transação encontrada.\n'}";
        }
        return( $transacao );
    }
    
    
    public function delete() {
        if($this->getId() != 0){
            return( $this->dbquery->delete($this->toArray()));
        }
    }
    
    function populate($id,$idimovel, $cliente_id, $tipo_transacao, $data_transacao, $valor_transacao) {
        
        $this->setId($id);
        $this->setIdImovel($idimovel);
        $this->setCliente_Id($cliente_id);
        $this->setTipo_Transacao($tipo_transacao);
        $this->setData_Transacao( $data_transacao);
        $this->setValor_Transacao($valor_transacao);
    }
    
    
    // GET E SET //
    public function setId($id) {
        $this->id = $id;
    }
    
    public function getId() {
        return $this->id;
    }
    
    public function setIdImovel($idimovel) {
        $this->idimovel = $idimovel;
    }
    

    public function getIdImovel() {
        return $this->idimovel;
    }
    
    public function setCliente_Id($cliente_id) {
        $this->cliente_id = $cliente_id;
    }
    
    public function getCliente_Id() {
        return $this->cliente_id;
    }
    
    public function setTipo_Transacao( $tipo_transacao ){
        $this->tipo_transacao = $tipo_transacao;
    }
    
    public function getTipo_Transacao(){
        return( $this->tipo_transacao );
    }
    
 

    public function getData_Transacao() {
        return $this->data_transacao;
    }
    

    public function setData_Transacao($data_transacao) {
        $this->data_transacao = $data_transacao;
    }
    public function getValor_Transacao() {
        return $this->valor_transacao;
    }
    
    
    public function setValor_Transacao($valor_transacao) {
        $this->valor_transacao = $valor_transacao;
    }
}
    
    ?>