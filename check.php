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


$y= trim(preg_replace('/\s+/', ' ', $y));


if (is_numeric($x) && is_numeric($r) && is_numeric($y) && preg_match("/(^-[123]$)|(^[012345]$)/", $y)) $check = true;








    if($check) {
    function checkCoords($x, $y, $r): bool
    {
        if (($x < 1.5 && $r >= 0 && $r <= 1.5 && $y >= -3 && $y <= 0) || ($r >= 0 && $r <= 1.5 && $x >= 0
                && $x <= 3 && $y >= 0 && $y <= 1.5) || ($r >= 0 && $r <= 3 && $x >= 0 && $x <= 3 &&
                $y >= -3 && $y <= 0)) {
            return true;
        } else {
            return false;
        }
    }
}


if (checkCoords($x, $y, $r)) {
    $result = array($x . ";" . $y . ";" . $r, "да", $currentTime, $executionTime);

    if (!isset($_SESSION['results'])) {
        $_SESSION['results'] = array();
    }
    $_SESSION['results'][] = $result;
    echo $x . "; " . $y . "; " . $r . "#да#" . $currentTime . "#" . $executionTime;
} else {
    $result = array($x . ";" . $y . ";" . $r, "нет", $currentTime, $executionTime);

    if (!isset($_SESSION['results'])) {
        $_SESSION['results'] = array();
    }
    $_SESSION['results'][] = $result;
    echo $x . "; " . $y . "; " . $r . "#нет#" . $currentTime . "#" . $executionTime;
}

