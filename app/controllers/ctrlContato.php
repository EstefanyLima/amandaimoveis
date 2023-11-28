  <?php
use models\Contato;

error_reporting(0); // error_reporting(E_ALL);

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}



$idContato = $_REQUEST['idContato']??$_REQUEST[1];
$nome       = $_REQUEST['nome']??[2];
$email   = $_REQUEST['email']??[3];
$telefone   = $_REQUEST['telefone']??[4];
$mensagem   = $_REQUEST['mensagem']??[5];



$action = $_REQUEST['acao']??$_REQUEST[6];

switch ($action) {
    case 'insert':
        if ( isset($nome) && isset($email) && isset($telefone) && isset($mensagem)){
            $contato=  new Contato();
            $contato->populate($idContato, $nome, $email, $telefone, $mensagem);
            $contato->save();
            echo json_encode(array("saved" => true));
            
        }else{
            echo json_encode(array("saved" => false, "message" => "Contato não cadastrado!"));
            
        }
    break;
    case 'update':
        if ( isset($nome) && isset($email) && isset($telefone) && isset($mensagem)){
            $contato=  new Contato();
            $contato->populate($idContato, $nome, $email, $telefone, $mensagem);
            $contato->save();
            echo json_encode(array("saved" => true));
            
        }else{
            echo json_encode(array("saved" => false, "message" => "Contato não atualizado!"));
            
        }
    break;
    case 'delete':
        if ( isset($idContato) && isset($nome) && isset($email) && isset($telefone) && isset($mensagem)){
            $contato=  new Contato();
            $contato->populate($idContato, $nome, $email, $telefone, $mensagem);
            $contato->delete();
            echo json_encode(array("saved" => true));
        }else{
            echo json_encode(array("saved" => false, "message" => "Contato não excluido!"));
            
        }
    break;
}





?>