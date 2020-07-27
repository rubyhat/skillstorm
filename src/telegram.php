<?php
$name = $_POST['user_name'];
$phone = $_POST['user_phone'];
$mail = $_POST['user_mail'];
$desc = $_POST['desc'];
$token = "1267368994:AAHTvxAIK1XwEEZubUPG3ACELmH0lG7IYYQ";
$chat_id = "-415402521";
$arr = array(
  'Новая заявка на SkillStorm.kz' => '',
  'Имя пользователя: ' => $name,
  'Телефон: ' => $phone,
  'Почта: ' => $mail,
  'Коммент: ' => $desc,
  'Дата заказа: ' => date("m.d.Y")
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

if(!empty($phone)) {
	$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");
    }
else {
    echo "пустой массив";
}

if ($sendToTelegram) {
  header('Location: https://skillstorm.kz');
  //echo '<h1> Thank you!</h1>';
} else {
  echo "Error";
}
//mail('simwebkz@gmail.com','Заявка с сайта',$name,$phone); Для параллельной отправки на почту
?>