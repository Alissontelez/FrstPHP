<?php

$categorias = [];
$categorias[] = 'infantil';
$categorias[] = 'adolescente';
$categorias[] = 'adulto';
//print_r($categorias);

$nome = 'Alisson';
$idade = 30;

//var_dump($nome);
//var_dump($idade);
//var_dump($categorias);

if ($idade >= 6 && $idade <=12) {
    for ($i = 0; $i < count($categorias); $i++) {
        if ($categorias[$i] == 'infantil')
            echo "O nadador " . $nome . " compete na categoria infantil";
    }
}
elseif ($idade >= 13 && $idade <= 17) {
        echo 'adolescente';
}
else {
    echo 'adulto';
}