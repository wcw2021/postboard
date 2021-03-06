<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-3">
  <div class="container">
      <a class="navbar-brand" href="<?php echo URLROOT; ?>"><?php echo SITENAME; ?></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarDefault" aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarDefault">
        <ul class="navbar-nav mr-auto">
          <?php if(isset($_SESSION['user_id'])) : ?>
            <li class="nav-item mx-2">
              <a class="nav-link <?= ($activepage == 'index') ? 'active' : ''; ?>" href="<?php echo URLROOT; ?>">Home</a>
            </li>
          <?php endif; ?>
          <li class="nav-item">
            <a class="nav-link  <?= ($activepage == 'about') ? 'active' : ''; ?>" href="<?php echo URLROOT; ?>/pages/about">About</a>
          </li>
        </ul>

        <ul class="navbar-nav ml-auto">
          <?php if(isset($_SESSION['user_id'])) : ?>
            <li class="nav-item mx-2">
              <a class="nav-link disabled" id="greetName" href="#">Welcome! <?php echo (!empty($_SESSION['user_name'])) ? $_SESSION['user_name'] : ''; ?></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo URLROOT; ?>/users/logout">Logout</a>
            </li>
          <?php else : ?>
            <li class="nav-item mx-2">
              <a class="nav-link <?= ($activepage == 'register') ? 'active' : ''; ?>" href="<?php echo URLROOT; ?>/users/register">Register</a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?= ($activepage == 'login') ? 'active' : ''; ?>" href="<?php echo URLROOT; ?>/users/login">Login</a>
            </li>
          <?php endif; ?>
        </ul>
      </div>
    </div>
  </nav>


