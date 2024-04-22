<?php
$user_name = htmlspecialchars($_POST["username"]);
$user_phone = htmlspecialchars($_POST["userphone"]);

$token = "6882312575:AAE6AMmHmYCA5BRl93Z0hc_wYsCN5wdeAfc";
$chat_id = "-4105631891";

$formData = array(
  "Клиент: " => $user_name,
  "Номер телефона: " => $user_phone
);

foreach($formData as $key => $value) {
  $text .= $key . "<b>" . urlencode($value) . "</b>" . "%0A";
}

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&text={$text}&parse_mode=html", "r");

if ($sendToTelegram) {
  echo "Success";
} else {
  echo "Error";
}

//echo "Привет, " . $user_name . "<br>";
//echo "Ваш телефон: " . $user_phone;