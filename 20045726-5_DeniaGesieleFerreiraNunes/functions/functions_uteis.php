<?php
    $dir_atual = __DIR__; 
    $dir_functions = $dir_atual;
    $dir_pages = str_replace("functions", "pages", $dir_atual);
    $dir_dados = str_replace("functions", "dados", $dir_atual);
    $file_json = $dir_dados . "\\produtos.json";
    $fmt = numfmt_create( 'pt_BR', NumberFormatter::CURRENCY );

    function read_data_product($file_json){

        $product_text = file_get_contents($file_json);
        $json_product = json_decode($product_text);
        return $json_product;
    };

    function getAllProduct($file_json){
        return read_data_product($file_json);
    };

    function getProductByCodigo($file_json, $codigoProduto){
        $produtos = read_data_product($file_json);
        foreach($produtos as $prod){
            if($prod->codigo == $codigoProduto){
                return $prod;
            }
        }
        return null;
    };
    

    function getMediaAvaliacao($avaliacoes){
        $totalNotas = 0;
        $contAvaliacao = 0;
        foreach($avaliacoes as $nota){
            $totalNotas = $totalNotas + $nota->nota;
            $contAvaliacao = $contAvaliacao+1;
        }

        if($contAvaliacao == 0){
            return 0;
        }else{
            return round($totalNotas / $contAvaliacao, 1);
        }
    }



?>