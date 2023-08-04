<?php

$name = $_POST['user_name'];
$phone = $_POST['user_phone'];
$email = $_POST['user_email'];
$token = "6515995246:AAGFw4konAN6TRD4xNCeBqc3_phnJmGLlTY";
$chat_id = "-1001955285281";
$arr = array(
  'Телефон: ' => $phone
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
  echo "УСПЕШНО";
} else {
  echo "Error";
}
?>
