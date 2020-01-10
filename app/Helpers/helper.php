<?php
function brazilianFormatMoney($value)
{
    return number_format($value, 2, ",", ".");
}
