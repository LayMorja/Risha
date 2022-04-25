<?php

$recepient = "seo_daria@mail.ru";
$sitename = "Risha.pro";

$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$service = $_POST['service'];
$doing = $_POST['doing'];
$text = $_POST['text'];

$name_text = "Имя: $name";
$phone_text = "Телефон: $phone";
$email_text = "Email: $email";
$service_text = "Интересующая Услуга: $service";
$doing_text = "Чем занимаюсь: $doing";
$text_text = "Сообщение: $text";

if ($service) {
  $message = "$phone_text \n$email_text \n$service_text \n$doing_text \n$text_text";
}
else {
  $message = "$name_text \n$phone_text";
}


$pagetitle = "Новая заявка с сайта \"$sitename\"";
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");
