<?php
date_default_timezone_set('Asia/Vladivostok');
$time = date("H");
$dayNumber = date("N");

switch ($dayNumber) {
    case 1: $day = 'Понедельник'; break;
    case 2: $day = 'Вторник'; break;
    case 3: $day = 'Среда'; break;
    case 4: $day = 'Четверг'; break;
    case 5: $day = 'Пятница'; break;
    case 6: $day = 'Суббота'; break;
    case 7: $day = 'Воскресенье'; break;
}

if ($time < 6 or $time > 23) {
    $text = "Доброй ночи! <br>Сегодня {$day}";
    $backgroundUrl = "./img/night.jpg";
} elseif ($time < 11) {
    $text = "Доброе утро!<br>Сегодня {$day}";
    $backgroundUrl = "./img/morning.jpg";
} elseif ($time < 18) {
    $text = "Добрый день!<br>Сегодня {$day}";
    $backgroundUrl = "./img/day.jpg";
} else {
    $text = "Добрый вечер! <br>Сегодня {$day}";
    $backgroundUrl = "./img/evening.jpg";
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>bPHP - 1.1.1</title>
	<!-- подключение стилевого файла -->
</head>
<body style=" background: url(<?php echo $backgroundUrl ?>) no-repeat; background-size: 100%">
    <div style="margin-top: 50vh; display: flex; justify-content: center;">
        <div style="min-width: 400px; min-height: 80px; background-color: lightgray; text-align: center; opacity: 0.7;
        border-radius: 10px">
            <h1><?php echo $text ?></h1>
        </div>
    </div>
</body>
</html>