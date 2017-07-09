 <?php include "/designer-rehab/util/contact.php"; ?>
 <div id="colmain">
  <div id="system-message-container"></div>
  <div class="item-page center-block">
    <p>If you would like to contact Designer Rehab,</p>
    <p>call at <a href="tel:1-704-574-4080">704.574.4080</a></p>
    <p>or email us below.  We look forward to hearing from you!</p>
  </div>
  <div class="container">
	<form name="contact" method="post" id="contact" action="util/contact.php">
	  <div class="form-group row">
		<div class="col-10">
		  <input class="form-control" placeholder="Name..." id="name" type="text" name="name" />
		</div>
	  </div>
	  <div class="form-group">
		<div class="col-10">
		  <input class="form-control" placeholder="Email..." id="email"s type="email" value="Email..." name="email" />
		</div>
	  </div>
	  <div class="form-group">
		<div class="col-10">
		  <input class="form-control" placeholder="Subject..." id="subject" type="text" value="Subject..." name="subject" />  
		</div>
	  </div>
	  <div class="form-group">
		<div class="col-10">
		  <textarea class="form-control textarea" placeholder="Message..." name="message">Message...</textarea>
		</div>
	  </div>
	  <div class="form-group">
		<div class="col-10">
		  <input class="form-control" placeholder="Enter the code..." id="s5_qc_spambox" value="Enter The Code..." type="text" name="s5_qc_verif_box" />
		</div>  
	  </div>
	  <div class="form-group row">
		<div class="col-10">
		  <img id="s5_qc_security_img" src="http://designer-rehab.com/modules/mod_s5_quick_contact/captcha/CaptchaSecurityImages.php?width=90&height=30&characters=5" />
		  <input id="captcha_val" type="hidden" value="1" name="captcha_val" />
		  <input id="returnurl" type="hidden" value="http://designer-rehab.com/contact" name="returnurl" />
		</div>
	  </div>
	  <div>
		<button class="button btn" type="submit" id="submit" onclick="isValidEmail()">Send Message</button>
	  </div>
	</form>
	<div style="clear:both;height:0px;"></div>
  </div>
  <script type="text/javascript">
	function isValidEmail() {
	  var str_email = document.getElementById("email").value;
		if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(str_email)) {
			alert("Your email is now being submitted - Thank you!");   document.contact.submit();   
		} else {   
			alert("Your email address is not valid, please check again - Thank you!");   
			document.getElementById("email").className = "inputbox s5_qc_required";   
		}
	}
	var s5_qc_spam_text = document.getElementById("s5_qc_spambox").value;
	var s5_qc_subject_type = "user";
	var s5_qc_spambox_text = "Enter The Code...";
	var subject = "Subject...";
	var name = "Name...";
	var email = "Email...";
	var message = "Message...";
	var s5_qc_field2_text = "Field 2...";
	var s5_qc_field3_text = "Field 3...";
	var s5_qc_field4_text = "Field 4...";
	var s5_qc_field5_text = "Field 5...";
	var s5_qc_field6_text = "Field 6...";
	var s5_qc_field7_text = "Field 7...";
	var s5_qc_field8_text = "Field 8...";
	var s5_qc_field9_text = "Field 9...";
	var s5_qc_field10_text = "Field 10...";
	function s5_qc_clear_inputs(s5_qc_click_id) {	
		s5_qc_clear_inputs_values(s5_qc_click_id);
	}
	var s5_qc_field1_type = "textarea_required";
	var s5_qc_field2_type = "1";
	var s5_qc_field3_type = "1";
	var s5_qc_field4_type = "1";
	var s5_qc_field5_type = "1";
	var s5_qc_field6_type = "1";
	var s5_qc_field7_type = "1";
	var s5_qc_field8_type = "1";
	var s5_qc_field9_type = "1";
	var s5_qc_field10_type = "1";
	var s5_qc_required_missing = "no";
	var s5_qc_all_content = "";
	function s5_qc_submit() {
		s5_qc_check_required();	if (s5_qc_required_missing == "yes") {		alert("The fields indicated in red are required, please complete the form - Thank you!");		return false;	}	s5_qc_find_all_values();	if (s5_qc_all_content.indexOf("s5_qc_null") >= 0 || s5_qc_all_content.indexOf("s5_qc_null") >= 0 || s5_qc_all_content.indexOf("s5_qc_null") >= 0 || s5_qc_all_content.indexOf("s5_qc_null") >= 0 || s5_qc_all_content.indexOf("s5_qc_null") >= 0 || s5_qc_all_content.indexOf("s5_qc_null") >= 0 || s5_qc_all_content.indexOf("s5_qc_null") >= 0 || s5_qc_all_content.indexOf("s5_qc_null") >= 0 || s5_qc_all_content.indexOf("s5_qc_null") >= 0 || s5_qc_all_content.indexOf("s5_qc_null") >= 0 || s5_qc_all_content.indexOf("s5_qc_null") >= 0 || s5_qc_all_content.indexOf("s5_qc_null") >= 0 || s5_qc_all_content.indexOf("s5_qc_null") >= 0 || s5_qc_all_content.indexOf("s5_qc_null") >= 0 || s5_qc_all_content.indexOf("s5_qc_null") >= 0 || s5_qc_all_content.indexOf("s5_qc_null") >= 0 || s5_qc_all_content.indexOf("s5_qc_null") >= 0 || s5_qc_all_content.indexOf("s5_qc_null") >= 0 || s5_qc_all_content.indexOf("s5_qc_null") >= 0 || s5_qc_all_content.indexOf("s5_qc_null") >= 0 || s5_qc_all_content.indexOf("s5_qc_null") >= 0 || s5_qc_all_content.indexOf("s5_qc_null") >= 0 || s5_qc_all_content.indexOf("s5_qc_null") >= 0 || s5_qc_all_content.indexOf("s5_qc_null") >= 0 || s5_qc_all_content.indexOf("s5_qc_null") >= 0 || s5_qc_all_content.indexOf("s5_qc_null") >= 0 || s5_qc_all_content.indexOf("s5_qc_null") >= 0 || s5_qc_all_content.indexOf("s5_qc_null") >= 0 || s5_qc_all_content.indexOf("s5_qc_null") >= 0 || s5_qc_all_content.indexOf("s5_qc_null") >= 0) {
			return false;
		}
		else {
			var email_str = document.getElementById("email").value;
			s5_qc_isValidEmail(email_str);
		}
	}
	function s5_qc_load_pikaday() {
																					}
	function s5_qc_load_pikaday_timer() {
	window.setTimeout(s5_qc_load_pikaday,500);
	}
	window.onload = s5_qc_load_pikaday_timer();
	</script>
	</div>
  <div class="clear"></div>
</div>
