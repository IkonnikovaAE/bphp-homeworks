<?php


function generate($rowCount, $placesCount, $avaliableCount) {

    if ($rowCount * $placesCount > $avaliableCount) {
        return false;
    }

    $map = [];

    for ($i = 0; $i < $rowCount; $i++) {
        for ($j = 0; $j < $placesCount; $j++) {
            $map[$i][$j] = false;
        }
    }
    $map[1][2] = true;
    $map[1][3] = true;
    $map[0][5] = true;
    $map[0][2] = true;

    return $map;
}

function reserve(&$map, $requirePlace, $rowCount, $placesCount) {

    $ending = 0;
    $reservation = [];
    for ($i = 0; $i < $rowCount; $i++) {
        $ending = 0;
        for ($j = 0; $j < $placesCount - $requirePlace + 1; $j++) {

        	if ($ending  < $requirePlace) {
                if ($map[$i][$j] === false) {
                    $map[$i][$j] = true;
                    $ending++;
                }
            }

            if ($ending  === $requirePlace) {
                $reservation[0] = $i+1;
                $reservation[1] = $j+1;
                break 2;
		    }
		}

    }


    return $reservation;
}

//проверка

$chairs = 50;
$rowCount = 5;
$placesCount = 8;
$map = generate($rowCount, $placesCount, $chairs);
$requirePlace = 3;

$reverve = reserve($map, $requirePlace, $rowCount, $placesCount);
logReserve($reverve, $requirePlace);

$reverve = reserve($map, $requirePlace, $rowCount, $placesCount);
logReserve($reverve, $requirePlace);


function logReserve(&$reservation, $requirePlace){
    if ($ending  = $requirePlace) {
        echo "Ваши места забронированы! $requirePlace свободных мест найдено в $reservation[0] ряду, начиная с $reservation[1] места <br>".PHP_EOL;
    } else {
        echo "Что-то пошло не так=( Бронь не удалась".PHP_EOL;
    }
}