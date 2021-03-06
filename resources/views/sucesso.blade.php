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

  </head>

  <body>
    <div class="row">
      <div class="col-md-6 col-md-offset-3">
        <div class="panel panel-default">
          <div class="panel-heading">
                <div class="alert alert-success" role="alert">
                  <h3 class="panel-title">Salvo com sucesso: <b>
                    {{$cadastro->sexo == 'Masculino' ? 'Brinde não validado! Disponível somente para o sexo feminino'
                      : 'Brinde validado!'}}.</b></h3>
                </div>
          </div>
          <div class="panel-body">
            <p>{{$cadastro->sexo == 'Masculino' ?
                'Em caso de dúvida entre em contato com'
                : 'O brinde estará na sua mesa na data do evento. Em caso de dúvida entre em contato com'}}.</p>
            <p>APAE Londrina/PR</p>
            <p>Tel: (43) 3305-5924</p>
          </div>
        </div>
      </div>
    </div>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

  </body>
</html>
