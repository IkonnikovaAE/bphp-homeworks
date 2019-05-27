<?php

$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$middleName = $_POST['middleName'];

$fullName = mb_strtoupper(mb_substr($lastName, 0, 1))  . mb_strtolower(mb_substr($lastName, 1, strlen($lastName))) . ' ' . mb_strtoupper(mb_substr($firstName, 0, 1))  . mb_strtolower(mb_substr($firstName, 1, strlen ($firstName))) . ' ' . mb_strtoupper(mb_substr($middleName, 0, 1))  . mb_strtolower(mb_substr($middleName, 1, strlen ($middleName)));

$fio = mb_strtoupper(mb_substr($lastName, 0, 1)) . mb_strtoupper(mb_substr($firstName, 0, 1)) . mb_strtoupper(mb_substr($middleName, 0, 1));

$surnameAndInitials = mb_strtoupper(mb_substr($lastName, 0, 1))  . mb_strtolower(mb_substr($lastName, 1, strlen($lastName))) . ' ' . mb_strtoupper(mb_substr($firstName, 0, 1)) . '.' . mb_strtoupper(mb_substr ($middleName, 0, 1)) . '.';

echo "Полное имя: '$fullName' <br>";
echo "Фамилия и инициалы: '$fio'  <br>";
echo "Аббревиатура: '$surnameAndInitials' <br>";

