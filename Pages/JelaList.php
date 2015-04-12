<?php

// Stranica za ispis svih jela.

// Query za dohvacanje jela.

$query = "SELECT ID, image_url as URL, Naziv_".$j." AS 'Naziv', Cijena, Popust,
  (SELECT GROUP_CONCAT(LOWER(prilozi.naziv_".$j.") SEPARATOR ', ') FROM jela AS jela2
  INNER JOIN prilozi_list ON jela2.id = prilozi_list.Jelo_id
  INNER JOIN prilozi ON prilozi_list.prilog_id = prilozi.id
  WHERE jela2.id = jela1.id
  GROUP BY jela2.id) AS 'Prilozi' 
FROM jela AS jela1
GROUP BY jela1.id";

$r = mysqli_query($con, $query);

$c = 0;

// Postavljanje background colora, za bolju vidljivost.

while($rArray = mysqli_fetch_array($r))
{

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

	if($rArray['Popust'] != 0)
	{
		$popust = $rArray['Popust'];
		$newCijena = $rArray['Cijena'] - ($rArray['Cijena'] * ($rArray['Popust'] / 100));
	}

	// Ispis jela.

	echo '
	<a href="index.php?page=Jela&id='.$rArray['ID'].'" class="col-sm-6 col-xs-12 jelaPica '.$color.' link">
		<div class="col-sm-5 col-xs-5" style="padding: 0px;">
			<img src="Images/Jela/'.$rArray['URL'].'.jpg" class="img-responsive img-rounded">
		</div>
		<div class="col-sm-7 col-xs-7" style="padding: 0 0 0 15px;">
			<h3 style="margin-top: 0px;">'.$rArray['Naziv'].' </h3>
			<p style="margin-bottom: 0px">'.$prilog.' '.$rArray['Prilozi'].' </br>
			'. ($rArray['Popust'] != 0 ? '<strike>'.$ci.' '.$rArray['Cijena'].' kn</strike>, '. $p.' '. $rArray['Popust'] .'%<br>'.$ci.' '. $newCijena .' kn' : $ci .$rArray['Cijena'].' kn' ) .'
			</p>
		</div>
	</a>
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

