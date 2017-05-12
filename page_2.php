<?php include('header.php');?>
<div class="inner cover">
<h2 class="cover-heading">La temperatura de todos los años, mostrando por cada mes en ºC</h2>
<p class="lead"><?php echo $aqui;?></p>
</div>

<?php include('footer.php');?>

<div class="col-sm-12 col-lg-10 col-lg-offset-1">
  <section>
    <?php
    $csv = array_map('str_getcsv', file('data/NASA_Temperature_1880-2016.csv'));

    array_walk($csv, function(&$a) use ($csv) {$a = array_combine($csv[0], $a);});
    array_shift($csv);


    for($a = 0; $a < $total = count($csv); $a++){?>

      <article class="row">
        <hr>
        <div class="col-xs-5 col-sm-3 col-md-2"><img src="<?php echo $csv[$a]['Imagen'];?>" class="img-responsive"></div>
        <div class="col-xs-7 col-sm-9 col-md-10">

          <h5>Año <?php echo $csv[$a]['Year'];?> </h5> <br>
          <h6>Enero <?php echo $csv[$a]['Jan'];?> </h6> <br>
          <h7>Febrero <?php echo $csv[$a]['Feb'];?> </h7><br>
          <h8>Marzo <?php echo $csv[$a]['Mar'];?> </h8><br>
          <h9>Abril <?php echo $csv[$a]['Apr'];?> </h9><br>
          <h10>Mayo <?php echo $csv[$a]['May'];?> </h10><br>
          <h11>Junio <?php echo $csv[$a]['Jun'];?> </h11><br>
          <h12>Julio <?php echo $csv[$a]['Jul'];?> </h12><br>
          <h13>Agosto <?php echo $csv[$a]['Aug'];?> </h13><br>
          <h14>Septiembre <?php echo $csv[$a]['Sep'];?> </h14><br>
          <h15>Octubre <?php echo $csv[$a]['Oct'];?> </h15><br>
          <h16>Noviembre <?php echo $csv[$a]['Nov'];?> </h16><br>
          <h17>Diciembre <?php echo $csv[$a]['Dec'];?> </h17>

        </div>
      </article>
    <?php };?>
  </section>
