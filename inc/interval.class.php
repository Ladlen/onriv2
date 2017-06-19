<?php
class interval
{
    public static function closeButton($show = true)
    {
        $s = "<button class='btn_remove_interval' title='{$GLOBALS['lang']['delete']}>X</button>";
        if ($show) {
            echo $s;
        }
        return $s;
    }

    public static function dayCaption($day, $month, $year, $show = true)
    {
        $s = $day . $GLOBALS['lang_monts_r'][$month] . $year;
        if ($show) {
            echo $s;
        }
        return $s;
    }

    public static function dayFirstSetCaption($show = true)
    {
        $s = $GLOBALS['lang']['select_first_day'];
        if ($show) {
            echo $s;
        }
        return $s;
    }

    public static function dayLastSetCaption($show = true)
    {
        $s = $GLOBALS['lang']['select_last_day'];
        if ($show) {
            echo $s;
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
}