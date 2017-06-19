<?php
require_once 'interval.class.php';
?>

<div id="added_interval_container">

    <div class="interval_caption"><?php echo $lang['selected_intervals'] ?></div>

    <?php if (empty($_GET['first_day'])) {
        interval::startInterval();
        interval::dayFirstSetCaption();
        interval::endInterval();
    } else {
        foreach ($_GET['first_day'] as $i => $data) {
            interval::startInterval();
            interval::closeButton($_GET, $i);
            echo '<div class="interval_info">';
            if (empty($_GET['last_day'][$i])) {
                interval::dayCaption($_GET['first_day'][$i], $_GET['first_month'][$i], $_GET['first_year'][$i]);
                echo ' - ';
                interval::dayLastSetCaption();
            } else {
                $dataFirst['day'] = $_GET['first_day'][$i];
                $dataFirst['month'] = $_GET['first_month'][$i];
                $dataFirst['year'] = $_GET['first_year'][$i];
                $dataLast['day'] = $_GET['last_day'][$i];
                $dataLast['month'] = $_GET['last_month'][$i];
                $dataLast['year'] = $_GET['last_year'][$i];
                interval::orderDatas($dataFirst, $dataLast);

                interval::dayCaption($dataFirst['day'], $dataFirst['month'], $dataFirst['year']);
                echo ' - ';
                interval::dayCaption($dataLast['day'], $dataLast['month'], $dataLast['year']);
            }
            echo '</div>';
            interval::endInterval();
        }

        if (!empty($_GET['last_day'][$i])) {
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