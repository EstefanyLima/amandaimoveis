<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Amanda Imóveis - Cadastrar Imóveis</title>
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
          <a class="nav-link fw-bold" aria-current="page" href="gerenciamento"style="color: #08283B">Home</a>
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
              <li><a class="dropdown-item text-dark" href="showContatos">Clientes</a></li>
            
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle fw-bold" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false"style="color:  #08283B;">
            Cadastrar
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item text-dark" href="#">Imóvel</a></li>
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


<!-- Cadastro de imoveis <!-->
	<div class="container formcd mt-4 mb-3">
		<form class="row g-2" id="frmImovel">
			<input type="hidden" name="idImovel" value="0">
            <input type="hidden" name="ProprietarioId" value="0">
			
			<h2 class="text-center">Cadastrar Imóvel</h2>
			<div class="form-floating col-md-4 mb-3">
				<input type="text" class="form-control" id="ProprietarioID"
					name="ProprietarioID" id="ProprietarioID" required> <label for="Nome"
					class="form-label">Id do Proprietário:</label>
			</div>
			<div class="form-floating col-md-4 mb-3">
				<input type="text" class="form-control" id="Nome"
					name="Nome" id="Nome" required> <label for="Nome"
					class="form-label">Nome Completo:</label>
			</div>
			<div class="form-floating col-md-4 mb-3">
				<input type="text" class="form-control" id="CPF"
					name="CPF" required> <label for="CPF" class="form-label">CPF:</label>
			</div>
				<div class="form-floating col-md-4 mb-3">
                  <select class="form-select" id="Pretende" name="Pretende" aria-label="Floating label select example">
                    <option selected> -- Selecione --</option>
                    <option value="1">Alugar</option>
                    <option value="2">Vender</option>
                    <option value="3">Alugar e Vender</option>
                  </select>
  <label for="floatingSelect">Pretende</label>
</div>
					<div class="form-floating col-md-4 mb-3">
    <input type="number" id="ValorVenda" class="form-control" name="ValorVenda" />
    <label class="form-label" for="ValorVenda">Valor Venda:</label>
</div>
			<div class="form-floating col-md-4 mb-3">
    <input type="number" id="ValorLocacao" class="form-control" name="ValorLocacao" />
    <label class="form-label" for="ValorLocacao">Valor Aluguel:</label>
</div>
		
		
			<div class="form-floating col-md-4 mb-3">
                  <select class="form-select" id="Tipo" name="Tipo" aria-label="Floating label select example">
                    <option selected> -- Selecione --</option>
                    <option value="1">Casa</option>
                    <option value="2">Apartamento</option>
                    <option value="3">Flat</option>
                     <option value="4">Casa em Condomínio</option>
                     <option value="5">Loja</option>
                     <option value="6">Galpão</option>
                      <option value="7">Terreno</option>
                       <option value="8">Estúdio</option>
                  </select>
  <label for="Tipo">Tipo</label>
</div>
		<div class="form-floating col-md-4 mb-3">
           <select class="form-select" id="Finalidade" name="Finalidade" aria-label="Floating label select example">
                    <option selected> -- Selecione --</option>
                    <option value="1">Residencial</option>
                    <option value="2">Comercial</option>
                    
                  </select>
  <label for="Finalidade">Finalidade</label>
