<?php

include_once "layout/header.php";

if (isset($_SESSION['connected']) && $_SESSION['connected']) {
  header("Location: index.php");
}


require_once "class/User.php";

try {

  require_once "utils/connectToDB.php";

  if (
    isset($_POST['sign-in-submit'])
    && !empty($_POST['sign-in-submit'])
    && isset($_POST['login-in'])
    && !empty($_POST['login-in'])
    && isset($_POST['pass-in'])
    && !empty($_POST['pass-in'])
  ) {

    $stmt = $pdo->prepare("SELECT * FROM users WHERE login = ?");
    $stmt->execute([$_POST['login-in']]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$user) {
      $signInError = "Incorrect Login";
    } else {

      $user = new User($user['login'], $user['pass']);

      if ($_POST['pass-in'] == $user->getPass()) {
        $_SESSION['connected'] = true;
        header("Location: index.php");
      } else {
        $signInError = "Incorrect Password";
      }
    }
  } elseif (
    isset($_POST['sign-up-submit'])
    && !empty($_POST['sign-up-submit'])
    && isset($_POST['login-up'])
    && !empty($_POST['login-up'])
    && isset($_POST['pass-up'])
    && !empty($_POST['pass-up'])
    && isset($_POST['confirm-pass-up'])
    && !empty($_POST['confirm-pass-up'])
  ) {
    if ($_POST['pass-up'] == $_POST['confirm-pass-up']) {
      $stmt = $pdo->prepare("SELECT * FROM users WHERE login = ?");
      $stmt->execute([$_POST['login-up']]);
      if (!$stmt->fetch()) {
        $stmt = $pdo->prepare("INSERT INTO `users`(`login`, `pass`) VALUES (?, ?)");
        $stmt->bindParam(1, $_POST['login-up']);
        $stmt->bindParam(2, $_POST['pass-up']);
        $stmt->execute();
        $_SESSION['connected'] = true;
        header("Location: index.php");
      } else {
        $signUpError = "Name already used";
      }
    } else {
      $signUpError = "Confirm the password";
    }
  }
} catch (\PDOException $e) {
  echo 'Erreur avec PDO : ' . $e->getMessage();
}


?>
<div id="sign-container">
  <div class="sign-form" id="sign-in">
    <h3>Sign In</h3>
    <form method="POST" class="row g-3">
      <div class="mb-3">
        <label for="login-in" class="form-label">Login</label>
        <input type="text" class="form-control" name="login-in" placeholder="Name" required />
      </div>
      <div class="mb-3">
        <label for="pass-in" class="form-label">Password</label>
        <input type="password" class="form-control" name="pass-in" placeholder="Password" required />
      </div>

      <div class="col-12">
        <button type="submit" class="btn btn-primary" name="sign-in-submit" value="submit">Sign in</button>
      </div>
    </form>

    <div class="text-danger">
      <?php if (isset($signInError) && !empty($signInError)) {
        echo $signInError;
      } ?>
    </div>
  </div>


  <div class="sign-form" id="sign-up">
    <h3>Sign Up</h3>
    <form method="POST" class="row g-3">
      <div class="mb-3">
        <label for="login-up" class="form-label">Login</label>
        <input type="text" class="form-control" name="login-up" placeholder="Name" required />
      </div>
      <div class="mb-3">
        <label for="pass-up" class="form-label">Password</label>
        <input type="password" class="form-control" name="pass-up" placeholder="Password" required />
      </div>
      <div class="mb-3">
        <label for="confirm-pass-up" class="form-label">Confirm Password</label>
        <input type="password" class="form-control" name="confirm-pass-up" placeholder="Confirm Password" required />
      </div>

      <div class="col-12">
        <button type="submit" class="btn btn-primary" name="sign-up-submit" value="submit">Sign up</button>
      </div>
    </form>

    <div class="text-danger">
      <?php if (isset($signUpError) && !empty($signUpError)) {
        echo $signUpError;
      } ?>
    </div>
  </div>
</div>



<?php include_once "layout/footer.php";
