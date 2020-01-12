<?php
function brazilianFormatMoney($value)
{
    return number_format($value, 2, ",", ".");
}

function getLoginTypeErrors()
{
    return ['auth','password','exists'];
}

function sessionON()
{
    if (!isset($_SESSION)) {
        session_start();
    }
}