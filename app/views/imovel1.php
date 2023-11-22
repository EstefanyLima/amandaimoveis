<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Amanda Imóveis - Locação</title>
<link rel="stylesheet" href="public/assets/css/style.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
<link rel="stylesheet" type="text/css" href="public/assets/css/bootstrap.min.css">
<script src="public/assets/js/bootstrap.bundle.min.js"></script>
<script src="public/assets/js/script.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/remixicon/fonts/remixicon.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<style>
.carousel-item{
    max-height: 680px;
    max-width: 1080px;
}
.im-dois{
   background: rgba(255, 255, 255, 1);
	width: 100%;
	padding: 20px;
	margin: 0 auto;
	position: relative;
	-webkit-border-radius: 10px;
	-moz-border-radius: 10px;
	border-radius: 10px;
	-webkit-box-shadow: 0px 0px 40px rgba(0, 0, 0, 0.15);
	-moz-box-shadow: 0px 0px 40px rgba(0, 0, 0, 0.15);
	box-shadow: 0px 0px 40px rgba(0, 0, 0, 0.15);
}
 .formcd{
   background: rgba(255, 255, 255, 1);
	max-width: 450px;
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
						<li class="nav-item"><a class="nav-link text-dark" href="#"><i
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
<div class="container mt-4" style="padding-top: 6%;">
		<nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
  <ol class="breadcrumb mt-4">
    <li class="breadcrumb-item mt-5"><a href="home"style="color: black;  text-decoration: none;">Home</a></li>
    <li class="breadcrumb-item active mt-5" aria-current="page">Casa para alugar</li>
  </ol>
</nav>

<div class="row justify-content-center align-items-center">
  <!-- Início do Carrossel -->
  <div class="col-lg-8 p-0 my-auto">
    <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="public/assets/images/itanhaem.png" class="d-block w-100" alt="Primeira Imagem">
        </div>
        <div class="carousel-item">
          <img src="public/assets/images/itanhaem2.png" class="d-block w-100" alt="Segunda Imagem">
        </div>
            <div class="carousel-item">
          <img src="public/assets/images/itanhaem3.png" class="d-block w-100" alt="Segunda Imagem">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Anterior</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Próximo</span>
      </button>
    </div>
  </div>
  <!-- Fim do Carrossel -->
</div>



  <div class="row">
    <div class="col-sm mb-4 mt-4 p-3 m-4 im-dois">
    <div class="lc-block">
      <div editable="rich">
        <h1 class="text-center">Casa para alugar em Itanhaém</h1>
        <div class="price mb-2">
          <i class="bi bi-tag-fill m-2" style="color: #08283B;"></i><span style="color: #08283B">R$1200.00</span>
        </div>
        <div class="price mb-2">
          <i class="ri-fullscreen-line m-2" style="color: #08283B;"></i><span style="color: #08283B">60 m²</span>
        </div>
             <div class="price mb-2">
             <i class="ri-hotel-bed-line m-2"></i><span style="color: #08283B">2</span>
        </div>
                <div class="price mb-2">
          <i class="fa fa-bath m-2" style="color: #08283B;"></i><span style="color: #08283B">2</span>
        </div>
        
        <p class="lead">Lorem ipsum dolor sit amet Neque porro quisquam est qui dolorem Lorem int ipsum dolor sit amet when an unknown printer took a galley of type. Vivamus id tempor felis. Cras sagittis mi sit amet malesuada mollis. Mauris porroinit consectetur cursus tortor vel interdum.</p>
      </div>
    </div>

    </div>
    <div class="col-sm formcd mb-4 mt-4">
    <h2 class="text-center">Tem interesse? Entre em contato!</h2>
		<form class="row g-2 mt-2" id="frmContato">
		<input type="hidden" name="idContato" value="0">
			<div class="form-floating col-md-12 mb-3">
				<input type="text" class="form-control" id="nome" name="nome" required> <label
					for="nome" class="form-label">Nome:</label>
			</div>
			<div class="form-floating col-md-12 mb-3">
				<input type="email" class="form-control" id="email" name="email"  required> <label
					for="email" class="form-label">Email:</label>
			</div>
			<div class="form-floating col-md-12 mb-3">
				<input type="text" class="form-control" id="telefone"
					name="telefone" required> <label for="telefone" class="form-label">Telefone:</label>
			</div>
				<input type="hidden" name="action" value="insert">
			<div class="col-12 text-center">
				<button type="submit" class="btn text-white"
					style="background-color: #08283B">Cadastrar</button>
			</div>
		</form>
    </div>
  </div>
</div>
<!-- cards de cadastrar imovel e encomenda -->
<section style="background-color: #eee;">
<div class="container">
<div class="row justify-content-center " >
  <div class="col-sm-4 mt-4 mb-4">
    <div class="card im-dois">
      <div class="card-body">
      <i class="bi bi-building-fill-gear"style="font-size: 40px;"></i>
        <h5 class="card-title"style="color: #000;">Seu Imóvel à Medida</h5>
        <p class="card-text">Descreva a propriedade que você está procurando e nós o notificaremos assim que a encontrarmos</p>
        <a href="contato" class="btn"style="color: #08283B;">Encomende seu Imóvel <i class="bi bi-arrow-right"></i></a>
        <hr style="border-top: 2px solid black;">
      </div>
    </div>
  </div>
  <div class="col-sm-4 mt-4">
    <div class="card im-dois">
      <div class="card-body">
      <i class="bi bi-building-fill-up"style="font-size: 40px;"></i>
        <h5 class="card-title"style="color: #000;">Cadastre seu imóvel</h5><br>
        <p class="card-text">Anuncie Conosco! Descobriremos a Melhor Oferta para Você</p>
        <a href="anunciarimovel" class="btn"style="color: #08283B;">Cadastre seu Imóvel <i class="bi bi-arrow-right"></i></a>
         <hr style="border-top: 2px solid black;">
      </div>
    </div>
  </div>
</div>
</div>
	<!-- fim de cards de cadastrar imovel e encomenda -->
  </section>

<!--  footer -->
 <div class=" pt-5 pb-5 footer"style="background-color:#141414">
<div class="container">
  <div class="row">
    <div class="col-sm">
         <img id="img3" src="public/assets/images/logobranco.png">
          <h6 style="font-size: 100%;" class="pr-5 text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ac ante mollis quam tristique convallis </h6>
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
    <a class="text-white" href="https://hostdeprojetosdoifsp.gru.br/starbridge/home.php">StarBridge</a></small></p>
    </div>
</div>
  </div>
</div>

  <!--  fim footer -->
	
</body>
</html>