<div class="add_interval">
    <div class="select_cal">
        <?php echo $lang['From:'] ?>
        <select name="day_from[0]">
            <?php for ($i = 1; $i <= 31; $i++): ?>
                <option value="<?php echo $i ?>"><?php echo $i ?></option>
            <?php endfor ?>
        </select>
        <select name="month_from[0]">
            <?php foreach ($lang_monts as $n => $m): if ($n > 0): ?>
                <option value="<?php echo $n ?>"><?php echo $m ?></option>
            <?php endif; endforeach; ?>
        </select>
        <select name="year_from[0]">
            <?php for ($i = date('Y'); $i <= (date('Y') + 2); $i++): ?>
                <option value="<?php echo $i ?>"><?php echo $i ?></option>
            <?php endfor ?>
        </select>
    </div>
    <div class="select_cal">
        <?php echo $lang['To:'] ?>
        <select name="day_to[0]">
            <?php for ($i = 1; $i <= 31; $i++): ?>
                <option value="<?php echo $i ?>"><?php echo $i ?></option>
            <?php endfor ?>
        </select>
        <select name="month_to[0]">
            <?php foreach ($lang_monts as $n => $m): if ($n > 0): ?>
                <option value="<?php echo $n ?>"><?php echo $m ?></option>
            <?php endif; endforeach; ?>
        </select>
        <select name="year_to[0]">
            <?php for ($i = date('Y'); $i <= (date('Y') + 2); $i++): ?>
                <option value="<?php echo $i ?>"><?php echo $i ?></option>
            <?php endfor ?>
        </select>
    </div>
    <button class="btn_add_interval"><?php echo $lang['add_interval'] ?></button>
</div>