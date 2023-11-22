<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Amanda Imóveis - Sobre nós</title>
<link rel="stylesheet" href="public/assets/css/style.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
<link rel="stylesheet" type="text/css" href="public/assets/css/bootstrap.min.css">
<script src="public/assets/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<style>
body {
	background-color: #eee;
}

#card {
	min-height: 50vh;
	background-color: white;
	border-radius: 3%;
}

h2 {
	margin-top: 10px;
}

.msg {
	text-align: center;
	font-size: small;
	margin-top: 25px;
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

	<!-- fim menu offcanvas -->
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
						<li class="nav-item"><a class="nav-link text-dark" href="contato"><i
								class="bi bi-envelope-fill"></i> Contato</a></li>
						<li class="nav-item"><a class="nav-link text-dark" href="#"><i
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

	
	<section style="padding-top: 6%; background-color: #fff;">
	<div class="container">
			<nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
  <ol class="breadcrumb mt-4">
    <li class="breadcrumb-item mt-5"><a href="home"style="color: black;  text-decoration: none;">Home</a></li>
    <li class="breadcrumb-item active mt-5" aria-current="page">Entre em contato</li>
  </ol>
</nav>

	
		<div class="row align-items-center">
			<div class="col-md-6">
				<div class="mb-4">
					<div>
						<h4 class="fw-bold titulo mt-4">Aqui estão algumas razões pelas
							quais somos a escolha certa para ajudá-lo a encontrar o imóvel
							dos seus sonhos:</h4>
					</div>
				</div>

				<div
					class="lc-block d-sm-flex align-items-center mb-4 overflow-hidden position-relative">
					<div class="d-inline-flex">
						<div>
							<svg width="1.5em" height="1.5em" viewBox="0 0 16 16"
								fill="currentColor" xmlns="http://www.w3.org/2000/svg"
								lc-helper="svg-icon" style="color: #08283B;">
							<path fill-rule="evenodd"
									d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"></path>
							<path fill-rule="evenodd"
									d="M10.97 4.97a.75.75 0 0 1 1.071 1.05l-3.992 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.236.236 0 0 1 .02-.022z"></path>
						</svg>
						</div>

						<div class="ms-3 align-self-center" editable="rich">
							<p>
								<span style="color: black; font-weight: bold;"> Encontre o Seu
									Sonho:</span> Na nossa imobiliária, oferecemos uma ampla
								variedade de opções de imóveis. Se você está procurando a casa
								dos seus sonhos, um apartamento acolhedor, um terreno para
								construir sua própria casa ou um espaço comercial, temos o
								imóvel perfeito esperando por você.
							</p>
						</div>
					</div>
				</div>
				<div class="lc-block d-sm-flex align-items-center mb-4">
					<div class="d-inline-flex">
						<div>
							<svg width="1.5em" height="1.5em" viewBox="0 0 16 16"
								fill="currentColor" xmlns="http://www.w3.org/2000/svg"
								lc-helper="svg-icon" style="color: #08283B;">
							<path fill-rule="evenodd"
									d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"></path>
							<path fill-rule="evenodd"
									d="M10.97 4.97a.75.75 0 0 1 1.071 1.05l-3.992 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.236.236 0 0 1 .02-.022z"></path>
						</svg>
						</div>

						<div class="ms-3 align-self-center">
							<p>
								<span style="color: black; font-weight: bold;"> Guiamos Você em
									Cada Passo:</span> Com uma equipe de profissionais altamente
								qualificados e experientes, estaremos ao seu lado em todas as
								etapas do processo de compra. Desde a busca até a assinatura do
								contrato, estamos aqui para orientá-lo e responder a todas as
								suas perguntas.
							</p>
						</div>
					</div>
				</div>
				<div class="lc-block d-sm-flex align-items-center mb-4">
					<div class="d-inline-flex">
						<div>
							<svg width="1.5em" height="1.5em" viewBox="0 0 16 16"
								fill="currentColor" xmlns="http://www.w3.org/2000/svg"
								lc-helper="svg-icon" style="color: #08283B;">
							<path fill-rule="evenodd"
									d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"></path>
							<path fill-rule="evenodd"
									d="M10.97 4.97a.75.75 0 0 1 1.071 1.05l-3.992 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.236.236 0 0 1 .02-.022z"></path>
						</svg>
						</div>

						<div class="ms-3 align-self-center">
							<p>
								<span style="color: black; font-weight: bold;"> Negociação Justa
									e Transparente:</span> Nossa imobiliária valoriza a
								transparência e a justiça em todas as negociações. Queremos
								garantir que você obtenha o melhor negócio possível, sem
								surpresas desagradáveis.
							</p>
						</div>
					</div>
				</div>
			</div>
			<div class="mt-4 mt-md-0 col-md-6">
				<div class="lc-block px-4">
					<div class="position-relative mb-4">
						<div class=" position-absolute w-100 h-100 opacity-30 mt-4 ms-4"
							style="background: #08283B;"></div>
						<img class="position-relative img-fluid mt-2 mb-2"
							src="public/assets/images/fundo.png">
					</div>
				</div>
			</div>
		</div>
	</div>
	</section>
	
	<!-- missao, vissao e valores -->
	<section style="background-color: #eee;">
	<br><br><br>
	<div class="container">
		<div class="row mt-2">
			<div class="col-md-4 mb-5">
				<div class="p-lg-5 p-4 shadow" id="card">
					<div class="mb-4 mt-2">
						<p>
							Nossa <span style="color: black; font-weight: bold;">missão</span>
							é facilitar e enriquecer a vida de nossos clientes, ajudando-os a
							encontrar o lar dos seus sonhos ou o investimento imobiliário
							perfeito. Estamos comprometidos em oferecer serviços de
							qualidade, transparência e excelência, tornando o processo de
							compra, venda ou aluguel de imóveis uma experiência tranquila e
							gratificante.
						</p>
					</div>
				</div>
			</div>
			<div class="col-md-4  mb-5">
				<div class="p-lg-5 p-4 shadow" id="card">
					<div class="mb-4 mt-2">
						<p>
							Nosso <span style="color: black; font-weight: bold;">objetivo</span>
							é ser reconhecido como o parceiro de confiança em todos os
							aspectos do mercado imobiliário. Queremos ser a primeira escolha
							para clientes que buscam serviços imobiliários e conhecimento
							especializado. Buscamos constantemente a inovação, almejando
							expandir nossa presença para servir em todo o país.
						</p>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="p-lg-5 p-4 shadow" id="card">
					<div class="mb-4 mt-2">
						<p>
							<span style="color: black; font-weight: bold;">Excelência:</span>
							Buscamos a excelência, desde o atendimento ao cliente até a
							gestão de propriedades e marketing imobiliário. <span
								style="color: black; font-weight: bold;">Compromisso com o
								cliente:</span> Colocamos os interesses e necessidades de nossos
							clientes em primeiro lugar, oferecendo soluções personalizadas e
							superando suas expectativas. <br>
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	</section>
	<!-- fim de missao, visao e valores -->



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

