<?php 
 
 $tipo = $_POST['tipo'];

 //*****Función para llamadas a los tickers
 function GetJsonFeed($json_url)
{
    $feed = file_get_contents($json_url);
    return json_decode($feed, true);
}

 

//********** Funcion de redondeado

	function redondear($valor,$decimales) { 
   $float_redondeado=round($valor * pow(10,$decimales)) / pow(10,$decimales); 
   return $float_redondeado; 
}
   


 //******** Modificar desde aqui para otros mercados
 
 // El Links de los Apis de los mercados a utilizar

$BTCe_ltcUSD = GetJsonFeed("https://btc-e.com/api/2/ltc_usd/ticker");
$BTCe_ltcSell = $BTCe_ltcUSD["ticker"]["sell"];
$BTCe_ltcBuy = $BTCe_ltcUSD["ticker"]["buy"];

//Formatear monedas a valores numericos
$Btcesell = floatval("$BTCe_ltcSell");
$Btcebuy = floatval("$BTCe_ltcBuy");


if($tipo == "venta")
	{
    echo $Btcesell;
	}
else 
{
    echo $Btcebuy;
}






 ?> 