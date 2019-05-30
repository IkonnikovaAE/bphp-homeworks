<?php


function generate($rows, $placesPerRow, $avaliableCount) {

    if ($rows * $placesPerRow > $avaliableCount) {
        return false;
    }

    $map = [];

    for ($i = 0; $i < $rows; $i++) {
        for ($j = 0; $j < $placesPerRow; $j++) {
            $map[$i][$j] = false;
        }
    }

    return $map;
}

function reserve(&$map, $row, $place) {

    if ($map[$row][$place] === false) {
        $map[$row][$place] = true;
        return true;
    }
}

//проверка

$chairs = 50;
$map = generate(5, 8, $chairs);
$requireRow = 3;
$requirePlace = 5;

$reserved = reserve($map, $requireRow, $requirePlace);
logReserve($requireRow, $requirePlace, $reserved);

$reserved = reserve($map, $requireRow, $requirePlace);
logReserve($requireRow, $requirePlace, $reserved);


function logReserve($row, $place, $result){
    if ($result) {
        echo "Ваше место забронировано! Ряд $row, место $place <br>".PHP_EOL;
    } else {
        echo "Что-то пошло не так=( Бронь не удалась".PHP_EOL;
    }
}