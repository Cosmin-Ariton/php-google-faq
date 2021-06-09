<?php
  require_once __DIR__ . '/data/db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Document</title>
</head>
<body>
    
  <!-- header -->
  <header>
    <div class="left">
      <h2> 
        <span class="G">G</span><span class="o1">o</span><span class="o2">o</span><span class="g">g</span><span class="l">l</span><span class="e">e</span> 
        Privacy e termini    
      </h2>

      <ul>
        <li>Introduzione</li>
          <li>Norme sulla privacy</li>
          <li>Termini di servizio</li>
          <li>Tecnologie</li>
          <li>Domande frequenti</li>
      </ul>
    </div>

    <div class="right">
      <i class="fas fa-th"></i>
      <div>C</div>
    </div>    
  </header>
  <!-- /header -->

  <!-- main -->
  <main>
    <?php foreach($faqs as $faq) { ?>
      <div class="domande"> <?php echo $faq['domande'] ?> </div>
      <div class="risposte"> <?php echo $faq['risposte'] ?> </div>
    <?php } ?>   
  </main>
  <!-- /main -->

  <!-- footer -->
  <footer>
    <div class="left">
      <ul>
        <li>Google - </li>
        <li>Tutto su Google - </li>
        <li>Privacy - </li>
        <li>Termini</li>
      </ul>
    </div>

    <div class="right">
      <ul>
        <li></li>
        <li><input type="text" placeholder="Italiano" ></li>
      </ul>
    </div>
  </footer>
  <!-- /footer -->

</body>
</html>