
<?php
if($_POST){
        $nome = $_FILES["enviar"]["name"];
        $arquivoTemp = $_FILES["enviar"]["tmp_name"];
        $caminho = "uploads/".$nome;
        $movendo = move_uploaded_file($arquivoTemp, $caminho);
        if($_FILES["enviar"]["error"] == UPLOAD_ERR_OK){
            echo "Download feito com sucesso!";
        }else {
            echo "Um arquivo com esse nome já existe =/ Por favor tente um outro.";
        }
    }
    //mostrando teste github
?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <title>Document</title>
        </head>
        <body>
        <form action="" method="post" enctype="multipart/form-data">
            Selecione arquivo para upload: <br><br><input type="file" name="enviar">
            <button type="submit">Enviar</button>
        </form>
        </body>
        </html>
        