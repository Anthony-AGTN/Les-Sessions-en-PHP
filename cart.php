<?php require 'inc/head.php'; 
if(empty($_SESSION['login'])) 
{
  // Si inexistante ou nulle, on redirige vers le formulaire de login
  header('Location: /login.php');
  exit();
}
?>
<section class="cookies container-fluid">
    <div class="row">
        TODO : Display shopping cart items from $_SESSION here.
    </div>
    <div>
      <?php
        foreach ($_SESSION['carts'] as $cart) {
          
            echo $cart . "<br>";
          
        }
      ?>
    </div>
    <div>
      <?php var_dump($_SESSION); ?>
    </div>
</section>
<?php require 'inc/foot.php'; ?>
