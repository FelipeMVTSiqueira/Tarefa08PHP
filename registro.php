<?php
    function cadastrarUsuario($nomeUser, $emailUser, $foneUser, $imgUser){
        $nomeArquivo = "usuariosCadastrados.json";
        if (file_exists($nomeArquivo)){
            $arquivo = file_get_contents($nomeArquivo);
            $usuarios = json_decode($arquivo, true);

            if($usuarios==[]){
                $usuarios[] = [
                    "idUser"=>1,
                    "nome"=>$nomeUser,
                    "email"=>$emailUser,
                    "fone"=>$foneUser,
                    "img"=>$imgUser
                ];
            } else {
                $ultimoId = end($usuarios);
                $proximoId = $ultimoId["idUser"]+1;
                $usuarios[] = [
                    "idUser"=>$proximoId,
                    "nome"=>$nomeUser,
                    "email"=>$emailUser,
                    "fone"=>$foneUser,
                    "img"=>$imgUser
                ];
            }
            $json = json_encode($usuarios);
            $sucesso = file_put_contents($nomeArquivo, $json);
            if($sucesso){
                return "";
            } else {
                return "Aconteceu algum erro, usuario não cadastrado!";
            }
        } else {
            $usuarios = [];
            $usuarios[] = [
                "idUser"=>1,
                "nome"=>$nomeUser,
                "email"=>$emailUser,
                "fone"=>$foneUser,
                "img"=>$imgUser
            ];
            $json = json_encode($usuarios);
            $sucesso = file_put_contents($nomeArquivo, $json);
            if($sucesso){
                return "";
            } else {
                return "Aconteceu algum erro, usuarios não cadastrado!";
            }
        }
    }
    if($_POST){
        $nomeImg = $_FILES["imgUser"]["name"];
        $pastaTemporaria = $_FILES["imgUser"]["tmp_name"];
        $data = date("d-m-y_H_i_s_");
        $pastaFoto = "foto/".$data.$nomeImg;
        $sucesso = move_uploaded_file($pastaTemporaria, $pastaFoto);
        echo cadastrarUsuario($_POST["nomeUser"], $_POST["emailUser"],$_POST["foneUser"], $pastaFoto);
    }
        
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Cadastre-se!</title>
</head>
<body>
<?php 
    include_once("variaveis.php");
    include_once("config/validacao.php");
    ?>
    <main class="container mt-4">
    <h1>Cadastre-se no nosso site!</h1>
    <div class="col-9 bg-light pt-4 rounded">
                    <h3 class="mx-3">Cadastrar novo usuario:</h3>
                    <div class="font-weight-bold mx-3">
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="nomeUser">Nome de Usuario</label>
                                <input type="text" class="form-control" name="nomeUser" id="nomeUser" maxlenght=70 placeholder="Ex: José da Silva" required />
                            </div>
                            <div class="form-group">
                                <label for="emailUser">Email:</label>
                                <input type="text" name="emailUser" class="form-control" placeholder="jose@exemplo.net">
                            </div>
                            <div class="form-group">
                                <label for="foneUser">Preço</label>
                                <input type="text" class="form-control" name="foneUser" placeholder="(DDD)99999-9999">
                            </div>
                            <div class="form-group">
                                <label for="imgUser">Foto do perfil</label>
                                <input type="file" class="form-control-file" name="imgUser" placeholder="Selecione uma foto de perfil" required/>
                            </div>
                            <div class="container">
                                <div class="d-flex justify-content-end">
                                    <button type="submit" class="btn btn-success m-5 p-3">Cadastrar!</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </main>
</body>
</html>