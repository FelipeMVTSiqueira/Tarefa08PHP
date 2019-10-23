<?php
    if($_FILES){
        $nome = $_FILES["enviado"]["name"];
        $pastaUploads = dirname(__FILE__)."/uploads/".$nome; 
        $pastaTemporaria = $_FILES["enviado"]["tmp_name"];
        $existe=file_exists($nome); //
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
<form action="" method="post" enctype="multipart/form-data">
    <input type="file" name="enviado">
    <button type="submit">Enviar</button>
</form>
