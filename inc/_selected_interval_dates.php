<?php
require_once 'interval.class.php';
?>

<div id="added_interval_container">
    <?php if (empty($_GET['first_day'])) {
        interval::startInterval();
        interval::dayFirstSetCaption();
        interval::endInterval();
    } else {
        interval::startInterval();
        interval::closeButton();
        $count = count($_GET['first_day']);
        $lastDayIsSet = false;
        for ($i = 0; $i < $_GET['first_day']; ++$i) {
            interval::dayCaption($_GET['first_day'][$i], $_GET['first_month'][$i], $_GET['first_year'][$i]);
            echo ' - ';
            if (empty($_GET['last_day'][$i])) {
                interval::dayLastSetCaption();
            } else {
                interval::dayCaption($_GET['last_day'][$i], $_GET['last_month'][$i], $_GET['last_year'][$i]);
                $lastDayIsSet = true;
            }
        }
        interval::endInterval();

        if ($lastDayCaptIsSet) {
            interval::startInterval();
            interval::dayFirstSetCaption();
            interval::endInterval();
        }
    }
    ?>
</div>

<script>
    function startNewInterval() {

    }
</script>