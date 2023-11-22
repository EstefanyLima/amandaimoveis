<!--<div id="tableContatos">  -->
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Amanda Imóveis - Listar Clientes</title>
<link rel="stylesheet" href="public/assets/css/style.css">
<link rel="stylesheet"
	href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
<link rel="stylesheet" type="text/css"
	href="public/assets/css/bootstrap.min.css">
<script src="public/assets/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	
<style>
.form-control, .btnDelete, .btnSave{
margin-right: 10px;
margin-top: 5px;
margin-left: 15px;
margin-bottom: 4px;
height: 50px;
background: #ecf0f4;
font-size: 16px;
-webkit-border-radius: 10px;
border-radius: 10px;
border-color: transparent;
-webkit-box-shadow: 0px 8px 20px 0px rgba(0, 0, 0, 0.15);
-moz-box-shadow: 0px 8px 20px 0px rgba(0, 0, 0, 0.15);
box-shadow: 0px 8px 20px 0px rgba(0, 0, 0, 0.15);
-moz-border-radius: 10px;
text-align:center;

}
.btnDelete, .btnSave{
width: 50px;
}
</style>
</head>
<body>
<nav class="navbar navbar-expand-lg shadow-sm navbar-light bg-light">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
     <img class=" navbar-brand img" src="public/assets/images/imglogo.png">
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link fw-bold" aria-current="page" href="gerenciamento"style="color: #08283B">Home</a>
        </li>
         <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle  fw-bold" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false"style="color: #08283B">
           Pesquisar por ID
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item text-dark" href="showImovel">Imóvel</a></li>
            <li><a class="dropdown-item text-dark" href="showClientes">Clientes</a></li>
            <li><a class="dropdown-item text-dark" href="showProprietarios">Proprietário</a></li>
            <li><a class="dropdown-item text-dark" href="showTransacao">Transação</a></li>
             <li><a class="dropdown-item text-dark" href="showFuncionarios">Funcionários</a></li>
              <li><a class="dropdown-item text-dark" href="showContatos">Clientes</a></li>
            
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle  fw-bold" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false"style="color: #08283B">
            Alterar ou Excluir
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item text-dark" href="showImovel">Imóvel</a></li>
            <li><a class="dropdown-item text-dark" href="#">Clientes</a></li>
            <li><a class="dropdown-item text-dark" href="showProprietarios">Proprietário</a></li>
            <li><a class="dropdown-item text-dark" href="showTransacao">Transação</a></li>
             <li><a class="dropdown-item text-dark" href="showFuncionarios">Funcionários</a></li>
              <li><a class="dropdown-item text-dark" href="showContatos">Contatos</a></li>
            
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle  fw-bold" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false"style="color: #08283B">
            Cadastrar
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item text-dark" href="saveImoveis">Imóvel</a></li>
            <li><a class="dropdown-item text-dark" href="saveClientes">Clientes</a></li>
            <li><a class="dropdown-item text-dark" href="saveProprietarios">Proprietário</a></li>
            <li><a class="dropdown-item text-dark" href="saveTransacao">Transação</a></li>
             <li><a class="dropdown-item text-dark" href="saveFuncionarios">Funcionários</a></li>
            
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>

        <div class="col py-3">
            <h3 class="text-center">Delete e Update de Clientes</h3>
            <?php
use models\Cliente;
function showTable() {
    $cliente = new Cliente();
    $rows = $cliente->listAll();
    echo "<table>";
    echo "
                <tr class='text-center'>
                    <th>ID Cliente</th>
                    <th>Nome</th>
                    <th>Sobrenome</th>
                    <th>Email</th>
                    <th class='text-center'>CPF</th>
                    <th>Endereço</th>
                    <th>Telefone</th>
                    <th>Nacionalidade</th>
                    <th>Nascimento</th>
                    <th>Profissão</th>
                    <th>Ativo</th>
                    <th>Senha</th>
                    <th>Admin</th>
                </tr>";
    foreach ( $rows as $row ){
        echo "<form class='frmLine' id='frmLine".$row['Id']."'>";
        echo
        "<tr>
            <td><input class='form-control' type='text' name='Id' value='".$row['Id']."' readonly ></td>
            <td><input class='form-control' type='text' name='nome'      value='".$row['nome']."'  ></td>
            <td><input class='form-control' type='text' name='sobrenome'     value='".$row['sobrenome']."'  ></td>
             <td><input class='form-control' type='email' name='email' value='".$row['email']."'></td>
            <td><input class='form-control' type='text' name='cpf' value='".$row['cpf']."' ></td>
            <td><input class='form-control' type='text' name='endereco'      value='".$row['endereco']."'  ></td>
            <td><input class='form-control' type='text' name='telefone'     value='".$row['telefone']."'  ></td>
            <td><input class='form-control' type='text' name='nacionalidade'  value='".$row['nacionalidade']."'  ></td>
            <td><input class='form-control'type='date' name='nascimento'  value='".$row['nascimento']."'  ></td>
            <td><input class='form-control'type='text' name='profissao'  value='".$row['profissao']."'  ></td>
            <td><input class='form-control'type='text' name='ativo'  value='".$row['ativo']."'  ></td>
            <td><input class='form-control'type='text' name='senha'  value='".$row['senha']."'  ></td>
            <td><input class='form-control'type='text' name='admin'  value='".$row['admin']."'  ></td>
            <input type='hidden'   name='action'    value='' >
            <td><button type='button' class='btnDelete'>&#128465;</button></td>
            <td><button type='button' class='btnSave'  >&#9998;</button></td>
        </tr>";
        echo "</form>";
    }
    echo "</table>";
}
showTable();
?>
            
        </div>

<!-- </div>  -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

	<script type="text/javascript">
	    $(document).ready(function() {
        
        $(".btnSave").click(function(event) {
            var objClicado = event.target || event.srcElement;
            var form = objClicado.form;
            $(form.action).val('update');
            var dados = $("#" + form.id).serialize();
            
            console.log($(objClicado).attr('class') + " : " + form.id + " : " + dados);
            
            var url = "clientes/add";
            $.post(url, dados, function(dataResponse) {
                if (dataResponse.saved === true) {
                    alert("Dado Atualizado com Sucesso!");
                    // Atualizar a página após a atualização bem-sucedida
                    location.reload();
                } else {
                    alert("Não Atualizado!");
                }
            }, "json")
            .fail(function(data, textStatus, errorThrown) {
                console.log("Resposta do Servidor: " + data.responseText);
            });
        });

        $(".btnDelete").click(function(event) {
            var objClicado = event.target || event.srcElement;
            var form = objClicado.form;
            $(form.action).val('delete');
            var dados = $("#" + form.id).serialize(); 
            console.log($(objClicado).attr('class') + " : " + form.id + " : " + dados);

            var url = "clientes/add";
            $.post(url, dados, function(dataResponse) {
                if (dataResponse.saved === true) {
                    alert("Dado Excluido com Sucesso!");
                    // Atualizar a página após a exclusão bem-sucedida
                    location.reload();
                } else {
                    alert("Não Excluido!");
                }
            }, "json")
            .fail(function(data, textStatus, errorThrown) {
                console.log("Resposta do Servidor: " + data.responseText);
            });
        });
    });
	

			
	</script>
	</body>
	</html>