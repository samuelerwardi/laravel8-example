<?php
namespace App\Helpers;

class GeneralHelper{
    public static function format_currency(int $value){
        return number_format($value);
    }
}
