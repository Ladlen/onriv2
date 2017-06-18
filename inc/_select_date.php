<?php
$action_form = htmlspecialchars('http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']);
?>

<div id="add_interval_container" style="display: none">
    <div class="add_interval">
        <button class="btn_remove_interval" title="<?php echo $lang['delete'] ?>">X</button>
        <div class="select_cal_wrapper">
            <div class="select_cal">
                <span><?php echo $lang['From:'] ?></span>
                <select name="day_from[]">
                    <?php for ($i = 1; $i <= 31; $i++): ?>
                        <option value="<?php echo $i ?>"><?php echo $i ?></option>
                    <?php endfor ?>
                </select>
                <select name="month_from[]">
                    <?php foreach ($lang_monts as $n => $m): if ($n > 0): ?>
                        <option value="<?php echo $n ?>"><?php echo $m ?></option>
                    <?php endif; endforeach; ?>
                </select>
                <select name="year_from[]">
                    <?php for ($i = date('Y'); $i <= (date('Y') + 2); $i++): ?>
                        <option value="<?php echo $i ?>"><?php echo $i ?></option>
                    <?php endfor ?>
                </select>
            </div>
            <div class="select_cal">
                <span><?php echo $lang['To:'] ?></span>
                <select name="day_to[]">
                    <?php for ($i = 1; $i <= 31; $i++): ?>
                        <option value="<?php echo $i ?>"><?php echo $i ?></option>
                    <?php endfor ?>
                </select>
                <select name="month_to[]">
                    <?php foreach ($lang_monts as $n => $m): if ($n > 0): ?>
                        <option value="<?php echo $n ?>"><?php echo $m ?></option>
                    <?php endif; endforeach; ?>
                </select>
                <select name="year_to[

            ]">
                    <?php for ($i = date('Y'); $i <= (date('Y') + 2); $i++): ?>
                        <option value="<?php echo $i ?>"><?php echo $i ?></option>
                    <?php endfor ?>
                </select>
            </div>
        </div>
    </div>
</div>

<form id="order" action="<?php echo $action_form ?>#order_form" method="post">

    <div id="interval_list"></div>

    <div class="btn_add_interval_wrapper">
        <button class="btn_add_interval"
                title="<?php echo $lang['add_date_interval'] ?>"><?php echo $lang['add_interval'] ?></button>
    </div>

    <script>
        (function ($) {
            $(".btn_add_interval").click(function (e) {
                e.preventDefault();
                $("#interval_list").append($("#add_interval_container").html());
                $(this).blur();
                return false;
            });
        })(jQuery);
    </script>
