<?php session_start();

$product = 'OnRiv';
$script_name = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF']; 
$host_name = $_SERVER['HTTP_HOST'];
$host_name = str_replace('www.','',$host_name);
	
//=========================================CONFIG 
$config_data_add = '
<?php
$language = "ru_RU.php";
$org_name = "'.$host_name.'";
$org_description = "";
$org_phone = "";
$org_mail = "admin@'.$host_name.'";
$sent_mail = "1";
$sent_in_org_mail = "1";
$sent_mail_status = "1";
$confirm_mail = "1";
$currency_name = "RUB::USD::EUR::";
$currency_simbol = \'<i class="icon-rouble"></i>::<i class="icon-dollar"></i>::<i class="icon-euro"></i>::\';
$currency_position = "r::l::l::";
$conf_form = "0";
$captcha = "1";
$color1 = "#FC8F1A";
$color2 = "#FF4D00";
$custom_css = "";
$custom_header = "";
$custom_footer = "";
?>
';

$file_config = '../data/config.php'; 

if (file_exists($file_config)) { // keep config file 

$cmod_file_config = substr(sprintf('%o', fileperms($file_config)), -4);
if ($cmod_file_config !='0644') {chmod ($file_config, 0644);}

if (filesize($file_config) == 0) {
$fp_create_config = fopen($file_config, "w"); // create config file
fwrite($fp_create_config, "$config_data_add");
fclose ($fp_create_config);
echo '<script>var delay = 0; setTimeout("document.location.href=\''.$script_name.'\'", delay);</script>
<noscript><meta http-equiv="refresh" content="0; url='.$script_name.'"></noscript>';
die;	
}


} else { //===============CREATE CONFIG

$fp_create_config = fopen($file_config, "w"); // create config file
fwrite($fp_create_config, "$config_data_add");
fclose ($fp_create_config);
echo '<script>var delay = 0;setTimeout("document.location.href=\''.$script_name.'\'", delay);</script>
<noscript><meta http-equiv="refresh" content="0; url='.$script_name.'"></noscript>';
die;
}
//-----------------------------------------------/





include ('../data/config.php');
//---Lang
if (!isset($language)) { include ('../lang/ru_RU.php'); } else {

if (file_exists('../lang/'.$language)) {
include ('../lang/'.$language); } else { 
die('<div class="shadow_back"><div class="error" style="color:#ff0000; font-size:24px;">Not language file!</div></div>'); }
}
//---/Lang

$access = '';



if (isset($_POST['login']) && isset($_POST['passw'])) {
$_SESSION['aloginsys'] = $_POST['login'];  
$_SESSION['apasswsys'] = sha1($_POST['passw']);
}

//===========================ID
$rnd_num = rand(10, 99);
$id_prefix = explode('/', $_SERVER['PHP_SELF']);
$id_prefix = array_pop ($id_prefix);
$id_prefix = str_replace('.php','',$id_prefix);
$id = $id_prefix.'_'.date('d_m_Y_H_i_s').'_'.$rnd_num;
$time_current = date('d_m_Y_H_i_s');
$new_add_time = '00_00_0000_00_00_00';
//===========================/ID




include_once ('orders_clean.php'); //==============AUTO CLEAN ORDERS

$inp_search = '';


$h3title_arr = str_split($product);

if (isset($h3title_arr[0])) {$lett0 = $h3title_arr[0];} else {$lett0 = '';}
if (isset($h3title_arr[1])) {$lett1 = $h3title_arr[1];} else {$lett1 = '';}

$lett_all = '';

foreach ($h3title_arr as $kl => $vl) {
	if ($kl != 0 && $kl != 1) {$lett_all .= $vl;}
}



//===========================HTML
if (!isset($color1) || isset($color1) && empty($color1)) {$color1 = '#FC8F1A';}
$login_form = '';
$login_form .= '
<div id="login_form">
<h2><a href="../" title="'.$host_name.'">'.$org_name.'</a></h2>
<div class="title_login_form">
<i class="icon-key"></i><h3>'.$lang['admin_title'].' - <span>'.$lett0.$lett1.'</span>'.$lett_all.'</h3>
<div class="clear"></div>
</div>';




