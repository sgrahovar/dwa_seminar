<?php

if(isset($_GET['id']))
{
	include_once('Pages/JelaRead.php');
}
else include_once('Pages/JelaList.php');

?>