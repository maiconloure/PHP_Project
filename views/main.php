<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <style><?php include "style.css" ?></style>
  <title>PHP Project</title>
</head>
<body>
  <span id="welcome">
    <strong>Bem vindo <?= $cadastrante; ?></strong>
  </span>
  <div class="form-main">
    <form  action="views/finalizacao.php" method="post">
      <div class="form-group">
        <label for="exampleInputName1">Nome</label>
        <input type="name" name="name" class="form-control" id="exampleInputName1" required>
      </div>
      <br>
      <div class="form-group">
          <label for="exampleInputCPF1">CPF</label>
          <input type="cpf" name="cpf" class="form-control" id="exampleInputCPF1" required>
      </div>
      <br>
      <div class="form-group">
        <label for="exampleInputTelefone1">Telefone</label>
        <input type="phone" name="telefone" class="form-control" id="exampleInputTelefone1" required>
      </div>
      <br>
      <div class="form-group">
        <label for="exampleInputAddress1">Endereço</label>
        <input type="address" name="endereco" class="form-control" id="exampleInputAddress1" required>
      </div>
      <br>
      <button type="submit" class="btn btn-primary" onClick="redirect()">Enviar</button>
    </form>
  </div>
</body>
</html>