if (isset($_GET['lost_pass']) == true) {
	
$login_form .= '
<div>
<form method="post">

<input type="email" name="email" value="'.$lang['lost_pass_mail'].'" onblur="if (this.value == \'\')  {this.value = \''.$lang['lost_pass_mail'].'\';}" onfocus="if (this.value == \''.$lang['lost_pass_mail'].'\') {this.value = \'\';}" />

<button>'.$lang['sent'].' <i class="icon-mail-3"></i></button>
</form>
</div>
<a href="index.php" class="lost_pass">'.$lang['back'].'</a>
</div>';	
	
	
} else {

$login_form .= '
<div>
<form method="post">
<input type="text" name="login" value="'.$lang['login'].'" onblur="if (this.value == \'\')  {this.value = \''.$lang['login'].'\';}" onfocus="if (this.value == \''.$lang['login'].'\') {this.value = \'\';}" />
<input type="password" name="passw" value="'.$lang['pass'].'" onblur="if (this.value == \'\')  {this.value = \''.$lang['pass'].'\';}" onfocus="if (this.value == \''.$lang['pass'].'\') {this.value = \'\';}" />
<button>'.$lang['enter'].'<i class="icon-login"></i></button>
</form>
</div>
<a href="?lost_pass" class="lost_pass">'.$lang['lost_pass'].'</a>
</div>';
}




$error_any = '<div class="shadow_back"><div class="error modal_mess"><ul><li>'.$lang['error'].'</li></ul></div></div>';

$error_access = '<div class="shadow_back"><div class="error modal_mess"><ul><li>'.$lang['error_login'].'</li></ul></div></div>';

$refresh_0 = '<script>var delay = 0;setTimeout("document.location.href=\''.$script_name.'\'", delay);</script>
<noscript><meta http-equiv="refresh" content="0; url='.$script_name.'"></noscript>';

$refresh_1 = '<script>var delay = 1000;setTimeout("document.location.href=\''.$script_name.'\'", delay);</script>
<noscript><meta http-equiv="refresh" content="1; url='.$script_name.'"></noscript>';

$refresh_3 = '<script>var delay = 3000;setTimeout("document.location.href=\''.$script_name.'\'", delay);</script>
<noscript><meta http-equiv="refresh" content="3; url='.$script_name.'"></noscript>';

$refresh_5 = '<script>var delay = 5000;setTimeout("document.location.href=\''.$script_name.'\'", delay);</script>
<noscript><meta http-equiv="refresh" content="3; url='.$script_name.'"></noscript>';


$die = '</div></body></html>';


// ============== encoded ================
$onriv_take = '1';
$mr = 1;
// ============== end encoded ================

$on_path = str_replace('apanel/'.$id_prefix.'.php', '', $script_name);

//==========================================HEAD
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=0.5, maximum-scale=0.5, user-scalable=no" />
<meta name="robots" content="noindex, nofollow" />
<meta name="title" content="<?php echo $org_name.' - '.$lang['admin_title'].' - '.$product; ?>" />
<title><?php echo $org_name.' - '.$lang['admin_title'].' - '.$product; ?></title>

<link rel="stylesheet" href="../css/fontello.css" />
<link rel="stylesheet" href="../css/animation.css" />

<link rel="stylesheet" type="text/css" href="../css/apanel.css?ver=<?php echo date('d.m'); ?>" />
<link rel="stylesheet" type="text/css" href="../css/colorbox.css" />

<link rel="image_src" href="<?php echo $on_path; ?>img/onriv-logo.jpg" /> 
<link rel="icon" href="<?php echo $on_path; ?>img/onriv-logo.jpg" type="image/jpeg" />
<link rel="apple-touch-icon" href="<?php echo $on_path; ?>img/onriv-logo.jpg" type="image/jpeg" />
<meta name="msapplication-TileImage" content="<?php echo $on_path; ?>img/onriv-logo.jpg"/>
<meta name="msapplication-square300x300logo" content="<?php echo $on_path; ?>img/onriv-logo.jpg"/>
<meta property="og:image" content="<?php echo $on_path; ?>img/onriv-logo.jpg" />

<link rel="shortcut icon" href="<?php echo $on_path; ?>favicon.ico" type="image/x-icon" />
<!--if IE 7
    link(rel="stylesheet", href="../css/fontello-ie7.css")
<![endif]-->

<!--[if lte IE 8]><link href="../css/ie.css?ver=<?php echo date('d.m'); ?>" 
    rel="stylesheet" type="text/css" /><![endif]-->

<!--if lt IE 9
    script(src="../js/html5.js").    
<![endif]-->		

<script src="../js/jquery-1.11.3.min.js"></script>


