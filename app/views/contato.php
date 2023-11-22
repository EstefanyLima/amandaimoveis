<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Amanda Imóveis - Contato</title>
<link rel="stylesheet" href="public/assets/css/style.css">
<link rel="stylesheet"
	href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
<link rel="stylesheet" type="text/css"
	href="public/assets/css/bootstrap.min.css">
<script src="public/assets/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<style>
@import
	url('https://fonts.googleapis.com/css?family=Roboto:400,500,700,900&display=swap')
	;

.btn-primary:hover {
	color: #600202;
	background-color: #ffffff;
	border-color: #600202;
	-webkit-box-shadow: 0px 0px 20px rgba(0, 0, 0, .1);
	-moz-box-shadow: 0px 0px 20px rgba(0, 0, 0, .1);
	box-shadow: 0px 0px 20px rgba(0, 0, 0, .1);
}
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
						<li class="nav-item"><a class="nav-link text-dark" href="home"><i
								class="bi bi-house-door-fill"></i> Home</a></li>
						<li class="nav-item"><a class="nav-link text-dark" href="imoveis">
								<i class="bi bi-houses-fill"></i> Imóveis
						</a></li>
						<li class="nav-item"><a class="nav-link text-dark"
							href="anunciarimovel"><i class="bi bi-house-check-fill"></i>
								Cadastrar Imóvel</a></li>
						<li class="nav-item"><a class="nav-link text-dark" href="#"><i
								class="bi bi-envelope-fill"></i> Contato</a></li>
						<li class="nav-item"><a class="nav-link text-dark" href="sobrenos"><i
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
	

	<!-- form entre em contato -->
	<section style="padding-top: 6%">
	<div class="container">
			<nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
  <ol class="breadcrumb mt-4">
    <li class="breadcrumb-item mt-5"><a href="home"style="color: black;  text-decoration: none;">Home</a></li>
    <li class="breadcrumb-item active mt-5" aria-current="page">Entre em contato</li>
  </ol>
</nav>

		<div class="container formcd mb-2">
		<h2 class="text-center">Entre em contato</h2>
		<form class="row g-2 mt-2" id="frmContato">
		<input type="hidden" name="idContato" value="0">
			<div class="form-floating col-md-12 mb-3">
				<input type="text" class="form-control" id="nome" name="nome" required> <label
					for="nome" class="form-label">Nome:</label>
			</div>
			<div class="form-floating col-md-6 mb-3">
				<input type="email" class="form-control" id="email" name="email"  required> <label
					for="email" class="form-label">Email:</label>
			</div>
			<div class="form-floating col-md-6 mb-3">
				<input type="text" class="form-control" id="telefone"
					name="telefone" required> <label for="telefone" class="form-label">Telefone:</label>
			</div>
				<div class="form-floating mb-3">
  <textarea class="form-control" id="mensagem" name="mensagem" style="height: 100px"></textarea>
  <label for="mensagem">Mais Informações</label>
</div>
			<input type="hidden" name="action" value="insert">
			<div class="col-12 text-center">
				<button type="submit" class="btn text-white"
					style="background-color: #08283B">Cadastrar</button>
			</div>
		</form>
	</div>
	
</div>
</section>
	<!-- fim form entre em contato -->
	<script type="text/javascript">
	$(document).ready(function() {
	    $("#frmContato").submit(function(event) {
	        event.preventDefault();
	        var dados = $("#frmContato").serialize();
	        console.log(dados);
	        var url = "contatos/add";
	        $.post(url, dados, function(dataResponse) {
	            if (dataResponse.saved === true) {
	                alert("Dado Cadastrado com Sucesso!");
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
	        $("#profissao").val("");
	    }
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
      <h4 class="mt-lg-0 mt-sm-4">Localização</h4><br>
      <h5 style="font-size: 115%;">Amanda Barbosa dos Santos Imobiliária</h5>
      <h5 style="font-size: 115%;">(11) 98328-1626</h5>
      <h5 style="font-size: 115%;">B.s.Amanda@bol.com.br</h5>
    </div>
    <div class="col-sm mt-3">
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

  <!--  fim footer -->
	
	
</body>
</html>


