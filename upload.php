<?php
    if($_FILES){
        $nome = $_FILES["enviado"]["name"];
        $pastaUploads = dirname(__FILE__)."/uploads/".$nome;
        $pastaTemporaria = $_FILES["enviado"]["tmp_name"];
        $existe=file_exists($pastaUploads); //
        if($existe){
            echo "Este arquivo já foi adicionado anteriormente.";
            }else{
                if(move_uploaded_file($pastaTemporaria,$pastaUploads)) {
                    echo "Parabéns! Seu upload realizado com sucesso!";
                    }else {
                        echo "=/ Aconteceu algum erro, por favor tente de novo.";
                        }
                }
        }   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <main>
        <section class="container mt-5">
            <h1 class="my-3">Faça o upload abaixo:</h1>
            <div class="row">
                <div class="col-7">
                    <form action="" method="post" enctype="multipart/form-data">
                        <input type="file" name="enviado">
                        <button type="submit">Enviar</button>
                    </form> 
                </div>
            </div>
        </section>
    </main>
</body>
</html>