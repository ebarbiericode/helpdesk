<?require_once "valida_acesso.php"?>
<html>
  <head>
    <meta charset="utf-8" />
    <title>App Help Desk</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
      .card-abrir-chamado {
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

        <div class="card-abrir-chamado">
          <div class="card">
            <div class="card-header">
              Create Request
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col">
                  
                  <form method="POST" action="registra_chamado.php">
                    <div class="form-group">
                      <label>Title</label>
                      <input name="titulo" type="text" class="form-control" placeholder="Title">
                    </div>
                    
                    <div class="form-group">
                      <label>Category</label>
                      <select name="categoria" class="form-control">
                        <option>Create user</option>
                        <option>Printer</option>
                        <option>Hardware</option>
                        <option>Software</option>
                        <option>Network</option>
                      </select>
                    </div>
                    
                    <div class="form-group">
                      <label>Description</label>
                      <textarea name="descricao" class="form-control" rows="3"></textarea>
                    </div>

                    <div class="row mt-5">
                      <div class="col-6">
                        <a class="btn btn-lg btn-warning btn-block" href="home.php">Back</a>
                      </div>

                      <div class="col-6">
                        <button class="btn btn-lg btn-info btn-block" type="submit">Ok</button>
                      </div>
                    </div>
                  </form>

                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
  </body>
</html>