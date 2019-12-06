
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastre-se!</title>
</head>
<body>
    <h2>Cadastre-se no nosso site!</h2>
    <form action="cadastrados.php" method="post" enctype="multipart/form-data">
        <label for="nomeUsuario">Nome de Usuario:</label>
        <input type="text" name="nomeUsuario" id="nomeUsuario" placeholder="Escolha um nome de usuário">
        <label for="foto">Escolha uma foto:</label>
        <input type="file" name="foto">
        <button type="submit">Cadastrar!</button>
    </form>
</body>
</html>