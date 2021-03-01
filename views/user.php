<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style><?php include "style.css" ?></style>
    <title>Usuário</title>
</head>
<body>
    <div>
        <h2><strong>Usuário</strong></h2>
        <table class="table table-dark">
            <thead>
                <tr>
                <th scope="col">Nome</th>
                <th scope="col">CPF</th>
                <th scope="col">Telefone</th>
                <th scope="col">Endereço</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <td><?= $user->getNome(); ?></td>
                <td><?= $user->getCpf(); ?></td>
                <td><?= $user->getTelefone(); ?></td>
                <td><?= $user->getEndereco(); ?></td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>