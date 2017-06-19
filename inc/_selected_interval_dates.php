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
        $count = count($_GET['first_day']);
        $lastDayIsSet = false;
        foreach($_GET['first_day'] as $i => $data) {
            interval::startInterval();
            interval::closeButton();
            echo '<div class="interval_info">';
            interval::dayCaption($_GET['first_day'][$i], $_GET['first_month'][$i], $_GET['first_year'][$i]);
            echo ' - ';
            if (empty($_GET['last_day'][$i])) {
                interval::dayLastSetCaption();
            } else {
                interval::dayCaption($_GET['last_day'][$i], $_GET['last_month'][$i], $_GET['last_year'][$i]);
                $lastDayIsSet = true;
            }
            echo '</div>';
            interval::endInterval();
        }

        if ($lastDayCaptIsSet) {
            interval::startInterval();
            interval::dayFirstSetCaption();
            interval::endInterval();
        }
    }
    ?>
</div>

<script>
/*    function startNewInterval() {

    }*/
</script>