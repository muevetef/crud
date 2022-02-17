<?php
function randomString($n)
{

    $caracteres = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $str = '';

    for ($i = 0; $i < $n; $i++) {
        $index = rand(0, strlen($caracteres) - 1);
        $str .= $caracteres[$index];
    }

    return $str;
}