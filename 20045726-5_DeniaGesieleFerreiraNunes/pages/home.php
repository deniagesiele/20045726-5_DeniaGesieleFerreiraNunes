<?php
    $lstProd = getAllProduct($dir_dados . "\\produtos.json");
?>

<div class="container">
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <?php
            
            foreach($lstProd as $prod){
        ?>
        <div class="col">
            <div class="card shadow-sm">
                <a href="?page=produto&codproduto=<?php echo $prod->codigo; ?>">
                    <img src="images/<?php echo $prod->imagem; ?>" width="100%" height="250px" />
                </a>
                <div class="card-body">
                    <p class="title"><h5><?php echo $prod->nome; ?></h5></p>
                    <p class="card-text">
                        <?php echo substr($prod->descricao, 0, 90); 
                            if(strlen($prod->descricao)>90){
                                echo "...";
                            }
                        ?>
                    </p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <a type="button" class="btn btn-sm btn-outline-secondary" href="?page=produto&codproduto=<?php echo $prod->codigo; ?>">Visualizar</a>
                        </div>
                        <small class="text-muted"><?php echo numfmt_format_currency($fmt, $prod->valor, "BRL") . " " .$prod->tipoMedida; ?></small>
                    </div>
                </div>
            </div>
        </div>
        <?php
            };
        ?>
    </div>
</div>
<div class="container"><p class="m-0 text-center text-white">-------------------------------</p></div>