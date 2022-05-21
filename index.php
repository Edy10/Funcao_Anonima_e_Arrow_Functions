<?php
echo "<center> <h1>Funções Anônimas</h1><br/><br/></center> <hr>";

echo "<h4>Exemplo 01 --> Retorna os números que são multiplos de 10 </h4><br/>";

$numero = [10,13,15,20,27,29,35,40];
$multiplo = 10;

echo "<pre>"; print_r($numero); echo "</pre>";
echo "Passando a função direto no array_filter<br>";
$numeros = array_filter($numero, function($item){
    return ($item % 10 ) == 0;
});

echo "<pre>"; print_r($numeros); echo "</pre>";
$filter = function($item) use ($multiplo){
    return ($item % $multiplo) == 0;
};
echo "Passando a função criada debtro de uma variável no array_filter<br>";
$numeros2 = array_filter($numero, $filter);

echo "<pre>"; print_r($numeros2); echo "</pre>";

echo "<br><hr>";
echo "<h4>Exemplo 02 --> Converte um texto minusculo em maiusculo utilizando uma funcão anônuma </h4><br/>";

$formatar = function($item){
        return mb_strtoupper($item);
};

echo "<pre>"; print_r($formatar("Edivaldo")); echo "</pre>";

echo "<center> <h1>Arrow Functions (So funciona no php >= 7.4)</h1><br/><br/></center> <hr>";

//$exemplo2 = array_filter($numero, fn($item) =>($item % 10) == 0);

echo "<pre>"; print_r($exemplo2); echo "</pre>";