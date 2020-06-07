<?php 
$url = "https://api.namefake.com/random/male";
$ch = curl_init();
$top = '<section class="section">
    <div class="container">
      <h1 class="title">Featured Rams</h1>
	  <div class="columns is-desktop">';
$i=0;
$middle = '';
while($i < 4){
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$return = curl_exec($ch);
	$nameObj = json_decode($return);
	$o = rand(1, 27);
	$name = $nameObj->{'name'};
	$handle = str_replace(' ', '', $name);
	$middle .= '<div class="column"><div class="card">
  <div class="card-image">
    <figure class="image is-4by3">
      <img src="' . $host . '/images/Rams/' . $o . '.jpg" alt="Placeholder image">
    </figure>
  </div>
  <div class="card-content">
    <div class="media">
      <div class="media-left">
        <figure class="image is-48x48">
          <img src="' . $host . '/images/Rams/' . $o . '.jpg" alt="Placeholder image">
        </figure>
      </div>
      <div class="media-content">
        <p class="title is-4">' . $name . '</p>
        <p class="subtitle is-6">@' . $handle . '</p>
      </div>
    </div>
  </div>
</div></div>';
$i++;
}
$middle .= '
    </div>
	</div>
  </section>';
  
$e=0;
$middle .= '<section class="section">
    <div class="container">
      <h1 class="title">Explore Rams</h1>
	  <div class="columns is-desktop">';
while($e < 27){
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$return = curl_exec($ch);
	$nameObj = json_decode($return);
	$name = $nameObj->{'name'};
	$handle = str_replace(' ', '', $name);
	if($e % 4 == 0){
		$middle .= '<div class="column"><div class="card">
  <div class="card-image">
    <figure class="image is-4by3">
      <img src="' . $host . '/images/Rams/' . $e . '.jpg" alt="Placeholder image">
    </figure>
  </div>
  <div class="card-content">
    <div class="media">
      <div class="media-left">
        <figure class="image is-48x48">
          <img src="' . $host . '/images/Rams/' . $e . '.jpg" alt="Placeholder image">
        </figure>
      </div>
      <div class="media-content">
        <p class="title is-4">' . $name . '</p>
        <p class="subtitle is-6">@' . $handle . '</p>
      </div>
    </div>
  </div>
</div></div></div><div class="columns is-desktop">';
	}else{
		$middle .= '<div class="column"><div class="card">
  <div class="card-image">
    <figure class="image is-4by3">
      <img src="' . $host . '/images/Rams/' . $e . '.jpg" alt="Placeholder image">
    </figure>
  </div>
  <div class="card-content">
    <div class="media">
      <div class="media-left">
        <figure class="image is-48x48">
          <img src="' . $host . '/images/Rams/' . $e . '.jpg" alt="Placeholder image">
        </figure>
      </div>
      <div class="media-content">
        <p class="title is-4">' . $name . '</p>
        <p class="subtitle is-6">@' . $handle . '</p>
      </div>
    </div>
  </div>
</div></div>';
	}
$e++;
}
curl_close($ch);
$middle .= '
    </div>
	</div>
  </section>';
$bottom = '';

$templateOutput = $top . $middle . $bottom;
	
?>