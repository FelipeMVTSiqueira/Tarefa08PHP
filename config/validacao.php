<?php
    function validaNome($nomeUser){
        global $erros;
        if(strlen($nomeUser) == " "){
            array_push($erros, "Nome de usuario inválido.");
        }
    }
    function validaEmail($emailUser){
        global $erros;
        if(strlen($emailUser) == " "){
            array_push($erros, "Email inválido.");
        }
    }
?>