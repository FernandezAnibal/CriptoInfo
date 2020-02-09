<?php 
 

 //*****Función para llamadas a los tickers
 function GetJsonFeed($json_url)
{
    $feed = file_get_contents($json_url);
    return json_decode($feed, true);
}
 //*******************************************
 
  
//******************************Bter********************************
$BTC_USD = GetJsonFeed("https://btc-e.com/api/2/btc_usd/ticker");
$BTC_USD_LAST = $BTC_USD["ticker"]["last"];

$BQC_BTC = GetJsonFeed("https://bter.com/api/1/ticker/bqc_btc");
$BQC_BTC_LAST = $BQC_BTC["last"];

$CENT_LTC = GetJsonFeed("https://bter.com/api/1/ticker/cent_ltc");
$CENT_LTC_LAST = $CENT_LTC["last"];

$btcusd = floatval("$BTC_USD_LAST");
$bqcbtc = floatval("$BQC_BTC_LAST");
$centltc = floatval("$CENT_LTC_LAST");
$bqcusd = $btcusd*$bqcbtc;

echo "Valor  BBQcoin: $bqcbtc Bitcoins";
echo "<br>Valor  BBQcoin: $bqcusd Dolares";
echo "<br>Valor  Cents: $centltc Litecoins";

//******************************Bter********************************

  
 
 ?> 