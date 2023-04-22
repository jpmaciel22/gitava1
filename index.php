<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link rel="shortcut icon" href="gato.png" type="image/x-icon">
    <link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"
/>
<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/#[[latestVersion]]#/mdb.min.css"
  rel="stylesheet"
/>
    <title>BORA MARMITILL!</title>
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
<center>
<!--<header><section class="header"><!--seção dos botões
<a target="_self" href="ava1celso.html"><li class="butoesheader">Home</li></a>
<a target="_blank" href="ava1celsomenu.html"><li class="butoesheader">Cardápio</li></a>
</header>-->
<nav class="navbar navbar-expand-lg navbar-light bg-info">
  <a id="menu" class="navbar-brand" href="#"><img src="Sem Título-2.png"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a id="menu" class="nav-link" href="ava1celso.html">Home <span class="sr-only"></span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="menu" href="index.php">Cardápio</a>
      </li>
      <li class="nav-item">
        <a id="menu" id="pesquisar" class="nav-link " href="quemsomos.html">Quem Somos?</a>
      </li>
    </ul>
  </div>
</nav>
</center>
  <!--</section>-->
        <section> <!--seção do menu-->
            <center>    
        <div id="fundo">
          <div class="d-table">
           <div class="d-table-row">
            <div class="d-table-cell">
              <div class="text-center text-white bebidas"><h2 class="letra">Bebidas</h2></div> 
            </div>
            <div class="d-table-cell">
              <div class="text-center text-white bebidas"><h2 class="letra">Marmitas</h2></div>
            </div>
            <div class="d-table-cell">
              <div class="text-center text-white bebidas paddingtextocheck"><h2 class="letra">Checkout</h2></div>
            </div>
          </div>
          
          <div class="d-table-row">
                <div class="d-table-cell p-3"><!--Bebidas-->
                  <div class="card" style="width: 18rem;">
                    <img src="cocacola.png" class="card-img-top" alt="Marmita">
                    <div class="card-body">
                      <h5 class="card-title">1 - Coca-Cola 500ml garrafa de vidro gelada</h5>
                      <p class="card-text strong">R$3,50</p>
                    </div>
                </div>
                <br>
                <div class="card" style="width: 18rem;">
                  <img src="guarana.png" class="card-img-top" alt="Marmita">
                  <div class="card-body">
                    <h5 class="card-title">2 - Guarana Antartica 500ml gelada</h5>
                    <p class="card-text strong">R$3,50</p>
                  </div>
                </div>
                <br>
                  <div class="card" style="width: 18rem;">
                    <img src="yulo.png" class="card-img-top" alt="Marmita">
                    <div class="card-body">
                      <h5 class="card-title">3 - Suco cítrico YULO 400ml gelado</h5>
                      <p class="card-text strong">R$3,50</p>
                    </div>
                </div>
              </div>

                <div class="d-table-cell p-3"><!--marmitas-->
                  <div class="card" style="width: 18rem;">
                    <img src="marmitas5.png" class="card-img-top" alt="Marmita">
                    <div class="card-body">
                      <h5 class="card-title">1 - Marmita de figado acebolado com batata frita</h5>
                      <p class="card-text strong">R$18,00</p>
                    </div>
                  </div>
                  <br>
                <div class="card" style="width: 18rem;">
                  <img src="marmitas2.jpg" class="card-img-top" alt="Marmita">
                  <div class="card-body">
                    <h5 class="card-title">2 - Marmita de churrasco com tropeiro</h5>
                    <p class="card-text strong">R$18,00</p>
                  </div>
              </div>
              <br>
              <div class="card" style="width: 18rem;">
                <img src="marmitas4.png" class="card-img-top" alt="Marmita">
                <div class="card-body">
                  <h5 class="card-title">3 - Marmita de batata com frango</h5>
                  <p class="card-text strong">R$18,00</p>
                </div>
            </div>
                </div>
                <section class="paddingcheckout">
                <div class="d-table-cell p-3"><!--checkout-->
                  <div class="input-group mb-3">
                    <div class="input-group-text">
                    <form action="index.php" method="get"> 
                      <form action="pedidofinalizado.php" method="get">
                    <input class="teste123" type="number" min="1" max="3" placeholder="Bebida" name="pedido1">
                    <input class="teste123"type="number" min="1" max="3" placeholder="Marmita" name="pedido2">
                    <input type="text" placeholder="Cliente" name="cliente">
                    <input type="submit" value="Finalizar seleção">
                    <table class="table">
                    <?php
                    if(isset($_GET['pedido1'])) $pedido1=$_GET['pedido1'];
                    else $pedido1 = "";
                    if(isset($_GET['pedido2'])) $pedido2=$_GET['pedido2'];
                    else $pedido2 = "";
                    if(isset($_GET['cliente'])) $cliente=$_GET['cliente'];
                    else $cliente = "";
                    $pedido1preco=3.50;
                    $pedido2preco=18.00;
                    $total=0.00;
                    //echo "> ".$_GET['pedido1']."*".$_GET['pedido2']."!<br>";
                    if(isset($_GET['pedido1']) && !empty($_GET['pedido1']) && isset($_GET['pedido2']) && !empty($_GET['pedido2'])){
                      $total="R$ ".$pedido1preco+$pedido2preco."0"; //modo simples
                    } elseif(isset($_GET['pedido1']) && !empty($_GET['pedido1'])){
                      $total="R$ ".number_format($pedido1preco,2,","); //testando number_format
                    } elseif(isset($_GET['pedido2']) && !empty($_GET['pedido2'])){
                      $total="R$ ".number_format($pedido2preco,2,",");
                        }
                      else{
                        $total="R$0,00";
                      }
                    
                   
                    ?>
                    
<thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Pedidos</th>
    </tr>
  </thead>
  <tbody>
    <tr>
<<<<<<< HEAD
      <th scope="row">Bebida</th>
      <td><?=$pedido1?></td> <!-- echo de uma variavel atalho-->
    </tr>
    <tr>
      <th scope="row">Marmita</th>
=======
      <th scope="row">Marmita :</th>
      <td><?=$pedido1?></td> <!-- echo de uma variavel atalho-->
    </tr>
    <tr>
      <th scope="row">Bebida :</th>
>>>>>>> acdfff36ca0aa25ddcf453e79e643ccf59b81f47
      <td><?php echo "$pedido2" ?></td>
    </tr>
    <tr>
      <th scope="row">Nome :</th>
      <td><?php echo "$cliente" ?></td>
    </tr>
    <tr>
      <th scope="row">Total :</th>
      <td><?php echo "$total" ?></td>
    </tr>
    
  </tbody>
</table>
<span><h7>OBS: O pagamento será feito no ato da retirada do pedido.</h7></span><br>
<span><h7>Aceitamos pix/dinheiro e todos os tipos de cartões.</h7></span><br><br>
<a href="pedidofinalizado.html" target="_blank"><button type="button" class="btn btn-primary btn-lg">Finalizar Pedido</button></a>
</form>


                  </div>
                  </form>  
                  </section>
                  <!--<a href="pedidofinalizado.html" target="_blank"><button type="button" class="btn btn-primary btn-lg">Finalizar Pedido</button></a>-->
                </div>
              </div>
              </div>
          <!--<div class="hstack gap-3">
            <div class="p-2">Mais populares</div>
            <div class="vr"></div>
            <div class="p-2">Marmitas</div>
            <div class="vr"></div>
            <div class="p-2">Checkout</div>
            <div class="vr"></div>-->  
        </div>
        
        
        
        
        
        
        
        
        </center> 
    </section>
    
    </center><!--começo do footer-->
<!-- Footer -->
<footer class="text-center text-lg-start bg-info text-muted">
  <!-- Section: Social media -->
  <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
    <!-- Left -->
    <div class="me-5 d-none d-lg-block">
      <!--<span class="me-4">Conecte-se conosco nas redes sociais:</span>-->

      <a href="https://www.facebook.com/" class="me-4 link-dark">
        <i class="fab fa-2x fa-facebook-f" title="Venha nos conhecer"></i>
      </a>
      <a href="https://web.whatsapp.com/" class="me-4 link-dark">
        <i class="fab fa-2x fa-whatsapp" title="Saiba como pedir" ></i>
      </a>
      <a href="https://www.instagram.com/" class="me-4 link-dark">
        <i class="fab fa-2x fa-instagram" title="Venha nos conhecer"></i>
      </a>

      
    </div>
    <!-- Right -->
  </section>
  </footer>
      
</body>
</html>