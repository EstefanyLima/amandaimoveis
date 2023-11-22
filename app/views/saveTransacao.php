<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Amanda Imóveis - Compra e Venda</title>
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
          <a class="nav-link fw-bold" aria-current="page" href="gerenciamento" style="color:  #08283B;">Home</a>
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
            <li><a class="dropdown-item text-dark" href="saveProprietarios">Proprietário</a></li>
            <li><a class="dropdown-item text-dark" href="#">Transação</a></li>
             <li><a class="dropdown-item text-dark" href="saveFuncionarios">Funcionários</a></li>
            
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>

        		<!-- cadastro de locatarios !-->
	<div class="container formcd mt-5">
		<form class="row g-2" id="frmTransacao">
			<input type="hidden" name="Id" value="0">
			<h2 class="text-center mt-1 g-2">Cadastrar Compra ou Venda</h2>
			<div class="form-floating col-md-4 mb-3">
				<input type="text" class="form-control" id="idimovel" name="idimovel" required> <label
					for="idimovel" class="form-label">ID do Imóvel:</label>
			</div>
			<div class="form-floating col-md-4 mb-3">
				<input type="text" class="form-control" id="cliente_id"
					name="cliente_id" required> <label for="cliente_id" class="form-label">ID do cliente:</label>
			</div>
			<div class="form-floating col-md-4 mb-3">
           <select class="form-select" id="tipo_transacao" name="tipo_transacao" aria-label="Floating label select example">
                    <option selected> -- Selecione --</option>
                    <option value="1">aluguel</option>
                    <option value="2">venda</option>
                    
                  </select>
  <label for="tipo_transacao">Tipo de Transação</label>
</div>
			<div class="form-floating col-md-6 mb-3">
				<input type="date" class="form-control" id="data_transacao"
					name="data_transacao" required> <label for="data_transacao" class="form-label">Data da Transação:</label>
			</div>
			<div class="form-floating col-md-6 mb-3">
    <input type="number" id="valor_transacao" class="form-control" name="valor_transacao" />
    <label class="form-label" for="valor_transacao">Valor:</label>
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
	    $("#frmTransacao").submit(function(event) {
	        event.preventDefault();
	        var dados = $("#frmTransacao").serialize();
	        console.log(dados);
	        var url = "transacao/add";
	        $.post(url, dados, function(dataResponse) {
	            if (dataResponse.saved === true) {
	                alert("Transação cadastrada com Sucessso!");
	                 limparCampos();
	                
	            } else {
	                alert("Não Cadastrado! Inclua todos os Dados!");
	            }
	        }, "json")
	        .fail(function(data, textStatus, errorThrown) {
	            console.log("Resposta do Servidor: " + data.responseText);
	           // alert("Ocorreu um erro na requisição.");
	        });
	    });
	    function limparCampos() {
	  	 $("#idimovel").val("");
   	     $("#cliente_id").val("");
         $("#tipo_transacao").val("");
         $("#data_transacao").val("");
         $("#valor_transacao").val("");
	    }
	});
	
	</script>
        </body>
        </html>