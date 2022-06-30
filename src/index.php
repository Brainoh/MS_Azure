<?php

$urlContents = file_get_contents("https://pro-api.coinmarketcap.com/v1/cryptocurrency/listings/latest?start=1&limit=10&CMC_PRO_API_KEY=b373109b-839d-4d6e-af1a-1c431dcee538");

$coinsArray = json_decode($urlContents, true);

echo $coinsArray;

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles.css">
  <title>CoinPrices JSON</title>
</head>

<body>
  <div class="prices"></div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
</body>

</html>
