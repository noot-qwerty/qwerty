<?php
$token = '1713026775:AAEohPGHtTGYBLdH4xNvYUfpqy6IdAirqkQ';
$website = 'https://api.telegram.org/bot'.$token;

$input = file_get_contents('php://input');
$update = json_decode($input, TRUE);

$chatId = $update['message']['chat']['id'];
$message = $update['message']['text'];

switch($message) {
    case '/start':
        $response = 'Me has iniciado';
        sendMessage($chatId, $response);
        break;
    case '/prices':
        $response = '
        ✅FMI OFF & FMI OFF OPEN MENU✅

      📲 [5 / 5c / 5s = $5]
      📲 [6S / 6s+ / SE = $5]
      📲 [7 = $6]
      📲 [7+ = $6]
      📲 [8 = $7]
      📲 [8+ = $7]
      📲 [X = $10]
      📲 [iPads = $10]
      
      ✅ SOLO OPEN MENÚ✅
      📲 [Xr = $15]
      📲 [Xs = $15]
      📲 [11 = $15]
      📲 [11Pro = $15]
      📲 [11ProMax = $15]
      📲 [SE 2020 = $17]
      📲 [iPhone 12mini = $17]
      📲 [iPhone 12 = $17]
      📲 [iPhone 12Pro = $17]
      📲 [iPhone 12ProMax = $17]

        ';
        $keyboard = '["Gracias"],["Pos Ok"]';
        sendMessage($chatId, $response, $keyboard);
        break;
    default:
        $response = 'No te he entendido';
        sendMessage($chatId, $response);
        break;
}

function sendMessage($chatId, $response, $keyboard = NULL) {
    if (isset($keyboard)){
        $teclado = '&reply_markup={"keyboard":['.$keyboard.'], "resize_keyboard":true, "one_time_keyboard":true}';
    }
    $url = $GLOBALS['website'].'/sendMessage?chat_id='.$chatId.'&parse_mode=HTML&text='.urlencode($response).$teclado;
    file_get_contents($url);
}
?>

<?php
$token = '1713026775:AAEohPGHtTGYBLdH4xNvYUfpqy6IdAirqkQ';
$website = 'https://api.telegram.org/bot'.$token;

$input = file_get_contents('php://input');
$update = json_decode($input, TRUE);
$modo = 0;  

$chatId = $update['message']['chat']['id'];
$message = $update['message']['text'];

switch($message) {
    case '/start':
        $response = 'Me has iniciado';
        sendMessage($chatId, $response);
        break;
    case '/prices':
        $response = '
        ✅FMI OFF & FMI OFF OPEN MENU✅

      📲 [5 / 5c / 5s = $5]
      📲 [6S / 6s+ / SE = $5]
      📲 [7 = $6]
      📲 [7+ = $6]
      📲 [8 = $7]
      📲 [8+ = $7]
      📲 [X = $10]
      📲 [iPads = $10]
      
      ✅ SOLO OPEN MENÚ✅
      📲 [Xr = $15]
      📲 [Xs = $15]
      📲 [11 = $15]
      📲 [11Pro = $15]
      📲 [11ProMax = $15]
      📲 [SE 2020 = $17]
      📲 [iPhone 12mini = $17]
      📲 [iPhone 12 = $17]
      📲 [iPhone 12Pro = $17]
      📲 [iPhone 12ProMax = $17]

        ';
        $keyboard = '["GSM"],["FMI-OFF"]';
        sendMessage($chatId, $response, $keyboard);
        break;
    default:
        $response = 'No te he entendido';
        sendMessage($chatId, $response);
        break;
}

function sendMessage($chatId, $response, $keyboard = NULL) {
    if (isset($keyboard)){
        $teclado = '&reply_markup={"keyboard":['.$keyboard.'], "resize_keyboard":true, "one_time_keyboard":true}';
    }
    $url = $GLOBALS['website'].'/sendMessage?chat_id='.$chatId.'&parse_mode=HTML&text='.urlencode($response).$teclado;
    file_get_contents($url);
}
?>
