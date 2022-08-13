<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marmitas Dona Rita</title>
    <link rel="stylesheet" href="css/page.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/contato.css">
    <link rel="stylesheet" href="css/home.css">
</head>
<body>
    <header>
        <font color="#00000" size="6.5">
        <p>Marmitas da Rita</p>
        </font>
        
        <a href="index.php">
            <img src="images/dona logo.png" alt="Logo" class="logo">
        </a>        
    </header>
    <nav>
        <ul>
            <li>
                <a href="index.php"><font color="ffffff">Home</font></a>
            </li>
            <li>
                <a href="index.php?page=quem_somos"><font color="ffffff">Quem somos</font></a>
            </li>
            <li>
                <a href="index.php?page=contato"><font color="ffffff">Contato</font></a>    
            </li>
            
        </ul>
    </nav>
    <div class="content">
        <div class="container">
            <?php
                $page = "home";

                if(isset($_GET['page'])){

                    if(file_exists("pages/".$_GET['page'].".php")){
                        $page = $_GET['page'];
                    }
                }

                include("pages/$page.php");
            ?>
        </div>
    </div>
    <footer>
    <font color="#00000">
        <p class="rodape"> Marmitas DONA RITA<br><br>
        Fone: 840 88909015<br>
        Endereço: Rua do abel | Bairro: boeiro <br>
        A melhor comida é aqui! </p>
    <div align="center" >
        <p>    MAPA | Aluno: Lucas Gabriel | RA: 21003757-5 | BachAnd I </p>
    </div>
    </font>
    </footer>
</body>
</html>