<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Projeto amostra</title>
    <meta meta name="viewport" content="width=device-width, user-scalable=no" />
    <link href="index.css" rel="stylesheet" />
    
    <?php
        if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')   
            $url = "https://"; 

        else  
            $url = "http://";
 
        $url.= $_SERVER['REQUEST_URI'];
    ?>

</head>
<body>
    <header>

        <div class="center">
                <div class="logo"><img style="width: 200px;" src="c70c54dc_56f4_46b9_b6a4_ccc323f51e5c__1__removebg_preview_2.png"/></div>    
            <div class="menu">  
            <a href="#">SODESIO</a>
            </div>
        </div>
    </header>
   <section class="sobre">
    <div class="extras">
        <div class="homem"><img src="kisspng_suit_stock_photography_man_with_crossed_arms_compa_nice_5ac9da8b079cf4_1.png"/></div>
    </div>
    <div>
        <form action="conexao.php" method="post">
            <p>Nome:</p>
            <input type="text" name="nome">
            <p>Senha</p>
            <input type="password" name="senha">
            <br>
            <br>
            <input type="submit" value="Enviar">
            <p>
                <?php
                    if ($url == "http:///Login/index.php?res=Senha%20ou%20%C3%BAsuario%20incorretos"){
                        $erro = $_GET['res'];
                        echo $erro;
                    }
                ?>
            </p>
        </form>
    </div>
   </section>
</body>
</html>