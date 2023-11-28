<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title> Imóveis - Cadastrar Imóvel</title>
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
	
	<div class="container formcd mt-4 mb-3">
		<form class="row g-2" id="frmImovel">
            <input type="hidden" name="idip" value="0">
			
			<h2 class="text-center">Cadastrar Imóvel</h2>
			<div class="form-floating col-md-6 mb-3">
				<input type="text" class="form-control" id="nome"
					name="Nome" id="Nome" required> <label for="nome"
					class="form-label">Nome:</label>
			</div>
			<div class="form-floating col-md-6 mb-3">
				<input type="text" class="form-control" id="sobrenome"
					name="sobrenome" id="sobrenome" required> <label for="sobrenome"
					class="form-label">Sobrenome:</label>
			</div>
				<div class="form-floating col-md-6 mb-3">
				<input type="email" class="form-control" id="email"
					name="email" autocomplete="email" required> <label for="email" class="form-label">Email:</label>
			</div>
			<div class="form-floating col-md-6 mb-3">
				<input type="text" class="form-control" id="cpf"
					name="cpf" required> <label for="cpf" class="form-label">CPF:</label>
			</div>
				<div class="form-floating col-md-6 mb-3">
                  <select class="form-select" id="pretende" name="pretende" name="pretende" aria-label="Floating label select example">
                    <option selected> -- Selecione --</option>
                    <option value="1">Alugar</option>
                    <option value="2">Vender</option>
                    <option value="3">Alugar e Vender</option>
                  </select>
  <label for="pretende">Pretende</label>
</div>
					<div class="form-floating col-md-6 mb-3">
    <input type="number" id="valorvenda" class="form-control" name="valorvenda" />
    <label class="form-label" for="valorvenda">Valor Venda:</label>
</div>
			<div class="form-floating col-md-6 mb-3">
    <input type="number" id="valorlocacao" class="form-control" name="valorlocacao" />
    <label class="form-label" for="valorlocacao">Valor Aluguel:</label>
</div>
		
		
			<div class="form-floating col-md-6 mb-3">
                  <select class="form-select" id="tipo" name="tipo" aria-label="Floating label select example">
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
  <label for="tipo">Tipo</label>
</div>
		<div class="form-floating col-md-6 mb-3">
           <select class="form-select" id="finalidade" name="finalidade" aria-label="Floating label select example">
                    <option selected> -- Selecione --</option>
                    <option value="1">Residencial</option>
                    <option value="2">Comercial</option>
                    
                  </select>
  <label for="finalidade">Finalidade</label>
</div>
<div class="form-floating col-md-6 mb-3">
				<input type="text" class="form-control" id="cep"
					name="cep"autocomplete="cep" required> <label for="cep" class="form-label">CEP:</label>
					<div id="msgCep"></div>
			</div>
			<div class="form-floating col-md-6 mb-3">
				<input type="text" class="form-control" id="cidade"
					name="cidade" required> <label for="cidade" class="form-label">Cidade:</label>
			</div>
			<div class="form-floating col-md-6 mb-3">
				 <select class="form-select" name="uf" id="uf" aria-label="Floating label select example">
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
				  <label for="uf">Estado:</label>
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
  <textarea class="form-control" id="maisinformacoes" name="maisinformacoes"  style="height: 100px"></textarea>
  <label for="maisinformacoes">Mais Informações</label>
</div>

   <div class="mb-3">
  <label for="imagem"  class="form-label"></label>
  <input class="form-control" name="imagem"type="file" id="imagem" multiple>
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
			
			<input type="hidden" name="acao" value="insert">
			<div class="col-12 text-center">
				<button type="submit" class="btn text-white"
					style="background-color: #08283B">Cadastrar</button>
			</div>
		</form>
	</div>

	<!-- Fim cadastro de locatários <!-->
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

                	  
	    $("#frmImovel").submit(function(event) {
	        event.preventDefault();
	        var dados = $("#frmImovel").serialize();
	        console.log(dados);
	        var url = "imoveisprop/add";
	        $.post(url, dados, function(dataResponse) {
	            if (dataResponse.saved === true) {
	            	 alert("Proprietário Cadastrado com Sucesso!");
	            	 
	             
	            } else {
	                alert("Não Cadastrado! Inclua todos os Dados!");
	            }
	        }, "json")
	        .fail(function(data, textStatus, errorThrown) {
	            console.log("Resposta do Servidor: " + data.responseText);
	            //alert("Ocorreu um erro na requisição.");
	        });
	    });

	
	});
	
                			
			
		</script>
       
	
 </body>
 </html>