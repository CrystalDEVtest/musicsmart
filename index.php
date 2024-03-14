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
$token = 'vk1.a.wx4tqcdYoN7JQGGUUU3UDOuupDw_9KCpVKqWpz-4PKum5SCDQxwcnD1HbeC8N2mysGmDkDE1eipx_VbZBt0qQIxVZW3IOxo2qB-tf5hcPe6Bdl_CNd-0dUl0YIyhO_LLgTSlv7bhCtfyGHnuYaI4zkDC4FN-VbhixFrY-5trI_Sgys-ABG9T6Adj-4LyUL6EE0K1Sflx0kreyHzubSAUcQ&expires_in=86400&user_id=468050309';

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
<form method="POST">
    <p>Вот ссылка: <input="text" name="audip_url['url']" /></p>
</body>
</html>
