<?php


ob_start();

require('../sheep_core/config.php');

?>
<!DOCTYPE html>
<html lang="pt-br" >
<head >
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>Painel Admin</title>
        <link rel="stylesheet" href="assets/css/app.min.css">
      
        <link rel="stylesheet" href="assets/css/style.css">
      
</head>
<body>



<div align="center" style="padding:20px; margin-top:120px;" >
 
        <div class="col-md-10"> 
      <section class="section" >


            <?php
            
            require_once('topo.php');

            ?>
      
            <!-- fim topo menu -->


           <br>

          <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Ativos</h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped table-hover" id="save-stage" style="width:100%;">
                        <thead>
                          <tr>
                            <th>Nº</th>  
                            <th>Capa</th>
                            <th>Criado</th>
                          
                            <th>Nome</th>
                            <th>Valor</th>
                            <th>Cliente</th>
                            <th>Nº Pedido</th>
                            <th>Status</th>
                           
                            
                           
                          </tr>
                        </thead>
                        <tbody>
                            <?php
                            
                            ?>
                          
                          <tr>
                            <td>7</td>
                            <td><img src="assets/img/sem-imagem.png" alt="" style="width:50px;"></td>
                            <td>00/09/0000</td>
                            <td>Produto</td>
                            <td>R$ 1.000.000</td>
                            <td>Nome do Cliente</td>
                            <td>1234567890</td>
                            <td> Pendente </td>
                                                   
                           
                            <td>
                             
                                <form action="" method="post">
                                 <input type="hidden" name="shepp-firewall" value="">
                                 <input type="hidden" name="idDelete" value="">
                               
                                 </form>
                            </td>
                          </tr>
                          
                         

                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          
      </section>
      </div>
        
       
    </div>

  <script src="assets/js/custom.js"></script>

 
  

</body>
</html>

<?php
ob_end_flush();
?>