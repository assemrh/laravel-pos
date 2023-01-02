<?php

if ( ! function_exists('laravel_pos'))
{
    /**
     * @return mixed
     */
    function laravel_pos()
    {
        return Kaanyakar\LaravelPos\Facades\LaravelPos::instance();
    }
}