<script src="../js/jquery.colorbox.js"></script>
		<script>
			$(document).ready(function(){
				//Examples of how to assign the Colorbox event to elements
				$(".group1").colorbox({rel:'group1'});
				$(".group2").colorbox({rel:'group2', transition:"fade"});
				$(".group3").colorbox({rel:'group3', transition:"elastic", width:"800", height:"auto", opacity:"100"});
				$(".group4").colorbox({rel:'group4', slideshow:true});
				$(".ajax").colorbox();
				$(".youtube").colorbox({iframe:true, innerWidth:640, innerHeight:390});
				$(".vimeo").colorbox({iframe:true, innerWidth:500, innerHeight:409});
				$(".iframe").colorbox({iframe:true, transition:"elastic", width:"874", height:"80%", opacity:"100"});
				$(".iframe_order").colorbox({iframe:true, transition:"elastic", width:"80%", height:"90%", opacity:"100"});
				$(".inline").colorbox({inline:true, width:"50%"});
				$(".callbacks").colorbox({
					onOpen:function(){ alert('onOpen: colorbox is about to open'); },
					onLoad:function(){ alert('onLoad: colorbox has started to load the targeted content'); },
					onComplete:function(){ alert('onComplete: colorbox has displayed the loaded content'); },
					onCleanup:function(){ alert('onCleanup: colorbox has begun the close process'); },
					onClosed:function(){ alert('onClosed: colorbox has completely closed'); }
				});

				$('.non-retina').colorbox({rel:'group5', transition:'none'})
				$('.retina').colorbox({rel:'group5', transition:'none', retinaImage:true, retinaUrl:true});
				
				//Example of preserving a JavaScript event for inline calls.
				$("#click").click(function(){ 
					$('#click').css({"background-color":"#f00", "color":"#fff", "cursor":"inherit"}).text("Open this window again and this message will still be here.");
					return false;
				});
			});
</script>

<script>
// "getElementsByClassName" for IE, 
//  
if(document.getElementsByClassName == undefined) { 
   document.getElementsByClassName = function(cl) { 
      var retnode = []; 
      var myclass = new RegExp('\\b'+cl+'\\b'); 
      var elem = this.getElementsByTagName('*'); 
      for (var i = 0; i < elem.length; i++) { 
         var classes = elem[i].className; 
         if (myclass.test(classes)) { 
            retnode.push(elem[i]); 
         } 
      } 
      return retnode; 
   } 
}; 
</script>

<script src="../js/light_txt_query.js"></script>
<!--<script src="../js/scroll.js"></script>-->

<script>
$(document).ready(function(){ // Scroll
	$(".scrollto").on("click", function (event) {
		
		event.preventDefault();
		var id  = $(this).attr('href'),
	    top = $(id).position().top-14; 
		$('#win_edit').animate({scrollTop: top}, 400);
		
		if (id == '#units') {setTimeout(function() {$('#units').toggleClass('this_scroll_block');}, 400);} 
		else {$('#units').removeClass('this_scroll_block');}
		
		if (id == '#queue') {setTimeout(function() {$('#queue').toggleClass('this_scroll_block');}, 400);} 
		else {$('#queue').removeClass('this_scroll_block');}
		
		if (id == '#daily_provide') {setTimeout(function() {$('#daily_provide').toggleClass('this_scroll_block');}, 400);} 
		else {$('#daily_provide').removeClass('this_scroll_block');}
		
		if (id == '#navworkdays') {setTimeout(function() {$('#navworkdays').toggleClass('this_scroll_block');}, 400);} 
		else {$('#navworkdays').removeClass('this_scroll_block');}
		
		if (id == '#navdwd') {setTimeout(function() {$('#navdwd').toggleClass('this_scroll_block');}, 400);} 
		else {$('#navdwd').removeClass('this_scroll_block');}
		
		if (id == '#navfixprice') {setTimeout(function() {$('#navfixprice').toggleClass('this_scroll_block');}, 400);} 
		else {$('#navfixprice').removeClass('this_scroll_block');}
		
		if (id == '#promo_code') {setTimeout(function() {$('#promo_code').toggleClass('this_scroll_block');}, 400);} 
		else {$('#promo_code').removeClass('this_scroll_block');}
		
		if (id == '#navphotos') {setTimeout(function() {$('#navphotos').toggleClass('this_scroll_block');}, 400);} 
		else {$('#navphotos').removeClass('this_scroll_block');}
		
		if (id == '#currency') {setTimeout(function() {$('#currency').toggleClass('this_scroll_block');}, 400);} 
		else {$('#currency').removeClass('this_scroll_block');}
		
		if (id == '#all_time_spots') {setTimeout(function() {$('#all_time_spots').toggleClass('this_scroll_block');}, 400);} 
		else {$('#all_time_spots').removeClass('this_scroll_block');}
		
		if (id == '#only_pay') {setTimeout(function() {$('#only_pay').toggleClass('this_scroll_block');}, 400);} 
		else {$('#only_pay').removeClass('this_scroll_block');}
		
		if (id == '#only_row') {setTimeout(function() {$('#only_row').toggleClass('this_scroll_block');}, 400);} 
		else {$('#only_row').removeClass('this_scroll_block');}
		
		if (id == '#active_two_monts') {setTimeout(function() {$('#active_two_monts').toggleClass('this_scroll_block');}, 400);} 
		else {$('#active_two_monts').removeClass('this_scroll_block');}
		
	return false;
		
		//$(id).removeClass('this_scroll_block');
});

});
</script>


<script>

