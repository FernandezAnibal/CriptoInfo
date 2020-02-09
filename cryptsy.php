<?php 
 

 //*****Función para llamadas a los tickers
 function GetJsonFeed($json_url)
{
    $feed = file_get_contents($json_url);
    return json_decode($feed, true);
}
 //*******************************************
 
  
//******************************cryptsy********************************

$CRY_FLO_LTC = GetJsonFeed("http://pubapi.cryptsy.com/api.php?method=marketdatav2");
$CRY_FLO_LTC_LAST = $CRY_FLO_LTC["return"]["markets"]["FLO/LTC"]["lasttradeprice"];
$CRY_LOT_BTC_LAST = $CRY_FLO_LTC["return"]["markets"]["LOT/BTC"]["lasttradeprice"];

$LTC_USD = GetJsonFeed("https://btc-e.com/api/2/ltc_usd/ticker");
$LTC_USD_LAST = $LTC_USD["ticker"]["last"];

$BTC_USD = GetJsonFeed("https://btc-e.com/api/2/btc_usd/ticker");
$BTC_USD_LAST = $BTC_USD["ticker"]["last"];

$ltcusd = floatval("$LTC_USD_LAST");
$btcusd = floatval("$BTC_USD_LAST");
$CRY_floltc= floatval("$CRY_FLO_LTC_LAST");
$CRY_lotbtc= floatval("$CRY_LOT_BTC_LAST");

$lotusd = $CRY_lotbtc*$btcusd;
$flousd = $CRY_floltc*$ltcusd;

echo "Valor Florin: $CRY_floltc Litecoins";
echo "<br>Valor Florin: $flousd Dolares";

echo "<br>Valor Lottocoin: $CRY_lotbtc Bitcoins";
echo "<br>Valor Lottocoin: $lotusd Dolares";

//******************************cryptsy********************************

  
 
 ?> 
