<?php 
$xml2 = simplexml_load_file($host . "/data/json/rams.xml") or die("Error: Cannot create object");
#$countXML = count($xml2->sheep->title[$o])
$top = '<section class="section">
    <div class="container">
      <h1 class="title">Featured Rams</h1>
	  <div class="columns is-desktop">';
$i=0;
$middle = '';
$middle .= '<section class="section">
    <div class="container">
      <h1 class="title">Explore Rams</h1>
	  <div class="columns is-desktop">';
while($i < 100){
	if($e % 4 == 0){
	$middle .= '<div class="column"><a href="' . $xml2->sheep->url[$i] . '"><div class="card">
  <div class="card-image">
    <figure class="image is-4by3">
      <img src="' . $xml2->sheep->img[$i] . '" alt="Placeholder image">
    </figure>
  </div>
  <div class="card-content">
    <div class="media">
      <div class="media-left">
        <figure class="image is-48x48">
          <img src="' . $xml2->sheep[$i]->img . '" alt="Placeholder image">
        </figure>
      </div>
      <div class="media-content">
        <p class="title is-4">' . $xml2->sheep->title[$i] . '</p>
        <p class="subtitle is-6">' . $xml2->sheep->location[$i] . ', ' . $xml2->sheep->age[$i] . '</p>
      </div>
	  </div>
	  </div>
	  </div><div class="columns is-desktop">';
}else{
	$middle .= '<div class="column"><a href="' . $xml2->sheep->url[$i] . '"><div class="card">
  <div class="card-image">
    <figure class="image is-4by3">
      <img src="' . $xml2->sheep->img[$i] . '" alt="Placeholder image">
    </figure>
  </div>
  <div class="card-content">
    <div class="media">
      <div class="media-left">
        <figure class="image is-48x48">
          <img src="' . $xml2->sheep[$i]->img . '" alt="Placeholder image">
        </figure>
      </div>
      <div class="media-content">
        <p class="title is-4">' . $xml2->sheep->title[$i] . '</p>
        <p class="subtitle is-6">' . $xml2->sheep->location[$i] . ', ' . $xml2->sheep->age[$i] . '</p>
      </div>
	  </div>
	  </div>';
}
	$i++;
	}


$middle .= '
    </div>
	</div>
  </section>';
$bottom = '';

$templateOutput = $top . $middle . $bottom;
	
?>