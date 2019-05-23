<?php
// Первое
echo 'Первое задание <br>';

$protocol = 'https://bash.im/';

if (substr($protocol, 0, 8) === 'https://') {
    echo 'substr - Да <br>';
} else {
    echo 'substr - Нет <br>';
}

if (strpos($protocol, 'https://') !== false) {
    echo 'strpos - Да <br>';
} else {
    echo 'strpos - Нет <br>';
}

// Второе

echo '<br>Второе задание <br>';

$baseData = '05-29-1993';

$mnth= substr($baseData,0, 2);
$day = substr($baseData,3, 2);
$year = substr($baseData,6, 4);

$outputDate = $day . '.' . $mnth . '.' . $year;

echo $outputDate . '<br>';

// Третье

echo '<br>Третье задание <br>';

$inputPrice = '1050';

if (strlen($inputPrice) > 6 ) {
    $firstIteration = substr_replace($inputPrice, ' ', -3, 0);
    $outputPrice = substr_replace($firstIteration, ' ', -7, 0);
} else {
    $outputPrice = substr_replace($inputPrice, ' ', -3, 0);
}

echo $outputPrice . ' руб.<br>';
