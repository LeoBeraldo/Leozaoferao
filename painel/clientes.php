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


<!-- Main Content -->
<div align="center" style="padding:20px; margin-top:120px;" >
 
        <div class="col-md-10"> 
      <section class="section" >


            <!-- inicio topo menu -->
            <?php
            
            require_once('topo.php');

            ?>
      
            <!-- fim topo menu -->


           <br>
          <!-- INICIO TABELA -->
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
                           
                            <th>Criado</th>
                          
                            <th>Nome</th>
                            <th>CPF</th>
                            <th>Whatsapp</th>
                            <th>Mais</th>
                            <th>Enviar Pedido</th>
                           
                           
                          </tr>
                        </thead>
                        <tbody>
                            
                          
                          <tr>
                            <td>7</td>
                           
                            <td>00/00/0000</td>
                            <td>Nome do Cliente</td>
                            <td>88888888888</td>
                            <td>(11)0000-0000</td>
                            
                            <td><a href="#" data-toggle="modal" data-target="#ver">Analisar</a></td>
                                                   
                
                            <td>
                                <form action="filtros/enviar.php" method="post">
                                 <input type="hidden" name="id" value="7">
                                 <button type="submit" class="btn btn-icon btn-success">Enviar Pedido</button>
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

    
    

        <!-- basic modal -->
        <div class="modal fade" id="ver" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
          aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                 
                    
                            <p>Criado(a): 00/00/0000</p>
                            <p>Nome: Nome do Cliente</p>   
                            <p>CPF: 77777777</p>   
                            <p>Whats: (11) 777777777777</p>   
                            <p>E-mail: email@NomedoCliente</p>   
                            <p>Endereço: Rua 11, 1140</p>   
                            <p>CEP: 77777777</p>   
                            <p>Estado: Paraná</p>   
                            <p>Cidade: Curitiba</p>   
                        
                      
              </div>
              <div class="modal-footer bg-whitesmoke br">
           
                <button type="button" class="btn btn-danger" data-dismiss="modal">x</button>
              </div>
            </div>
          </div>
        </div>
       
<!-- FIM MODAL SUPORTE MAYKONSILVEIRA.COM.BR MAYKON SILVEIRA--->
                          

  <script src="assets/js/custom.js"></script>
  <script src="assets/js/app.min.js"></script>
 
  

</body>
</html>

<?php
ob_end_flush();
?>