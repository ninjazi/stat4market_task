<?php

class count_date
{
    public function count_dow_in_range($start_date, $end_date, $dow)
    {
        /*
         * $start_date -- unix timestamp, левая граница интервала
         * $end_date -- unix timestamp, правая граница интервала
         * $dow -- искомый день недели аналогично формату ф-ции date('w'), где вс=0, сб=6
         */

        $i = 0; /*счетчик искомого дня недели*/
        while ($start_date <= $end_date) {
            if (date('w', $start_date) == $dow) $i++;
            $start_date += 86400;
        }
        return $i;
    }
}

$test = new count_date();
echo $test->count_dow_in_range(strtotime("2006-01-01"),strtotime("2006-01-14"),2);