$(document).ready(function(){
    $("a, div, input, button, span, small, label").each(function(b) {
        if (this.title) {
            var c = this.title;
            var x = -16;
            var y = 32;
            $(this).mouseover(function(d) {
				
                this.title = "";
                $("#main").append('<div id="tooltip">' + c + "</div>");
				
                $("#tooltip").css({
					
                    left: (d.pageX + x) + "px",
                    top: (d.pageY + y) + "px",
                    opacity: "0.8",
					visibility: "visible",
					//display: "block"
				
                }).delay(200).fadeIn(400)
					
            }).mouseout(function() {
                this.title = c;
                $("#tooltip").remove()
            }).mousemove(function(d) {
                $("#tooltip").css({
                    left: (d.pageX + x) + "px",
                    top: (d.pageY + y) + "px"
                })
            })
        }
    })
    });	
</script>



<?php if($id_prefix != 'order' && $id_prefix != 'logbook') { include('../js/custom_date.php'); } ?>

<?php if(empty($_POST)) { ?>
<style>div.body_apanel {opacity: 0; visibility:hidden;}</style>
<noscript><style>div.body_apanel {opacity: 1!important; visibility:visible!important;}</style></noscript>

<?php } ?>


<?php if($id_prefix == 'settings') { ?>
<link rel="stylesheet" href="../js/CodeMirror/lib/codemirror.css">

<script src="../js/CodeMirror/lib/codemirror.js"></script>
<script src="../js/CodeMirror/mode/xml/xml.js"></script>
<script src="../js/CodeMirror/mode/javascript/javascript.js"></script>
<script src="../js/CodeMirror/mode/css/css.js"></script>
<script src="../js/CodeMirror/mode/htmlmixed/htmlmixed.js"></script>
<script src="../js/CodeMirror/addon/edit/matchbrackets.js"></script>
<?php } ?>
</head>


<?php


if (isset($_GET['iframe'])==true) { echo '<body class="apanel_iframe"><div class="body_apanel">'; } else {echo '<body class="apanel"><div class="body_apanel">';}

echo '<script> setTimeout(function() { document.getElementsByTagName("div")[0].setAttribute("style","opacity:1;visibility:visible;"); }, 160);    </script>';

//==============================/HTML

$file_name_staff = '../data/staff.dat';

$mail_found = 'no';

$id_this_user = '';

