<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="favicon.ico">
  
    <title>Apae</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/alteracoes.css" rel="stylesheet">

  </head>

  <body>


          <div class="row retira-margin-top">
            <div class="col-md-8 col-md-offset-2">

              <div class="panel-body">
                <div class="page-header">
                  <h2>Baile Dançante Maçonaria</h2>
                </div>
              </div>

              <div class="row">
                <div class="panel-body">
                  <div class="col-md-10">
                    <p>Valide seu brinde 22º Baile Maçonaria / APAE Londrina 2018.</p>
                    <p>Data do evento: 06/10/18 - 20:30hs</p>
                    <p>Local: Buffet Planalto</p>
                    <p><span class="asterisco">* </span>Somente terão acesso aos brindes os convites validados nesta página.</p>
                  </div>
                </div>
              </div>

          </div>
        </div>

   

              <div class="row">
                <div class="col-md-8 col-md-offset-2">
                  @if (count($errors) > 0)
                      <div class="alert alert-danger">
                          <ul>
                              @foreach ($errors->all() as $error)
                                  <li>{{ $error }}</li>
                              @endforeach
                          </ul>
                      </div>
                  @endif

                  @if (session('message'))
                  <div class="alert alert-danger">
                    {{ session('message') }}
                  </div>
                  @endif

                  <h3>Informações de Cadastro:</h3>
                  <form action="<?= route('cadastro.store') ?>" method="POST">
                    
                    <?= csrf_field(); ?>
                    
                    <div class="form-group">
                      <label for="nome">Nome</label>
                      <input type="text" class="form-control" name="nome" placeholder="Nome">
                    </div>

                    <div class="form-group">
                      <label for="nome">Sexo</label>
                      <select class="form-control" name="sexo">
                        <option>Masculino</option>
                        <option>Feminino</option>
                      </select>
                    </div>

                    <div class="form-group">
                      <label for="email">Email</label>
                      <input type="email" class="form-control" name="email" placeholder="Email">
                    </div>
                    
                    <div class="form-group">
                      <label for="Telefone Residencial">Telefone</label>
                      <input type="tel" class="form-control" name="telefone" placeholder="Telefone">
                    </div>

                    <div class="form-group">
                      <label for="Número Convite">Número Convite</label>
                      <input type="number" class="form-control" name="convite" placeholder="Número Convite">
                    </div>

                    <div class="form-group">
                      <label for="Número Convite">Número Mesa</label>
                      <input type="number" class="form-control" name="mesa" placeholder="Número Mesa">
                    </div>

                    <div class="form-group">
                      <label for="Número Convite">Número Calçado</label>
                      <input type="number" class="form-control" name="calcado" placeholder="Número Calçado">
                    </div>
                    
                    <button type="submit" class="btn btn-default">Enviar</button>
                    
                  </form>
                </div>
              </div>
    
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

  </body>
</html>