</div>
<div class="form-floating col-md-4 mb-3">
				<input type="text" class="form-control" id="CEP"
					name="CEP"autocomplete="cep" required> <label for="CEP" class="form-label">CEP:</label>
					<div id="msgCep"></div>
			</div>
			<div class="form-floating col-md-6 mb-3">
				<input type="text" class="form-control" id="localidade"
					name="localidade" required> <label for="localidade" class="form-label">Cidade:</label>
			</div>
			<div class="form-floating col-md-6 mb-3">
				 <select class="form-select" id="uf" name="uf" aria-label="Floating label select example">
	<option value="AC">Acre</option>
    <option value="AL">Alagoas</option>
    <option value="AP">Amapá</option>
    <option value="AM">Amazonas</option>
    <option value="BA">Bahia</option>
    <option value="CE">Ceará</option>
    <option value="DF">Distrito Federal</option>
    <option value="ES">Espírito Santo</option>
    <option value="GO">Goiás</option>
    <option value="MA">Maranhão</option>
    <option value="MT">Mato Grosso</option>
    <option value="MS">Mato Grosso do Sul</option>
    <option value="MG">Minas Gerais</option>
    <option value="PA">Pará</option>
    <option value="PB">Paraíba</option>
    <option value="PR">Paraná</option>
    <option value="PE">Pernambuco</option>
    <option value="PI">Piauí</option>
    <option value="RJ">Rio de Janeiro</option>
    <option value="RN">Rio Grande do Norte</option>
    <option value="RS">Rio Grande do Sul</option>
    <option value="RO">Rondônia</option>
    <option value="RR">Roraima</option>
    <option value="SC">Santa Catarina</option>
    <option value="SP">São Paulo</option>
    <option value="SE">Sergipe</option>
    <option value="TO">Tocantins</option>
    <option value="EX">Estrangeiro</option>
				 </select>
				  <label for="floatingSelect">Estado:</label>
			</div>
			
			<div class="form-floating col-md-6 mb-3">
				<input type="text" class="form-control" id="logradouro" 
					name="logradouro" required> <label for="logradouro" class="form-label">Logradouro:</label>
			</div>
			<div class="form-floating col-md-6 mb-3">
				<input type="text" class="form-control" id="bairro" name="bairro" required> <label
					for="bairro" class="form-label">Bairro:</label>
			</div>
				<div class="form-floating mb-3">
  <textarea class="form-control" id="MaisInformacoes" name="MaisInformacoes"  style="height: 100px"></textarea>
  <label for="MaisInformacoes">Mais Informações</label>
</div>

   <div class="mb-3">
  <label for="formFileMultiple" class="form-label"></label>
  <input class="form-control" type="file" id="formFileMultiple" multiple>
</div>

<div class="form-floating col-md-6 mb-3">
           <select class="form-select" id="status_aluguel" name="status_aluguel" aria-label="Floating label select example">
                    <option selected> -- Selecione --</option>
                    <option value="1">Indisponivel</option>
                    <option value="2">Alugado</option>
                    <option value="2">Alugando</option>
                   <option value="2">Alugando c/ Contrato Vencido</option>
                    
                    
                  </select>
  <label for="status_aluguel">Status Aluguel</label>
  </div>
  <div class="form-floating col-md-6 mb-3">
           <select class="form-select" id="status_compra" name="status_compra" aria-label="Floating label select example">
                    <option selected> -- Selecione --</option>
                    <option value="1">Indisponivel</option>
                    <option value="2">A Venda</option>
                    <option value="2">Vendido</option>
                    <option value="2">Venda Cancelada</option>
                    
                  </select>
  <label for="status_compra">Status Compra</label>
  </div>
			
			<input type="hidden" name="action" value="insert">
			<div class="col-12 text-center">
				<button type="submit" class="btn text-white"
					style="background-color: #08283B">Cadastrar</button>
			</div>
		</form>
	</div>

                 <script>

        	
                 $(document).ready(function() {
                	    // Script para obter informações do CEP
                	    $("#CEP").blur(function(event) {
                	        let cepStr = $(event.target).val().trim();
                	        if (cepStr.trim().replace("-", "").match(/^[\d]{8}$/g)) {
                	            let url = "https://viacep.com.br/ws/" + cepStr + "/json/";
                	            $.get(url, function(data, status) {
                	                $("#logradouro").val(data.logradouro);
                	                $("#bairro").val(data.bairro);
                	                $("#localidade").val(data.localidade);
                	                $("#uf").val(data.uf);
                	            });
                	            validCep = true;
                	            $(event.target).css("color", "black");
                	            $("#msgCep").hide();
                	        } else {
                	            $(event.target).css("color", "red");
                	            $(event.target).focus();
                	            $("#msgCep").html("Cep Inválido!").css("color", "red");
                	            $("#msgCep").show();
                	            validCep = false;
                	        }
                	    });

                	    // Script para enviar dados do formulário de contato
                	    $("#frmImovel").submit(function(event) {
                	        event.preventDefault();
                	        var dados = $("#frmImovel").serialize();
                	        console.log(dados);
                	        var url = "imoveis/add";
                	        $.post(url, dados, function(dataResponse) {
                	            if (dataResponse.saved === true) {
                	                alert("Dado Cadastrado com Sucesso!");
                	            } else {
                	                alert("Não Cadastrado! Inclua todos os Dados!");
                	            }
                	        }, "json")
                	        .fail(function(data, textStatus, errorThrown) {
                	            console.log("Resposta do Servidor: " + data.responseText);
                	            // alert("Ocorreu um erro na requisição.");
                	        });
                	    });
                	});
                			
			
		</script>
       
</body>
</html>