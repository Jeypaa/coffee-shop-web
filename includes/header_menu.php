<?php
$current_page = basename($_SERVER['PHP_SELF']);
?>
<nav class="navbar fixed-top navbar-expand-sm navbar-dark shadow-sm" style="backdrop-filter: blur(10px); background-color: rgba(0,0,0,0.5);">
  <div class="container">

    <!-- Brand -->
    <a href="index.php" class="navbar-brand text-danger font-weight-bold" style="font-family: 'Delius Swash Caps', cursive; font-size: 1.5rem;">
      <i class="fa fa-coffee mr-2"></i> Soul Sip
    </a>

    <!-- Toggler -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mynavbar">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Navbar Links -->
    <div class="collapse navbar-collapse" id="mynavbar">
      <ul class="navbar-nav mr-auto">
        <!-- Dropdown -->
        <li class="nav-item dropdown">
          <a href="#" class="nav-link dropdown-toggle" id="navbar-drop" data-toggle="dropdown">
            Products
          </a>
          <div class="dropdown-menu">
            <a href="products.php#shirt" class="dropdown-item">Food</a>
            <a href="products.php#shoes" class="dropdown-item">Coffee</a>
          </div>
        </li>
        <li class="nav-item"><a href="index.php" class="nav-link">Offers</a></li>
        <li class="nav-item"><a href="about.php" class="nav-link">About Us</a></li>
        <?php if (isset($_SESSION['email'])) { ?>
          <li class="nav-item"><a href="cart.php" class="nav-link">Cart</a></li>
        <?php } ?>
      </ul>

      <!-- Right-side Auth -->
      <ul class="navbar-nav ml-auto">
        <?php if (isset($_SESSION['email'])) { ?>
          <li class="nav-item">
            <a href="logout_script.php" class="nav-link"><i class="fa fa-sign-out mr-1"></i>Logout</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-placement="bottom" data-toggle="popover" data-trigger="hover" data-content="<?php echo $_SESSION['email'] ?>">
              <i class="fa fa-user-circle"></i>
            </a>
          </li>
        <?php } else { ?>
          <li class="nav-item"><a href="#signup" class="nav-link" data-toggle="modal"><i class="fa fa-user mr-1"></i> Sign In</a></li>
          <li class="nav-item"><a href="#login" class="nav-link" data-toggle="modal"><i class="fa fa-sign-in mr-1"></i> Login</a></li>
        <?php } ?>
      </ul>
    </div>
  </div>
</nav>
