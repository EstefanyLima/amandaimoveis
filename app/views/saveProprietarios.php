<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Amanda Imóveis - Cadastrar Proprietários</title>
<link rel="stylesheet" href="public/assets/css/style.css">
<link rel="stylesheet"
	href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
<link rel="stylesheet" type="text/css"
	href="public/assets/css/bootstrap.min.css">
<script src="public/assets/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	
<style>
 .formcd{
   background: rgba(255, 255, 255, 1);
   height: 650px;
	max-width: 750px;
	padding: 50px;
	margin: 0 auto;
	position: relative;
	-webkit-border-radius: 10px;
	-moz-border-radius: 10px;
	border-radius: 10px;
	-webkit-box-shadow: 0px 0px 40px rgba(0, 0, 0, 0.15);
	-moz-box-shadow: 0px 0px 40px rgba(0, 0, 0, 0.15);
	box-shadow: 0px 0px 40px rgba(0, 0, 0, 0.15);
 }

</style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
   <img class=" navbar-brand img" src="public/assets/images/imglogo.png">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link fw-bold" aria-current="page" href="gerenciamento" style="color: #08283B">Home</a>
        </li>
         <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle fw-bold" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false"style="color:  #08283B;">
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
            <li><a class="dropdown-item text-dark" href="#">Proprietário</a></li>
            <li><a class="dropdown-item text-dark" href="saveTransacao">Transação</a></li>
             <li><a class="dropdown-item text-dark" href="saveFuncionarios">Funcionários</a></li>
            
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>

        		<!-- cadastro de locatarios !-->
	<div class="container formcd mt-5">
		<form class="row g-2" id="frmProprietario">
			<input type="hidden" name="idProprietario" value="0">
			<h2 class="text-center mt-1 g-2">Cadastrar Proprietário</h2>
			<div class="form-floating col-md-6 mb-3">
				<input type="text" class="form-control" id="nome" name="nome" required> <label
					for="nome" class="form-label">Nome:</label>
			</div>
			<div class="form-floating col-md-6 mb-3">
				<input type="text" class="form-control" id="sobrenome" name="sobrenome" required> <label
					for="sobrenome" class="form-label">Sobrenome:</label>
			</div>
			<div class="form-floating col-md-6 mb-3">
				<input type="email" class="form-control" id="email"
					name="email"autocomplete="email" required> <label for="email" class="form-label">Email:</label>
			</div>
			<div class="form-floating col-md-6 mb-3">
				<input type="text" class="form-control" id="cpf" name="cpf" required> <label
					for="cpf" class="form-label">CPF:</label>
			</div>
			<div class="form-floating col-md-6 mb-3">
				<input type="text" class="form-control" id="endereco"
					name="endereco" required> <label for="endereco" class="form-label">Endereço:</label>
			</div>
			<div class="form-floating col-md-6 mb-3">
				<input type="text" class="form-control" id="telefone"
					name="telefone" required> <label for="telefone" class="form-label">Telefone:</label>
			</div>
			<div class="form-floating col-md-6 mb-3">
				<input type="text" class="form-control" id="nacionalidade"
					name="nacionalidade" required> <label for="nacionalidade"
					class="form-label">Nacionalidade:</label>
			</div>
			<div class="form-floating col-md-6 mb-3">
				<input type="date" class="form-control" id="nascimento"
					name="nascimento" required> <label for="nascimento" class="form-label">Nascimento:</label>
			</div>
						<div class="form-floating col-md-6 mb-3">
           <select class="form-select" id="ativo" name="ativo" aria-label="Floating label select example">
                    <option selected> -- Selecione --</option>
                    <option value="1">S</option>
                    <option value="2">N</option>
                    
                  </select>
  <label for="ativo">Ativo:</label>
</div>
<div class="form-floating col-md-6 mb-3">
				<input type="text" class="form-control" id="senha"
					name="senha" required> <label for="senha" class="form-label">Senha:</label>
			</div>
	<div class="form-floating col-md-6 mb-3">
           <select class="form-select" id="admin" name="admin" aria-label="Floating label select example">
                    <option selected> -- Selecione --</option>
                    <option value="1">S</option>
                    <option value="2">N</option>
                    
                  </select>
  <label for="admin">Admin:</label>
</div>
		
						<input type="hidden" name="action" value="insert">
			
			<div class="col-12 text-center">
				<button type="submit" class="btn text-white mb-2"
					style="background-color:  #08283B;">Cadastrar</button>
			</div>
		</form>
	</div>
	<!-- Fim cadastro de locatários <!-->
    
      
        
 <script type="text/javascript">
	$(document).ready(function() {
	    $("#frmProprietario").submit(function(event) {
	        event.preventDefault();
	        var dados = $("#frmProprietario").serialize();
	        console.log(dados);
	        var url = "proprietarios/add";
	        $.post(url, dados, function(dataResponse) {
	            if (dataResponse.saved === true) {
	            	 alert("Proprietário Cadastrado com Sucesso!");
	                 limparCampos();
	            	 
	             
	            } else {
	                alert("Não Cadastrado! Inclua todos os Dados!");
	            }
	        }, "json")
	        .fail(function(data, textStatus, errorThrown) {
	            console.log("Resposta do Servidor: " + data.responseText);
	            //alert("Ocorreu um erro na requisição.");
	        });
	    });

	    function limparCampos() {
	        $("#nome").val("");
	        $("#sobrenome").val("");
	        $("#email").val("");
	        $("#cpf").val("");
	        $("#endereco").val("");
	        $("#telefone").val("");
	        $("#nacionalidade").val("");
	        $("#nascimento").val("");
	        $("#ativo").val("");
	        $("#senha").val("");
	        $("#admin").val("");
	        
	    }
	});
	
	<!-- language: lang-js -->

 
			
	</script>
        </body>
        </html>