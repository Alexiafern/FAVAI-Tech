
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
  <link rel="stylesheet" href="../estilo/menu_2.css">
  <title>Comprar</title>
</head>

<body>
<?php
$menu_items = array(
  array('Home', 'index.php'),
  array('Comprar', 'comprar.php'),
  array('Doar', 'doar.php'),
  array('Cadastrar', 'cadastrar.php')
);
?>

<nav>
  <div class="logo">
    <a href="index.php"><img src="../img/fundo_comprar.png" alt="Logo"></a>
  </div>
  <div class="menu-toggle">
    <span></span>
    <span></span>
    <span></span>
  </div>
  <ul class="menu">
    <?php foreach ($menu_items as $item) { ?>
      <li><a href="<?php echo $item[1]; ?>"><?php echo $item[0]; ?></a></li>
    <?php } ?>
  </ul>
</nav>


      <script src="script.js"></script>
</body>

</html>