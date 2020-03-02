<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastro de Médicos</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="model/css/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>

<body>
  <?php include('navbar.php'); ?>

  <div class="container d-flex h-100">
    <div class="container align-self-center w-100">
      <form class='mx-3'>
        <div class='row'>
          <div class='input-group col-sm-6 mt-3'>
            <div class='input-group-prepend'>
              <span class='input-group-text'>Nome:</span>
            </div>
            <input id="nome" type='text' class='form-control' autoFocus name='nome' required />
          </div>

          <div class='input-group col-sm-6 mt-3'>
            <div class='input-group-prepend'>
              <span class='input-group-text'>Endereço:</span>
            </div>
            <input id="endereco" type='text' class='form-control' name='endereco' required />
          </div>

        </div>

        <div class='row'>

          <div class='input-group col-sm-6 mt-3'>
            <div class='input-group-prepend'>
              <span class='input-group-text'>E-mail:</span>
            </div>
            <input id="email" type='email' class='form-control' name='email' required />
          </div>

          <div class='input-group col-sm-6 mt-3'>
            <div class='input-group-prepend'>
              <span class='input-group-text'>Senha:</span>
            </div>
            <input id="senha" type='password' class='form-control' name='senha' required />

            <div class='input-group-append'>
              <button id="enviar" class='btn btn-primary' onclick="sendMedico()" type="button">Enviar</button>
            </div>
          </div>
        </div>

        <div class="row">
          <div id="validationAlert" style="display: none;" class='alert alert-warning input-group col-sm-12 mt-3'>
            <span id="validationText" class=''></span>
          </div>
        </div>

      </form>
    </div>
  </div>
  <script src="form.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  
</body>

</html>