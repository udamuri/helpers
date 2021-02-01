<?php

namespace Udamuri\Helpers;

class Terbilang
{
   
    public static function terbilang($number){
        if($number < 0) {
            $result = "minus ". trim(static::denominator($number));
        } else {
            $result = trim(static::denominator($number));
        }

        return $result;
    }

    private static function denominator($value) {
		$value = abs($value);
		$alphabet  = ["", "satu", "dua", "tiga", "empat", "lima", "enam", "tujuh", "delapan", "sembilan", "sepuluh", "sebelas"];
		$temp = "";
		if ($value < 12) {
			$temp = " ". $alphabet [$value];
		} else if ($value <20) {
			$temp = self::denominator($value - 10). " belas";
		} else if ($value < 100) {
			$temp = self::denominator($value/10)." puluh". self::denominator($value % 10);
		} else if ($value < 200) {
			$temp = " seratus" . self::denominator($value - 100);
		} else if ($value < 1000) {
			$temp = self::denominator($value/100) . " ratus" . self::denominator($value % 100);
		} else if ($value < 2000) {
			$temp = " seribu" . self::denominator($value - 1000);
		} else if ($value < 1000000) {
			$temp = self::denominator($value/1000) . " ribu" . self::denominator($value % 1000);
		} else if ($value < 1000000000) {
			$temp = self::denominator($value/1000000) . " juta" . self::denominator($value % 1000000);
		} else if ($value < 1000000000000) {
			$temp = self::denominator($value/1000000000) . " milyar" . self::denominator(fmod($value,1000000000));
		} else if ($value < 1000000000000000) {
			$temp = self::denominator($value/1000000000000) . " trilyun" . self::denominator(fmod($value,1000000000000));
		}     
		return $temp;
	}
}
