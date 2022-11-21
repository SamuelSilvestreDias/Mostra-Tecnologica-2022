<?php
    $nome = $_POST["nome"];
    $senha = $_POST["senha"];

    if ($nome == "gabriel" && $senha == "gabriel123") {
        header("Location: Perfil/perfil.html");
    }  else {
        header("Location: index.php?res=Senha ou úsuario incorretos");
    }
?>
