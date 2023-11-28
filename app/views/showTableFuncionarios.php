<!--<div id="tableContatos">  -->
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title> Imóveis - Listar Funcionários</title>
<link rel="stylesheet" href="public/assets/css/style.css">
<link rel="stylesheet"
	href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
<link rel="stylesheet" type="text/css"
	href="public/assets/css/bootstrap.min.css">
<script src="public/assets/js/bootstrap.bundle.min.js"></script>
	
<style>
.linha, .btnDelete, .btnSave{
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

.table th {
  text-align: center; /* Centraliza o texto no cabeçalho */
}
	.modal-dialog {
	position: relative;
	width: 22.875rem;
	min-height: 5rem;
	max-height: calc(100vh - 40px);
	background-color: #fff;
	border-radius: 0.75rem;
	overflow-y: auto;
}

.nav-tabs .nav-link:not(.active) {
	color: #000;
	background-color: transparent;
	border: none;
}

.msg {
	text-align: center;
	font-size: small;
	margin-top: 25px;
}

span a {
	text-decoration: none;
	font-weight: 700;
	color: #000;
	transition: .5s;
}

span a:hover {
	text-decoration: underline;
	color: #000;
}

a {
text-decoration: none;
}


</style>
</head>
<body style="background-color: #eee;">

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
   <img class=" navbar-brand img" src="public/assets/images/imglogo.png">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link fw-bold" aria-current="page" href="gerenciamento"style="color: #08283B">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle fw-bold" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false"style="color:  #08283B;">
            Alterar ou Excluir
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item text-dark" href="showImovel">Imóvel</a></li>
            <li><a class="dropdown-item text-dark" href="showClientes">Clientes</a></li>
            <li><a class="dropdown-item text-dark" href="showProprietarios">Proprietário</a></li>
            <li><a class="dropdown-item text-dark" href="showTransacao">Transação</a></li>
             <li><a class="dropdown-item text-dark" href="showFuncionarios">Funcionários</a></li>
              <li><a class="dropdown-item text-dark" href="showContatos">Contatos</a></li>
            
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle fw-bold" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false"style="color:  #08283B;">
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
         <div>
      <button type="button" class="btn" data-bs-toggle="modal"
	data-bs-target="#myModal" 
	style="border-color: #08283B;  border-width: 2px; font-size: 110%; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;"
	>Entrar</button></div>
  </div>
</nav>
	<!-- fim menu offcanvas -->
	<!--  modal login -->
	<div class="modal fade" id="myModal">
		<div class="modal-dialog .modal-fullscreen-sm-down">
			<div class="modal-content">
				<!-- Modal Header -->
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Amanda Imóveis -
						Login</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal"></button>
				</div>

				<!-- Modal body -->
				<div class="modal-body">
					<ul class="nav nav-tabs" id="myTab" role="tablist">
						<li class="nav-item" role="presentation">
							<button class="nav-link active" id="home-tab"
								data-bs-toggle="tab" data-bs-target="#home" type="button"
								role="tab" aria-controls="home" aria-selected="true">Entrar</button>
						</li>
						<li class="nav-item" role="presentation">
							<button class="nav-link" id="profile-tab" data-bs-toggle="tab"
								data-bs-target="#profile" type="button" role="tab"
								aria-controls="profile" aria-selected="false">Cadastrar</button>
						</li>
						<li class="nav-item" role="presentation">
							<button class="nav-link" id="contact-tab" data-bs-toggle="tab"
								data-bs-target="#contact" type="button" role="tab"
								aria-controls="contact" aria-selected="false">Recuperar senha</button>
						</li>
					</ul>
					<!--  Entrar -->
					<div class="tab-content" id="myTabContent">
						<div class="tab-pane fade show active" id="home" role="tabpanel"
							aria-labelledby="LoginTab">
							<form id="LoginTab">
								<div class="form-group">
									<div class="form-floating mb-3 mt-3">
										<input type="email" class="form-control rounded-3"
											id="floatingInput" placeholder="name@example.com"> <label
											for="floatingInput">Email: </label>
									</div>
									<div class="form-floating">
										<input type="password" class="form-control rounded-3"
											id="floatingPassword" placeholder="Password"> <label
											for="floatingPassword">Senha:</label>
									</div>
									<button type="submit" class="btn btn-block mt-3"
										style="background-color: #08283B; color: #fff; width: 100%;">Entrar</button>
									<div class="msg">
										<span><a href="#">Esqueceu sua senha?</a></span>
									</div>
								</div>
							</form>

						</div>

						<!--  Fim Entrar -->

						<div class="tab-pane fade" id="profile" role="tabpanel"
							aria-labelledby="CadastroTab">

							<form id="CadTab">
								<div class="form-floating mb-3 mt-3">
									<input type="text" class="form-control rounded-3"
										id="floatingInputN" placeholder="name"> <label
										for="floatingInput">Nome: </label>
								</div>

								<div class="form-floating mb-3 mt-3">
									<input type="email" class="form-control rounded-3"
										id="floatingInputE" placeholder="name@example.com"> <label
										for="floatingInput">Email: </label>
								</div>
								<div class="form-floating mt-3">
									<input type="password" class="form-control rounded-3"
										id="floatingPassword2" placeholder="Password"> <label
										for="floatingPassword">Senha:</label>
								</div>
								<div class="form-floating mt-3">
									<input type="password" class="form-control rounded-3"
										id="floatingPassword3" placeholder="Password"> <label
										for="floatingPassword">Repetir senha:</label>
								</div>
								<button type="submit" class="btn btn-block mt-3"
									style="background-color: #08283B; color: #fff; width: 100%">Entrar</button>
							</form>
						</div>
						<div class="tab-pane fade" id="contact" role="tabpanel"
							aria-labelledby="LembrarTab">
							<h5 class="mt-3">Redefinir senha</h5>
							<p>Insira o seu endereço de e-mail abaixo. Iremos enviar um
								código para o seu e-mail, que permitirá que você redefina a sua
								senha.</p>
							<form id="LembrarTab">
								<div class="form-floating mb-3 mt-3">
									<input type="email" class="form-control rounded-3"
										id="floatingInputEm" placeholder="name@example.com"> <label
										for="floatingInput">Email: </label>
								</div>
								<button type="submit" class="btn btn-block mt-3"
									style="background-color: #08283B; color: #fff; width: 100%">Enviar</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- fim modal login -->

        <div class="col py-3">
            <h3 class="text-center">Delete e Update de Funcionários</h3>
            <?php
use models\Funcionario;
function showTable() {
    $funcionario = new Funcionario();
    $rows = $funcionario->listAll();
    
    echo "<table>";
    echo "
                <tr class='text-center'>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Sobrenome</th>
                    <th>Email</th>
                    <th>Telefone</th>
                    <th>RG</th>
                    <th>CPF</th>
                       <th>Ativo</th>
                    <th>Senha</th>
                    <th>Admin</th>
                </tr>";
    
    foreach ( $rows as $row ){
        echo "<form class='frmLine' id='frmLine".$row['id']."'>";
        echo
        
        "<tr>
            <td><input class='form-control linha' type='text' name='idFuncionarios' value='".$row['id']."' readonly ></td>
            <td><input class='form-control linha' type='text' name='nome'      value='".$row['nome']."'  ></td>
            <td><input class='form-control linha' type='text' name='sobrenome'     value='".$row['sobrenome']."'  ></td>
             <td><input class='form-control linha' type='email' name='email' value='".$row['email']."' ></td>
            <td><input class='form-control linha' type='text' name='telefone'     value='".$row['telefone']."'  ></td>
           <td><input class='form-control linha' type='text' name='rg' value='".$row['rg']."' ></td>
            <td><input class='form-control linha' type='text' name='cpf' value='".$row['cpf']."' ></td>
            <td><input class='form-control linha'type='text' name='ativo'  value='".$row['ativo']."'  ></td>
            <td><input class='form-control linha'type='text' name='senha'  value='".$row['senha']."'  ></td>
            <td><input class='form-control linha'type='text' name='admin'  value='".$row['admin']."'  ></td>
            <input type='hidden'   name='acao'    value='' >
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
 
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

	<script type="text/javascript">
 $(document).ready(function() {
        
        $(".btnSave").click(function(event) {
            var objClicado = event.target || event.srcElement;
            var form = objClicado.form;
            $(form.acao).val('update');
            var dados = $("#" + form.id).serialize();
            
            console.log($(objClicado).attr('class') + " : " + form.id + " : " + dados);
            
            var url = "funcionarios/add";
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
            
            $(form.acao).val('delete');
            var dados = $("#" + form.id).serialize(); 
            console.log($(objClicado).attr('class') + " : " + form.id + " : " + dados);

            var url = "funcionarios/add";
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