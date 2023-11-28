<?php


namespace models;

use core\database\DBQuery;
use core\database\Where;

class Proprietario{

    private $IdProprietario;
    private $nome;
    private $sobrenome;
    private $email;
    private $cpf;
    private $endereco;
    private $telefone;
    private $nacionalidade;
    private $nascimento;
    private $ativo;
    private $senha;
    private $admin;
    
    
    private $dbquery;
    
    function __construct(){
        $tableName  = "proprietario";
        $fieldsName = "idproprietario,nome, sobrenome, email, cpf, endereco, telefone, nacionalidade, nascimento, ativo, senha, admin";
        $primaryKeys  = "idproprietario";
        $this->dbquery = new DBQuery($tableName, $fieldsName, $primaryKeys);
    }
    
    public function toArray(){
        return array(
            $this->getIdProprietario(),
            $this->getNome(),
            $this->getSobrenome(),
            $this->getEmail(),
            $this->getCpf(),
            $this->getEndereco(),
            $this->getTelefone(),
            $this->getNacionalidade(),
            $this->getNascimento(),
            $this->getAtivo(),
            $this->getSenha(),
            $this->getAdmin(),
            
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
        $resultSet = $this->dbquery->selectFiltered($where);
        
        if ( $resultSet->rowCount() > 0){
            \session_start();
            foreach ( $resultSet as $row ){
                $_SESSION["idUsuarioProp"] == $row['idproprietario'];
            }
            
            return( true );
        }else{
            return( false );
        }
        return( false );
    }
    
    
    public function save() {
        if($this->getIdProprietario() == 0){
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
    
    public function listProprietarios($where = null) : array {
        $proprietario = array();
        $rSet = null;
        if ( $where == null){
            $rSet = $this->dbquery->select();
        }else{
            $rSet = $this->dbquery->selectFiltered($where);
        }
        
        if ($rSet) {
            foreach ($rSet as $linha) {
                $idproprietario      = $linha['idproprietario'];
                $nome        = $linha['nome'];
                $sobrenome           = $linha['sobrenome'];
                $email           = $linha['email'];
                $cpf           = $linha['cpf'];
                $endereco           = $linha['endereco'];
                $telefone           = $linha['telefone'];
                $nacionalidade           = $linha['nacionalidade'];
                $nascimento           = $linha['nascimento'];
                $ativo     = $linha['ativo'];
                $senha     = $linha['admin'];
                
                $admin     = $linha['senha'];      
                
                
               $proprietario[] = new Proprietario($idproprietario, $nome, $sobrenome,$email, $cpf, $endereco, $telefone, $nacionalidade, $nascimento, $ativo, $senha, $admin );                }
        } else {
            $proprietario[] = array();
            echo  "{'msg':'Nenhum proprietario encontrado.\n'}";
        }
        return( $proprietario);
    }
    
    public function delete() {
        if($this->getIdProprietario() != 0){
            return( $this->dbquery->delete($this->toArray()));
        }
    }
    
    
    function populate( $idproprietario, $nome, $sobrenome,$email, $cpf, $endereco, $telefone, $nacionalidade, $nascimento, $ativo, $senha, $admin ) {
        
        
        $this->setIdProprietario( $idproprietario );
        $this->setNome( $nome );
        $this->setSobrenome( $sobrenome );
        $this->setEmail( $email );
        $this->setCpf( $cpf );
        $this->setEndereco( $endereco );
        $this->setTelefone( $telefone );
        $this->setNacionalidade( $nacionalidade );
        $this->setNascimento( $nascimento);
        $this->setAtivo( $ativo );
        $this->setSenha( $senha );
        $this->setAdmin( $admin );
        
        
    }
    
    // GET E SET //
    
    public function getIdProprietario() {
        return $this->IdProprietario;
    }
    
    public function setIdProprietario($IdProprietario) {
        $this->IdProprietario = $IdProprietario;
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