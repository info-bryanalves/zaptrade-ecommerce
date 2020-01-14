<?php
function brazilianFormatMoney($value)
{
    return number_format($value, 2, ",", ".");
}

function getLoginTypeErrors()
{
    return ['auth', 'password', 'exists'];
}

function sessionON()
{
    if (!isset($_SESSION)) {
        session_start();
    }
}

function checkContent($value, $index)
{
    return !empty($value[$index]) ? $value[$index] : '';
}

function public_path($path = '')
{
    return env('PUBLIC_PATH', base_path('public')) . ($path ? '/' . $path : $path);
}

function getStatus($value)
{
    $status = [
        'active' => "<span class='text-success'>Ativo</span>",
        'pending' => "<span class='text-warning'>Pendente</span>",
        'inactive' => "<span class='text-danger'>Recusado</span>",
    ];

    return $status[$value];
}
