<?php


namespace models;

use core\database\DBQuery;
use core\database\Where;

class Cliente{

    private $Id;
    private $nome;
    private $sobrenome;
    private $email;
    private $cpf;
    private $endereco;
    private $telefone;
    private $nacionalidade;
    private $nascimento;
    private $profissao;
    private $ativo;
    private $senha;
    private $admin;
    
    private $dbquery;
    
    function __construct(){
        $tableName  = "clientes";
        $fieldsName = "Id,nome, sobrenome, email, cpf, endereco, telefone, nacionalidade, nascimento, profissao, ativo, senha, admin";
        $primaryKeys  = "Id";
        $this->dbquery = new DBQuery($tableName, $fieldsName, $primaryKeys);
    }
    
    public function toArray(){
        return array(
            $this->getId(),
            $this->getNome(),
            $this->getSobrenome(),
            $this->getEmail(),
            $this->getCpf(),
            $this->getEndereco(),
            $this->getTelefone(),
            $this->getNacionalidade(),
            $this->getNascimento(),
            $this->getProfissao(),
            $this->getAtivo(),
            $this->getSenha(),
            $this->getAdmin(),
        );
    }
    
    public function toString(){
        return("\n\t\t\t\t". implode(", ",$this->toArray()));
    }
    
    function listAll(){
        $where = new Where();
        $where->addCondition('AND', 'ativo', '=', 'S');
        return( $this->dbquery->selectFiltered($where));
    }
    
    
    function login( $email, $senha ){
        
        $where = new Where();
        $where->addCondition('AND', 'ativo', '=', 'S');
        $where->addCondition('AND', 'email', '=', $email );
        $where->addCondition('AND', 'senha', '=', $senha );
        $where->addCondition('AND', 'admin', '=', 'S');
        $resultSet = $this->dbquery->selectFiltered($where);
        
        if ( $resultSet->rowCount() > 0){
            \session_start();
            foreach ( $resultSet as $row ){
                $_SESSION["idUsuario"] == $row['Id'];
            }
            
            return( true );
        }else{
            return( false );
        }
        return( false );
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
    
    public function listClientes($where = null) : array {
        $cliente = array();
        $rSet = null;
        if ( $where == null){
            $rSet = $this->dbquery->select();
        }else{
            $rSet = $this->dbquery->selectFiltered($where);
        }
        
        if ($rSet) {
            foreach ($rSet as $linha) {
                $Id      = $linha['Id'];
                $nome        = $linha['nome'];
                $sobrenome           = $linha['sobrenome'];
                $email           = $linha['email'];
                $cpf           = $linha['cpf'];
                $endereco           = $linha['endereco'];
                $telefone           = $linha['telefone'];
                $nacionalidade           = $linha['nacionalidade'];
                $nascimento           = $linha['nascimento'];
                $profissao      = $linha['profissao'];
                $ativo     = $linha['ativo'];
                $admin     = $linha['senha'];
                $senha     = $linha['senha'];
                
                $cliente[] = new Cliente($Id, $nome, $sobrenome,$email, $cpf, $endereco, $telefone, $nacionalidade, $nascimento, $profissao, $ativo, $senha, $admin  );                }
        } else {
            $cliente[] = array();
            echo  "{'msg':'Nenhum cliente encontrado.\n'}";
        }
        return( $cliente);
    }
    
    public function delete() {
        if($this->getId() != 0){
            return( $this->dbquery->delete($this->toArray()));
        }
    }
    
    
    function populate( $Id, $nome, $sobrenome,$email, $cpf, $endereco, $telefone, $nacionalidade, $nascimento, $profissao, $ativo, $senha, $admin  ) {
        
        
        $this->setId( $Id );
        $this->setNome( $nome );
        $this->setSobrenome( $sobrenome );
        $this->setEmail( $email );
        $this->setCpf( $cpf );
        $this->setEndereco( $endereco );
        $this->setTelefone( $telefone );
        $this->setNacionalidade( $nacionalidade );
        $this->setNascimento( $nascimento);
        $this->setProfissao( $profissao );
        
        
    }
    
    // GET E SET //
    
    public function getId() {
        return $this->Id;
    }
    
    public function setId($Id) {
        $this->Id = $Id;
    }
    
    
    
    public function getNome() {
        return $this->nome;
    }
    
    public function setNome($nome) {
        $this->nome = $nome;
    }
    
    
    public function getSobrenome() {
        return $this->sobrenome;
    }
    
    
    public function setSobrenome($sobrenome) {
        $this->sobrenome = $sobrenome;
    }
    
    
    
    public function getEmail() {
        return $this->email;
    }
    
    public function setEmail($email) {
        $this->email = $email;
    }
    
    
    
    public function getCpf() {
        return $this->cpf;
    }
    
    public function setCpf($cpf) {
        $this->cpf = $cpf;
    }
    
    
    
    
    public function getEndereco() {
        return $this->endereco;
    }
    
    
    public function setEndereco($endereco) {
        $this->endereco = $endereco;
    }
    
    
    
    
    public function getTelefone() {
        return $this->telefone;
    }
    
    
    
    public function setTelefone($telefone) {
        $this->telefone = $telefone;
    }
    
    
    
    public function getNacionalidade() {
        return $this->nacionalidade;
    }
    
    
    
    public function setNacionalidade($nacionalidade) {
        $this->nacionalidade = $nacionalidade;
    }
    
    
    
    public function getNascimento() {
        return $this->nascimento;
    }
    
    public function setNascimento($nascimento) {
        $this->nascimento = $nascimento;
    }
    
    
    
    public function getProfissao() {
        return $this->profissao;
    }
    
    
    public function setProfissao($profissao) {
        $this->profissao = $profissao;
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