if (file_exists($file_name_staff)) {
	
$file_staff = fopen($file_name_staff, "rb"); 

if (filesize($file_name_staff) != 0) { // !0
	
flock($file_staff, LOCK_SH); 
$lines_staff = preg_split("~\r*?\n+\r*?~", fread($file_staff,filesize($file_name_staff)));
flock($file_staff, LOCK_UN); 
fclose($file_staff); 


for ($ls = 0; $ls < sizeof($lines_staff); ++$ls) { 

if (!empty($lines_staff[$ls])) {

$data_access = explode('::', $lines_staff[$ls]); 
array_pop($data_access);



if (isset($_SESSION['aloginsys']) && isset($_SESSION['apasswsys'])) {


if (!empty($data_access[1]) && $_SESSION['aloginsys'] == $data_access[1] && $_SESSION['apasswsys'] == $data_access[2]) {
	
$number_line = $ls;

$number_line_access = $ls;

$id_staff_info = $data_access[0];
$login_staff_info = $data_access[1];
$sapas_staff_info = $data_access[2];
$passw_staff_info = $data_access[3];
$access_staff_info = $data_access[4];


$name_staff_info = $data_access[5];
$email_staff_info = $data_access[6];
$email_display_staff_info = $data_access[7];
$phone_staff_info = $data_access[8];
$phone_display_staff_info = $data_access[9];
$post_staff_info = $data_access[10];
$description_staff_info = $data_access[11];
$photo_staff_info = $data_access[12];
$photo_display_staff_info = $data_access[13];
$active_staff_info = $data_access[14];


$add_who = $id_staff_info;


if ($ls == 0) {$access_level ='super_admin';} // super admin
else if ($ls != 0 && $access_staff_info == 'admin') {$access_level = 'admin';}
else if ($access_staff_info == 'staff') {$access_level = 'staff';}

if ($login_staff_info == $_SESSION['aloginsys']) {$id_this_user = $id_staff_info;}

} // login & pass true  
} // session 

//====================================SENT LOGIN & PASSWORD
if (isset($_GET['lost_pass']) == true) {
	
if (isset($_POST['email']) == true) {	

$data_access[6] = mb_strtolower($data_access[6], 'utf8');	
$user_mail = mb_strtolower($_POST['email'], 'utf8');
$user_mail = htmlspecialchars($user_mail,ENT_QUOTES);
$lang['lost_pass_mail'] = mb_strtolower($lang['lost_pass_mail'], 'utf8');	

if (empty($user_mail) || $user_mail == $lang['lost_pass_mail']) {$empty_enter_mail = '';} 
else if(!preg_match('/.+@.+\..+/i', $user_mail)) { $error_enter_mail = '';} else {
	
if ($user_mail == $data_access[6]) {
$mail_found = 'found';
$sent_pass = $data_access[3];
$sent_login = $data_access[1];
$sent_mail = $data_access[6];	



//------------html message	

	
  $dt = date("d.m.Y, H:i:s"); // time
  $mail = $sent_mail; // e-mail to:
  $title = $lang['title_lost_pass_mess']." ".$product." (".$org_name.")"; // title
  
  $mess = "<html><body>";
 
  $mess.="<table style=\"border:0; border-collapse:collapse; margin: 10px 0 10px 0; width:100%;\">";
  $mess.="<tr><td colspan=\"2\" style=\"border: #fff 1px solid; background:".$color1."; padding:14px; vertical-align:top;\">
  <h3 style=\"COLOR: #fff; margin: 0; padding:0;\">".$lang['title_lost_pass_mess']." ".$product." (".$org_name.")</h3></td></tr>";
  
  $mess.="<tr><td style=\"border: #fff 1px solid; background:#f3f3f3; padding:14px; color:#757577; width:100px; vertical-align:top;\">".$lang['login'].":</td> <td style=\"border: #fff 1px solid; background:#f3f3f3; padding:14px; vertical-align:top;\">".$sent_login."</td></tr>";
  $mess.="<tr><td style=\"border: #fff 1px solid; background:#f3f3f3; padding:14px; color:#757577; vertical-align:top;\">".$lang['pass'].":</td> <td style=\"border: #fff 1px solid; background:#f3f3f3; padding:14px; vertical-align:top;\">".$sent_pass."</td></tr>";
 
  
  $mess.="
  <tr><td style=\"border: #fff 1px solid; background:#e3f3ff; padding:14px; color:#000; vertical-align:top;\" colspan=\"2\">
  <a href=\"http://".$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF']."\">".$lang['admin_title']." - ".$product."</a>
  </td></tr>
  
  <tr><td style=\"border: #fff 1px solid; background:#f3f3f3; padding:14px; color:#888; vertical-align:top;\" colspan=\"2\">
  <small>".$lang['when_sent'].": ".$dt." | IP: ".$_SERVER['REMOTE_ADDR']."</small></td></tr>
    
  </table><body></html>";
  
  $headers = "MIME-Version: 1.0\r\n";
  $headers .= "Content-Transfer-Encoding: 8bit\r\n";
  $headers .= "Content-type:text/html;charset=utf-8 \r\n"; 
  $headers .= "From: ".$org_name." <noreply@".$_SERVER['HTTP_HOST'].">\r\n"; // from
  //$headers .= "Bcc: ".$mail."\r\n"; // copy
  $headers.= "X-Mailer: PHPMailer ".phpversion()."\r\n";
  mail($mail, $title, $mess, $headers); // SENT	
	
//------------/html message	
	
echo '<div class="shadow_back"><div class="done modal_mess"><ul><li>'.$lang['lost_pass_sent'].'</li></ul></div></div>'; echo $refresh_3; 
} else {$mail_not_found = '';}


} // check valid mail	
} // post mail
} //get lost pass
//-----------/sent login & pass


} //no empty lines
} // count lines
} //-------------/NO EMPTY DATA
} else { //==============================================//Create access data file !!! (RESET)

$add_login = 'admin';
$add_passsa = '7110eda4d09e062aa5e4a390b0a572ac0d2c0220';
$add_pass = '1234';
$add_access = 'admin';
$add_name = $lang['admin'];
$add_mail = 'admin@'.$host_name;
$add_display_mail = 'no';
$add_phone = '';
$add_display_phone = 'no';
$add_post = '';
$add_description = '';
$add_photo = '';
$add_display_photo = 'yes';
$add_active = 'on';

$line_data_add = $id.'::'.$add_login.'::'.$add_passsa.'::'.$add_pass.'::'.$add_access.'::'.$add_name.'::'.$add_mail.'::'.$add_display_mail.'::'.$add_phone.'::'.$add_display_phone.'::'.$add_post.'::'.$add_description.'::'.$add_photo.'::'.$add_display_photo.'::'.$add_active.'::'.$id.'::'.$new_add_time.'::'.$id.'::';

$fp_create = fopen($file_name_staff, "w"); // create data file
fwrite($fp_create, "$line_data_add");
fclose ($fp_create);

//echo '<div class="error">'.$lang['no_file'].'</div>';
echo $refresh_1;

} //-------------/create (RESET)


