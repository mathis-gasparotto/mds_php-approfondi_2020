<?php include_once "layout/header.php"; 

$login = "John";
$password = "aze";

?>
<div class="container h-100">
  <div class="w-100 h-100 d-flex align/item-center justify-content-center">
    <form method="post">
      <div class="mb-3">
        <input type="text" name="login" placeholder="Login" required/>
      </div>
      <div class="mb-3">
        <input type="password" name="password" placeholder="Password" required/>
      </div>
      <input type="submit" value="Connect" name="connect_submit">
    </form>
  </div>
</div>




<?php

$formErrors = [];

if (isset($_POST['connect_submit'])){
  
  if (!empty($_POST['login']) && !empty($_POST['password'])) {

    $goodLogin = false;

    if ($_POST['login'] == $login) {
      $goodLogin = true;
    } else {
      $formErrors[] = "login incorrect";
    }

    $goodPassword = false;
    if ($_POST['password'] == $password) {
      $goodPassword = true;
    } else {
      $formErrors[] = "password incorrect";
    }

    if ($goodLogin && $goodPassword) {
      $_SESSION['login'] = $_POST['login'];
    }
  } else {
    $formErrors[] = "password or login are empty";
  } 
}

if (isset($_SESSION['login'])){
  header("Location: connected.php");
}

foreach ($formErrors as $error){ ?>
  <div class="text-danger"><?php echo $error; ?></div>
<?php } ?>


<?php include_once "layout/footer.php"; ?>