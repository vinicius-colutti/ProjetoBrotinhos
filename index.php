<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <link rel="stylesheet" href="css/style.css">
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <section class="login-block">
    <div class="container">
	<div class="row">
		<div class="col-md-4 login-sec">
		    <h2 class="text-center">Vamos traçar seu perfil</h2>
	<form class="login-form" action="busca.php" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1" class="text-uppercase">Nos informe seu nome</label>
    <input required name="nome_usuario" type="text" class="form-control" placeholder="">

  </div>
  <div class="form-group">
    <label  class="text-uppercase">Em qual cidade você mora?</label>
    <input required name="cidade_usuario" type="text" class="form-control" placeholder="">
  </div>
  <div class="form-group">
    <label  class="text-uppercase">Qual a sua restrição alimentar?</label>
    <input required name="pesquisa" type="text" class="form-control" placeholder="">
  </div>

    <div class="form-check">

    <button type="submit" class="btn btn-login float-right">Buscar</button>
  </div>

</form>

		</div>
		<div class="col-md-8 banner-sec">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                 <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                  </ol>
            <div class="carousel-inner" role="listbox">
    <div class="carousel-item active">
      <img class="d-block img-fluid" src="http://alternativacasadonatural.com.br/wp-content/uploads/2016/06/Alimento-Natural-e-Organico-Alternativa-Casa-do-Natural-Vila-Madalena-SP-1-800x534.jpg" alt="First slide">
      <div class="carousel-caption d-none d-md-block">
        <div class="banner-text">
            <h2>Produtos voltados para a sua saúde!</h2>
            <p>Temos como objeto principal indicar e oferecer produtos 100% naturias e orgânicos, com base na sua necessidade alimentar</p>
        </div>
  </div>
    </div>

  </div>
            </div>

		</div>
	</div>
</div>
</section>
  </body>
</html>
