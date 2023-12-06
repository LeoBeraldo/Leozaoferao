<?php
ob_start();
session_start();
require('./sheep_core/config.php');


$ip = $_SERVER['REMOTE_ADDR'];

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loja ServiceTech</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

<?php
date_default_timezone_set('America/Sao_Paulo');

?>

    <!--- TOPO DO SITE --->

    <div class="header">
        <p class="logo">Meus Pedidos <br>
         <small > <a href="index.php" style="font-size:15px!important; color:#fff; text-decoration:none;">Volta a loja</a></small>
    
    </p>
       
        <div class="cart"><i class="fa fa-shopping-cart"></i>
            <p>7</p>
        </div>
    </div>

    <!--- FIM TOPO DO SITE --->

    <!--- CONTEUDO DO SITE --->

    <div class="container">

        <!--- LINHA PRODUTO DO SITE --->

        <div class="linha-produtos">

            <?php
            $ler = new Ler();
            $ler->Leitura('produtos');
            if ($ler->getResultado()) {
                foreach ($ler->getResultado() as $produto) {
                    $produto = (object) $produto;


            ?>

                    <!-- INICIO PRODUTO -->
                    <form action="filtros/criar.php" method="post">
                        <div class="corpoProduto">
                            <div class="imgProduto">
                                <img src="<?=HOME?>/uploads/<?=$produto->capa?>" alt="<?=$produto->nome?>" class="produtoMiniatura" />
                            </div>
                            <div class="titulo">
                                <p><?=$produto->nome?></p>
          
                            </div>
                        </div>
                    </form>
                    <!-- FIM PRODUTO -->

            <?php
                }
            }
            ?>

        </div>
        <!--- FIM LINHA PRODUTO DO SITE --->

        <!--- BARRA LATERAL DO SITE --->

        <div class="barraLateral">

            <div class="topoCarrinho">
                <p>Status da Entrega Nº 12345678</p>
            </div>
           
             
                
                <div class="item-carrinho-vazio">Seu pedido está sendo processado</div>
                <br>
             
                <div class="item-carrinho-vazio">Saiu para Entrega</div>

                <br>

                <a href="" class="button btn-final" target="_blank">Gerar Boleto / PIX</a>

              
              
              

           

            <div class="rodape">
                <h3>Total</h3>
                <h2>R$ 777</h2>
               
            </div>

          </div>

        <!--- FIM BARRA LATERAL DO SITE --->

    </div>

    <!--- FIM CONTEUDO DO SITE --->




</body>

</html>