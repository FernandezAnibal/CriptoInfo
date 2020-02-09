<html>
 <head>

 </head>
 <body>
 <?php 
 

 //*****Función para llamadas a los tickers
 function GetJsonFeed($json_url)
{
    $feed = file_get_contents($json_url);
    return json_decode($feed, true);
}
 //*******************************************
 
  
//******************************BTC-E********************************
$LTC_USD = GetJsonFeed("https://btc-e.com/api/2/ltc_usd/ticker");
$LTC_USD_LAST = $LTC_USD["ticker"]["last"];

$BTC_USD = GetJsonFeed("https://btc-e.com/api/2/btc_usd/ticker");
$BTC_USD_LAST = $BTC_USD["ticker"]["last"];

$FTC_BTC = GetJsonFeed("https://btc-e.com/api/2/ftc_btc/ticker");
$FTC_BTC_LAST = $FTC_BTC["ticker"]["last"];

$ltcusd = floatval("$LTC_USD_LAST");
$btcusd = floatval("$BTC_USD_LAST");
$ftcbtc = floatval("$FTC_BTC_LAST");
$ftcusd = $ftcbtc*$btcusd;

echo "Valor Litecoin: $ltcusd Dolares";
echo "<br>Valor Bitcoin: $btcusd Dolares";
echo "<br>Valor Feathercoin: $ftcusd Dolares";
//******************************BTC-E********************************

  
 
 ?> 
 </body>
</html>