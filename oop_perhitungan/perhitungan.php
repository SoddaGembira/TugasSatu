<?php
class Perhitungan 
{
    public function totalNilai($a)
    {
        if (!is_array($a)) {
            return $a;
        }
        $total = 0;
        $length = count($a);
        for ($i = 0; $i < $length; $i++) { 
            $total += $a[$i];
        }
        return $total;
    }

    public function rataanNilai($a)
    {
        if (!is_array($a)) {
            return $a;
        }
        $length = count($a);
        if ($length == 0) {
            return 0;
        }
        return $this->totalNilai($a) / $length;
    }
    
    public function maximumNilai($a=1)
    {
        if (!is_array($a)) {
            return $a;
        }
        $length = count($a);
        if ($length == 0) {
            return 0;
        }
        $max = $a[0];
        for ($i = 1; $i < $length; $i++) {
            if ($max < $a[$i]) {
                $max = $a[$i];
            }
        }
        return $max;
    }

    public function minimumNilai($a=1)
    {
        if (!is_array($a)) {
            return $a;
        }
        $length = count($a);
        if ($length == 0) {
            return 0;
        }
        $min = $a[0];
        for ($i = 1; $i < $length; $i++) {
            if ($min > $a[$i]) {
                $min = $a[$i];
            }
        }
        return $min;
    }
}
