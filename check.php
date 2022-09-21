<?php

session_start();
$start = microtime(true);
date_default_timezone_set('Europe/Moscow');

$currentTime = date('H:i:s');
$executionTime = number_format(microtime(true) - $start, 6);


$x = $_GET['x'];
$y = $_GET['y'];
$r = $_GET['r'];

$check = false;


if (is_numeric($x) && is_numeric($r) && ($y > -5 && $y < 3)) $check = true;


if (($x < 1.5 && $r >= 0 && $r <= 1.5 && $y >= -3 && $y <= 0) || ($r >= 0 && $r <= 1.5 && $x >= 0
        && $x <= 3 && $y >= 0 && $y <= 1.5) || ($r >= 0 && $r <= 3 && $x >= 0 && $x <= 3 &&
        $y >= -3 && $y <= 0)) {
    $res = "да";
} else {
    $res = "нет";
}


    if ($check) {
        // Сохранение в сессию
//        $result = array($x, $y, $r, $res, $currentTime, $executionTime);
        $result = array($x.";".$y.";".$r, "да", $currentTime, $executionTime);

        if (!isset($_SESSION['results'])) {
            $_SESSION['results'] = array();
        }
        array_push($result);
        echo $x . "; " . $y . "; " . $r . "#да#" . $currentTime. "#" . $executionTime;
    }
    else {
        // Сохранение в сессию
        $result = array($x.";".$y.";".$r, "нет", $currentTime, $executionTime);

        if (!isset($_SESSION['results'])) {
            $_SESSION['results'] = array();
        }
        array_push($result);
        echo $x . "; " . $y . "; " . $r . "#нет#" . $currentTime. "#" . $executionTime;
    }



