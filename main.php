
//
//session_start();
//$start = microtime(true);
//
//date_default_timezone_set('Europe/Moscow');
//$currentTime = date('H:i:s');
//$executionTime = number_format(microtime(true) - $start, 6);
//
//$x = $_GET['x'];
//$y = $_GET['y'];
//$r = $_GET['r'];
//$check = false;
//$result = null;
//$res = null;
//
//
//if (is_numeric($x) && is_numeric($r) && ($y > -5 && $y < 3)) $check = true;
//
//
//if (($x < 1.5 && $r >= 0 && $r <= 1.5 && $y >= -3 && $y <= 0) || ($r >= 0 && $r <= 1.5 && $x >= 0
//        && $x <= 3 && $y >= 0 && $y <= 1.5) || ($r >= 0 && $r <= 3 && $x >= 0 && $x <= 3 &&
//        $y >= -3 && $y <= 0)) {
//    $res = "да";
//} else {
//    $res = "нет";
//}
//
//
////if (!isset($_SESSION["sessionTable"]))s $_SESSION["sessionTable"] = array();
////
////if (check($x, $y, $r)) {
////    $_SESSION["sessionTable"][] = "<tr>
////        <td>$x</td>
////        <td>$y</td>
////        <td>$r</td>
////        <td>$res</td>
////        <td>$currentTime</td>
////        <td>$executionTime</td>
////        </tr>";
////    echo "<table id='outputTable'>
////        <tr>
////        <th>x</th>
////        <th>y</th>
////        <th>r</th>
////        <th>Точка входит в ОДЗ</th>
////        <th>Текущее время</th>
////        <th>Время работы скрипта</th>
////    </tr>";
////
//
////    foreach ($_SESSION["sessionTable"] as $sessionTable) echo $sessionTable;
////    array_push($sessionTable);
////    echo "</table>";
//
//
//if ($check) {
//    // Сохранение в сессию
//    $result = array($x, $y, $r, $res, $currentTime, $executionTime);
//    if (!isset($_SESSION['results'])) {
//        $_SESSION['results'] = array();
//    }
//    $_SESSION['results'][] = $result;
//    array_push($result);
//    echo $x, $y, $r, $res, $currentTime, $executionTime;
//} else {
//    // Сохранение в сессию
//    $result = array($x, $y, $r, $res, $currentTime, $executionTime);
//    if (!isset($_SESSION['results'])) {
//        $_SESSION['results'] = array();
//    }
//    $_SESSION['results'][] = $result;
//    array_push($result);
//    echo $x, $y, $r, $res, $currentTime, $executionTime;
//}
//
////
////if (isset($_SESSION['results'])) {
////foreach ($_SESSION['results'] as $result) {
<!--////"<tr>-->
<!---->
<!--/*/*    <th>--><?php //echo $result[1] ?><!--</th>*/*/-->
<!--/*/*    <th>--><?php //echo $result[2] ?><!--</th>*/*/-->
<!--/*/*    <th>--><?php //echo $result[3] ?><!--</th>*/*/-->
<!--/*/*    <th>--><?php //echo $result[4] ?><!--</th>*/*/-->
<!--/*/*    <th>--><?php //echo $result[5] ?><!--</th>*/*/-->
////</tr>";
////}}
////
////echo "<table id='outputTable' class='table'>
////        <tr>
////        <th>x</th>
////        <th>y</th>
////        <th>r</th>
////        <th>Точка входит в ОДЗ</th>
////        <th>Текущее время</th>
////        <th>Время работы скрипта</th>
////    </tr>";
////foreach ($_SESSION["sessionTable"] as $sessionTable) echo $sessionTable;
////echo "</table>";
//
////
////    $_SESSION["sessionTable"][] = "<tr>
////    <td>$x</td>
////    <td>$y</td>
////   <td>$r</td>
////    <td>$res</td>
////    <td>$currentTime</td>
////    <td>$executionTime</td>
////    </tr>";
////
////    echo "<table id='outputTable' class='table'>
////        <tr>
////        <th>x</th>
////        <th>y</th>
////        <th>r</th>
////        <th>Точка входит в ОДЗ</th>
////        <th>Текущее время</th>
////        <th>Время работы скрипта</th>
////    </tr>";
////    foreach ($_SESSION["sessionTable"] as $sessionTable) echo $sessionTable;
////   echo "<table>";
////
////

<