<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Amanda Imóveis - Imóveis</title>
<link rel="stylesheet" href="public/assets/css/style.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
<link rel="stylesheet" type="text/css" href="public/assets/css/bootstrap.min.css">
<script src="public/assets/js/bootstrap.bundle.min.js"></script>
<script src="public/assets/js/script.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<style>
.body{
  background-color:  #F0F0F0;
}
.card .btn {
border-radius: 30px;
padding-top: 10px;
padding-bottom: 10px;
padding-left: 20px;
padding-right: 20px;
border-width: 0px;
top: 0;
width: 100%;
position: relative;
-webkit-transition: .3s all ease;
-o-transition: .3s all ease;
transition: .3s all ease;
}

.card .btn:hover {
top: -2px;
-webkit-box-shadow: 0 15px 30px -10px rgba(0, 0, 0, 0.1);
box-shadow: 0 15px 30px -10px rgba(0, 0, 0, 0.1);
}

.btn:hover {
top: -2px;
-webkit-box-shadow: 0 15px 30px -10px rgba(0, 0, 0, 0.1);
box-shadow: 0 15px 30px -10px rgba(0, 0, 0, 0.1);
}

.cards-wrapper {
display: flex;
}

select {
margin-right: 10px;
text-align: center;
height: 100%;
margin-bottom: 23px;
-webkit-box-shadow: 0px 8px 20px 0px rgba(0, 0, 0, 0.15);
-moz-box-shadow: 0px 8px 20px 0px rgba(0, 0, 0, 0.15);
box-shadow: 0px 8px 20px 0px rgba(0, 0, 0, 0.15);
padding: 3px 3px;
background: #fff;
-webkit-border-radius: 10px;
-moz-border-radius: 10px;
border-radius: 10px;
float: left;
margin-right: 10px;
border: 1px solid #08283B;
}

#buscarBtn {
background-color: #08283B;
color: #fff;
border-radius: 10px;
-webkit-box-shadow: 0px 8px 20px 0px rgba(0, 0, 0, 0.15);
-moz-box-shadow: 0px 8px 20px 0px rgba(0, 0, 0, 0.15);
box-shadow: 0px 8px 20px 0px rgba(0, 0, 0, 0.15);
}

.img5 img {
height: 150%;
}

#cardsFiltrados .card .btn {
border: none;
}

.cardscenter{
	display: block;
	margin: 0;
}

#cardsFiltrados .card{
	width: 60%;
	margin: auto;
}
-* 

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
						<li class="nav-item"><a class="nav-link text-dark" href="contato"><i
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
	
	<!-- inicio do search de imoveis -->
	
	<div class="container">
	<section style="padding-top: 10%">
		<nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
  <ol class="breadcrumb mt-4">
    <li class="breadcrumb-item mt-5"><a href="home"style="color: black;  text-decoration: none;">Home</a></li>
    <li class="breadcrumb-item active mt-5" aria-current="page">Imóveis</li>
  </ol>
</nav>
		<form class="d-flex flex-wrap mt-4 justify-content-center"  method="get">
			<div class="selectpicker">
				<select id="tipoImovelSelect">
					<option selected hidden value="">Selecione o tipo de Imóvel</option>
					<option value="ALLIMOVEIS">Todos Tipos de Imóveis</option>
					<option value="CASA">Casas</option>
					<option value="APARTAMENTO">Apartamentos</option>
				</select>
			</div>
			<div class="select">
				<select id="bairroSelect">
					<option selected hidden value="">Selecione um Bairro</option>
					<option value="ALLBAIRROS">Todos os Bairros</option>
					<option value="AC">Água Chata</option>
					<option value="BV">Bela Vista</option>
					<option value="CS">Cidade Serôdio</option>
					<option value="FZ">Fortaleza</option>
					<option value="SJ">Jardim São Joao</option>
					<option value="MA">Macedo</option>
					<option value="MK">Mikail</option>
					<option value="PI">Pimentas</option>
					<option value="VR">Vila Rio</option>
				</select>
			</div>
			<div class="select">
				<select id="numQuartosSelect">
					<option selected hidden value="">N° de quartos</option>
					<option value="ALLQUARTOS">Todos os Quartos</option>
					<option value="UMQUARTO">1</option>
					<option value="DOISQUARTOS">2</option>
					<option value="TRESQUARTOS">3</option>
					<option value="QUATROMAISQUARTOS">4+</option>
				</select>
			</div>
			<button id="buscarBtn"  class="btn" type="submit">Buscar imóvel</button>
		</form>

		<div id="mensagemCamposVazios" class="mt-4"
			style="color: #08283B; font-size: 22px; display: none; text-align: center; padding-top: 20px;">
			Preencha todos os campos antes de realizar uma busca.</div>

		<div id="mensagemNenhumImovel" class="mt-4"
			style="color: #08283B; font-size: 22px; display: none; text-align: center; padding-top: 20px;">
			Não há imóveis disponíveis com as características desejadas.</div>

		<div class="cardscenter">
		<div id="cardsFiltrados" class="row mt-4">	
				<!-- Aqui os cards filtrados serão inseridos pelo JavaScript -->
		</div>
		</div>	
		<!-- fim do search de imoveis -->
		
	




