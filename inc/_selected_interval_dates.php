<?php
require_once 'interval.class.php';
?>

<div id="added_interval_container">

    <div class="interval_caption"><?php echo $lang['selected_intervals'] ?></div>

    <?php if (empty($_GET['first_day'])) {
        interval::startInterval();
        echo '<div class="interval_info">';
        interval::dayFirstSetCaption();
        echo '</div>';
        interval::endInterval();
    } else {
        $count = count($_GET['first_day']);
        $lastDayIsSet = false;
        foreach ($_GET['first_day'] as $i => $data) {

            $dataFirst['day'] = $_GET['first_day'][$i];
            $dataFirst['month'] = $_GET['first_month'][$i];
            $dataFirst['year'] = $_GET['first_year'][$i];
            $dataLast['day'] = $_GET['last_day'][$i];
            $dataLast['month'] = $_GET['last_month'][$i];
            $dataLast['year'] = $_GET['last_year'][$i];
            interval::orderDatas($dataFirst, $dataLast);

            interval::startInterval();
            interval::closeButton();
            echo '<div class="interval_info">';
            interval::dayCaption($dataFirst['day'], $dataFirst['month'], $dataFirst['year']);
            echo ' - ';
            if (empty($_GET['last_day'][$i])) {
                interval::dayLastSetCaption();
            } else {
                interval::dayCaption($dataLast['day'], $dataLast['month'], $dataLast['year']);
                $lastDayIsSet = true;
            }
            echo '</div>';
            interval::endInterval();
        }

        if ($lastDayIsSet) {
            interval::startInterval();
            interval::dayFirstSetCaption();
            interval::endInterval();
        }
    }
    ?>
</div>

<script>
    jQuery(function () {
        <?php if (!empty($_GET['last_day'])): ?>
        jQuery("#submit").attr("disabled", false);
        <?php endif ?>
    });
    /*    function startNewInterval() {

     }*/
</script>