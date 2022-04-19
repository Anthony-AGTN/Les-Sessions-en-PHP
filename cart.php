<?php

require 'inc/data/products.php';
require 'inc/head.php';

if (empty($_SESSION['login'])) {
  // Si inexistante ou nulle, on redirige vers le formulaire de login
  header('Location: /login.php');
  exit();
}

function panier(array $cartsSession, array $catalog): string
{
  $panier = '';
  $carts = array_unique($cartsSession);
  foreach ($carts as $cart) {
    $occurence = array_count_values($cartsSession);
    $panier .= $catalog[$cart]['name'] . ', ' . $catalog[$cart]['description'] . "<br>" . ' Quantité x' . $occurence[$cart] . "<br><br>";
  }
  return $panier;
}

?>

<section class="cookies container-fluid">
  <div>
    <?php
    if (isset($_SESSION['carts'])) {
      echo panier($_SESSION['carts'], $catalog);
    } else {
      echo 'Vous n\'avez pas encore mis de cookie dans votre panier';
    }
    ?>
  </div>
</section>
<?php require 'inc/foot.php'; ?>