<?php

class interval
{
    public static function closeButton($show = true)
    {
        $s = "<button class='btn_remove_interval' title='{$GLOBALS['lang']['delete']}'>X</button>";
        if ($show) {
            echo $s;
        }
        return $s;
    }

    public static function dayCaption($day, $month, $year, $show = true)
    {
        $s = "<strong>$day {$GLOBALS['lang_monts_r'][$month]} $year</strong>";
        if ($show) {
            echo $s;
        }
        return $s;
    }

    public static function dayFirstSetCaption($show = true)
    {
        $s = $GLOBALS['lang']['select_first_day'];
        if ($show) {
            echo "<i>$s</i>";
        }
        return $s;
    }

    public static function dayLastSetCaption($show = true)
    {
        $s = $GLOBALS['lang']['select_last_day'];
        if ($show) {
            echo "<i>$s</i>";
        }
        return $s;
    }

    public static function startInterval($show = true)
    {
        $s = '<div class="added_interval">';
        if ($show) {
            echo $s;
        }
        return $s;
    }

    public static function endInterval($show = true)
    {
        $s = '</div>';
        if ($show) {
            echo $s;
        }
        return $s;
    }

    public static function cellReserved($id, $show = true)
    {
        $s = <<<HTML
        <label>
            <div class="day h_act disabled" id="b$id"><span class="day sdd">$id</span></div>
        </label>
HTML;

        if ($show) {
            echo $s;
        }
        return $s;
    }

    /**
     * Возвращает false если дата свободна, true если уже забронирована, null если при бронировании установлена
     * только первая дата промежутка.
     *
     * @param $day
     * @param $month
     * @param $year
     * @param $intervals
     * @return bool|null
     */
    public static function ifDateAlreadyReservedByCurrentUser($day, $month, $year, $intervals)
    {
        if (empty($intervals['first_day'])) {
            return false;
        }

        foreach ($intervals['first_day'] as $key => $value) {
            if (isset($intervals['last_day'][$key])) {
                $dataFirst['day'] = $intervals['first_day'][$key];
                $dataFirst['month'] = $intervals['first_month'][$key];
                $dataFirst['year'] = $intervals['first_year'][$key];
                $dataLast['day'] = $intervals['last_day'][$key];
                $dataLast['month'] = $intervals['last_month'][$key];
                $dataLast['year'] = $intervals['last_year'][$key];
                self::orderDatas($dataFirst, $dataLast);

                if ((($dataFirst['year'] < $year)
                    || ($dataFirst['year'] == $year
                        && $dataFirst['month'] < $month)
                    || ($dataFirst['year'] == $year
                        && $dataFirst['month'] == $month
                        && $dataFirst['day'] < $day))
                &&
                    (($dataLast['year'] > $year)
                        || ($dataLast['year'] == $year
                            && $dataLast['month'] > $month)
                        || ($dataLast['year'] == $year
                            && $dataLast['month'] == $month
                            && $dataLast['day'] > $day))
                ) {
                    return false;
                }

            } else {
                // Промежуток не установлен - проверяем только наличие выбранной начальной даты
                if ($intervals['first_day'][$key] == $day && $intervals['first_month'][$key] == $month && $intervals['first_year'][$key] == $year) {
                    return null;
                }
            }

            return true;
        }
    }

    public static function orderDatas(&$dataFirst, &$dataLast)
    {
        if (($dataFirst['year'] > $dataLast['year'])
            || ($dataFirst['year'] == $dataLast['year']
                && $dataFirst['month'] > $dataLast['month'])
            || ($dataFirst['year'] == $dataLast['year']
                && $dataFirst['month'] == $dataLast['month']
                && $dataFirst['day'] > $dataLast['day'])
        ) {
            $tmp = $dataFirst;
            $dataFirst = $dataLast;
            $dataLast = $tmp;
        }
    }
}