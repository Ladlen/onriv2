<?php

?>
</div>
<div id="footer">
</div><div class="clear"></div>
</div>

<script>
var footer = document.getElementById("footer");

<?php if($id_prefix == 'logbook' || $id_prefix == 'settings') {  ?>
var tab_h = document.getElementsByClassName("current_tab")[0].clientHeight;
var tab_b = document.getElementById("tabs_body");

tab_b.style.height = tab_h+"px";



<?php } ?>


var wrapper = document.getElementById("main").clientHeight;
if (wrapper > 500) {footer.setAttribute("style","position:static;");}


<?php if($id_prefix == 'logbook' || $id_prefix == 'settings') {  ?>
function reheight() {
tab_h = document.getElementsByClassName("current_tab")[0].clientHeight;

tab_b.style.height = tab_h+"px";

wrapper = document.getElementById("main").clientHeight;	
if (wrapper > 500) {footer.setAttribute("style","position:static;");} else {footer.removeAttribute("style");}

}
<?php } ?>




</script>



</body></html>