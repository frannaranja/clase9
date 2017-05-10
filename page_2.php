<?php include('header.php');?>
<h2 class="cover-heading">Ranking Spotify</h2>
<p class="lead">Las canciones del 2016 más escuchadas</p>

<div class="container">

<div class="col-sm-12">
  <section>
    <?php
    // basta con la línea de PHP para llamar al imdb-movies.csv y asignarlo a la variable $csv
    $csv = array_map('str_getcsv', file('data/Most_Streamed_Spotify_Songs.csv'));
    // pero debo hacer un pequeño ajuste, para eliminar del arreglo el encabezado del imdb-movies.csv
    array_walk($csv, function(&$a) use ($csv) {$a = array_combine($csv[0], $a);});
    array_shift($csv);
    // ahora puedo crear un bucle "for(){}" que examine lo asignado como contenido a la variable $csv
    // lo que esté contenido en la variable se repetirá tantas veces como arreglos tenga la variable $csv
    for($a = 0; $a < $total = count($csv); $a++){?>
      <article class="row">

        <div class="col-md-12">
          <h3><?php echo($a+1);?>. <?php echo $csv[$a]['Title'];?></h3>
          <h5>Artista: <?php echo $csv[$a]['Artist'];?> </h5>
          <h6>Album: <?php echo $csv[$a]['Album'];?> </h6>
          <h4>Reproducciones: <?php echo $csv[$a]['Streams (In Millions)'];?> </h4>
          <!--<h6>Agreguen aquí la información en Data</h6>-->
        </div>
      </article>
    <?php };?>
  </section>

</div>
<?php include('footer.php');?>
