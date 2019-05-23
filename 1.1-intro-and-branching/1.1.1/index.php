<?php

$variable = null;
$type = gettype($variable);
switch ($type) :
    case 'boolean': $description = "Логический тип";
         break;
    case 'double': $description = "Число с плавающей точкой <br>Используется для вещественных чисел.";
         break;
    case 'integer': $description = "Целое 32-битное число со знаком";
         break;
    case 'string': $description = "Строковый тип";
         break;
    case 'NULL': $description = "Значение переменной не определено";
         break;
    default: $description = "Неизвестный тип";
endswitch; 
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