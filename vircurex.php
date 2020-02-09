<?php 
 

 //*****Función para llamadas a los tickers
 function GetJsonFeed($json_url)
{
    $feed = file_get_contents($json_url);
    return json_decode($feed, true);
}
 //*******************************************
 
  
  
  
  
//******************************Vircurex********************************

$VIR_BTC_USD = GetJsonFeed("https://vircurex.com/api/get_last_trade.json?base=BTC&alt=USD");
$VIR_BTC_USD_LAST = $VIR_BTC_USD["value"];

$VIR_LTC_BTC = GetJsonFeed("https://vircurex.com/api/get_highest_bid.json?base=LTC&alt=BTC");
$VIR_LTC_BTC_LAST = $VIR_LTC_BTC["value"];

$VIR_btcusd = floatval("$VIR_BTC_USD_LAST");
$VIR_ltcbtc = floatval("$VIR_LTC_BTC_LAST ");

echo "Valor Bitcoin: $VIR_btcusd Dolares";
echo "<br>Valor Litecoin: $VIR_ltcbtc Bitcoins";
//******************************Vircurex********************************

  
 
 ?> 
