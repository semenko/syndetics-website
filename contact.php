<?php
$location = 'contact';
include ('include/header.php');
?>

<div class="main">
				<div class="page-content">
					<h1 class="fix-this">Clickloud company contact form:</h1>
					<p class="contact-explanation">If you would like us to say "hello" back, please use the form below or the contact information on the right. Either way, we can't wait to hear from you.</p>
					<form id="contact-form" class="fix-this" action="#">
						<div class="formfield">
							<input id="contact-name" class="with-label"/>
							<label id="label-contact-name" class="absolute">your name</label>
							<label>*</label>
						</div>
						<div class="formfield">
							<input id="contact-email" class="with-label"/>
							<label id="label-contact-email" class="absolute">your e-mail address</label>
							<label>*</label>
						</div>
						<div class="formfield">
							<input id="contact-website" class="with-label"/>
							<label id="label-contact-website" class="absolute">your website</label>
							<label>*</label>
						</div>
						<div class="formfield-textarea">
							<textarea id="contact-message" class="with-label" rows="10" cols="10"></textarea>
							<label id="label-contact-message" class="absolute">your message</label>
						</div>
					</form>
					<a id="contact-submit" class="fix-this">Submit</a>
				</div>
				<div class="sidebar for-contact">
					<h1>Contact Us</h1>
					<div class="contact-dates fix-this">
						<p><b>Address</b>: Poitiers 13 Street, EU</p>
						<p><b>State</b>: Iasi, Romania, 700671</p>
						<p><b>Phone</b>: <span class="yellow-bold">+40 740 221 567</span></p>
						<p><b>Mail</b>: <a href="mailto:clickloud@office.com" class="yellow-bold">clickloud@office.com</a></p>
					</div>
					<div class="top-decorator margin-bottom-20 fix-this">
						<div class="bottom-decorator fix-this">
							<ul class="list fix-this">
								<li><a href="#">Clickloud for Amazon services</a></li>								
								<li><a href="#">Clickloud Enterprise Server</a></li>								
								<li><a href="#">Application Infrastructure</a></li>								
								<li><a href="#">Hybrid Cloud Management</a></li>								
								<li><a href="#">Cloud platform for CRM</a></li>								
								<li><a href="#">Cloud infrastructure for CRM</a></li>								
								<li><a href="#">Service Cloud</a></li>								
								<li><a href="#">Orchestration</a></li>								
							</ul>
						</div>
					</div>
				</div>	
			</div>

<?php
include ('include/footer.php');
?>