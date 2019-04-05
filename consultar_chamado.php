<?require_once "valida_acesso.php"?>

<?

  $chamados = array();
  //abrir o arquivo.txt
  $arquivo = fopen('arquivo.txt', 'r');

  //percorrer arquivo enquanto existir registros
  while(!feof($arquivo)){
    $registro = fgets($arquivo);
    $chamados[] = $registro;
  }

  fclose($arquivo);
?>
<html>
  <head>
    <meta charset="utf-8" />
    <title>App Help Desk</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
      .card-consultar-chamado {
        padding: 30px 0 0 0;
        width: 100%;
        margin: 0 auto;
      }
    </style>
  </head>

  <body>

  <?include_once "header.php"?>

    <div class="container">    
      <div class="row">

        <div class="card-consultar-chamado">
          <div class="card">
            <div class="card-header">
              Status Request
            </div>
            
            <div class="card-body">
              
              <? foreach($chamados as $chamado) {?>
                <? 
                  $chamado_dados = explode('#', $chamado);
                  
                  if($_SESSION['perfil_perm'] == 2){
                    if($_SESSION['id'] != $chamado_dados[0]){
                      continue;
                    }
                  }
                  if(count($chamado_dados) < 3){
                    continue;
                  }
                  ?>
                <div class="card mb-3 bg-light">
                  <div class="card-body">
                    <h5 class="card-title"><?=$chamado_dados[1]?></h5>
                    <h6 class="card-subtitle mb-2 text-muted"><?=$chamado_dados[2]?></h6>
                    <p class="card-text"><?=$chamado_dados[3]?></p>

                  </div>
                </div>
              <? } ?>

              <div class="row mt-5">
                <div class="col-6">
                  <a class="btn btn-lg btn-warning btn-block" href="home.php">Back</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>