<?php

class interval
{
    public static $getValues = ['f_day', 'l_day', 'f_month', 'l_month', 'f_year', 'l_year'];

    public static function createLink($dateUrlStr)
    {
        $currMonthYear = "&month=$GLOBALS[select_month]&year=$GLOBALS[select_year]&";
        return "$GLOBALS[script_name]?obj={$GLOBALS['obj']}{$dateUrlStr}$currMonthYear{$GLOBALS['cat_url']}{$GLOBALS['ofadm_url']}#ag_calendar";
    }

    /**
     * @param $dates
     * @param $dd
     * @param $month
     * @param $year
     * @param bool|false $excludeWithStart for Delete button
     * @return string
     */
    public static function createDateUrlStr($dates, $dd, $month, $year, $excludeWithStart = false)
    {
        $dateUrlStr = '';

        if (empty($dates['f_day'])) {
            if (!$excludeWithStart) {
                $dateUrlStr = '&f_day[0]=' . $dd . '&f_month[0]=' . $month . '&f_year[0]=' . $year;
            }
        } else {
            $lastDayWasEmpty = false;
            $cLast = 0;
            foreach ($dates['f_day'] as $c => $data) {

                if ($excludeWithStart
                    && $dates['f_day'][$c] == $excludeWithStart['f_day']
                    && $dates['f_month'][$c] == $excludeWithStart['f_month']
                    && $dates['f_year'][$c] == $excludeWithStart['f_year']
                ) {
                    continue;
                }

                if (empty($dates['l_day'][$c])) {
                    $dateUrlStr .= "&f_day[$c]={$dates['f_day'][$c]}&f_month[$c]={$dates['f_month'][$c]}&f_year[$c]={$dates['f_year'][$c]}";
                    if (!$excludeWithStart) {
                        $dateUrlStr .= "&l_day[$c]=$dd&l_month[$c]=$month&l_year[$c]=$year";
                    }
                    $lastDayWasEmpty = true;
                } else {
                    $dataFirst['day'] = $dates['f_day'][$c];
                    $dataFirst['month'] = $dates['f_month'][$c];
                    $dataFirst['year'] = $dates['f_year'][$c];
                    $dataLast['day'] = $dates['l_day'][$c];
                    $dataLast['month'] = $dates['l_month'][$c];
                    $dataLast['year'] = $dates['l_year'][$c];
                    interval::orderDatas($dataFirst, $dataLast);

                    $dateUrlStr .= "&f_day[$c]=$dataFirst[day]&f_month[$c]=$dataFirst[month]&f_year[$c]=$dataFirst[year]"
                        . "&l_day[$c]=$dataLast[day]&l_month[$c]=$dataLast[month]&l_year[$c]=$dataLast[year]";
                }

                $cLast = $c;
            }
            if (!$lastDayWasEmpty && !$excludeWithStart) {
                $nextC = $cLast + 1;
                $dateUrlStr .= "&f_day[$nextC]=$dd&f_month[$nextC]=$month&f_year[$nextC]=$year";
            }
        }

        return $dateUrlStr;
    }

    public static function createUrlFromDates($dates)
    {
        $dateOnly = [];
        foreach ($dates as $name => $value) {
            if (in_array($name, self::$getValues)) {
                $dateOnly[$name] = $value;
            }
        }
        return http_build_query($dateOnly);
    }

