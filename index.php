<!DOCTYPE html>
<html>
<head>
<title>URL</title>
<meta charset="utf-8" />
</head>
<body>
<?php
// Используем библиотеку VK для PHP
require 'vendor/autoload.php';
use VK\Client\VK as VK;

// Ваш токен от ВКонтакте
$token = 'ваш_токен';

// Инициализация клиента
$vk = new VK($token);

// Получаем ссылку на аудио
$audio_url = $vk->audio->getById('ссылка на аудио');

// Выводим ссылку
echo $audio_url['url'];
?>
<h3>Форма ввода данных</h3>
<form method="POST">
    <p>Имя: <input type="text" name="audio_url" /></p>
    <input type="submit" value="Отправить">
</form>
</body>
</html>