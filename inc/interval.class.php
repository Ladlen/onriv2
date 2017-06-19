<?php

class interval
{
    public static function closeButton($show = true)
    {
        $s = "<a class='btn_remove_interval' title='{$GLOBALS['lang']['delete']}'>X</a>";
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
            echo "<div class='interval_info'><i>$s</i></div>";
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

    /**
     * @param $id
     * @param bool|true $show
     * @param bool|false $startSelection является ли ячейка ячейкой начала выбора интервала
     * @return string
     */
    public static function cellReserved($id, $show = true, $startSelection = false)
    {
        $class = $startSelection ? 'start_selection' : '';
        $title = $startSelection ? $GLOBALS['lang']['ordered_day_start_interval'] : $GLOBALS['lang']['ordered_day'];
        $s = <<<HTML
        <div class="tdd lost_day interval $class">
            <span class="bsdd" title="$title"><span class="sdd">$id</span></span>
        </div>
HTML;

        /*$s = <<<HTML
        <label>
            <div class="day h_act disabled" id="b$id"><span class="day sdd">$id</span></div>
        </label>
HTML;*/

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
            if (!empty($intervals['last_day'][$key])) {
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
                            && $dataFirst['day'] <= $day))
                    &&
                    (($dataLast['year'] > $year)
                        || ($dataLast['year'] == $year
                            && $dataLast['month'] > $month)
                        || ($dataLast['year'] == $year
                            && $dataLast['month'] == $month
                            && $dataLast['day'] >= $day))
                ) {
                    return true;
                }

            } else {
                // Промежуток не установлен - проверяем только наличие выбранной начальной даты
                if ($intervals['first_day'][$key] == $day && $intervals['first_month'][$key] == $month && $intervals['first_year'][$key] == $year) {
                    return null;
                }
            }
        }

        return false;
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