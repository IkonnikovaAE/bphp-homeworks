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

function reserve(&$map, $requirePlace) {

    $ending = 0;
    $result = null;

    for ($i = 0; $i < $rows; $i++) {

        for ($j = 0; $j < $placesPerRow - $requirePlace + 1; $j++) {

        	if ($result == null) {
        		$ending = 0;
	        	for ($k = 0; $k < $placesPerRow; $k++) {
	        		if ($map[$i+k][$j+k] === false) {
		        		$ending++;
       					echo "i = $i , j = $j<br>".PHP_EOL;
		        	}
		        }

		    	if ($ending == $requirePlace) {
		    		$result = $map[$i][$j];
		    	}
		    }
		}

    }

	return $result
}

//проверка

$chairs = 50;
$map = generate(5, 8, $chairs);
$requirePlace = 5;

$reverve = reserve($map, $requireRow, $requirePlace);
logReserve($map, $requirePlace);

$reverve = reserve($map, $requireRow, $requirePlace);
logReserve($map, $requirePlace);


function logReserve($result){
    if ($result !== null) {
        echo "Ваши места забронированы! $result<br>".PHP_EOL;
    } else {
        echo "Что-то пошло не так=( Бронь не удалась".PHP_EOL;
    }
}