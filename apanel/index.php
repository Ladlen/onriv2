<?php
include ('header.php');

if (!empty($access) && $access == 'yes') {

echo'<div id="admin_home_menu">
<ul>'.$admin_menu.'</ul>
<div class="clear"></div>
</div>';





}

include ('footer.php');
?>