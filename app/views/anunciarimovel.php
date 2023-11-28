<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Imóveis - Anunciar</title>
<link rel="shortcut icon" href="public/assets/images/imglogo.ico">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="public/assets/css/style.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
<link rel="stylesheet" type="text/css" href="public/assets/css/bootstrap.min.css">
<script src="public/assets/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<style>
body{
 background-color: #ffff;
}
 .formcd{
   background: rgba(255, 255, 255, 1);
	max-width: 850px;
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
<body>

<!-- menu offcanvas -->
	<nav class="navbar bg-white shadow-sm fixed-top p-2 navbar-dark">
  <div class="container-fluid">
   <img class="img2" src="public/assets/images/logotxt.png"> 
   <img class=" navbar-brand img ms-auto" src="public/assets/images/imglogo.png">
   <div class="p-3 ms-auto">
				<button type="button" class="btn" data-bs-toggle="modal"
					data-bs-target="#myModal" 
					style="border-color: #08283B;  border-width: 2px; font-size: 110%; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;"
					>Entrar</button>
			</div>
    <button class="navbar-toggler" type="button" style="background: #08283B;" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
      <h5 class="offcanvas-title fw-bold text-dark" style="color: #fff;"
						id="offcanvasDarkNavbarLabel">Amanda Imóveis</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
						<li class="nav-item"><a class="nav-link text-dark" style="font-size: 1.2em" href="home"><i
								class="bi bi-house-door-fill"></i> Home</a></li>
						<li class="nav-item"><a class="nav-link text-dark" style="font-size: 1.2em" href="imoveis">
								<i class="bi bi-houses-fill"></i> Imóveis
						</a></li>
						<li class="nav-item"><a class="nav-link text-dark"
							style="font-size: 1.2em" href="#"><i class="bi bi-house-check-fill"></i>
								Cadastrar Imóvel</a></li>
						<li class="nav-item"><a class="nav-link text-dark" style="font-size: 1.2em" href="contato"><i
								class="bi bi-envelope-fill"></i> Contato</a></li>
						<li class="nav-item"><a class="nav-link text-dark"  style="font-size: 1.2em" href="sobrenos"><i
								class="bi bi-people-fill"></i> A Imobiliária</a></li>
					</ul>
      </div>
    </div>
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
						<!-- <li class="nav-item" role="presentation">
							<button class="nav-link" id="contact-tab" data-bs-toggle="tab"
								data-bs-target="#contact" type="button" role="tab"
								aria-controls="contact" aria-selected="false">Recuperar senha</button>
						</li>  -->
					</ul> 
					<!--  Entrar -->
					<div class="tab-content" id="myTabContent">
						<div class="tab-pane fade show active" id="home" role="tabpanel"
							aria-labelledby="LoginTab">
							<form id="LoginTab">
								<input type="hidden" name="acao" value="login">
								<div class="form-group">
									<div class="form-floating mb-3 mt-3">
										<input type="email" class="form-control rounded-3"
											id="floatingInput" placeholder="name@example.com"
											name="email"> <label for="floatingInput">Email: </label>
									</div>
									<div class="form-floating">
										<input type="password" class="form-control rounded-3"
											id="floatingPassword" placeholder="Password" name="senha"> <label
											for="floatingPassword">Senha:</label>
									</div>
						<div class="form-floating col-md-12 mb-3 mt-3">
                  <select class="form-select" id="tipoUsuarioLogin" name="tipoUsuarioLogin" aria-label="Floating label select example">
                    <option value="cliente">Cliente</option>
                    <option value="proprietario">Proprietário</option>
                    <option value="funcionario">Funcionário</option>
                  </select>
  <label for="tipo">Tipo</label>
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


<section style="padding-top: 6%">

<div class="container">
<nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
  <ol class="breadcrumb mt-5">
    <li class="breadcrumb-item mt-5"><a href="home"style="color: black;  text-decoration: none;">Home</a></li>
    <li class="breadcrumb-item active mt-5" aria-current="page">Cadastrar Imóvel</li>
  </ol>
</nav></div>

<!-- Cadastro de imoveis <!-->
	<div class="container formcd mt-4 mb-3">
		<form class="row g-2" id="frmImovel">
			<input type="hidden" name="idImovel" value="0">
            <input type="hidden" name="ProprietarioId" value="0">
			
			<h2 class="text-center">Cadastrar Imóvel</h2>
			<div class="form-floating col-md-6 mb-3">
				<input type="text" class="form-control" id="Nome"
					name="Nome" id="Nome" required> <label for="Nome"
					class="form-label">Nome Completo:</label>
			</div>
			<div class="form-floating col-md-6 mb-3">
				<input type="text" class="form-control" id="CPF"
					name="CPF" required> <label for="CPF" class="form-label">CPF:</label>
			</div>
				<div class="form-floating col-md-6 mb-3">
                  <select class="form-select" id="Pretende" name="Pretende" aria-label="Floating label select example">
                    <option selected> -- Selecione --</option>
                    <option value="1">Alugar</option>
                    <option value="2">Vender</option>
                    <option value="3">Alugar e Vender</option>
                  </select>
  <label for="floatingSelect">Pretende</label>
</div>
					<div class="form-floating col-md-6 mb-3">
    <input type="number" id="ValorVenda" class="form-control" name="ValorVenda" />
    <label class="form-label" for="ValorVenda">Valor Venda:</label>
</div>
			<div class="form-floating col-md-6 mb-3">
    <input type="number" id="ValorLocacao" class="form-control" name="ValorLocacao" />
    <label class="form-label" for="ValorLocacao">Valor Aluguel:</label>
</div>
		
		
			<div class="form-floating col-md-6 mb-3">
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
		<div class="form-floating col-md-6 mb-3">
           <select class="form-select" id="Finalidade" name="Finalidade" aria-label="Floating label select example">
                    <option selected> -- Selecione --</option>
                    <option value="1">Residencial</option>
                    <option value="2">Comercial</option>
                    
                  </select>
  <label for="Finalidade">Finalidade</label>
</div>
<div class="form-floating col-md-6 mb-3">
				<input type="text" class="form-control" id="CEP"
					name="CEP"autocomplete="cep" required> <label for="CEP" class="form-label">CEP:</label>
					<div id="msgCep"></div>
			</div>
			<div class="form-floating col-md-6 mb-3">
				<input type="text" class="form-control" id="localidade"
					name="localidade" required> <label for="localidade" class="form-label">Cidade:</label>
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
	</section>
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
       

<!--  footer -->

 
 <div class="mt-5 pt-5 pb-5 footer"style="background-color:#141414">
<div class="container">
  <div class="row">
    <div class="col-sm">
         <img id="img3" src="public/assets/images/logobranco.png">
          <h6 style="font-size: 100%;" class="pr-5 text-white">Sua casa dos sonhos está a um passo de distância. Conte conosco para encontrar o lar perfeito. Sua satisfação é a nossa prioridade. </h6>
      <p><a href="#"><i class="fa fa-facebook-square mr-1"></i></a><a href="#"><i class="fa fa-linkedin-square"></i></a></p>
    </div>
    <div class="col-sm text-white mt-3">
      <h4 class="mt-lg-0 mt-sm-4">Contato</h4><br>
      <h5 style="font-size: 115%;">Amanda Barbosa dos Santos Imobiliária</h5>
      <h5 style="font-size: 115%;">(11) 98328-1626</h5>
      <h5 style="font-size: 115%;">B.s.Amanda@bol.com.br</h5>
    </div>
    <div class="col-sm mt-3">
          <h4 class="mt-lg-0 mt-sm-4 text-white">Localizacão</h4><br>
    
<div id="contact" class="map">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3661.660504595074!2d-46.3914681!3d-23.4004959!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce884f63a47bad%3A0xdbe7735e1d239e49!2sAv.%20Serra%20da%20Mantiqueira%2C%20310%20-%20Vila%20Carmela%20I%2C%20Guarulhos%20-%20SP%2C%2007178-540!5e0!3m2!1spt-BR!2sbr!4v1700695884711!5m2!1spt-BR!2sbr" width="350" height="150" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>    <br />
    <small>
        <a href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;aq=0&amp;oq=twitter&amp;sll=28.659344,-81.187888&amp;sspn=0.128789,0.264187&amp;ie=UTF8&amp;hq=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;t=m&amp;z=15&amp;iwloc=A"></a>
    </small>
</div>

    </div>    
    </div>
<div class="row mt-5 justify-content-center">
    <div class="col text-center">
        <p class=""><small class="text-white">© 2023 Copyright:
            <a class="text-white" href="https://hostdeprojetosdoifsp.gru.br/starbridge/home.php">StarBridge</a></small></p>
    </div>
</div>

  </div>
</div>
            
  

</body>
</html>