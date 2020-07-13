<?php 
$xml2 = simplexml_load_file($host . "/data/json/rams.xml") or die("Error: Cannot create object");
#$countXML = count($xml2->root->title[$i])
$top = '<section class="section">
    <div class="container">
      <h1 class="title">Explore Rams</h1>
	  <div class="columns is-desktop">';
$i=1;
$middle = '';
while($i < 100){
	if($i % 4 == 0 && $i != 1){
	$middle .= '<div class="column">
					<a href="' . $xml2->url[$i] . '">
						<div class="card">
							<div class="card-image">
								<figure class="image is-4by3">
									<img src="' . $xml2->img[$i] . '" alt="Placeholder image">
								</figure>
							</div>
							<div class="card-content">
								<div class="media">
									<div class="media-left">
										<figure class="image is-48x48">
											<img src="' . $xml2->img[$i] . '" alt="Placeholder image">
										</figure>
									</div>
									<div class="media-content">
										<p class="title is-4">' . $xml2->title[$i] . '</p>
										<p class="subtitle is-6">' . $xml2->location[$i] . ', ' . $xml2->age[$i] . '</p>
									</div>
								</div>
							</div>
						</div>
					</a>
				</div>
				</div>
				<div class="columns is-desktop">';
}else{
	$middle .= '<div class="column">
					<a href="' . $xml2->url[$i] . '">
						<div class="card">
							<div class="card-image">
								<figure class="image is-4by3">
									<img src="' . $xml2->img[$i] . '" alt="Placeholder image">
								</figure>
							</div>
							<div class="card-content">
								<div class="media">
									<div class="media-left">
										<figure class="image is-48x48">
											<img src="' . $xml2->img[$i] . '" alt="Placeholder image">
										</figure>
									</div>
									<div class="media-content">
										<p class="title is-4">' . $xml2->title[$i] . '</p>
										<p class="subtitle is-6">' . $xml2->location[$i] . ', ' . $xml2->age[$i] . '</p>
									</div>
								</div>
							</div>
						</div>
					</a>
				</div>';
}
	$i++;
	}


$bottom = '
    </div>
  </section>';

$templateOutput = $top . $middle . $bottom;
	
?>