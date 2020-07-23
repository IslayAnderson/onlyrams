<?php 
$top = '
			<section class="section">
				<div class="container" style="text-align:center;"><h1>' . $xml->contentTitle . '</h1>';
$middle = '
<form class="contact">
					<span class="">
						Contact Us
					</span>

					<div class="" data-validate="Name is required">
						<input class="" type="text" name="name">
						<span class="" data-placeholder="NAME"></span>
					</div>

					<div class="" data-validate="Valid email is required: ex@abc.xyz">
						<input class="" type="text" name="email">
						<span class="" data-placeholder="EMAIL"></span>
					</div>

					<div class="" data-validate="Message is required">
						<textarea class="" name="message"></textarea>
						<span class="" data-placeholder="MESSAGE"></span>
					</div>

					<button class="mailSend btn">
						Send Your Message
					</button>
				</form>
				<div class="exceptions" style="text-align:center;" id="exceptions">
				</div>
';
$bottom = '
				</div>
			</section>
			';

$templateOutput = $top . $middle . $bottom;
	
?>
