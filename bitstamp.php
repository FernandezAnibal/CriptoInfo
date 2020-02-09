<?php 
 

 //*****Función para llamadas a los tickers
 function GetJsonFeed($json_url)
{
    $feed = file_get_contents($json_url);
    return json_decode($feed, true);
}
 //*******************************************
 
  
//******************************Bitstamp********************************

$BIT_BTC_USD = GetJsonFeed("https://www.bitstamp.net/api/ticker/");
$BIT_BTC_USD_LAST = $BIT_BTC_USD["last"];

$BIT_btcusd = floatval("$BIT_BTC_USD_LAST");

echo "Valor Bitcoin: $BIT_btcusd Dolares";
//******************************Bitstamp********************************

  
 
 ?> 

