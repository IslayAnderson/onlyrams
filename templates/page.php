<?php 
$top = '
			<section class="section">
				<div class="container"><h1>' . $xml->contentTitle . '</h1>';
$middle = $xml->content ;
$bottom = '
				</div>
			</section>
			';

$templateOutput = $top . $middle . $bottom;
	
?>
