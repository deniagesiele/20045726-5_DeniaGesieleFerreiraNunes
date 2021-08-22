<?php
    $produto = getProductByCodigo($dir_dados . "\\produtos.json",$_GET['codproduto']);
?>
<div class="container px-4 px-lg-5 my-5">
    <div class="row gx-4 gx-lg-5 align-items-center">
        <div class="col-md-6"><img id="imagemProdutoVisualizar" class="card-img-top mb-5 mb-md-0" src="images/<?php echo $produto->imagem; ?>" alt="..." /></div>
        <div class="col-md-6">
            <h1 class="display-5 fw-bolder"><?php echo $produto->nome; ?> </h1>
            <div class="fs-5 mb-5">
                <span><h2><?php echo numfmt_format_currency($fmt, $produto->valor, "BRL") . " " .$produto->tipoMedida; ?></span></h2>
            </div>
            <div class="fs-5 mb-5">
                <span><h3> <?php echo getMediaAvaliacao($produto->avalicoes); ?><img class="star-avaliacao-geral" src="images/star.png"></img></h3></span>
            </div>
            <p class="lead"><?php echo $produto->descricao; ?></p>
            
        </div>
    </div>
    <br>
    <div class="card bg-light">
        <div class="card-body">
            <?php foreach($produto->avalicoes as $avaliacao){ ?>
                <div class="d-flex mb-4">
                    <!-- Parent comment-->
                    <div class="flex-shrink-0"><img class="rounded-circle" src="https://dummyimage.com/50x50/ced4da/6c757d.jpg" alt="..." /></div>
                    <div class="ms-3">
                        <div class="fw-bold"><?php echo $avaliacao->nome; ?> 
                        <?php for($i=0; $i<$avaliacao->nota;$i++){?>
                            <img class="star-avaliacao" src="images/star.png"></img>
                        <?php }; ?>
                    </div> 
                        
                        <?php echo $avaliacao->texto; ?>

                    </div>
                </div>
            <?php }; ?>


        </div>
    </div>
</div>