</section>
		<!-- cards imoveis -->
			<div class="row mt-4">
				<div class="col-md-4 mt-3">
					<div class="card h-80 mt-4" id="imovel6">
						<img src="public/assets/images/casa.jpg" class="card-img-top"
							alt="Palm Springs Road">
						<div class="card-body">
							<div class="price mb-2">
								<span style="color: #08283B">$1,291,000</span>
							</div>
							<span class="d-block mb-2 text-black-50">5232 Endereco Fake, Ave.
								21BC</span> <span class="city d-block mb-3">São Paulo, Brasil</span>
							<p class="card-text">This is a longer card with supporting text
								below as a natural lead-in to additional content. This content
								is a little bit longer.</p>
							<a href="#" class="btn text-white"
								style="background-color: #08283B">Mais detalhes</a> <span
								class="tipo-imovel" data-tipo="APARTAMENTO"
								style="display: none;"></span> <span class="bairro"
								data-bairro="FZ" style="display: none;"></span> <span
								class="num-quartos" data-quartos="QUATROMAISQUARTOS"
								style="display: none;"></span>
						</div>
					</div>
				</div>
				<div class="col-md-4 mt-3">
					<div class="card h-80 mt-4" id="imovel6">
						<img src="public/assets/images/casa.jpg" class="card-img-top"
							alt="Palm Springs Road">
						<div class="card-body">
							<div class="price mb-2">
								<span style="color: #08283B">$1,291,000</span>
							</div>
							<span class="d-block mb-2 text-black-50">5232 Endereco Fake, Ave.
								21BC</span> <span class="city d-block mb-3">São Paulo, Brasil</span>
							<p class="card-text">This is a longer card with supporting text
								below as a natural lead-in to additional content. This content
								is a little bit longer.</p>
							<a href="#" class="btn text-white"
								style="background-color: #08283B">Mais detalhes</a> <span
								class="tipo-imovel" data-tipo="APARTAMENTO"
								style="display: none;"></span> <span class="bairro"
								data-bairro="FZ" style="display: none;"></span> <span
								class="num-quartos" data-quartos="QUATROMAISQUARTOS"
								style="display: none;"></span>
						</div>
					</div>
				</div>
				<div class="col-md-4 mt-3">
					<div class="card h-80 mt-4" id="imovel6">
						<img src="public/assets/images/casa.jpg" class="card-img-top"
							alt="Palm Springs Road">
						<div class="card-body">
							<div class="price mb-2">
								<span style="color: #08283B">$1,291,000</span>
							</div>
							<span class="d-block mb-2 text-black-50">5232 Endereco Fake, Ave.
								21BC</span> <span class="city d-block mb-3">São Paulo, Brasil</span>
							<p class="card-text">This is a longer card with supporting text
								below as a natural lead-in to additional content. This content
								is a little bit longer.</p>
							<a href="#" class="btn text-white"
								style="background-color: #08283B">Mais detalhes</a> <span
								class="tipo-imovel" data-tipo="APARTAMENTO"
								style="display: none;"></span> <span class="bairro"
								data-bairro="FZ" style="display: none;"></span> <span
								class="num-quartos" data-quartos="QUATROMAISQUARTOS"
								style="display: none;"></span>
						</div>
					</div>
				</div>
				<div class="col-md-4 mt-3">
					<div class="card h-80 mt-4" id="imovel6">
						<img src="public/assets/images/casa.jpg" class="card-img-top"
							alt="Palm Springs Road">
						<div class="card-body">
							<div class="price mb-2">
								<span style="color: #08283B">$1,291,000</span>
							</div>
							<span class="d-block mb-2 text-black-50">5232 Endereco Fake, Ave.
								21BC</span> <span class="city d-block mb-3">São Paulo, Brasil</span>
							<p class="card-text">This is a longer card with supporting text
								below as a natural lead-in to additional content. This content
								is a little bit longer.</p>
							<a href="#" class="btn text-white"
								style="background-color: #08283B">Mais detalhes</a> <span
								class="tipo-imovel" data-tipo="APARTAMENTO"
								style="display: none;"></span> <span class="bairro"
								data-bairro="FZ" style="display: none;"></span> <span
								class="num-quartos" data-quartos="QUATROMAISQUARTOS"
								style="display: none;"></span>
						</div>
					</div>
				</div>
				<div class="col-md-4 mt-3">
					<div class="card h-80 mt-4" id="imovel5">
						<img src="public/assets/images/casa.jpg" class="card-img-top"
							alt="Palm Springs Road">
						<div class="card-body">
							<div class="price mb-2">
								<span style="color: #08283B">$1,291,000</span>
							</div>
							<span class="d-block mb-2 text-black-50">5232 Endereco Fake, Ave.
								21BC</span> <span class="city d-block mb-3">São Paulo, Brasil</span>
							<p class="card-text">This is a longer card with supporting text
								below as a natural lead-in to additional content. This content
								is a little bit longer.</p>
							<a href="#" class="btn text-white"
								style="background-color: #08283B">Mais detalhes</a> <span
								class="tipo-imovel" data-tipo="CASA" style="display: none;"></span>
							<span class="bairro" data-bairro="SJ" style="display: none;"></span>
							<span class="num-quartos" data-quartos="DOISQUARTOS"
								style="display: none;"></span>
						</div>
					</div>
				</div>
				<div class="col-md-4 mt-3">
					<div class="card h-80 mt-4" id="imovel6">
						<img src="public/assets/images/casa.jpg" class="card-img-top"
							alt="Palm Springs Road">
						<div class="card-body">
							<div class="price mb-2">
								<span style="color: #08283B">$1,291,000</span>
							</div>
							<span class="d-block mb-2 text-black-50">5232 Endereco Fake, Ave.
								21BC</span> <span class="city d-block mb-3">São Paulo, Brasil</span>
							<p class="card-text">This is a longer card with supporting text
								below as a natural lead-in to additional content. This content
								is a little bit longer.</p>
							<a href="#" class="btn text-white"
								style="background-color:#08283B">Mais detalhes</a> <span
								class="tipo-imovel" data-tipo="APARTAMENTO"
								style="display: none;"></span> <span class="bairro"
								data-bairro="FZ" style="display: none;"></span> <span
								class="num-quartos" data-quartos="QUATROMAISQUARTOS"
								style="display: none;"></span>
						</div>
					</div>
				</div>
			</div>
		</div>
	<!-- fim cards imoveis -->


