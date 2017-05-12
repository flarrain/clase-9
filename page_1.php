
<?php include('header.php');?>
<div class="inner cover">
<h2 class="cover-heading">Listado de los años</h2>

</div>



<section>
<?php
$la_url = $_GET['NASA_Temperature_1880-2016.cvs']['https://www.datazar.com/file/f007b32d2-3b6b-47ed-8f9a-f04cf8ec5ea0'];
$json = file_get_contents($la_url);
$json_data = json_decode($json,true);
?>

<?php for ($a = 0; $a < $total; $a++)?>
<h5><?php if ($json_data['Year'] > 0) ?> </h5> 

</section>




</div>




<?php include('footer.php');?>
