<?php
    require(__DIR__."/functions/functions_uteis.php");
?>
<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <title>Pagina principal</title>
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" />
        
        <link href="css/style.css" rel="stylesheet" />
        <script href="bootstrap/js/bootstrap.bundle.min.js" type="text/javascript"></script>
        <link href="fontawesome/css/all.css" rel="stylesheet"  />
        
    </head>
    <body>
    
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="index.php?page=home">Doces Caseiros</a>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item"><a class="nav-link" href="index.php?page=quem_somos">Quem Somos</a></li>
                        <li class="nav-item"><a class="nav-link" href="index.php?page=contatos">Contatos</a></li>
                        <li class="nav-item"><a class="nav-link" href="?page=localizacao">Localização</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <section class="page-section portfolio" id="portfolio">
            <?php
                if(isset($_GET["page"])){
                    $page = $_GET["page"];
                    if(strtoupper($page)=="HOME"){
                        include("pages/home.php");
                    }elseif(strtoupper($page)=="QUEM_SOMOS"){
                        include("pages/quemSomos.php");
                    }elseif(strtoupper($page)=="LOCALIZACAO"){
                        include("pages/localizacao.php");
                    }elseif(strtoupper($page)=="CONTATOS"){
                        include("pages/contatos.php");
                    }elseif(strtoupper($page)=="PRODUTO"){
                        if(isset($_GET["codproduto"])){
                            include("pages/produto.php");
                        }else{
                            include("pages/home.php");
                        }
                    }
                }else{
                    include("pages/home.php");
                }
                
            ?>
        </section>
        

        <!-- Footer-->
        <footer class="bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Denia Gesiele Ferreira Nunes login200457265 superior sistemas para internet</p></div>
        </footer>
        
        <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="bootstrap/js/bootstrap.bundle.min.js" type="text/javascript"></script> 
    </body>
</html>