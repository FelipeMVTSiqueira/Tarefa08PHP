<?php
    $nomeArquivo = "usuariosCadastrados.json";
    $usuarios = json_decode(file_get_contents($nomeArquivo), true);
    ?>