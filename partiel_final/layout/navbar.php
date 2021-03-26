<header>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
          <a class="nav-link" href="games.php">Games list</a>
          <?php if (!isset($_SESSION['connected'])) { ?>
            <a class="nav-link" href="login.php">Login</a>
          <?php } elseif (isset($_SESSION['connected'])) { ?>
            <a class="nav-link" href="logout.php">Logout</a>
          <?php } ?>
        </div>
      </div>
    </div>
  </nav>
</header>