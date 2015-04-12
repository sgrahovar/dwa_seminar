<?php

// Stranica za ispis specificnog jela.

if(isset($_GET['id']) && is_numeric($_GET['id']))
{
	$id = $_GET['id'];
}

else
{
	header("Location: http://index.php");
}

$query = "SELECT ID, image_url as URL, Naziv_".$j." AS 'Naziv', Cijena, Popust, Opis_".$j." AS 'Opis',
	(SELECT GROUP_CONCAT(LOWER(prilozi.naziv_".$j.") SEPARATOR ', ') FROM jela AS jela2
	INNER JOIN prilozi_list ON jela2.id = prilozi_list.Jelo_id
	INNER JOIN prilozi ON prilozi_list.prilog_id = prilozi.id
	WHERE jela2.id = jela1.id
	GROUP BY jela2.id) AS 'Prilozi' 
FROM jela AS jela1
WHERE jela1.id = ". $id;

$r = mysqli_query($con, $query);
$newArray = mysqli_fetch_assoc($r);

if($newArray['Popust'] != 0)
{
	$popust = $newArray['Popust'];
	$newCijena = $newArray['Cijena'] - ($newArray['Cijena'] * ($newArray['Popust'] / 100));
}

echo '
<div class="col-xs-12 homeDiv" style="background-color:#96652B; height: auto; padding-top: 15px;">

<div class="col-sm-5 col-xs-5" style="padding: 0px;">
		<img src="Images/Jela/'.$newArray['URL'].'.jpg" class="img-responsive">
		</div>
		<div class="col-sm-7 col-xs-7" style="padding: 0 0 0 15px;">
			<h2 style="margin-top: 0px; font-family: Amaranth, sans-serif;">'.$newArray['Naziv'].' </h2>
			<p style="margin-bottom: 0px">'.$prilog.' '.$newArray['Prilozi'].' </br>
			'. ($newArray['Popust'] != 0 ? '<strike>'.$ci.' '.$newArray['Cijena'].' kn</strike>, '. $p.' '. $newArray['Popust'] .'%<br>'.$ci.' '. $newCijena .' kn' : $ci .$newArray['Cijena'].' kn' ) .'</br>
			</p>
		</div>

		<div class="col-xs-12" style="padding: 0px;">
			</br><p>'.$newArray['Opis'].'</p>
		</div>

</div>
';

?>