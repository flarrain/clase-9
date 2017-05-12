<?php include('header.php');?>
<div class="inner cover">
<h2 class="cover-heading">Temperaturas de la superficie de la Tierra según la NASA</h2>
<p class="lead">Muestra el cambio de las temperaturas de la partir del año 1880 hasta el 2016, por promedio mensual.</p>
</div>
<?php include('footer.php');?>

<div class="col-sm-12 col-lg-10 col-lg-offset-1">
  <section>
    <?php
    // basta con la línea de PHP para llamar al imdb-movies.csv y asignarlo a la variable $csv
    $csv = array_map('str_getcsv', file('data/NASA_Temperature_1880-2016.csv'));
    // pero debo hacer un pequeño ajuste, para eliminar del arreglo el encabezado del imdb-movies.csv
    array_walk($csv, function(&$a) use ($csv) {$a = array_combine($csv[0], $a);});
    array_shift($csv);
    // ahora puedo crear un bucle "for(){}" que examine lo asignado como contenido a la variable $csv
    // lo que esté contenido en la variable se repetirá tantas veces como arreglos tenga la variable $csv
    for($a = 0; $a < $total = count($csv); $a++){?>


      </article
    <?php };?>
  </section>