if (isset($_SESSION['aloginsys']) && isset($_SESSION['apasswsys'])) {

if (!isset($id_staff_info)) { echo $error_access.$refresh_3; session_destroy(); } else {

//============================================================================ ACCESS

$access = 'yes';


$admin_menu = '';

$admin_menu .= '
<li><a href="staff.php" '; if($id_prefix == 'staff'){$admin_menu .= 'class="current"';}$admin_menu .= '><i class="icon-group"></i><span>'.$lang['staff'].'</span></a></li>

<li><a href="photos.php" ';if($id_prefix == 'photos'){$admin_menu .= 'class="current"';}$admin_menu .='><i class="icon-camera-3"></i><span>'.$lang['photos'].'</span></a></li>

<li><a href="category.php" ';if($id_prefix == 'category'){$admin_menu .= 'class="current"';}$admin_menu .='><i class="icon-archive"></i><span>'.$lang['categorys'].'</span></a></li>

<li><a href="object.php" ';if($id_prefix == 'object'){$admin_menu .= 'class="current"';}$admin_menu .='><i class="icon-briefcase-1"></i><span>'.$lang['services'].'</span></a></li>';


if ($access_staff_info == 'admin') {
$admin_menu .= '<li><a href="order.php" ';if($id_prefix == 'order'){$admin_menu .= 'class="current"';}$admin_menu .='><i class="icon-bell-1"></i><span>'.$lang['orders'].'</span></a></li>';	
} else {
$admin_menu .= '<li><a href="order.php?search='.$id_this_user.'" ';if($id_prefix == 'order'){$admin_menu .= 'class="current"';}$admin_menu .='><i class="icon-bell-1"></i><span>'.$lang['orders'].'</span></a></li>';
}


$admin_menu .= '<li><a href="schedule.php" ';if($id_prefix == 'schedule'){$admin_menu .= 'class="current"';}$admin_menu .='><i class="icon-pin"></i><span>'.$lang['schedule'].'</span></a></li>

<li><a href="logbook.php" ';if($id_prefix == 'logbook'){$admin_menu .= 'class="current"';}$admin_menu .='><i class="icon-book-1"></i><span>'.$lang['logbook'].'</span></a></li>

<li><a href="settings.php" ';if($id_prefix == 'settings'){$admin_menu .= 'class="current"';}$admin_menu .='><i class="icon-cog-1"></i><span>'.$lang['settings'].'</span></a></li>';

//===================================TOP MENU

if (isset($_GET['iframe'])==true) { echo ''; } else {
echo'<div id="admin_menu">
<ul>

<li><a href="index.php" ';if($id_prefix == 'index'){echo'class="current"';}echo'><i class="icon-menu"></i><span>'.$lang['menu'].'</span></a></li>
'.$admin_menu.'
</ul>
<div class="clear"></div>
</div>';

echo '<div id="top_info">';

echo '<div class="admin_title_page"><h4 id="go_title">';

if($id_prefix == 'index'){echo $lang['home'];}
if($id_prefix == 'staff'){echo $lang['staff'];}
if($id_prefix == 'category'){echo $lang['categorys'];}
if($id_prefix == 'object'){echo $lang['services'];}
if($id_prefix == 'order'){echo $lang['orders'];}
if($id_prefix == 'settings'){echo $lang['settings'];}
if($id_prefix == 'photos'){echo $lang['photos'];}
if($id_prefix == 'schedule'){echo $lang['schedule'];}
if($id_prefix == 'logbook'){echo $lang['logbook'];}
echo'</h4></div>';

$all_cl = ''; $atc_cl = ''; $us_cl = ''; 

$actual_check = '';
if(isset($_POST['actual_orders']) || isset($_GET['actual_orders'])) {$actual_check = 'checked="checked"';}

$title_check = '';
if (isset($_GET['actual_orders'])) {$title_check = $lang['order_more_deck'];} else { $title_check = $lang['order_actual']; }

$actual_checkbox_all = '<span class="actual_check">
<label id="title_ac" title="'.$title_check.'"><input type="checkbox" id="vactual" value="1" '.$actual_check.' /><span></span></label>
</span>';	

$actual_checkbox_my = '<span class="actual_check">
<label id="title_ac" title="'.$title_check.'"><input type="checkbox" id="vactual" value="1" '.$actual_check.' /><span></span></label>
</span>';	

if(isset($_GET['search'])) {$inp_search = $_GET['search'];}

if(isset($_GET['actual'])){$all_cl = 'no_this'; $atc_cl = 'this_al';} 

if(!isset($_GET['search'])) {$all_cl = 'this_al'; $atc_cl = 'no_this';} else {$all_cl = 'no_this'; $actual_checkbox_all = '';}

if(isset($_GET['search']) && $_GET['search'] == $id_this_user) {$us_cl = 'this_al'; $inp_search = '';} else {$us_cl = 'no_this'; $actual_checkbox_my = '';}
	
if($id_prefix == 'order')
{
	

	
echo '<div class="select_orders">';	

echo '<span class="ord_list_link">
<a href="?search='.$id_this_user.'" class="'.$us_cl.'">'.$lang['my_orders'].'</a>';
echo $actual_checkbox_my;
echo '</span>';
	

echo '<span class="ord_list_link">
<a href="'.$id_prefix.'.php" class="'.$all_cl.'">'.$lang['all_orders'].'</a>';
echo $actual_checkbox_all;
echo '</span>';


echo '<div class="help_obj comment_client" tabindex="1"><i class="icon-help-1"></i><div>'.$lang['help_orders'].'</div></div>';

echo '</div>';	

//echo '<div class="select_orders_b"></div>';	

}

if($id_prefix == 'logbook')
{
echo '<div class="select_orders">';	

echo '<span class="ord_list_link">
<a href="?search='.$id_this_user.'" class="'.$us_cl.'">'.$lang['my_orders'].'</a>';
if (isset($_GET['search']) && $_GET['search'] == $id_this_user) { echo '<span class="reset_my"><a href="'.$script_name.'" title="'.$lang['reset'].'"><i class="icon-block"></i></a></span>'; }

echo '</span>';

echo '</div>';	
}





echo '
<div class="top_info_block parent" tabindex="1"><i class="icon-user"></i>'.$name_staff_info.'
<div class="info">';

if (!empty($photo_staff_info)) {
	
if(file_exists('../'.$photo_staff_info)){
echo'<img src="../'.$photo_staff_info.'" alt="'.$name_staff_info.'" title="'.$lang['profile'].'" />';}
else{echo'<img src="../img/no_photo.jpg" alt="'.$name_staff_info.'" title="'.$lang['profile'].'" />';}

} else {echo'<div class="name_photo"><img src="../img/no_photo.jpg" alt="'.$name_staff_info.'" title="'.$lang['profile'].'" /></div>';}

echo '<div class="profile_info">';
echo '<span title="'.$lang['access_level'].'">'; 
if ($access_level == 'super_admin') {echo '<i class="icon-lock-open"></i>'.$lang['super_admin'];} else {
if($access_staff_info == 'admin') {echo '<i class="icon-lock-open-alt"></i>'.$lang['admin'];}
if($access_staff_info == 'staff') {echo '<i class="icon-lock"></i>'.$lang['staff'];} }
echo '</span></div>';

echo '
<span><a href="staff.php?edit='.$number_line.'" class=""><i class="icon-edit"></i>'.$lang['edit'].'</a></span>
<span><a href="?logout" class="logout"><i class="icon-logout"></i>'.$lang['logout'].'</a></span>';

echo '
</div>
</div>';



echo '<div class="top_info_block">
<span>'.$lang['date'].':</span> '.date('d.m.Y').' <span>'.$lang['time'].': </span>'; include('../inc/move_time.php'); echo'
</div>';


if($id_prefix == 'index' || $id_prefix == 'photos' || $id_prefix == 'settings' || $id_prefix == 'schedule') {echo'';} else {
	
$action_search = $script_name;






echo '<div class="search_block">
<form name="get_search" method="get" action="'.$action_search.'">';

if($id_prefix == 'order' || $id_prefix == 'logbook') {
echo '
<input type="text" name="search" id="search_inp" value="'.$inp_search.'" onfocus="this.select();lcs(this)" onclick="event.cancelBubble=true;this.select();lcs(this)" />';
include('../js/search_date.php');
} else {
echo '
<input type="text" name="search" id="search_inp" value="'.$inp_search.'" />';
}



echo '<button title="'.$lang['search'].'"><i class="icon-search"></i></button>
</form>
<div class="clear"></div>
</div>'; }


if($id_prefix == 'object') { // select cftegory

echo '<div class="select_cat"><select id="cat_sear" onchange="cat_filter()">';
echo '<option value="">'.$lang['all_categorys'].'</option>';
//============================== CATEGORY NAME SEARCH
$file_name_category_sear = '../data/category.dat';
if (file_exists($file_name_category_sear)) {	
$file_category_sear = fopen($file_name_category_sear, "rb"); 
if (filesize($file_name_category_sear) != 0) { // !0
flock($file_category_sear, LOCK_SH); 
$lines_category_sear = preg_split("~\r*?\n+\r*?~", fread($file_category_sear,filesize($file_name_category_sear)));
flock($file_category_sear, LOCK_UN); 
fclose($file_category_sear); 
for ($lcs = 0; $lcs < sizeof($lines_category_sear); ++$lcs) { 
if (!empty($lines_category_sear[$lcs])) {
$data_categories_search = explode('::', $lines_category_sear[$lcs]); 
$id_cat_opt = $data_categories_search[0];
$name_cat_opt =  $data_categories_search[1];


echo '<option value="'.$name_cat_opt.'">'.$name_cat_opt.'</option>';

echo '';

} //no empty lines cat
} //count cat
} //else { echo '<span class="red_text">'.$lang['category_empty'].' </span>';} //filesize cat
} //file_exists cat
//============================== /CATEGORY NAME SEARCH

echo '</select>';
echo '<div class="clear"></div>';
echo '</div>';


echo '
<script>
function cat_filter() {
var selc = document.getElementById("cat_sear");
var valc = selc.options[selc.selectedIndex].value;

document.location.href="'.$script_name.'?search="+valc;	
}
</script>
';

} // select cftegory


if (isset($_GET['search'])) {
echo '<a href="'.$script_name.'" class="reset_search" title="'.$lang['reset_search'].'"><i class="icon-block-1"></i></a>';
}


//=======================================SELECT MONTH IN HISTORY
$arr_sel_per = array();
//$m_per = date('m');
//$y_per = date('Y');
$m_per = '';
$y_per = '';
$per = '0';
if($id_prefix == 'logbook') {
	
if (isset($_GET['search']) && isset($_GET['period'])) {
$arr_sel_per = explode('.', $_GET['search']);	
if (isset($arr_sel_per[0])) {$m_per = $arr_sel_per[0];}
if (isset($arr_sel_per[1])) {$y_per = $arr_sel_per[1];} 
}	
	
echo '<div class="select_per">';

echo '<select id="m_sear" onchange="month_filter()">';
for ($sm = 1; $sm < 13; ++$sm) {	
if (strlen($sm) == 1) {$sm = '0'.$sm;}
if ($m_per == $sm) {$per = '1'; $sm_selected = ' selected="selected"';} else {$sm_selected = '';}
echo '<option value="'.$sm.'" '.$sm_selected.'>'.$lang_monts[$sm].'</option>';
}
if ($per == '0') {echo '<option value="" selected="selected">'.$lang['month'].'</option>';}
echo '</select>';



echo '<select id="y_sear" onchange="month_filter()">';
for ($sy = 2015; $sy < date('Y')+3; ++$sy) {	
if ($y_per == $sy) {$sy_selected = ' selected="selected"';} else {$sy_selected = '';}
echo '<option value="'.$sy.'" '.$sy_selected.'>'.$sy.'</option>';
}
if ($per == '0') {echo '<option value="" selected="selected">'.$lang['year'].'</option>';}
echo '</select>';

echo '<a href="'.$script_name.'?search='.$m_per.'.'.$y_per.'" id="subm_per" class="submit" title="'.$lang['view_orders_select_month'].'"><i class="icon-calendar-empty"></i></a>';

echo '<div class="clear"></div>';
echo '</div>';

echo '
<script>

var mselc = document.getElementById("m_sear");
var yselc = document.getElementById("y_sear");
var sselc = document.getElementById("subm_per");

function month_filter() {

var mvalc = mselc.options[mselc.selectedIndex].value;
var yvalc = yselc.options[yselc.selectedIndex].value;

//document.location.href="'.$script_name.'?search="+mvalc+"."+yvalc;	

sselc.removeAttribute("href");

sselc.setAttribute("href", "'.$script_name.'?search="+mvalc+"."+yvalc+"&period");
}
</script>
';


} // id logbook
//-------------------------------------/select month




echo '<div class="clear"></div>

</div>';

if(version_compare(PHP_VERSION, '5.3.0') >= 0) {echo'';} else {
echo'<div class="warring" style="width:1045px; display:block; margin: 14px auto 0 auto;">'.$lang['php_ver_error1'].' ('.phpversion().'). '.$lang['php_ver_error2'].'</div>';
}


} 
//=======================================/TOP MENU


}


} else { echo $login_form; }

if (isset($empty_enter_mail)){echo '<div class="shadow_back"><div class="error modal_mess">'.$lang['error_mail_empty'].'</div></div>'; 
echo '<script>var delay = 3000;setTimeout("document.location.href=\''.$script_name.'?lost_pass\'", delay);</script>
<noscript><meta http-equiv="refresh" content="3; url='.$script_name.'?lost_pass"></noscript>'; 
}

if (isset($error_enter_mail)){echo '<div class="shadow_back"><div class="error modal_mess"><ul><li>'.$lang['error_mail_invalid'].' ('.$user_mail.')</li></ul></div></div>'; 
echo '<script>var delay = 3000;setTimeout("document.location.href=\''.$script_name.'?lost_pass\'", delay);</script>
<noscript><meta http-equiv="refresh" content="3; url='.$script_name.'?lost_pass"></noscript>'; 
}

if (isset($mail_not_found) && $mail_found == 'no'){echo '<div class="shadow_back"><div class="error modal_mess"><ul><li>'.$lang['mail_not_found'].' ('.$user_mail.')</li></ul></div></div>'; echo $refresh_3; }


$file_temp = '../inc/custom_color.php';
if (file_exists($file_temp)) { 
include_once($file_temp);
} 	 


if (isset($_GET['logout'])) {session_destroy(); echo $refresh_0;}

?>



