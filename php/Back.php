<?php
    function checkarea($x,$y,$r){
        if (($x >= -$r/2 && $x <= 0 && $y <= $r && $y >= 0) || // square
            ($y >= (-$x - $r) && $y <= 0 && $x <= 0) || // \
            (($x*$x + $y*$y) <= $r*$r/4 && $x >= 0 && $y >= 0)){ // circle
            return "<span style='color: green'>True</span>";
        } else {
            return "<span style='color: red'>False</span>";
        }
    }
    function check_value($x,$y,$r){
        !in_array($x,array(-5,-4,-3,-2,-1,0,1,2,3)) || //value x
        !(is_numeric($y) && $y>-5 && $y<5) || //value y (numeric 'cause its text)
        !in_array($r,array(1, 1.5,2,2.5,3)); //value r
    }
    session_start();
    date_default_timezone_set('Europe/Moscow');
    $currentTime = date("H:i:s");
    $session_start_time = microtime(true); //from start session
    $entityBody = file_get_contents('php://input');
    $postArray = json_decode($entityBody);
    $x = (int) $postArray->xValue;
    $y = (float) str_replace(",", ".", $postArray->yValue);
    $r = (double) $postArray->rValue;
    if (check_value($x, $y, $r)) {
        http_response_code(400); //error. false format of values
        return;
    }

    $result = checkarea ($x, $y, $r);

    $running_time = microtime(true) - $session_start_time;

    $output = array($x, $y, $r, $result, $currentTime, $running_time);

    if (!isset($_SESSION['history'])) {
        $_SESSION['history'] = array();
    }

    array_push($_SESSION['history'], $output);
    $array[]=$output;

    include "table.php";
