<?php
require_once 'interval.class.php';
?>

<div id="added_interval_container">

    <div class="interval_caption"><?php echo $lang['selected_intervals'] ?></div>

    <?php if (empty($_GET['f_day'])) {
        interval::startInterval();
        interval::dayFirstSetCaption();
        interval::endInterval();
    } else {
        foreach ($_GET['f_day'] as $i => $data) {
            interval::startInterval();
            interval::closeButton($_GET, $i);
            echo '<div class="interval_info">';
            if (empty($_GET['l_day'][$i])) {
                interval::dayCaption($_GET['f_day'][$i], $_GET['f_month'][$i], $_GET['f_year'][$i]);
                echo ' - ';
                interval::dayLastSetCaption();
            } else {
                $dataFirst['day'] = $_GET['f_day'][$i];
                $dataFirst['month'] = $_GET['f_month'][$i];
                $dataFirst['year'] = $_GET['f_year'][$i];
                $dataLast['day'] = $_GET['l_day'][$i];
                $dataLast['month'] = $_GET['l_month'][$i];
                $dataLast['year'] = $_GET['l_year'][$i];
                interval::orderDatas($dataFirst, $dataLast);

                interval::dayCaption($dataFirst['day'], $dataFirst['month'], $dataFirst['year']);
                echo ' - ';
                interval::dayCaption($dataLast['day'], $dataLast['month'], $dataLast['year']);
            }
            echo '</div>';
            interval::endInterval();
        }

        if (!empty($_GET['l_day'][$i])) {
            interval::startInterval();
            interval::dayFirstSetCaption();
            interval::endInterval();
        }
    }
    ?>
</div>

<script>
    jQuery(function () {
        <?php if (!empty($_GET['l_day'])): ?>
        jQuery("#submit").attr("disabled", false);
        <?php endif ?>
    });
    /*    function startNewInterval() {

     }*/
</script>