<?php
    if($_FILES){
        $nome = $_FILES["enviado"]["name"];//nome do arquivo que será enviado = transformado em variável
        $pastaUploads = dirname(__FILE__)."/uploads/".$nome; //váriável com dirname(__FILE__)=pega o nome do diretório que o arquivo está
        //entra no nome da pasta e depois entra o nome do arquivo[pra onde a foto vai?]
        $pastaTemporaria = $_FILES["enviado"]["tmp_name"];//localização temporária do arquivo = transformado em variável
        $existe=file_exists($pastaUploads); //
        if($existe){ //checar se já existe arquivo com esse nome 
            echo "Este arquivo já foi adicionado.";
            }else{
                if(move_uploaded_file($pastaTemporaria,$pastaUploads)) { //checar se o arquivo foi salvo na pasta [if $moving==true significa que o arquivo está lá]
                //o move_uploaded_file pode ser transformado em variável também
                    echo "Parabéns! Seu upload realizado com sucesso!";
                    }else {
                        echo "=/ Aconteceu algum erro, por favor tente de novo.";
                        }
                }
        }   
?>
<form action="" method="post" enctype="multipart/form-data">
    <input type="file" name="enviado">
    <button type="submit">Enviar</button>
</form>