    public static function closeButton($dates, $excludeIndex, $show = true)
    {
        global $dd, $month, $year;
        $dateUrlStr = self::createDateUrlStr($dates, $dd, $month, $year,
            [
                'f_day' => $dates['f_day'][$excludeIndex],
                'f_month' => $dates['f_month'][$excludeIndex],
                'f_year' => $dates['f_year'][$excludeIndex]
            ]);
        $href = self::createLink($dateUrlStr);
        $s = "<a class='btn_remove_interval' title='{$GLOBALS['lang']['delete']}' href='" . htmlspecialchars($href) . "'>X</a>";
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

    public static function priceScript($show = true)
    {
        //global $count_spots, $sel_s_price, $lang;
        global $daily_price_obj, $lang;

        if (!$daysOrdered = self::getTotalDays($_GET)) {
            return '';
        }

        /*$s = 'function count_spots_price() {';
        if ($count_spots == '1') {
            if ($sel_s_price != '-') {
                $s .= '
                    var cspots = document.getElementById("inp_spots").value;
	                var summ = parseFloat(' . $sel_s_price . ' * cspots * ' . $daysOrdered . ');
	            	summ = Math.round(summ * 100) / 100;
	                $("#total").html(summ);';
            } else {
                $s .= '$("#total").html("' . $lang['price_variable'] . '");' . "\n";
            }
        } else {
            if ($sel_s_price != '-') {
                $s .= "$('#total').html($sel_s_price * $daysOrdered);\n";
            } else {
                $s .= '$("$total").html("' . $lang['price_variable'] . '");' . "\n";
            }
        }
        $s .= "}\n\n";

        $s = '$(document).ready(function() {count_spots_price();});' . "\n"
            . '$("#p_info").addClass("fadeIn_price");' . "\n";*/

        $s = <<<HTML
    jQuery(function($){
        function count_spots_price() {
            var cspots = $("#inp_spots").length > 0 ? $("#inp_spots").val() : 1;
            var summ = parseFloat($daily_price_obj * cspots * $daysOrdered);

            summ = Math.round(summ * 100) / 100;
            document.getElementById("total").innerHTML = summ;
         }
         count_spots_price();
         $("#p_info").addClass("fadeIn_price");
	});
HTML;

        if ($show) {
            echo $s;
        }
        return $s;
    }

    /**
     * Общее количество заказанных дней
     */
    public static function getTotalDays($intervals)
    {
        $daysTotal = 0;

        foreach ($intervals['f_day'] as $key => $value) {
            if (empty($intervals['l_day'][$key])) {
                $daysTotal += 1;
            } else {
                $dataFirst['day'] = $intervals['f_day'][$key];
                $dataFirst['month'] = $intervals['f_month'][$key];
                $dataFirst['year'] = $intervals['f_year'][$key];
                $dataLast['day'] = $intervals['l_day'][$key];
                $dataLast['month'] = $intervals['l_month'][$key];
                $dataLast['year'] = $intervals['l_year'][$key];
                self::orderDatas($dataFirst, $dataLast);

                $dtFirst = new DateTime("$dataFirst[year]-$dataFirst[month]-$dataFirst[day]");
                $dtLast = new DateTime("$dataLast[year]-$dataLast[month]-$dataLast[day]");
                $dtDiff = $dtFirst->diff($dtLast);
                $dtDiff->format('%R'); // use for point out relation: smaller/greater
                $daysTotal += $dtDiff->days + 1;
            }
        }

        return $daysTotal;
    }

    /**
     * @param $id
     * @param bool|true $show
     * @param bool|false $startSelection является ли ячейка ячейкой начала выбора интервала
     * @return string
     */
    public static function cellReserved($id, $show = true, $startSelection = false)
    {
        if ($startSelection == 'start_selection') {
            $class = 'start_selection';
            $title = $GLOBALS['lang']['ordered_day_start_interval'];
        } elseif ($startSelection == 'last_date_cant_reach') {
            $class = 'last_date_cant_reach';
            $title = $GLOBALS['lang']['not_accessible_date'];
        } else {
            $class = '';
            $title = $GLOBALS['lang']['ordered_day'];
        }
        /*$class = $startSelection == 'start_selection' ? 'start_selection' : '';
        $title = $startSelection == 'start_selection' ? $GLOBALS['lang']['ordered_day_start_interval'] : $GLOBALS['lang']['ordered_day'];
        $class = $startSelection == 'last_date_cant_reach' ? 'last_date_cant_reach' : '';
        $title = $startSelection == 'last_date_cant_reach' ? $GLOBALS['lang']['ordered_day_start_interval'] : $GLOBALS['lang']['ordered_day'];*/
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
     * Возвращает false если дата свободна, 1 если уже забронирована, 2 если при бронировании установлена
     * только первая дата промежутка, 3 если текущая дата имеет препятствие на пути к первой установленной дате.
     *
     * @param $day
     * @param $month
     * @param $year
     * @param $intervals
     * @return bool|null
     */
    public static function ifDateAlreadyReservedByCurrentUser($day, $month, $year, $intervals)
    {
        if (empty($intervals['f_day'])) {
            return false;
        }

        foreach ($intervals['f_day'] as $key => $value) {
            if (!empty($intervals['l_day'][$key])) {
                $dataFirst['day'] = $intervals['f_day'][$key];
                $dataFirst['month'] = $intervals['f_month'][$key];
                $dataFirst['year'] = $intervals['f_year'][$key];
                $dataLast['day'] = $intervals['l_day'][$key];
                $dataLast['month'] = $intervals['l_month'][$key];
                $dataLast['year'] = $intervals['l_year'][$key];
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
                    return 1;
                }

            } else {
                // Промежуток не установлен - проверяем только наличие выбранной начальной даты
                if ($intervals['f_day'][$key] == $day && $intervals['f_month'][$key] == $month && $intervals['f_year'][$key] == $year) {
                    return 2;
                }

                // Проверим нет ли на пути от препятствий в виде уже заказанных интервалов
                $dataFirst['day'] = $intervals['f_day'][$key];
                $dataFirst['month'] = $intervals['f_month'][$key];
                $dataFirst['year'] = $intervals['f_year'][$key];
                $dataLast['day'] = $day;
                $dataLast['month'] = $month;
                $dataLast['year'] = $year;
                self::orderDatas($dataFirst, $dataLast);

                $dtFirst = new DateTime("$dataFirst[year]-$dataFirst[month]-$dataFirst[day]");
                $dtLast = new DateTime("$dataLast[year]-$dataLast[month]-$dataLast[day]");

                $cIntervals = self::findCompleteIntervals($intervals);
                while ($dtFirst < $dtLast) {
                    if (self::ifDateAlreadyReservedByCurrentUser(
                            $dtFirst->format('d'),
                            $dtFirst->format('m'),
                            $dtFirst->format('Y'),
                            $cIntervals
                        ) != false
                    ) {
                        return 3;
                    }
                    $dtFirst->modify('+1 day');
                }
            }
        }

        return false;
    }

    public static function findCompleteIntervals($intervals, $extractNotComplete = false)
    {
        $cIntervals = [];

        if (empty($intervals['f_day'])) {
            return [];
        }

        foreach ($intervals['f_day'] as $key => $value) {
            if (!empty($intervals['l_day'][$key])) {
                $cIntervals['f_day'][$key] = $intervals['f_day'][$key];
                $cIntervals['f_month'][$key] = $intervals['f_month'][$key];
                $cIntervals['f_year'][$key] = $intervals['f_year'][$key];
                $cIntervals['l_day'][$key] = $intervals['l_day'][$key];
                $cIntervals['l_month'][$key] = $intervals['l_month'][$key];
                $cIntervals['l_year'][$key] = $intervals['l_year'][$key];
            } elseif ($extractNotComplete) {
                $cIntervals['f_day'][$key] = $intervals['f_day'][$key];
                $cIntervals['f_month'][$key] = $intervals['f_month'][$key];
                $cIntervals['f_year'][$key] = $intervals['f_year'][$key];
            }
        }

        return $cIntervals;
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

    public static function serialize($intervals)
    {
        //return serialize(self::findCompleteIntervals($intervals, true));

        if (empty($intervals['f_day'])) {
            return '';
        }

        $ret = [];

        foreach ($intervals['f_day'] as $key => $value) {
            /*$s = "{$intervals['f_year'][$key]}.{$intervals['f_month'][$key]}.{$intervals['f_day'][$key]}";
            if (!empty($intervals['l_day'][$key])) {
                $s .= "-{$intervals['l_year'][$key]}.{$intervals['l_month'][$key]}.{$intervals['l_day'][$key]}";
            }*/
            $s = "{$intervals['f_day'][$key]}.{$intervals['f_month'][$key]}.{$intervals['f_year'][$key]}";
            if (!empty($intervals['l_day'][$key])) {
                $s .= "-{$intervals['l_day'][$key]}.{$intervals['l_month'][$key]}.{$intervals['l_year'][$key]}";
            }

            $ret[] = $s;
        }

        return implode('||', $ret);
    }

    public static function intervalUlList($intervals, $show = true)
    {
        if (empty($intervals['f_day'])) {
            return '';
        }

        $s = "<ul>\n";

        foreach ($intervals['f_day'] as $key => $value) {
            $s .= "<li>\n";
            if (empty($intervals['l_day'][$key])) {
                $s .= "{$intervals['f_year'][$key]}-{$intervals['f_month'][$key]}-{$intervals['f_day'][$key]}";
            } else {
                $dataFirst['day'] = $intervals['f_day'][$key];
                $dataFirst['month'] = $intervals['f_month'][$key];
                $dataFirst['year'] = $intervals['f_year'][$key];
                $dataLast['day'] = $intervals['l_day'][$key];
                $dataLast['month'] = $intervals['l_month'][$key];
                $dataLast['year'] = $intervals['l_year'][$key];
                self::orderDatas($dataFirst, $dataLast);

                $s .= "{$dataFirst['day']} {$GLOBALS['lang_monts_r'][$dataFirst['month']]} {$dataFirst['year']}"
                    . " - {$dataLast['day']} {$GLOBALS['lang_monts_r'][$dataLast['month']]} {$dataLast['year']}\n";
            }
            $s .= "</li>\n";
        }

        $s .= "</ul>\n";

        if ($show) {
            echo $s;
        }
        return $s;
    }

    public static function formatStoredInterval($interval, $show = true)
    {
        $s = '';

        //TODO: упорядочить по возрастанию даты
        $dv_arr = explode('-', $interval);
        if (isset($dv_arr[0])) {
            $s .= self::formatStoredDate($dv_arr[0], false);
            if (isset($dv_arr[1])) {
                $s .= ' - ' . self::formatStoredDate($dv_arr[1], false);
            }
        }

        if ($show) {
            echo $s;
        }
        return $s;
    }

    public static function formatStoredDate($date, $show = true)
    {
        $s = '';

        $db_day = '';
        $db_month = '0';
        $db_year = '';

        $dv_arr = explode('.', $date);
        if (isset($dv_arr[0])) {
            $db_year = $dv_arr[0];
        }
        if (isset($dv_arr[1])) {
            $db_month = $dv_arr[1];
        }
        if (isset($dv_arr[2])) {
            $db_day = $dv_arr[2];
        }

        $s .= $db_day . ' ' . $GLOBALS['lang_monts_r'][$db_month] . ' ' . $db_year;

        if ($show) {
            echo $s;
        }
        return $s;
    }

    public static function unsetParamsFromUri($uri)
    {
        $parsedUrl = parse_url($uri);

        parse_str($parsedUrl['query'], $modUri);

        if (isset($modUri['f_day'])) {
            unset($modUri['f_day']);
        }
        if (isset($modUri['f_month'])) {
            unset($modUri['f_month']);
        }
        if (isset($modUri['f_year'])) {
            unset($modUri['f_year']);
        }
        if (isset($modUri['l_day'])) {
            unset($modUri['l_day']);
        }
        if (isset($modUri['l_month'])) {
            unset($modUri['l_month']);
        }
        if (isset($modUri['l_year'])) {
            unset($modUri['l_year']);
        }

        $modUri = $parsedUrl['path'] . '?' . http_build_query($modUri);

        return $modUri;
    }
}
