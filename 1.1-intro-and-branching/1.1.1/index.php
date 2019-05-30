<?php

$variable = null;

if (is_bool($variable)) {
    $type = 'bool';
    $description = "Логический тип";
} elseif (is_float($variable)) {
    $type = 'float';
    $description = "Число с плавающей точкой <br>Используется для вещественных чисел.";
} elseif (is_int($variable)) {
    $type = 'int';
    $description = "Целое 32-битное число со знаком";
} elseif (is_string($variable)) {
    $type = 'string';
    $description = "Строковый тип";
} elseif (is_null($variable)) {
    $type = 'null';
    $description = "Значение переменной не определено";
} else {
    $type = 'other';
    $description = "Неизвестный тип";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>bPHP - 1.1.1</title>
</head>
<body>
    <p><?php echo "{$variable} is {$type}" ?></p>
	<hr>
	<p><?php echo $description ?></p>
</body>
</html>