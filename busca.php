<?php

  if (isset($_GET['nome_inteiro2'])) {

      $nome = $_GET['nome_inteiro2'];
      $pesquisa = $_GET['pesquisa-again'];

  }else{

  $nome = $_POST['nome_usuario'];
  $cidade = '';
  $pesquisa = '';
  $nome_inteiro = '';
  $nome_usuario = '';


  $pesquisa = $_POST['pesquisa'];

  $cidade = $_POST['cidade_usuario'];
}
 ?>
<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Resultados</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-2.2.4.js"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-2.2.4.min.js"></script>
    <link rel="stylesheet" href="css/nav-busca.css">
    <script type="text/javascript" src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js">

    </script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>


<script src="js/bootoast.min.js"></script>
<script src="js/bootoast.js"></script>


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
 <link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/readable/bootstrap.min.css" rel="stylesheet" integrity="sha384-Li5uVfY2bSkD3WQyiHX8tJd0aMF91rMrQP5aAewFkHkVSTT2TmD2PehZeMmm7aiL" crossorigin="anonymous">

  </head>
  <body>

<div class="top-filter tfilter-box">
    <div class="container">
        <div class="row ">
          <form class="" action="busca.php?filtro=pesquisa" method="get">

            <div class="col-sm-3">
              <div class="row">
                <div class="col-md-12">
                  <input name="pesquisa-again" class="form-control" placeholder="Pesquisar novamente" type="text">
                  <input type="text" name="nome_inteiro2" value="<?php echo $nome; ?>" style="display:none;">
                </div>
              </div>
            </div>

            <div class="col-sm-3">
              <button class="btn btn-raised ripple-effect btn-default btn-block" type="submit">
                OK
              </button>
            </div>

          </form>

            <!-- /.col 3 -->
            <div class="col-sm-3">
              <a class="btn btn-raised ripple-effect btn-default btn-block" href="finalizar-pedido.php">
                Finalizar Pedido
              </a>
            </div>
            <!-- /.col 1 -->
        </div>
    </div>
</div>

    <div class="page-header"style="">
          <div class="container" >
              <div class="row">
                  <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                      <div>
                          <h2 style="font-weight: lighter;"><strong><?php echo $nome; ?>, </strong>estes são alguns resultados para: <strong><?php echo $pesquisa; ?></strong></h2>
                      </div>
                  </div>
              </div>
          </div>
      </div>
    <div class="container-fluid">


    <div class="row">
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="img/produto-01.png" class="img-responsive">
                        </div>
                        <div class="col-md-8">
                            <h6>Ervilha</h6>
                            <p style="font-size: 12px;">Ervilha</p>
                            <button class="btn btn-primary btn-xs">
                                <i class="fa fa-plus" aria-hidden="true"></i>
                                Add</button>
                            <button onclick="location='finalizar-pedido.php'" class="btn btn-success btn-xs">
                                <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                Comprar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="img/produto-02.png" class="img-responsive">
                        </div>
                        <div class="col-md-8">
                            <h6>Aipo</h6>
                            <p style="font-size: 12px;">Aipo</p>
                            <button class="btn btn-primary btn-xs">
                                <i class="fa fa-plus" aria-hidden="true"></i>
                                Add</button>
                            <button onclick="location='finalizar-pedido.php'" class="btn btn-success btn-xs">
                                <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                Comprar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="img/mirtilo.jpg" class="img-responsive">
                        </div>
                        <div class="col-md-8">
                            <h6>Mirtilo</h6>
                            <p style="font-size: 12px;">Mirtilo</p>
                            <button class="btn btn-primary btn-xs">
                                <i class="fa fa-plus" aria-hidden="true"></i>
                                Add</button>
                            <button onclick="location='finalizar-pedido.php'" class="btn btn-success btn-xs">
                                <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                Comprar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="img/tomate.png" class="img-responsive">
                        </div>
                        <div class="col-md-8">
                            <h6>Tomate</h6>
                            <p style="font-size: 12px;">Tomate</p>
                            <button class="btn btn-primary btn-xs">
                                <i class="fa fa-plus" aria-hidden="true"></i>
                                Add</button>
                            <button onclick="location='finalizar-pedido.php'" class="btn btn-success btn-xs">
                                <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                Comprar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="img/produto-06.jpg" class="img-responsive">
                        </div>
                        <div class="col-md-8">
                            <h6>Remix Frutas</h6>
                            <p style="font-size: 12px;">Remix</p>
                            <button class="btn btn-primary btn-xs">
                                <i class="fa fa-plus" aria-hidden="true"></i>
                                Add</button>
                            <button onclick="location='finalizar-pedido.php'" class="btn btn-success btn-xs">
                                <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                Comprar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="img/produto-07.jpg" class="img-responsive">
                        </div>
                        <div class="col-md-8">
                            <h6>Cookies</h6>
                            <p style="font-size: 12px;">Cookies</p>
                            <button class="btn btn-primary btn-xs">
                                <i class="fa fa-plus" aria-hidden="true"></i>
                                Add</button>
                            <button onclick="location='finalizar-pedido.php'" class="btn btn-success btn-xs">
                                <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                Comprar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="img/produto-08.jpg" class="img-responsive">
                        </div>
                        <div class="col-md-8">
                            <h6>Chia farinha</h6>
                            <p style="font-size: 12px;">Chia farinha</p>
                            <button class="btn btn-primary btn-xs">
                                <i class="fa fa-plus" aria-hidden="true"></i>
                                Add</button>
                            <button onclick="location='finalizar-pedido.php'" class="btn btn-success btn-xs">
                                <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                Comprar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<script type="text/javascript" src="js/flash.js">

</script>

<script type="text/javascript" src="js/flash.min.js">

</script>

<script type="text/javascript">

$( ".btn-primary" ).on( "click", function() {
  flash( 'Produto adicionado!!' ) ;
});

</script>
  </body>
</html>
