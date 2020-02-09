<?php 
 

 //*****Función para llamadas a los tickers
 function GetJsonFeed($json_url)
{
    $feed = file_get_contents($json_url);
    return json_decode($feed, true);
}
 //*******************************************
 
  
  
  
  
  
//******************************MTgox********************************

$MT_BTC_USD = GetJsonFeed("http://data.mtgox.com/api/2/BTCUSD/money/ticker_fast");
$MT_BTC_USD_LAST = $MT_BTC_USD["data"]["last"]["value"];

$MT_btcusd = floatval("$MT_BTC_USD_LAST");

echo "Valor Bitcoin: $MT_btcusd Dolares";
//******************************MTgox********************************

  
 
 ?> 
