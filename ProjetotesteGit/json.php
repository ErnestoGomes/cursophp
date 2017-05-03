<?php
$json = file_get_contents("http://www.correiodoestado.com.br/climatempo/json/");
$json = json_decode($json);

$obj = new stdClass();
$obj->codigo = 111;
$obj->cidade = "São Paulo";
$obj->uf = 111;
$obj->baixa = 111;
$obj->alta = 111;
$obj->ico = 2;
$obj->ico = 2;
$obj->frase = "alguma coisa";
$obj->data = "...";
$obj->data_mes = "janeiro";
$obj->data_semana = "Alguma";
$obj->selecionada = 1;

$json->previsao[] = $obj;

echo json_encode($json);


echo "Cidades retornadas: ".count($json->previsao)."<br><br>";

foreach($json->previsao as $item){
    echo"Cidade: ".$item->cidade." - Baixa:".$item->baixa." Alta:".$item->alta." (".$item->frase.")<br>";
}


?>

