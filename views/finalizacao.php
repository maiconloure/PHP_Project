<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style><?php include "style.css" ?></style>
    <title>Document</title>
</head>
<body>
    <?php
    require "../autoload/autoload.php";
    use App\Entity\Pessoa;

    $user = new Pessoa($_POST['name'], $_POST['cpf'], $_POST['telefone'], $_POST['endereco']);
     
    $userData = $user->getUserData();
    ?>
    <div>
        <h2><strong>Usuário</strong></h2>
        <table class="table table-dark">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">CPF</th>
                <th scope="col">Telefone</th>
                <th scope="col">Endereço</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <th scope="row">1</th>
                <td><?= $userData['nome']; ?></td>
                <td><?= $userData['cpf']; ?></td>
                <td><?= $userData['telefone']; ?></td>
                <td><?= $userData['endereco']; ?></td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>