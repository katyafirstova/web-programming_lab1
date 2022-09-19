<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/style.css">
    <link rel="stylesheet" href="./styles/button.css">
    <link rel="stylesheet" href="./styles/input.css">
    <link rel="stylesheet" href="./styles/select.css">

    <title>web-1</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src='https://code.jquery.com/jquery-3.6.1.min.js'></script>

</head>

<body>
<header>
    <h1 align="center">
        Лабораторная работа №1 по веб-программированию
    </h1>
    <h2 align="right">
        Фирстова Екатерина Витальевна
        <br>
        Вариант 14212
    </h2>
</header>


<table>
    <tr>
        <td>
            <figure align="right">
                <img src="./img/img.png" alt="img">
            </figure>

            <form id="form" onsubmit="getTable()">
                <h3>
                    X:
                </h3>
                <div>
                    <label class="required" for="button" data-required="Выберите X"></label>
                    <button name="x" id="button" class="button1" value="-5"> -5</button>
                    <button name="x" class="button2" value="-4"> -4</button>
                    <button name="x" class="button3" value="-3"> -3</button>
                    <br>
                    <button name="x" class="button1" value="-2"> -2</button>
                    <button name="x" class="button2" value="-1"> -1</button>
                    <button name="x" class="button3" value="0"> 0</button>
                    <br>
                    <button name="x" class="button1" value="1"> 1</button>
                    <button name="x" class="button2" value="2"> 2</button>
                    <button name="x" class="button3" value="3"> 3</button>
                    <br><br>
                </div>
                <div class="error" id="xError"></div>
                <h3>
                    Y:
                </h3>
                <div>
                    <div class="form-control">
                        <label for="y"></label>

                        <input name="y" id="y" min="-3" max="5" class="inputY"
                               placeholder="Введите значение от -3 до 5">
                        <i class="fas fa-check-circle"></i>
                        <i class="fas fa-exclamation-circle"></i>
                        <small>Error message</small>
                        <span class="highlight"></span>
                        <span class="bar"></span>
                        <span class="yError" aria-live="polite"></span>
                    </div>

                    <br><br><br><br><br>
                </div>

                <h3>
                    R:
                </h3>
                <div>
                    <label class="required" for="select" data-required="Выберите R"></label>
                    <select class="selectR" name="select" id="select">
                        <option selected="" name="R" disabled="disabled" value="">R</option>
                        <option value="1">1</option>
                        <option value="1.5">1.5</option>
                        <option value="2">2</option>
                        <option value="2.5">2.5</option>
                        <option value="3">3</option>
                    </select>
                </div>
                <input type="button" id="submit" class="btn" value="Submit">
                <div id="response"></div>
            </form>
            <script src="validation.js"></script>
            <script src="table.js"></script>
        </td>
    </tr>
</table>


<tr id="tr-result">
    <td rowspan="2">
        <table id="result-table">
            <thead>
            <tr>
                <th scope="col">X</th>
                <th scope="col">Y</th>
                <th scope="col">R</th>
                <th scope="col">Результат</th>
                <th scope="col">Current Time</th>
                <th scope="col">Computation Time</th>
            </tr>
            </thead>
            <tbody id="results_table_body">
            <!--<tr id="no_result"><th colspan="4">Нет результатов</th></tr>-->
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
            $result = null;
            $res = null;

            if (is_numeric($x) && is_numeric($r) && ($y > -5 && $y < 3)) $check = true;


            if (($x < 1.5 && $r >= 0 && $r <= 1.5 && $y >= -3 && $y <= 0) || ($r >= 0 && $r <= 1.5 && $x >= 0
                    && $x <= 3 && $y >= 0 && $y <= 1.5) || ($r >= 0 && $r <= 3 && $x >= 0 && $x <= 3 &&
                    $y >= -3 && $y <= 0)) {
                $res = "да";
            } else {
                $res = "нет";
            }
            if (isset($_SESSION['results'])) {
                foreach ($_SESSION['results'] as $result) { ?>
                    <tr>
                        <th><?php echo $result[0] ?></th>
                        <th><?php echo $result[1] ?></th>
                        <th><?php echo $result[2] ?></th>
                        <th><?php echo $result[3] ?></th>
                        <th><?php echo $result[4] ?></th>
                        <th><?php echo $result[5] ?></th>
                    </tr>
                <?php }} ?>
            </tbody>


        </table>
    </td>

</tr>


</body>
</html>
        