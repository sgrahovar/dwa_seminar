<?php

// Stranica za ispis svih pica.

// Query za dohvacanje pica.

$query = "SELECT ID, image_url as URL, Naziv, Cijena from pica";

$r = mysqli_query($con, $query);

$c = 0;

while($rArray = mysqli_fetch_array($r))
{
	// Postavljanje background colora, za bolju vidljivost.

	if($c == 0)
	{
		$color = 'colorOne';
	}

	if($c == 1)
	{
		$color = 'colorTwo';
	}

	if($c == 2)
	{
		$color = 'colorThree';
	}

	if($c == 3)
	{
		$color = 'colorFour';
	}

	// Ispis pica.

	echo '
	<div class="col-sm-6 col-xs-12 jelaPica '.$color.'">
		<div class="col-sm-5 col-xs-5" style="padding: 0px;">
			<img src="Images/Pica/'.$rArray['URL'].'.jpg" class="img-responsive img-rounded">
		</div>
		<div class="col-sm-7 col-xs-7" style="padding: 0 0 0 15px;">
			<h3 style="margin-top: 0px;">'.$rArray['Naziv'].' </h3>
			<p style="margin-bottom: 0px">'. $ci . $rArray['Cijena'].' kn</p>
		</div>
	</div>
	';

	if($c < 3) $c++;
	else $c = 0;
	if(!$rArray)
	{
	    printf("Error: %s\n", mysqli_error($con));
	    exit();
	}
}

?>