<!--  footer -->
 <div class="mt-5 pt-5 pb-5 footer"style="background-color:#141414">
<div class="container">
  <div class="row">
    <div class="col-sm">
         <img id="img3" src="public/assets/images/logobranco.png">
          <h6 style="font-size: 100%;" class="pr-5 text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ac ante mollis quam tristique convallis </h6>
      <p><a href="#"><i class="fa fa-facebook-square mr-1"></i></a><a href="#"><i class="fa fa-linkedin-square"></i></a></p>
    </div>
    <div class="col-sm text-white">
      <h4 class="mt-lg-0 mt-sm-4">Localização</h4><br>
      <h5 style="font-size: 115%;">Amanda Barbosa dos Santos Imobiliária</h5>
      <h5 style="font-size: 115%;">(11) 98328-1626</h5>
      <h5 style="font-size: 115%;">B.s.Amanda@bol.com.br</h5>
    </div>
    <div class="col-sm">
<div id="contact" class="map">
   <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d195601.04562769792!2d-75.11803295!3d40.002497999999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2s!4v1401521095201" width="100%" height="200%" style="border:0"></iframe>
    <br />
    <small>
        <a href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;aq=0&amp;oq=twitter&amp;sll=28.659344,-81.187888&amp;sspn=0.128789,0.264187&amp;ie=UTF8&amp;hq=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;t=m&amp;z=15&amp;iwloc=A"></a>
    </small>
</div>

    </div>    
    </div>
     <div class="row mt-5">
    <div class="col copyright">
      <p class=""><small class="text-white">© 2023 Copyright:
    <a class="text-white" href="https://hostdeprojetosdoifsp.gru.br/starbridge/home.php" style="text-decoration: none;">StarBridge</a></small></p>
    </div>
</div>
  </div>
</div>

  <!--  fim footer -->
	
</body>
</html>